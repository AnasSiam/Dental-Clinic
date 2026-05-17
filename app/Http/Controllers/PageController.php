<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    // الصفحات العامة
    public function home()
    {
        return view('home');
    }
    
    public function whyLazord()
    {
        return view('why-lazord');
    }
    
    public function labServices()
    {
        return view('lab-services');
    }
    
    public function solutions()
    {
        return view('solutions');
    }
    
    public function pricing()
    {
        return view('pricing');
    }
    
    public function learn()
    {
        return view('learn');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);
        
        // هنا يمكنك حفظ البيانات أو إرسال بريد
        return redirect()->route('contact')->with('success', 'تم إرسال رسالتك بنجاح');
    }
    
    // الصفحات المحمية (تتطلب تسجيل دخول)
    public function dashboard()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }
}