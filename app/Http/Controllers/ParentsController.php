<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\BaseController;
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
use SEOMeta;
use OpenGraph;
use Twitter;

class ParentsController extends BaseController
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
        // SEO
        SEOMeta::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        SEOMeta::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        SEOMeta::setCanonical(request()->getUri());
        SEOMeta::addMeta('article:published_time', '2017-05-30 12:00:01', 'property');
        SEOMeta::addMeta('article:section', 'Home', 'property');
        SEOMeta::addKeyword(['Gia su', 'Tim gia su', 'Gia su gioi', 'Gia su uy tin']);

        OpenGraph::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        OpenGraph::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        OpenGraph::setUrl(request()->getUri());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setSiteName('Gia Su Tri Tue');
        OpenGraph::addImage(request()->getUri().'img/1.png');

        Twitter::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        Twitter::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        Twitter::setUrl(request()->getUri());
        Twitter::addImage(request()->getUri().'img/1.png');
        Twitter::setSite('card');

        // End SEO
        $lists = $this->city->cities();
        $grades = $this->status->grades();
        $numbers = $this->status->numbers();
        $levels = $this->status->levels();
        $times = $this->status->times();
        $days = $this->day->days();
        $subjects = $this->subject->subjects();

        return view('front.parent_sign', [
            'lists' => $lists,
            'grades' => $grades,
            'numbers' => $numbers,
            'levels' => $levels,
            'days' => $days,
            'subjects' => $subjects,
            'times' => $times
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
        $request['slug'] = str_slug($request['title']).'-'.$request['code'];

        $checkUser = $this->user->isCheck($request['mobile'], $request['email']);

        DB::beginTransaction();
        try {
            if ($checkUser) {
                $request['user_id'] = $checkUser->id;
                $this->partner->create($request);
            } else {
                $user = $this->user->create($request);
                $request['user_id'] = $user->id;
                $this->partner->create($request);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()
                ->with('warning', 'Lỗi đăng ký mất rồi, xin lỗi vì sự bất tiện này. Hãy liên hệ với chúng tôi để được trợ giúp');
        }

        return redirect('/');
    }

    public function list(Request $request)
    {
        // SEO
        SEOMeta::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        SEOMeta::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        SEOMeta::setCanonical(request()->getUri());
        SEOMeta::addMeta('article:published_time', '2017-05-30 12:00:01', 'property');
        SEOMeta::addMeta('article:section', 'Home', 'property');
        SEOMeta::addKeyword(['Gia su', 'Tim gia su', 'Gia su gioi', 'Gia su uy tin']);

        OpenGraph::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        OpenGraph::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        OpenGraph::setUrl(request()->getUri());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setSiteName('Gia Su Tri Tue');
        OpenGraph::addImage(request()->getUri().'img/1.png');

        Twitter::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        Twitter::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        Twitter::setUrl(request()->getUri());
        Twitter::addImage(request()->getUri().'img/1.png');
        Twitter::setSite('card');
        // End SEO

        $search_grades = $this->status->search_grades();
        $params = $request->only(['grades', 'city', 'city_id']);
        $lists = $this->partner->partners(self::ROLE_ID, $request->all());

        return view('front.grades', [
            'lists' => $lists,
            'city' => $this->city,
            'cities' => $this->city->cities(),
            'search_grades' => $search_grades,
            'status' => $this->status,
            'params' => $params ?: $params = null
        ]);
    }

    public function fee()
    {
        // SEO
        SEOMeta::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        SEOMeta::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        SEOMeta::setCanonical(request()->getUri());
        SEOMeta::addMeta('article:published_time', '2017-05-30 12:00:01', 'property');
        SEOMeta::addMeta('article:section', 'Home', 'property');
        SEOMeta::addKeyword(['Gia su', 'Tim gia su', 'Gia su gioi', 'Gia su uy tin']);

        OpenGraph::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        OpenGraph::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        OpenGraph::setUrl(request()->getUri());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setSiteName('Gia Su Tri Tue');
        OpenGraph::addImage(request()->getUri().'img/1.png');

        Twitter::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        Twitter::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        Twitter::setUrl(request()->getUri());
        Twitter::addImage(request()->getUri().'img/1.png');
        Twitter::setSite('card');
        // End SEO

        return view('front.parent_fee');
    }

    public function know()
    {
        // SEO
        SEOMeta::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        SEOMeta::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        SEOMeta::setCanonical(request()->getUri());
        SEOMeta::addMeta('article:published_time', '2017-05-30 12:00:01', 'property');
        SEOMeta::addMeta('article:section', 'Home', 'property');
        SEOMeta::addKeyword(['Gia su', 'Tim gia su', 'Gia su gioi', 'Gia su uy tin']);

        OpenGraph::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        OpenGraph::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        OpenGraph::setUrl(request()->getUri());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setSiteName('Gia Su Tri Tue');
        OpenGraph::addImage(request()->getUri().'img/1.png');

        Twitter::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng');
        Twitter::setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');
        Twitter::setUrl(request()->getUri());
        Twitter::addImage(request()->getUri().'img/1.png');
        Twitter::setSite('card');
        // End SEO

        return view('front.parent_know');
    }
}
