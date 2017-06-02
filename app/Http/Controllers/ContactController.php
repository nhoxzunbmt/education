<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\ContactRepository as Contact;
use App\Repositories\Contracts\SubscribeRepository as Subscribe;
use App\Http\Requests\Front\StoreContact;
use SEOMeta;
use OpenGraph;
use Twitter;

class ContactController extends Controller
{
    /**
     * @var ContactRepository
     */
    private $contact;

    /**
     * @var SubscribeRepository
     */
    private $subscribe;

    public function __construct(Contact $contact, Subscribe $subscribe)
    {
        $this->contact = $contact;
        $this->subscribe = $subscribe;
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

        return view('front.contact');
    }

    public function store(StoreContact $request)
    {
        $request = $request->all();
        $this->contact->create($request);

        $subscribe = $this->subscribe
            ->findByAttributes(['email' => $request['email']]);

        if (empty($subscribe)) {
            $this->subscribe->create($request);
        }

        return redirect()->back()
            ->with('success', trans('lang.message.contact'));
    }
}
