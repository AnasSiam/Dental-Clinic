@extends('layouts.app')

@section('title', 'خدمات المختبرات — لازورد')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <h1>خدمات المختبرات الرقمية</h1>
                <p>منتجات مبتكرة وخدمات متكاملة لعيادتك — مصممة لتحقيق نتائج استثنائية لكل مريض.</p>
                <a href="{{ route('pricing') }}" class="btn-primary">استكشف الباقات</a>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <h2 class="section-title">أطلق العنان للابتكار الرائد في السوق مع مختبر طب الأسنان الخاص بنا</h2>
            <p class="section-subtitle">لا يمكن تحقيق ترميمات متسقة وملاءمة إلا من خلال التواصل القوي. في لازورد، قمنا بتطوير طرق مبتكرة للتعاون مع أطباء الأسنان لدينا باستخدام قوة التكنولوجيا لإعادة تعريف ما هو ممكن لكل مريض.</p>
            <div class="products-grid">
                <div class="product-card"><img src="{{ asset('images/product-1.jpg') }}" alt="أجزاء مباشرة إلى النهاية" /><p>أجزاء مباشرة إلى النهاية</p></div>
                <div class="product-card"><img src="{{ asset('images/product-2.jpg') }}" alt="حلول رعاية الأسنان الشاملة" /><p>حلول رعاية الأسنان الشاملة</p></div>
                <div class="product-card"><img src="{{ asset('images/product-3.jpg') }}" alt="طقم الأسنان ذو الموعد الثاني" /><p>طقم الأسنان ذو الموعد الثاني</p></div>
                <div class="product-card"><img src="{{ asset('images/product-4.jpg') }}" alt="تيجان الزركونيا لمدة 5 أيام" /><p>تيجان الزركونيا لمدة 5 أيام</p></div>
                <div class="product-card"><img src="{{ asset('images/product-5.jpg') }}" alt="أجهزة علاج انقطاع التنفس أثناء النوم" /><p>أجهزة علاج انقطاع التنفس أثناء النوم</p></div>
                <div class="product-card"><img src="{{ asset('images/product-6.jpg') }}" alt="تقويم الأسنان الشفاف" /><p>تقويم الأسنان الشفاف</p></div>
                <div class="product-card"><img src="{{ asset('images/product-7.jpg') }}" alt="واليات ليلية مطبوعة بتقنية ثلاثية الأبعاد" /><p>واليات ليلية مطبوعة بتقنية ثلاثية الأبعاد</p></div>
            </div>
            <div class="products-cta">
                <a href="{{ route('pricing') }}" class="btn-outline">استكشف جميع منتجات المختبر</a>
            </div>
        </div>
    </section>

    <section class="scanning">
        <div class="container">
            <h2 class="section-title">حلول طب الأسنان الترميمية لتناسب احتياجاتك</h2>
            <div class="scanning-grid">
                <div class="scanning-card dark">
                    <h3>هل أنت جديد في مجال المسح الضوئي؟</h3>
                    <p>تقديم نتائج موثوقة للمرضى باستخدام التكنولوجيا والأدوات المبتكرة التي تمنحك التحكم النهائي</p>
                    <ul>
                        <li><span class="check-icon">✓</span> المسح الضوئي 3Shape TRIOS السنجي</li>
                        <li><span class="check-icon">✓</span> سير العمل الكامل الموجه</li>
                        <li><span class="check-icon">✓</span> دعفات القبول لتقديم الأسنان بأكثر من ذلك</li>
                    </ul>
                    <a href="{{ route('pricing') }}" class="btn-green">تسجيل الآن</a>
                </div>
                <div class="scanning-card light">
                    <h3>هل تقوم بالمسح الضوئي بالفعل؟</h3>
                    <p>قم بتنمية ممارستك من خلال الانتقال إلى سير العمل الرقمي باستخدام مجموعة أدوات طب الأسنان الرقمية المبنية لدينا</p>
                    <ul>
                        <li><span class="check-icon">✓</span> المسح الضوئي 3Shape TIROS السنجي</li>
                        <li><span class="check-icon">✓</span> تدفقات المسح الضوئي الموجهة</li>
                        <li><span class="check-icon">✓</span> تدريب وتأقلم غير محدود</li>
                    </ul>
                    <a href="{{ route('pricing') }}" class="btn-dark">احصل على كل الفوائح المسح الضوئي الخاص بك</a>
                </div>
            </div>
        </div>
    </section>
@endsection