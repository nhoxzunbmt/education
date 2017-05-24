<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\ContactRepository as Contact;
use App\Repositories\Contracts\SubscribeRepository as Subscribe;
use App\Http\Requests\Front\StoreContact;

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
