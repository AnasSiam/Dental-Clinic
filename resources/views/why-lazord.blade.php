@extends('layouts.app')

@section('title', 'لماذا لازورد — مختبر الأسنان الرقمي')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <h1>لماذا تختار لازورد؟</h1>
                <p>نحن نقود ثورة طب الأسنان الرقمي بتقديم تجربة مختبرية لا مثيل لها — مبنية على التكنولوجيا والثقة والتواصل الحقيقي.</p>
                <a href="{{ route('pricing') }}" class="btn-primary">ابدأ الآن</a>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container">
            <h2 class="section-title">الآلاف من الممارسات تثق في لازورد في أعمالها المخبرية</h2>
            <div class="stats-grid">
                <div class="stat-card"><span class="stat-num">1.5M+</span><span class="stat-label">تم تسليم الابتسامات السعيدة</span></div>
                <div class="stat-card"><span class="stat-num">$30K</span><span class="stat-label">تم الحفظ مقدماً</span></div>
                <div class="stat-card"><span class="stat-num">50K+</span><span class="stat-label">تقييمات حالة 5 نجوم</span></div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2 class="section-title">تعزيز مستقبل طب الأسنان الرقمي</h2>
            <p class="section-subtitle">لا يمكن تحقيق ترميمات متسقة وملاءمة إلا من خلال التواصل القوي. في لازورد، قمنا بتطوير طرق مبتكرة للتعاون مع أطباء الأسنان لدينا باستخدام قوة التكنولوجيا.</p>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><div class="icon-fallback">🔬</div></div>
                    <h3>سير العمل التعاوني</h3>
                    <p>احصل على مراجعة المسح في الوقت الفعلي واعتمد تصاميم الأسنان المعقدة ثلاثية الأبعاد للإعداد النهائي في عملك المختبري.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><div class="icon-fallback">🦷</div></div>
                    <h3>المنتجات المبتكرة</h3>
                    <p>قم بتقديم خدمات تغير قواعد اللعبة مثل التيجان لمدة 5 أيام، وأطقم الأسنان ذات الموعد المباشرة، والأجزاء الجزئية المباشرة.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><div class="icon-fallback">💻</div></div>
                    <h3>مختبر رقمي بالكامل</h3>
                    <p>يمكنك الوصول إلى فنيين ذوي المستوى العالمي الذين يستجيبون بأحدث تقنيات طب الأسنان وأوقات التسليم الرائدة في الصناعة.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><div class="icon-fallback">📋</div></div>
                    <h3>الخبرة عند الطلب</h3>
                    <p>يمكنك الوصول إلى خبرائنا السريريين للحصول على إرشادات ودعم متخصصين عبر الهاتف أو البريد الإلكتروني خلال دقائق.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container faq-container">
            <h2 class="faq-title">الأسئلة الشائعة حول لازورد</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false"><span>ما هو لازورد</span><span class="faq-arrow">›</span></button>
                    <div class="faq-answer"><p>لازورد هو مختبر الأسنان الرقمي الرائد الذي يتيح لعيادات طب الأسنان التواصل الفوري مع المختبر وتتبع الحالات وإتمام الطلبات بشكل رقمي بالكامل.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false"><span>ما هي فوائد طب الأسنان الرقمي</span><span class="faq-arrow">›</span></button>
                    <div class="faq-answer"><p>يوفر طب الأسنان الرقمي دقة أعلى في التصاميم، وأوقات تسليم أسرع، وتحسين التواصل بين العيادة والمختبر، وتجربة أفضل للمريض.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false"><span>ما هي سير العمل المبتكرة التي تقدمها لازورد</span><span class="faq-arrow">›</span></button>
                    <div class="faq-answer"><p>تقدم لازورد سير عمل رقمية متكاملة تشمل المسح الضوئي، والتصميم الرقمي، والموافقة عبر الإنترنت، وتتبع الحالات في الوقت الفعلي.</p></div>
                </div>
            </div>
        </div>
    </section>
@endsection