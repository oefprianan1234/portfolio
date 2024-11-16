<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        if (Auth::check()) {
            // หากล็อกอินแล้ว ให้เปลี่ยนเส้นทางไปที่หน้า admin หรือ public ตามบทบาท
            return $this->redirectToDashboard();
        }
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // เปลี่ยนเส้นทางไปยังหน้าที่เหมาะสมตามบทบาทผู้ใช้งาน
        return redirect()->intended($this->redirectToDashboard());
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Determine the appropriate redirect path after login.
     */
    protected function redirectToDashboard()
    {
        $user = Auth::user();

        if ($user && $user->is_admin) {
            return RouteServiceProvider::HOME;
        }

        return RouteServiceProvider::PUBLIC_HOME; 
    }
}