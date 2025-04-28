<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Notifications\VerifyLoginNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {

        // Validate the request
        $request->validated();
        $credentials = $request->only('email', 'password');
        // $credentials = $request->only('password');

        // Attempt to authenticate the user
        if (! Auth::attempt($credentials, $request->remember_me)) {
            flash()->error('Incorrect email or password');

            return redirect()->back()->withInput($request->only('email'));
        }

        $user = Auth::user();

        $otp = fake()->unique()->numberBetween(1111, 9999);

        cache()->put($user->id, $otp, now()->addMinutes(30));

        // Notification::send($user, new VerifyLoginNotification($otp));

        // return redirect(route('login.check'));
        return redirect(route('admin.dashboard'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
