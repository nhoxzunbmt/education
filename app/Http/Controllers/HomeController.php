<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SEOMeta;
use OpenGraph;
use Twitter;

class HomeController extends Controller
{
    public function index()
    {
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

        return view('front.index');
    }
}
