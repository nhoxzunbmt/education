<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use LaravelCaptcha\Facades\Captcha;
use App\Repositories\Contracts\CityRepository as City;
use App\Repositories\Contracts\DayRepository as Day;
use App\Repositories\Contracts\SubjectRepository as Subject;
use App\Repositories\Contracts\UserRepository as User;
use App\Repositories\Contracts\PartnerRepository as Partner;
use App\Http\Requests\Front\StorePeople;
use App\Models\Status;
use DB;
use Exception;
use Log;
use Throwable;

class PeopleController extends Controller
{
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
    }

    public function create()
    {
        $lists = $this->city->cities();
        $grades = $this->status->grades();
        $numbers = $this->status->numbers();
        $levels = $this->status->levels();
        $days = $this->day->days();
        $subjects = $this->subject->subjects();

        return view('front.people.create', [
            'lists' => $lists,
            'grades' => $grades,
            'numbers' => $numbers,
            'levels' => $levels,
            'days' => $days,
            'subjects' => $subjects,
            'captcha' => Captcha::html()
        ]);
    }

    public function store(StorePeople $request)
    {
        $request = $request->all();
        $d = '';
        $s = '';
        $g = '';
        $request['role_id'] = 5;
        $grades = $request['grades'];
        $days = $request['days'];
        $subjects = $reques['subjects'];
        $email = $request['email'];

        foreach ($grades as $grade) {
            $g .= ' ,'.$grade;
        }
        $request['grades'] = $g;

        foreach ($days as $day) {
            $d .= ' ,'.$day;
        }
        $request['days'] = $d;

        foreach ($subjects as $subject) {
            $s .= ' ,'.$subject;
        }
        $request['subjects'] = $s;

        if (!$email) {
            $request['email'] = $request['mobile'];
            $request['password'] = bcrypt($request['mobile']);
        } else {
            $request['password'] = bcrypt($request['mobile']);
        }

        DB::beginTransaction();

        try {
            $user = $this->user->create($request);
            $request['user_id'] = $user->id;
            $this->partner->create($request);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }

        return redirect('/');
    }
}
