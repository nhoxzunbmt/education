<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\SubscribeRepository as Subscribe;
use App\Http\Requests\Front\StoreSubscribe;

class SubscribesController extends Controller
{
    /**
     * @var SubscribeRepository
     */
    private $subscribe;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Subscribe $subscribe) {
        $this->subscribe = $subscribe;
    }

    public function store(StoreSubscribe $request)
    {
        $request = $request->all();
        $sub = $this->subscribe
            ->findByAttributes(['email' => $request['email']]);
        if (empty($sub)) {
            $this->subscribe->create($request);
        }
        
        return redirect()->back();
    }
}
