<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SEO;

class HomeController extends Controller
{
    public function __construct()
    {
        // code
    }

    public function index()
    {
        SEO::setTitle('Gia Sư Trí Tuệ | Trung tâm gia sư dạy kèm uy tín chất lượng')
            ->setDescription('Trung tâm Gia sư dạy kèm uy tín: Đội ngũ gia sư dạy kèm giỏi nhiều năm giảng dạy (Miễn Phí dạy thử 3b, Cam kết tiến bộ trong 10 buổi) LH: 01674.537.055.');

        return view('front.index');
    }
}
