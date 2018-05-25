<?php

namespace App\Http\Controllers;

use App\Notifications\SomethingHappenedNotification;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home')
            ->withUser($request->user());
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function setEndPoint(Request $request)
    {
        $data = $this->validate($request, [
            'webhook_url' => 'string|required|url'
        ]);

        $request->user()->update($data);

        return redirect()
            ->back()
            ->with('status', 'Webhook URL has been set');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function testWebhook(Request $request)
    {
        /** @var User $user */
        $user = $request->user();

        $user->notify(new SomethingHappenedNotification('hello there'));

        return redirect()
            ->back()
            ->with('status','You will be notified by webhook');

    }
}
