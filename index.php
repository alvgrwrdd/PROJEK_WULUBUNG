<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wulubung Hill — Outbound & Team Building Kaliurang</title>
  
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Memanggil File CSS Eksternal -->
  <link rel="stylesheet" href="css/style1.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- ── NAVBAR ─────────────────────────────── -->
  <nav id="navbar" class="custom-nav">
    <a href="#" class="nav-logo">
  <img src="asset/wblo.png" alt="logo" class="logo-img"></a>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#packages">Packages</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#locations">Locations</a></li>
    </ul>
    <a href="form.php" class="nav-cta">Book Now →</a>
    
    <!-- Hamburger icon untuk versi mobile (bisa dikembangkan pakai JS/Bootstrap Collapse) -->
   <div class="hamburger d-lg-none d-flex flex-column gap-1"
     onclick="document.querySelector('.nav-links').classList.toggle('d-flex');">
  <span></span>
  <span></span>
  <span></span>
</div>

  </nav>

  <!-- ── HERO ───────────────────────────────── -->
  <section id="hero">
    <div class="hero-bg"></div>
    <div class="hero-shape"></div>
    <div class="hero-content">

      <h1 class="hero-title">
        Be Fun,<br>Be Happy<br><span class="accent">&amp; Be Better</span>
      </h1>
      <p class="hero-sub">Outbound Team Building di Kaliurang untuk Gathering, Company Event, dan Fun Games bersama alam Merapi yang asri.</p>
      <div class="hero-actions">
        <a href="#packages" class="btn-custom-primary">Explore Packages ↓</a>
       
      </div>
    </div>
    
   
  </section>

  <!-- ── ABOUT ──────────────────────────────── -->
  <section id="about" class="pad-section">
    <div class="about-grid">
      <div class="about-visual reveal">
       <div class="about-visual-img" style="background-image: url('asset/bef.jpg');"></div>
        <div class="about-badge">Since 2009</div>
        <div class="about-card">
        
         
        </div>
      </div>
      <div class="reveal" style="transition-delay:0.15s">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title">Wulubung Hill — Outbound di Alam Merapi</h2>
        <p style="color:var(--text-mid); margin-bottom:2rem; line-height:1.8;">Wulubung Hill adalah destinasi outbound & team building terpercaya di kawasan Kaliurang, Yogyakarta. Kami menyediakan paket lengkap yang dirancang untuk mempererat tim, membangun karakter, dan menciptakan kenangan tak terlupakan.</p>
        <div class="d-flex flex-column gap-3">
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon"><i class="fa-solid fa-user-group"></i></div>
            <div>
              <strong class="d-block" style="color:var(--primary-mid)">Fasilitator Berpengalaman</strong>
              <span style="font-size:0.85rem; color:var(--text-light)">Tim profesional bersertifikat dengan jam terbang tinggi</span>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon"><i class="fa-solid fa-mountain"></i></div>
            <div>
              <strong class="d-block" style="color:var(--primary-mid)">Lokasi Alam Merapi</strong>
              <span style="font-size:0.85rem; color:var(--text-light)">Suasana segar, view menakjubkan, jauh dari hiruk pikuk kota</span>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3">
             <div class="feature-icon"><i class="fa-solid fa-bullseye"></i></div>
            <div>
              <strong class="d-block" style="color:var(--primary-mid)">Paket Team Building Lengkap</strong>
              <span style="font-size:0.85rem; color:var(--text-light)">Dari fun games hingga paintball dan jeep adventure</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── PACKAGES ───────────────────────────── -->
  <section id="packages" class="pad-section">
    <div class="pkg-header reveal">
      <div>
        <div class="section-label">Pilih Paket</div>
        <h2 class="section-title">Paket Outbound<br>Untuk Semua Kebutuhan</h2>
      </div>
      <p style="color:rgba(255,255,255,0.5); font-size:0.9rem; max-width:280px; line-height:1.7" class="d-none d-md-block">
        Harga per orang, sudah termasuk fasilitator & peralatan. Minimum peserta berlaku.
      </p>
    </div>
    <div class="pkg-grid">
      <!-- Package 1 -->
      <div class="pkg-card reveal">
        <div class="pkg-tier">Paket 1</div>
        <div class="pkg-name">BeFun</div>
        <div class="pkg-duration">⏱ Durasi 2 Jam</div>
        <div class="pkg-price">Rp50.000 <span style="font-size:0.85rem; font-weight:400; color:rgba(255,255,255,0.5)">/ pax</span></div>
        <div class="pkg-divider"></div>
        <ul class="pkg-features">
          <li class="pkg-feature">Ice breaking & warming up</li>
          <li class="pkg-feature">3 - 4 games outbound ringan</li>
          <li class="pkg-feature">Fasilitator profesional</li>
          <li class="pkg-feature">Area outdoor Kaliurang</li>
        </ul>
        <a href="form.php?paket=BeFun" class="pkg-cta outline">Book Paket BeFun</a>
      </div>

      <!-- Package 2 -->
      <div class="pkg-card featured reveal" style="transition-delay:0.1s">
        <div class="pkg-featured-badge">Best Seller</div>
        <div class="pkg-tier">Paket 2</div>
        <div class="pkg-name">BeHappy</div>
        <div class="pkg-duration">⏱ Durasi 3 Jam</div>
        <div class="pkg-price">Rp85.000 <span style="font-size:0.85rem; font-weight:400; color:rgba(255,255,255,0.5)">/ pax</span></div>
        <div class="pkg-divider"></div>
        <ul class="pkg-features">
          <li class="pkg-feature">Ice breaking & energizer</li>
          <li class="pkg-feature">5 - 6 games team building</li>
          <li class="pkg-feature">Sertifikat & Dokumentasi foto</li>
          <li class="pkg-feature">Fasilitator & games master</li>
        </ul>
        <a href="form.php?paket=BeHappy" class="pkg-cta">Book Paket BeHappy</a>
      </div>

      <!-- Package 3 -->
      <div class="pkg-card reveal" style="transition-delay:0.2s">
        <div class="pkg-tier">Paket 3</div>
        <div class="pkg-name">BeBetter</div>
        <div class="pkg-duration">⏱ Durasi 4 - 5 Jam</div>
        <div class="pkg-price">Rp185.000 <span style="font-size:0.85rem; font-weight:400; color:rgba(255,255,255,0.5)">/ pax</span></div>
        <div class="pkg-divider"></div>
        <ul class="pkg-features">
          <li class="pkg-feature">Full outbound program</li>
          <li class="pkg-feature">Paintball atau Jeep Tour</li>
          <li class="pkg-feature">Makan siang & coffee break</li>
          <li class="pkg-feature">Sertifikat + merchandise</li>
        </ul>
        <a href="form.php?paket=BeBetter" class="pkg-cta outline">Book Paket BeBetter</a>
      </div>
    </div>
  </section>

  <!-- ── OTHER SERVICES ─────────────────────── -->
 <section id="services">

  <!-- BACKGROUND SLIDER -->
  <div class="bg-slider">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <!-- HEADER -->
  <div class="services-header reveal">
    <center>
    <div class="seclab">Layanan Tambahan</div>
    <h2 class="sectit">Other Services</h2>
    </center>
  </div>

  <!-- CONTENT -->
  <section class="pricing-section">

  <!-- PAINTBALL -->
  <div class="price-card">
    <div class="price-icon">
      <i class="fas fa-crosshairs"></i>
    </div>
    <h2>Paint Ball</h2>
    <p class="duration">Duration 1–2 Hour</p>
    <h3>Rp. 120.000 / Pax</h3>
    <p class="note">Minimum 20 Pax</p>

    <div class="divider"></div>

    <p class="label">Facilities</p>
    <p class="desc">
      Referee · Vest · Uniform · Goggles · Weapons · Bullets · Location
    </p>
  </div>

  <!-- JEEP -->
  <div class="price-card">
    <div class="price-icon">
      <i class="fas fa-car"></i>
    </div>
    <h2>Fun Jeep Tour</h2>
    <p class="duration">Duration 2.5 Hour</p>
    <h3>Rp. 450.000 / Jip</h3>
    <p class="note">Maximum 4 Person per Jip</p>

    <div class="divider"></div>

    <p class="label">Facilities</p>
    <p class="desc">
      Driver Guide · Jeep Willys · Helmet
    </p>

    <div class="divider"></div>

    <p class="label">Location</p>
    <p class="desc">
      Museum Petilasan Mbah Marijan · Bunker Kaliadem · Batu Alien · Track Air Kali Kuning
    </p>
  </div>

  <!-- ATV -->
  <div class="price-card">
    <div class="price-icon">
      <i class="fas fa-motorcycle"></i>
    </div>
    <h2>ATV Fun Trip</h2>
    <p class="duration">Duration 2.5 Hour</p>
    <h3>Rp. 450.000 / 2 Pax</h3>

    <div class="divider"></div>

    <p class="label">Facilities</p>
    <p class="desc">
      Guide · ATV · Helmet · Footwear · Snack · Locker
    </p>
  </div>

</section>
    
</section>

<!-- ── GALLERY ────────────────────────────── -->
  <section id="gallery" class="pad-section">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <div class="section-label d-inline-flex">Galeri</div>
        <h2 class="section-title">Momen Seru Bersama Wulubung</h2>
      </div>
      <div class="gallery-masonry reveal">
        <div class="gallery-item"><div class="gallery-item-inner g1"></div></div>
        <div class="gallery-item"><div class="gallery-item-inner g2"></div></div>
        <div class="gallery-item"><div class="gallery-item-inner g3"></div></div>
        <div class="gallery-item"><div class="gallery-item-inner g4"></div></div>
        <div class="gallery-item"><div class="gallery-item-inner g1"></div></div>
        <div class="gallery-item"><div class="gallery-item-inner g3"></div></div>
        <div class="gallery-item"><div class="gallery-item-inner g2"></div></div>
      </div>
     
    </div>
  </section>
  
  <!-- ── TESTIMONIALS ───────────────────────── -->
  <section id="testimonials" class="pad-section" style="background: var(--primary-dark);">
    <div class="text-center mb-5 reveal">
      <div class="section-label d-inline-flex" style="color:var(--accent)">Testimoni</div>
      <h2 class="section-title text-white">Kata Mereka Tentang Kami</h2>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4 reveal">
                <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                    <div style="color:var(--accent); letter-spacing:2px;" class="mb-3">★★★★★</div>
                    <p class="fst-italic mb-4" style="color:rgba(255,255,255,0.8); font-size:0.9rem;">"Team gathering kantor kami jadi sangat berkesan! Fasilitatornya profesional, lokasi indah, dan game-nya seru banget."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex justify-content-center align-items-center fw-bold" style="width:40px; height:40px; background:var(--primary-mid); color:var(--accent);">RA</div>
                        <div>
                            <div class="text-white fw-bold" style="font-size:0.85rem;">Rini Astuti</div>
                            <div style="font-size:0.75rem; color:rgba(255,255,255,0.4);">HR Manager · PT Sinar Maju</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                    <div style="color:var(--accent); letter-spacing:2px;" class="mb-3">★★★★★</div>
                    <p class="fst-italic mb-4" style="color:rgba(255,255,255,0.8); font-size:0.9rem;">"Team gathering kantor kami jadi sangat berkesan! Fasilitatornya profesional, lokasi indah, dan game-nya seru banget."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex justify-content-center align-items-center fw-bold" style="width:40px; height:40px; background:var(--primary-mid); color:var(--accent);">RA</div>
                        <div>
                            <div class="text-white fw-bold" style="font-size:0.85rem;">Rini Astuti</div>
                            <div style="font-size:0.75rem; color:rgba(255,255,255,0.4);">HR Manager · PT Sinar Maju</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                    <div style="color:var(--accent); letter-spacing:2px;" class="mb-3">★★★★★</div>
                    <p class="fst-italic mb-4" style="color:rgba(255,255,255,0.8); font-size:0.9rem;">"Team gathering kantor kami jadi sangat berkesan! Fasilitatornya profesional, lokasi indah, dan game-nya seru banget."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex justify-content-center align-items-center fw-bold" style="width:40px; height:40px; background:var(--primary-mid); color:var(--accent);">RA</div>
                        <div>
                            <div class="text-white fw-bold" style="font-size:0.85rem;">Rini Astuti</div>
                            <div style="font-size:0.75rem; color:rgba(255,255,255,0.4);">HR Manager · PT Sinar Maju</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bisa dicopy/paste div class="col-md-4" di atas untuk nambah testimoni lain -->
        </div>
    </div>
  </section>

  <!-- ── BOOKING CTA ────────────────────────── -->
  <section id="booking-cta" class="pad-section">
    <div class="cta-box reveal">
      <span style="font-size:0.75rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:var(--accent); display:block; margin-bottom:1rem;">Siap Mulai?</span>
      <h2 class="cta-title">Ready for Your<br>Outbound Experience?</h2>
      <p style="color:rgba(255,255,255,0.7); margin-bottom:2rem;">Hubungi kami sekarang dan dapatkan penawaran terbaik untuk kegiatan outbound Anda.</p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="form.php" class="btn-custom-primary">Book Now →</a>
        <a href="https://wa.me/6281234567890" target="_blank"
   class="btn-custom-outline d-flex align-items-center gap-2">
   <i class="fab fa-whatsapp"></i> WhatsApp Kami
</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer style="background:var(--primary-dark); padding: 3rem 4rem; color:rgba(255,255,255,0.5); text-align:center;">
    <div class="nav-logo mb-3">Wulu<span style="color:var(--accent);">bung</span> Hill</div>
    <div class="d-flex justify-content-center gap-4 mb-4">
        <a href="#about" class="text-decoration-none" style="color:rgba(255,255,255,0.5);">About</a>
        <a href="#packages" class="text-decoration-none" style="color:rgba(255,255,255,0.5);">Packages</a>
        <a href="form.php" class="text-decoration-none" style="color:rgba(255,255,255,0.5);">Book Now</a>
    </div>
    <div style="font-size:0.85rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem;">© 2026 Wulubung Hill. Kaliurang, Yogyakarta.</div>
  </footer>

  <script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 60);
    });

    // Scroll reveal animation
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); observer.unobserve(e.target); } });
    }, { threshold: 0.12 });
    reveals.forEach(el => observer.observe(el));
  </script>
</body>
</html>