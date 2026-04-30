<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <a href="{{ route('home') }}" class="logo">
        <div class="logo-icon">🏊</div>
        <div class="logo-text">
          تنظيف المسابح
          <span>الرياض</span>
        </div>
      </a>
      <p>شركة متخصصة في تنظيف وصيانة وتعقيم المسابح السكنية والتجارية بالرياض منذ أكثر من 15 عاماً.</p>

      {{-- NAP block: Name / Address / Phone must be consistent across the site and match Google Business Profile --}}
      <address class="footer-nap">
        <span class="nap-item">📍 الرياض، المملكة العربية السعودية</span>
        <a  href="tel:+966560387771" class="nap-item">📞 0560387771</a>
        <a  href="https://wa.me/966560387771" rel="noopener noreferrer" class="nap-item">💬 واتساب: 0560387771</a>
        <span class="nap-item">🕐 خدمة 24 ساعة / 7 أيام في الأسبوع</span>
      </address>
    </div>

    <div class="footer-col">
      <h4>خدماتنا</h4>
      <ul>
        <li><a href="#services">تنظيف المسابح الدوري</a></li>
        <li><a href="#services">معالجة وتعقيم المياه</a></li>
        <li><a href="#services">صيانة معدات المسبح</a></li>
        <li><a href="#services">دهان وترميم المسابح</a></li>
        <li><a href="#services">إنشاء وتركيب مسابح</a></li>
        <li><a href="#services">إزالة الطحالب</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>روابط سريعة</h4>
      <ul>
        <li><a href="#about">من نحن</a></li>
        <li><a href="#areas">مناطق الخدمة</a></li>
        <li><a href="#reviews">آراء العملاء</a></li>
        <li><a href="#faq">الأسئلة الشائعة</a></li>
        <li><a href="tel:+966560387771">اتصل بنا</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© {{ date('Y') }} شركة تنظيف مسابح الرياض. جميع الحقوق محفوظة.</p>
    <div class="footer-phone">
      <a href="tel:+966560387771">📞 0560387771</a>
    </div>
  </div>
</footer>
