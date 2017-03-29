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
use App\Http\Requests\Front\StoreTeacher;
use App\Models\Status;
use Carbon\Carbon;
use File;
use DB;
use Exception;
use Log;
use Throwable;

class TeachersController extends Controller
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
        $levels = $this->status->teacher_levels();
        $times = $this->status->times();
        $days = $this->day->days();
        $subjects = $this->subject->subjects();
        $genders = $this->status->genders();

        return view('front.teacher.create', [
            'lists' => $lists,
            'grades' => $grades,
            'numbers' => $numbers,
            'levels' => $levels,
            'days' => $days,
            'subjects' => $subjects,
            'genders' => $genders,
            'times' => $times,
            'captcha' => Captcha::html()
        ]);
    }

    public function store(StoreTeacher $request)
    {
        $request = $request->all();
        $d = '';
        $s = '';
        $g = '';
        $request['role_id'] = 6;
        $grades = $request['grades'];
        $days = $request['days'];
        $subjects = $request['subjects'];

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

        $avatar = 'avatar_'.time().'.'.$request['avatar']->getClientOriginalExtension();
        $file_id = 'file_id_'.time().'.'.$request['file_id']->getClientOriginalExtension();
        $request['avatar']->move(public_path('avatars'), $avatar);
        $request['file_id']->move(public_path('ids'), $file_id);
        $request['avatar'] = $avatar;
        $request['file_id'] = $file_id;
        $request['birthday'] = Carbon::parse($request['birthday'])->format('Y-m-d');
        $request['password'] = bcrypt($request['mobile']);

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
