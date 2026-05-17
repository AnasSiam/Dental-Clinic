@extends('layouts.app')

@section('title', 'التسعير — لازورد')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <h1>باقات وأسعار لازورد</h1>
                <p>اختر الباقة التي تناسب احتياجات عيادتك — ابدأ صغيراً وتوسع بلا حدود.</p>
            </div>
        </div>
    </section>

    <section class="pricing-section">
        <div class="container">
            <h2 class="section-title">اختر الباقة المناسبة</h2>
            <p class="section-subtitle">جميع الباقات تشمل الوصول الكامل إلى منصة لازورد الرقمية، مع دعم متخصص وتدريب غير محدود.</p>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-badge">مبتدئ</div>
                    <h3>الباقة الأساسية</h3>
                    <div class="pricing-price">
                        <span class="price-amount">مجاناً</span>
                        <span class="price-period">للبدء</span>
                    </div>
                    <p class="pricing-desc">مثالية للعيادات التي تبدأ رحلتها في طب الأسنان الرقمي.</p>
                    <ul class="pricing-features">
                        <li><span class="check-icon">✓</span> الوصول إلى منصة لازورد</li>
                        <li><span class="check-icon">✓</span> طلب حتى 5 حالات شهرياً</li>
                        <li><span class="check-icon">✓</span> دعم عبر البريد الإلكتروني</li>
                        <li class="disabled"><span>✗</span> الموافقة الرقمية قبل التصنيع</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn-outline pricing-btn">ابدأ مجاناً</a>
                </div>

                <div class="pricing-card pricing-popular">
                    <div class="pricing-badge popular">الأكثر شيوعاً</div>
                    <h3>الباقة الاحترافية</h3>
                    <div class="pricing-price">
                        <span class="price-amount">$299</span>
                        <span class="price-period">/ شهرياً</span>
                    </div>
                    <p class="pricing-desc">للعيادات المتنامية التي تسعى لتقديم خدمة متميزة ومتسقة.</p>
                    <ul class="pricing-features">
                        <li><span class="check-icon">✓</span> الوصول الكامل إلى منصة لازورد</li>
                        <li><span class="check-icon">✓</span> طلبات غير محدودة</li>
                        <li><span class="check-icon">✓</span> دعم هاتفي ومباشر</li>
                        <li><span class="check-icon">✓</span> الموافقة الرقمية قبل التصنيع</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn-primary pricing-btn">ابدأ الآن</a>
                </div>

                <div class="pricing-card">
                    <div class="pricing-badge">مؤسسي</div>
                    <h3>باقة المؤسسات</h3>
                    <div class="pricing-price">
                        <span class="price-amount">مخصص</span>
                        <span class="price-period">حسب الاحتياج</span>
                    </div>
                    <p class="pricing-desc">حلول مخصصة لشبكات العيادات والمجموعات الصحية الكبيرة.</p>
                    <ul class="pricing-features">
                        <li><span class="check-icon">✓</span> كل مميزات الباقة الاحترافية</li>
                        <li><span class="check-icon">✓</span> مدير حساب مخصص</li>
                        <li><span class="check-icon">✓</span> دعم 24/7 على مدار الساعة</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-outline pricing-btn">تواصل معنا</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container contact-container">
            <div class="contact-info">
                <h2>تواصل معنا</h2>
                <p>قم بتطوير ممارساتك مع لازورد — الشريك الرقمي المتكامل الوحيد وقم بتحسين تجربة المريض والحلول السريرية ونمو الأعمال.</p>
                <p class="contact-start"><strong>ابدأ اليوم عن طريق ملء النموذج.</strong></p>
            </div>
            <form class="contact-form" id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">الاسم الأول:</label>
                        <input type="text" id="firstName" name="first_name" required />
                    </div>
                    <div class="form-group">
                        <label for="lastName">اسم العائلة:</label>
                        <input type="text" id="lastName" name="last_name" required />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">عنوان البريد الإلكتروني:</label>
                        <input type="email" id="email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="phone">رقم الهاتف:</label>
                        <input type="tel" id="phone" name="phone" required />
                    </div>
                </div>
                <button type="submit" class="btn-submit">ابدأ الآن</button>
            </form>
        </div>
    </section>
@endsection