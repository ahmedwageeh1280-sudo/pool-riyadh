<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0a4f8f" />
  <meta name="author"      content="شركة تنظيف مسابح بالرياض" />

  {{-- Primary SEO Meta --}}
  <title>{{ $seo['title'] }}</title>
  <meta name="description" content="{{ $seo['description'] }}" />
  <meta name="keywords"    content="{{ $seo['keywords'] }}" />
  <meta name="robots"      content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical"    href="{{ $seo['canonical'] }}" />

  {{-- Geo Tags — signals Riyadh locality to Google's local algorithm --}}
  <meta name="geo.region"    content="SA-01" />
  <meta name="geo.placename" content="الرياض، المملكة العربية السعودية" />
  <meta name="geo.position"  content="24.7136;46.6753" />
  <meta name="ICBM"          content="24.7136, 46.6753" />

  {{-- hreflang — tells Google this is Arabic / Saudi audience --}}
  <link rel="alternate" hreflang="ar"        href="{{ $seo['canonical'] }}" />
  <link rel="alternate" hreflang="ar-SA"     href="{{ $seo['canonical'] }}" />
  <link rel="alternate" hreflang="x-default" href="{{ $seo['canonical'] }}" />

  {{-- Open Graph — required for rich WhatsApp / social previews --}}
  <meta property="og:title"        content="{{ $seo['title'] }}" />
  <meta property="og:description"  content="{{ $seo['description'] }}" />
  <meta property="og:type"         content="website" />
  <meta property="og:locale"       content="ar_SA" />
  <meta property="og:url"          content="{{ $seo['canonical'] }}" />
  <meta property="og:site_name"    content="شركة تنظيف مسابح بالرياض" />
  <meta property="og:image"        content="{{ asset('images/og-pool-riyadh.jpg') }}" />
  <meta property="og:image:width"  content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt"    content="شركة تنظيف مسابح بالرياض - خدمة احترافية 24 ساعة" />

  {{-- Twitter Card --}}
  <meta name="twitter:card"        content="summary_large_image" />
  <meta name="twitter:title"       content="{{ $seo['title'] }}" />
  <meta name="twitter:description" content="{{ $seo['description'] }}" />
  <meta name="twitter:image"       content="{{ asset('images/og-pool-riyadh.jpg') }}" />

  {{--
    JSON-LD: all Schema.org "@" keys written as "@@" because Blade treats bare
    @word as a directive. @@ outputs a literal @ in the rendered HTML.
  --}}

  {{-- 1. LocalBusiness — most important schema for local pack ranking --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": ["LocalBusiness", "HomeAndConstructionBusiness"],
    "@@id": "{{ url('/') }}#business",
    "name": "شركة تنظيف مسابح بالرياض",
    "alternateName": ["تنظيف مسابح الرياض", "صيانة مسابح بالرياض"],
    "description": "شركة متخصصة في تنظيف وصيانة وتعقيم المسابح السكنية والتجارية بالرياض منذ عام 2010.",
    "url": "{{ url('/') }}",
    "telephone": "+966500304850",
    "foundingDate": "2010",
    "address": {
      "@@type": "PostalAddress",
      "addressLocality": "الرياض",
      "addressRegion": "الرياض",
      "addressCountry": "SA"
    },
    "geo": {
      "@@type": "GeoCoordinates",
      "latitude": "24.7136",
      "longitude": "46.6753"
    },
    "areaServed": [
      { "@@type": "City",  "name": "الرياض" },
      { "@@type": "Place", "name": "الخرج" },
      { "@@type": "Place", "name": "الدرعية" }
    ],
    "openingHoursSpecification": {
      "@@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
      "opens": "00:00",
      "closes": "23:59"
    },
    "priceRange": "$$",
    "currenciesAccepted": "SAR",
    "paymentAccepted": "Cash, Credit Card",
    "aggregateRating": {
      "@@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "127",
      "bestRating": "5",
      "worstRating": "1"
    },
    "review": [
      {
        "@@type": "Review",
        "reviewRating": { "@@type": "Rating", "ratingValue": "5", "bestRating": "5" },
        "author": { "@@type": "Person", "name": "محمد العتيبي" },
        "reviewBody": "خدمة ممتازة والفريق محترف جداً. نظّفوا مسبحنا بالكامل وعالجوا مشكلة الطحالب في نفس اليوم.",
        "datePublished": "2024-06-15"
      },
      {
        "@@type": "Review",
        "reviewRating": { "@@type": "Rating", "ratingValue": "5", "bestRating": "5" },
        "author": { "@@type": "Person", "name": "نورة الشمري" },
        "reviewBody": "تعاملت معهم منذ 3 سنوات وما خذلونا أبداً. يأتون في الموعد والمسبح يكون نظيفاً كالمرايا.",
        "datePublished": "2024-09-10"
      },
      {
        "@@type": "Review",
        "reviewRating": { "@@type": "Rating", "ratingValue": "5", "bestRating": "5" },
        "author": { "@@type": "Person", "name": "عبدالله الدوسري" },
        "reviewBody": "أفضل شركة تنظيف مسابح بالرياض. عقد سنوي ممتاز وشامل لكل شيء.",
        "datePublished": "2024-11-20"
      }
    ],
    "sameAs": ["https://wa.me/966500304850"],
    "hasOfferCatalog": {
      "@@type": "OfferCatalog",
      "name": "خدمات تنظيف وصيانة المسابح بالرياض",
      "itemListElement": [
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "تنظيف المسابح الدوري بالرياض",      "description": "تنظيف أسبوعي وشهري للمسابح السكنية والتجارية" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "معالجة وتعقيم مياه المسابح",        "description": "تحليل كيميائي وتعديل نسب الكلور والأس الهيدروجيني" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "صيانة معدات المسبح",               "description": "صيانة المضخات والفلاتر وأنظمة تدوير المياه" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "دهان وترميم المسابح",              "description": "دهان وترميم وتبليط المسابح بمواد متخصصة" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "إزالة الطحالب من المسابح بالرياض", "description": "علاج متخصص لإزالة الطحالب والتلوث الأخضر والأسود" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "إنشاء وتركيب المسابح بالرياض",     "description": "تصميم وإنشاء مسابح سكنية وتجارية بكل الأحجام" } }
      ]
    }
  }
  </script>

  {{-- 2. FAQPage — enables FAQ accordion in SERP, boosts CTR significantly --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
      @foreach($faqs as $faq)
      {
        "@@type": "Question",
        "name": @json($faq['q']),
        "acceptedAnswer": { "@@type": "Answer", "text": @json($faq['a']) }
      }{{ !$loop->last ? ',' : '' }}
      @endforeach
    ]
  }
  </script>

  {{-- 3. Service schema — dedicated service entity for rich service results --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "تنظيف وصيانة المسابح بالرياض",
    "serviceType": "Pool Cleaning and Maintenance",
    "description": "خدمات احترافية لتنظيف وصيانة وتعقيم المسابح السكنية والتجارية في جميع أحياء مدينة الرياض",
    "provider": {
      "@@type": "LocalBusiness",
      "@@id": "{{ url('/') }}#business",
      "name": "شركة تنظيف مسابح بالرياض",
      "telephone": "+966500304850"
    },
    "areaServed": { "@@type": "City", "name": "الرياض" },
    "availableChannel": {
      "@@type": "ServiceChannel",
      "servicePhone": { "@@type": "ContactPoint", "telephone": "+966500304850", "contactType": "customer service" }
    },
    "offers": {
      "@@type": "Offer",
      "priceRange": "150-3000",
      "priceCurrency": "SAR",
      "availability": "https://schema.org/InStock"
    }
  }
  </script>

  {{-- 4. WebSite + SearchAction — enables sitelinks searchbox in Google SERP --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "WebSite",
    "@@id": "{{ url('/') }}#website",
    "url": "{{ url('/') }}",
    "name": "شركة تنظيف مسابح بالرياض",
    "description": @json($seo['description']),
    "inLanguage": "ar",
    "publisher": { "@@id": "{{ url('/') }}#business" },
    "potentialAction": {
      "@@type": "SearchAction",
      "target": {
        "@@type": "EntryPoint",
        "urlTemplate": "{{ url('/') }}?q={search_term_string}"
      },
      "query-input": "required name=search_term_string"
    }
  }
  </script>

  {{-- 5. BreadcrumbList — adds breadcrumb trail to SERP URL display --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@@type": "ListItem",
        "position": 1,
        "name": "شركة تنظيف مسابح بالرياض",
        "item": "{{ url('/') }}"
      }
    ]
  }
  </script>

  {{--
    Fonts: preload + onload trick loads font CSS asynchronously (non-render-blocking).
    This eliminates the font stylesheet from the critical path, improving LCP.
    Reduced to only weights actually used in CSS: Cairo 400/700/900, Tajawal 700/800.
  --}}
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&family=Tajawal:wght@700;800&display=swap"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&family=Tajawal:wght@700;800&display=swap" rel="stylesheet" />
  </noscript>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>

<div class="water-bg" aria-hidden="true">
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
</div>

@include('components.header')

<main id="main-content">
  @yield('content')
</main>

@include('components.footer')

<a href="https://wa.me/966500304850"
   class="whatsapp-float"
   target="_blank"
   rel="noopener noreferrer"
   title="تواصل مع شركة تنظيف مسابح بالرياض عبر واتساب"
   aria-label="تواصل عبر واتساب">💬</a>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
