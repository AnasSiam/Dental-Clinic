@extends('layouts.app')

@section('title', 'تسجيل الدخول — لازورد')

@section('content')
    <section class="login-section">
        <div class="login-card">
            <a href="{{ route('home') }}" class="logo login-logo">لازورد</a>
            <h1>تسجيل الدخول</h1>
            <p class="login-sub">أدخل بياناتك للوصول إلى حسابك</p>

            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus />
                    @error('email')
                        <span style="color: #e74c3c; font-size: 0.8rem;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">كلمة المرور</label>
                    <input type="password" id="password" name="password" required />
                    @error('password')
                        <span style="color: #e74c3c; font-size: 0.8rem;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="login-remember">
                    <label class="checkbox-label">
                        <input type="checkbox" name="remember" />
                        <span>تذكرني</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="forgot-link">نسيت كلمة المرور؟</a>
                </div>
                <button type="submit" class="btn-submit login-submit">تسجيل الدخول</button>
            </form>

            <p class="login-register">ليس لديك حساب؟ <a href="{{ route('register') }}" class="link-green">سجّل الآن مجاناً</a></p>
        </div>
    </section>
@endsection