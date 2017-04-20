<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Front\FrontBaseController;
use LaravelCaptcha\Facades\Captcha;
use App\Repositories\Contracts\CityRepository as City;
use App\Repositories\Contracts\DayRepository as Day;
use App\Repositories\Contracts\SubjectRepository as Subject;
use App\Repositories\Contracts\UserRepository as User;
use App\Repositories\Contracts\PartnerRepository as Partner;
use App\Http\Requests\Front\StorePeople;
use App\Models\Status;
use Carbon\Carbon;
use DB;
use Exception;
use Log;
use Throwable;

class PeopleController extends FrontBaseController
{
    const ROLE_ID = 5;

    /**
     * @var CityRepository
     */
    private $city;

    /**
     * @var DayRepository
     */
    private $day;

    /**
     * @var SubjectRepository
     */
    private $subject;

    /**
     * @var UserRepository
     */
    private $user;

    /**
     * @var PartnerRepository
     */
    private $partner;

    /**
     * @var Status
     */
    private $status;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        City $city,
        Status $status,
        Day $day,
        Subject $subject,
        User $user,
        Partner $partner)
    {
        $this->city = $city;
        $this->day = $day;
        $this->subject = $subject;
        $this->status = $status;
        $this->user = $user;
        $this->partner = $partner;

        parent::__construct();
    }

    public function create()
    {
        $lists = $this->city->cities();
        $grades = $this->status->grades();
        $numbers = $this->status->numbers();
        $levels = $this->status->levels();
        $times = $this->status->times();
        $days = $this->day->days();
        $subjects = $this->subject->subjects();

        return view('front.people.create', [
            'lists' => $lists,
            'grades' => $grades,
            'numbers' => $numbers,
            'levels' => $levels,
            'days' => $days,
            'subjects' => $subjects,
            'times' => $times,
            'captcha' => Captcha::html()
        ]);
    }

    public function store(StorePeople $request)
    {
        $request = $request->all();
        $request['code'] = rand(10000, 99999);
        $request['role_id'] = self::ROLE_ID;
        $request['type'] = self::ROLE_ID;
        $grades = $request['grades'];
        $days = $request['days'];
        $subjects = $request['subjects'];
        $email = $request['email'] ?: $request['email'] = 'a_'.rand(0, 999999).'@gmail.com';
        $request['grades'] = join_arr($grades);
        $request['days'] = join_arr($days);
        $request['subjects'] = join_arr($subjects);
        $request['password'] = $request['mobile'];
        $request['title'] = config('app.slug').' '.$request['subjects'].' '.$request['grades'];
        $request['slug'] = str_slug($request['title'].'-'.$request['code']);

        DB::beginTransaction();
        try {
            $user = $this->user->create($request);
            $request['user_id'] = $user->id;
            $this->partner->create($request);

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()
                ->with('warning', 'Xay ra loi roi');
        }

        return redirect('/');
    }

    public function know()
    {
        return view('front.people.know');
    }

    public function care()
    {
        return view('front.people.care');
    }

    public function fee()
    {
        return view('front.people.fee');
    }

    public function service()
    {
        return view('front.people.service');
    }

    public function list(Request $request)
    {
        $search_grades = $this->status->search_grades();
        $params = $request->only(['grades', 'city', 'city_id']);
        $lists = $this->partner->partners(self::ROLE_ID, $request->all());

        return view('front.people.list', [
            'lists' => $lists,
            'city' => $this->city,
            'cities' => $this->city->cities(),
            'search_grades' => $search_grades,
            'status' => $this->status,
            'params' => $params ?: $params = null
        ]);
    }

    public function show($slug)
    {
        $partner = $this->partner->partner($slug);
        
        return view('front.people.view', [
            'partner' => $partner,
            'city' => $this->city,
            'status' => $this->status
        ]);
    }
}
