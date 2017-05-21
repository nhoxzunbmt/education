<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\BaseController;
use LaravelCaptcha\Facades\Captcha;
use App\Repositories\Contracts\CityRepository as City;
use App\Repositories\Contracts\DayRepository as Day;
use App\Repositories\Contracts\SubjectRepository as Subject;
use App\Repositories\Contracts\UserRepository as User;
use App\Repositories\Contracts\PartnerRepository as Partner;
use App\Http\Requests\Front\StoreTeacher;
use App\Models\Status;
use Carbon\Carbon;
use File;
use DB;
use Exception;
use Log;
use Throwable;

class TeachersController extends BaseController
{
    const ROLE_ID = 4;

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
        $levels = $this->status->teacher_levels();
        $times = $this->status->times();
        $days = $this->day->days();
        $subjects = $this->subject->subjects();
        $genders = $this->status->genders();
        $hn = $this->city->getDistricts(1);
        $hcm = $this->city->getDistricts(2);
        $hp = $this->city->getDistricts(3);
        $dn = $this->city->getDistricts(4);
        $ct = $this->city->getDistricts(5);

        return view('front.teacher_sign', [
            'lists' => $lists,
            'grades' => $grades,
            'numbers' => $numbers,
            'levels' => $levels,
            'days' => $days,
            'subjects' => $subjects,
            'genders' => $genders,
            'times' => $times,
            'hn' => $hn,
            'hcm' => $hcm,
            'hp' => $hp,
            'dn' => $dn,
            'ct' => $ct,
            'captcha' => Captcha::html()
        ]);
    }

    public function store(StoreTeacher $request)
    {
        $request = $request->all();
        $request['code'] = rand(10000, 99999);
        $request['role_id'] = self::ROLE_ID;
        $request['type'] = self::ROLE_ID;
        $grades = $request['grades'];
        $days = $request['days'];
        $subjects = $request['subjects'];
        $city_list = $request['districts'];

        $request['grades'] = join_arr($grades);
        $request['days'] = join_arr($days);
        $request['subjects'] = join_arr($subjects);
        $request['districts'] = join_arr($city_list);

        $avatar = 'avatar_'.time().'.'.$request['avatar']->getClientOriginalExtension();
        $request['avatar']->move(public_path('avatars'), $avatar);
        $request['avatar'] = $avatar;
        $request['birthday'] = Carbon::parse($request['birthday'])->format('Y-m-d');
        $request['password'] = $request['mobile'];
        $request['title'] = $request['name'].' '.config('app.gs').' '.$request['subjects'];
        $request['slug'] = str_slug($request['title']);

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

    public function payment()
    {

        return view('front.payment', [
            // code
        ]);
    }

    public function list()
    {

        return view('front.teachers', [
            // code
        ]);
    }

    public function know()
    {
        
        return view('front.teacher_know', [
            
        ]);
    }
}
