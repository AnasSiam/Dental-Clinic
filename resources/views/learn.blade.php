@extends('layouts.app')

@section('title', 'التعلم — لازورد')

@section('content')
    <!-- PAGE HERO -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <h1>مركز التعلم والموارد</h1>
                <p>دراسات حالة، مقالات، وإرشادات متخصصة لمساعدتك في الاستفادة القصوى من طب الأسنان الرقمي.</p>
            </div>
        </div>
    </section>

    <!-- BLOG / RESOURCES -->
    <section class="blog" style="padding-top: 60px;">
        <div class="container">
            <h2 class="section-title" style="margin-bottom:0.5rem;">مستقبل طب الأسنان</h2>
            <p class="blog-intro">تعرف على المزيد حول مستقبل طب الأسنان وكيف يشكله لازورد.</p>
            <div class="blog-grid">
                <div class="blog-main">
                    <img src="{{ asset('images/blog-smile.jpg') }}" alt="دراسة حالة: 10 وحدات لتحويل ابتسامة الزركونيا" />
                    <p class="blog-label">دراسة حالة: 10 وحدات لتحويل ابتسامة الزركونيا</p>
                </div>
                <div class="blog-side">
                    <div class="blog-thumb">
                        <img src="{{ asset('images/blog-lab.jpg') }}" alt="داخل معمل لازورد للمستقبل" />
                        <p>داخل معمل لازورد للمستقبل</p>
                    </div>
                    <div class="blog-thumb">
                        <img src="{{ asset('images/blog-work.jpg') }}" alt="كيف يعمل لازورد" />
                        <p>كيف يعمل لازورد</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MORE ARTICLES -->
    <section class="results" style="background: var(--white);">
        <div class="container">
            <h2 class="section-title">مقالات وموارد إضافية</h2>
            <div class="results-grid">
                <div class="result-card">
                    <img src="{{ asset('images/result-1.jpg') }}" alt="دليل المسح الضوئي الرقمي" />
                    <h3>دليل المسح الضوئي الرقمي للمبتدئين</h3>
                    <p>تعرف على كيفية البدء في المسح الضوئي الرقمي وتحقيق أفضل النتائج لمرضاك منذ اليوم الأول.</p>
                </div>
                <div class="result-card">
                    <img src="{{ asset('images/result-2.jpg') }}" alt="تحسين قبول العلاج" />
                    <h3>كيف تحسّن قبول العلاج بالتصاميم الرقمية</h3>
                    <p>استخدم التصاميم الرقمية ثلاثية الأبعاد لإقناع المرضى بخطط العلاج وزيادة نسبة القبول.</p>
                </div>
                <div class="result-card">
                    <img src="{{ asset('images/result-3.jpg') }}" alt="مستقبل طب الأسنان" />
                    <h3>مستقبل طب الأسنان: توجهات 2025</h3>
                    <p>اكتشف أحدث التوجهات والتقنيات التي ستشكل مستقبل طب الأسنان في السنوات القادمة.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
        <div class="container faq-container">
            <h2 class="faq-title">الأسئلة الشائعة حول لازورد</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false">
                        <span>ما هو لازورد</span>
                        <span class="faq-arrow">›</span>
                    </button>
                    <div class="faq-answer">
                        <p>لازورد هو مختبر الأسنان الرقمي الرائد الذي يتيح لعيادات طب الأسنان التواصل الفوري مع المختبر وتتبع الحالات وإتمام الطلبات بشكل رقمي بالكامل.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false">
                        <span>ما هي فوائد طب الأسنان الرقمي</span>
                        <span class="faq-arrow">›</span>
                    </button>
                    <div class="faq-answer">
                        <p>يوفر طب الأسنان الرقمي دقة أعلى في التصاميم، وأوقات تسليم أسرع، وتحسين التواصل بين العيادة والمختبر، وتجربة أفضل للمريض.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false">
                        <span>ما هي مختبر الأسنان الرقمي</span>
                        <span class="faq-arrow">›</span>
                    </button>
                    <div class="faq-answer">
                        <p>مختبر الأسنان الرقمي هو مرفق متخصص يستخدم أحدث التقنيات الرقمية مثل طباعة ثلاثية الأبعاد والتصميم الحاسوبي لإنتاج ترميمات أسنان عالية الجودة.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false">
                        <span>ما هي سير العمل المبتكرة التي تقدمها لازورد</span>
                        <span class="faq-arrow">›</span>
                    </button>
                    <div class="faq-answer">
                        <p>تقدم لازورد سير عمل رقمية متكاملة تشمل المسح الضوئي، والتصميم الرقمي، والموافقة عبر الإنترنت، وتتبع الحالات في الوقت الفعلي.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false">
                        <span>ما هي منتجات مختبر الأسنان التي تقدمها لازورد</span>
                        <span class="faq-arrow">›</span>
                    </button>
                    <div class="faq-answer">
                        <p>تقدم لازورد مجموعة واسعة من المنتجات تشمل تيجان الزركونيا، وحلول رعاية الأسنان الشاملة، وأطقم الأسنان ذات الموعد الثاني، وأجهزة علاج انقطاع التنفس، وغيرها.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-btn" aria-expanded="false">
                        <span>كيف يتم مقارنة لازورد مع مختبرات الأسنان الأخرى</span>
                        <span class="faq-arrow">›</span>
                    </button>
                    <div class="faq-answer">
                        <p>تتميز لازورد بتقديم نظام رقمي متكامل، وسرعة تسليم لا مثيل لها، ودعم متخصص على مدار الساعة، مع أسعار تنافسية مقارنة بالمختبرات التقليدية.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection