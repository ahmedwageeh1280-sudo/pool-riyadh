@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">⭐ الأفضل في الرياض منذ 2010</div>
    <h1>
      <span class="highlight">شركة تنظيف مسابح</span><br>
      بالرياض المحترفة
    </h1>
    <p>
      <strong>شركة تنظيف مسابح بالرياض</strong> المتخصصة في تنظيف وصيانة وتعقيم حمامات السباحة السكنية والتجارية بأعلى معايير الجودة والسلامة.
      فريقنا المحترف يضمن لك مسبحاً نظيفاً وصحياً طوال العام، مع خدمات صيانة مسابح شاملة وأسعار تنافسية.
      نصلك في جميع أحياء الرياض خلال ساعة واحدة.
    </p>
    <div class="hero-btns">
      <a href="tel:+966500304850" class="btn-main">📞 اتصل الآن مجاناً</a>
      <a href="#services"      class="btn-outline">🔍 خدماتنا</a>
    </div>
    <div class="hero-stats">
      @foreach($stats as $stat)
      <div class="stat-item">
        <div class="stat-num">{{ $stat['num'] }}</div>
        <div class="stat-label">{{ $stat['label'] }}</div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="hero-visual">
    <svg class="pool-illustration" viewBox="0 0 400 320" fill="none" xmlns="http://www.w3.org/2000/svg"
         role="img" aria-label="مسبح نظيف - شركة تنظيف مسابح بالرياض">
      <title>مسبح نظيف - شركة تنظيف مسابح بالرياض</title>
      <rect x="20" y="60" width="360" height="230" rx="30" fill="url(#poolBorder)" opacity="0.3"/>
      <rect x="30" y="70" width="340" height="210" rx="22" fill="url(#waterGrad)"/>
      <path d="M50 110 Q100 100 150 110 Q200 120 250 110 Q300 100 350 110" stroke="rgba(255,255,255,0.3)" stroke-width="2" fill="none"/>
      <path d="M50 150 Q120 138 190 150 Q260 162 330 150" stroke="rgba(255,255,255,0.2)" stroke-width="1.5" fill="none"/>
      <path d="M60 190 Q130 178 200 190 Q270 202 340 190" stroke="rgba(255,255,255,0.15)" stroke-width="1" fill="none"/>
      <rect x="42" y="65" width="8" height="50" rx="4" fill="rgba(255,255,255,0.5)"/>
      <rect x="38" y="85" width="16" height="4" rx="2" fill="rgba(255,255,255,0.4)"/>
      <rect x="38" y="100" width="16" height="4" rx="2" fill="rgba(255,255,255,0.4)"/>
      <circle cx="80"  cy="200" r="5" fill="rgba(255,255,255,0.2)"/>
      <circle cx="200" cy="170" r="8" fill="rgba(255,255,255,0.15)"/>
      <circle cx="320" cy="210" r="4" fill="rgba(255,255,255,0.2)"/>
      <rect x="20" y="55"  width="360" height="18" rx="10" fill="rgba(0,180,216,0.4)"/>
      <rect x="20" y="272" width="360" height="18" rx="10" fill="rgba(0,180,216,0.4)"/>
      <line x1="300" y1="30" x2="300" y2="80" stroke="rgba(255,255,255,0.5)" stroke-width="3"/>
      <path d="M260 30 Q300 5 340 30 Z" fill="rgba(240,165,0,0.7)"/>
      <circle cx="50" cy="25" r="18" fill="rgba(240,165,0,0.6)"/>
      <defs>
        <linearGradient id="waterGrad" x1="30" y1="70" x2="370" y2="280" gradientUnits="userSpaceOnUse">
          <stop offset="0%"   stop-color="#00b4d8" stop-opacity="0.9"/>
          <stop offset="50%"  stop-color="#0077b6" stop-opacity="0.95"/>
          <stop offset="100%" stop-color="#023e8a" stop-opacity="1"/>
        </linearGradient>
        <linearGradient id="poolBorder" x1="0" y1="0" x2="400" y2="320" gradientUnits="userSpaceOnUse">
          <stop offset="0%"   stop-color="#00b4d8"/>
          <stop offset="100%" stop-color="#0a4f8f"/>
        </linearGradient>
      </defs>
    </svg>
  </div>
</section>

{{-- WHY US --}}
<section class="why-us" id="about">
  <div class="text-center">
    <div class="section-label">لماذا نحن؟</div>
    <h2 class="section-title">الخيار الأول لتنظيف المسابح بالرياض</h2>
    <p class="section-sub">نجمع بين الخبرة الطويلة والتقنيات الحديثة لنقدم لك خدمة لا مثيل لها</p>
    <p class="section-body-text">
      منذ تأسيسنا عام 2010 قدّمنا خدمات تنظيف المسابح وصيانتها لأكثر من 500 عميل في الرياض.
      نحرص على استخدام أحدث معدات الغسيل والتعقيم والمواد الكيميائية المعتمدة صحياً لضمان سلامة مسبحك وعائلتك.
      شركتنا متخصصة في تنظيف المسابح السكنية والتجارية والفندقية بأعلى معايير النظافة الدولية،
      كما نقدم عقود صيانة دورية توفّر لك راحة البال على مدار العام.
    </p>
  </div>
  <div class="features-grid">
    @foreach($features as $feature)
    <div class="feature-card">
      <div class="feature-icon">{{ $feature['icon'] }}</div>
      <h3>{{ $feature['title'] }}</h3>
      <p>{{ $feature['body'] }}</p>
    </div>
    @endforeach
  </div>
</section>

{{-- SERVICES --}}
<section id="services">
  <div class="text-center">
    <div class="section-label">خدماتنا</div>
    <h2 class="section-title">خدمات تنظيف المسابح الشاملة</h2>
    <p class="section-sub">نقدم حلولاً متكاملة لكل احتياجات مسبحك من التنظيف الدوري حتى الصيانة الشاملة</p>
  </div>
  <div class="services-grid">
    @foreach($services as $service)
    <div class="service-card">
      <div class="service-card-header">
        <div class="service-icon">{{ $service['icon'] }}</div>
        <h3>{{ $service['title'] }}</h3>
      </div>
      <div class="service-card-body">
        <p>{{ $service['body'] }}</p>
        <ul class="service-list">
          @foreach($service['list'] as $item)
          <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endforeach
  </div>
</section>

{{-- AREAS --}}
<section class="areas" id="areas">
  <div class="text-center">
    <div class="section-label">مناطق الخدمة</div>
    <h2 class="section-title">نخدم جميع أحياء الرياض</h2>
    <p class="section-sub">تغطيتنا تشمل كامل مدينة الرياض ومحافظاتها</p>
    <p class="section-body-text">
      تغطي خدمات <strong>شركة تنظيف مسابح بالرياض</strong> جميع أحياء العاصمة شمالاً وجنوباً وشرقاً وغرباً،
      بما فيها الأحياء الراقية كالنرجس والملقا وحطين والعليا، فضلاً عن المحافظات المجاورة كالخرج والدرعية.
      فريقنا المتنقل يصلك أينما كنت في الرياض بأسرع وقت ممكن وبأقل تكلفة.
    </p>
  </div>
  <div class="areas-grid">
    @foreach($areas as $area)
    <div class="area-tag">{{ $area }}</div>
    @endforeach
  </div>
</section>

{{-- REVIEWS --}}
<section id="reviews">
  <div class="text-center">
    <div class="section-label">آراء عملائنا</div>
    <h2 class="section-title">آراء عملاء شركة تنظيف مسابح بالرياض</h2>
    <p class="section-sub">آلاف العملاء الراضين في الرياض يثقون بنا</p>
  </div>
  <div class="reviews-grid">
    @foreach($reviews as $review)
    <div class="review-card">
      <div class="stars">★★★★★</div>
      <blockquote>{{ $review['text'] }}</blockquote>
      <div class="reviewer">
        <div class="reviewer-avatar">{{ $review['initial'] }}</div>
        <div>
          <div class="reviewer-name">{{ $review['name'] }}</div>
          <div class="reviewer-loc">{{ $review['area'] }}</div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

{{-- GOOGLE MAPS --}}
<section class="map-section" id="location">
  <div class="text-center">
    <div class="section-label">موقعنا</div>
    <h2 class="section-title">نخدم الرياض بالكامل</h2>
    <p class="section-sub">
      فريق <strong>شركة تنظيف مسابح بالرياض</strong> متنقل ويصلك في جميع أحياء العاصمة —
      من النرجس شمالاً إلى بدر جنوباً، ومن العليا شرقاً إلى الروضة غرباً.
    </p>
  </div>
  <div class="map-wrapper">
    <iframe
      src="https://maps.google.com/maps?q=24.7136,46.6753&z=12&output=embed"
      width="100%"
      height="400"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="موقع شركة تنظيف مسابح بالرياض على الخريطة"
      aria-label="خريطة الرياض - منطقة خدمة شركة تنظيف مسابح بالرياض">
    </iframe>
  </div>
  <div class="map-info">
    <div class="map-stat">📍 <strong>التغطية:</strong> جميع أحياء مدينة الرياض</div>
    <div class="map-stat">⏱️ <strong>وقت الوصول:</strong> أقل من ساعة</div>
    <div class="map-stat">📞 <a href="tel:+966500304850">0500304850</a></div>
    <div class="map-stat">🕐 <strong>الخدمة:</strong> 24 ساعة / 7 أيام</div>
  </div>
</section>

{{-- FAQ --}}
<section class="faq" id="faq">
  <div class="text-center">
    <div class="section-label">الأسئلة الشائعة</div>
    <h2 class="section-title">أسئلة شائعة عن تنظيف المسابح بالرياض</h2>
  </div>
  <div class="faq-list">
    @foreach($faqs as $faq)
    <details>
      <summary>{{ $faq['q'] }}</summary>
      <div class="faq-answer">{{ $faq['a'] }}</div>
    </details>
    @endforeach
  </div>
</section>

{{-- CTA --}}
<section class="cta-banner">
  <h2>مسبحك يستحق الأفضل</h2>
  <p>اتصل بنا الآن واحصل على تقييم مجاني وعرض سعر بدون أي التزام</p>
  <a href="tel:+966500304850" class="phone-display">📞 0500304850</a>
</section>

@endsection