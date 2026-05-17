<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'لازورد — مختبر الأسنان الرقمي')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    @stack('styles')
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="logo">لازورد</a>
            <nav class="nav-links">
                <a href="{{ route('why-lazord') }}" class="{{ request()->routeIs('why-lazord') ? 'nav-active' : '' }}">لماذا لازورد</a>
                <a href="{{ route('lab-services') }}" class="{{ request()->routeIs('lab-services') ? 'nav-active' : '' }}">خدمات المختبرات</a>
                <a href="{{ route('solutions') }}" class="{{ request()->routeIs('solutions') ? 'nav-active' : '' }}">الحلول</a>
                <a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'nav-active' : '' }}">التسعير</a>
                <a href="{{ route('learn') }}" class="{{ request()->routeIs('learn') ? 'nav-active' : '' }}">التعلم</a>
            </nav>
            <div class="nav-actions">
                <span class="phone">هاتف: +(970)0595960363</span>
                @guest
                    <a href="{{ route('login') }}" class="btn-login {{ request()->routeIs('login') ? 'nav-active-login' : '' }}">تسجيل الدخول</a>
                    <a href="{{ route('pricing') }}" class="btn-cta">ابدأ الآن</a>
                @else
                    <div class="user-menu" style="display: flex; gap: 10px; align-items: center;">
                        <span style="color: var(--text-dark);">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="btn-login"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            تسجيل خروج
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="القائمة">
                <span></span><span></span><span></span>
            </button>
        </div>
        <div class="mobile-menu" id="mobileMenu">
            <a href="{{ route('why-lazord') }}">لماذا لازورد</a>
            <a href="{{ route('lab-services') }}">خدمات المختبرات</a>
            <a href="{{ route('solutions') }}">الحلول</a>
            <a href="{{ route('pricing') }}">التسعير</a>
            <a href="{{ route('learn') }}">التعلم</a>
            @guest
                <a href="{{ route('login') }}" class="btn-cta mobile-cta">تسجيل الدخول</a>
                <a href="{{ route('pricing') }}" class="btn-cta mobile-cta">ابدأ الآن</a>
            @else
                <a href="{{ route('dashboard') }}" class="btn-cta mobile-cta">لوحة التحكم</a>
            @endguest
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-cta">
                <h3>هل مازلت تأخذ الانطباعات الجسدية؟</h3>
                <p>نقدم لك كل ما تحتاجه لبدء ذلك في طب الأسنان الرقمي محلياً — بما في ذلك الماسح الضوئي داخل الفم.</p>
                <a href="{{ route('pricing') }}" class="btn-cta-footer">ابدأ</a>
            </div>
            <div class="footer-links">
                <div class="footer-col">
                    <h4>لازورد</h4>
                    <ul>
                        <li><a href="{{ route('why-lazord') }}">لماذا لازورد</a></li>
                        <li><a href="{{ route('lab-services') }}">خدمات المختبرات</a></li>
                        <li><a href="#">وظائف</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>منتجات</h4>
                    <ul>
                        <li><a href="{{ route('lab-services') }}">منتجات</a></li>
                        <li><a href="{{ route('lab-services') }}">أطقم والمسح</a></li>
                        <li><a href="{{ route('lab-services') }}">حلول رعاية الأسنان</a></li>
                        <li><a href="{{ route('lab-services') }}">أدوات رقمية</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>ممارسات</h4>
                    <ul>
                        <li><a href="{{ route('solutions') }}">الحلول</a></li>
                        <li><a href="{{ route('why-lazord') }}">لماذا لازورد</a></li>
                        <li><a href="{{ route('pricing') }}">التسعير</a></li>
                        <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>موارد</h4>
                    <ul>
                        <li><a href="{{ route('learn') }}">التعلم</a></li>
                        <li><a href="{{ route('learn') }}">دراسات الحالة</a></li>
                        <li><a href="{{ route('learn') }}">مدونة</a></li>
                        <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>© 2024 لازورد — جميع الحقوق محفوظة</p>
                <div class="footer-legal">
                    <a href="#">سياسة الخصوصية</a>
                    <a href="#">شروط الاستخدام</a>
                    <a href="{{ route('contact') }}">تواصل معنا</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
