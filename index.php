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
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet" />
  
  <!-- Memanggil File CSS Eksternal -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- ── NAVBAR ─────────────────────────────── -->
  <nav id="navbar" class="custom-nav">
    <a href="#" class="nav-logo">Wulu<span>bung</span></a>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#packages">Packages</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#locations">Locations</a></li>
    </ul>
    <a href="form.php" class="nav-cta">Book Now →</a>
    
    <!-- Hamburger icon untuk versi mobile (bisa dikembangkan pakai JS/Bootstrap Collapse) -->
    <div class="hamburger d-lg-none d-flex flex-column gap-1" style="cursor:pointer;" onclick="document.querySelector('.nav-links').classList.toggle('d-flex');">
      <span style="width:24px; height:2px; background:white;"></span>
      <span style="width:24px; height:2px; background:white;"></span>
      <span style="width:24px; height:2px; background:white;"></span>
    </div>
  </nav>

  <!-- ── HERO ───────────────────────────────── -->
  <section id="hero">
    <div class="hero-bg"></div>
    <div class="hero-shape"></div>
    <div class="hero-content">
      <div class="hero-eyebrow">Kaliurang, Lereng Merapi</div>
      <h1 class="hero-title">
        Be Fun,<br>Be Happy<br><span class="accent">&amp; Be Better</span>
      </h1>
      <p class="hero-sub">Outbound Team Building di Kaliurang untuk Gathering, Company Event, dan Fun Games bersama alam Merapi yang asri.</p>
      <div class="hero-actions">
        <a href="#packages" class="btn-custom-primary">Explore Packages ↓</a>
        <a href="form.php" class="btn-custom-outline">Book Now</a>
      </div>
    </div>
    
    <!-- Hero Stats -->
    <div class="hero-stats d-none d-md-flex">
      <div class="stat">
        <div class="stat-num">500+</div>
        <div class="stat-label">Happy Groups</div>
      </div>
      <div class="stat">
        <div class="stat-num">4</div>
        <div class="stat-label">Lokasi Premium</div>
      </div>
      <div class="stat">
        <div class="stat-num">3</div>
        <div class="stat-label">Paket Pilihan</div>
      </div>
    </div>
  </section>

  <!-- ── ABOUT ──────────────────────────────── -->
  <section id="about" class="pad-section">
    <div class="about-grid">
      <div class="about-visual reveal">
        <div class="w-100 h-100" style="background-color:#e2e8f0; min-height:400px; border-radius:2rem; background-image:url('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=600'); background-size:cover; background-position:center;"></div> 
        <div class="about-badge">Since 2018</div>
        <div class="about-card">
          <div style="font-size: 0.75rem; color: var(--text-light); margin-bottom: 0.3rem;">Peserta puas</div>
          <div class="about-card-val">10.000+</div>
        </div>
      </div>
      <div class="reveal" style="transition-delay:0.15s">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title">Wulubung Hill — Outbound di Jantung Alam Merapi</h2>
        <p style="color:var(--text-mid); margin-bottom:2rem; line-height:1.8;">Wulubung Hill adalah destinasi outbound & team building terpercaya di kawasan Kaliurang, Yogyakarta. Kami menyediakan paket lengkap yang dirancang untuk mempererat tim, membangun karakter, dan menciptakan kenangan tak terlupakan.</p>
        <div class="d-flex flex-column gap-3">
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon">🧭</div>
            <div>
              <strong class="d-block" style="color:var(--primary-mid)">Fasilitator Berpengalaman</strong>
              <span style="font-size:0.85rem; color:var(--text-light)">Tim profesional bersertifikat dengan jam terbang tinggi</span>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon">🏔️</div>
            <div>
              <strong class="d-block" style="color:var(--primary-mid)">Lokasi Alam Merapi</strong>
              <span style="font-size:0.85rem; color:var(--text-light)">Suasana segar, view menakjubkan, jauh dari hiruk pikuk kota</span>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon">🎯</div>
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
  <section id="services" class="pad-section bg-light">
    <div class="text-center mb-5 reveal">
      <div class="section-label text-center d-inline-flex">Layanan Tambahan</div>
      <h2 class="section-title text-center">Other Services</h2>
    </div>
    <div class="container">
        <div class="row g-4">
          <div class="col-md-4">
              <div class="svc-card reveal h-100">
                <span class="fs-1 mb-3 d-block">🎯</span>
                <div class="svc-name">Paint Ball</div>
                <p class="text-muted" style="font-size: 0.85rem;">Pengalaman paintball seru di medan terbuka dengan perlengkapan safety lengkap.</p>
                <span class="svc-badge">Tersedia add-on</span>
              </div>
          </div>
          <div class="col-md-4">
              <div class="svc-card reveal h-100" style="transition-delay:0.1s">
                <span class="fs-1 mb-3 d-block">🚙</span>
                <div class="svc-name">Fun Jeep Tour</div>
                <p class="text-muted" style="font-size: 0.85rem;">Jelajahi lereng Merapi dengan jeep offroad. Rute wisata vulkanik mendebarkan.</p>
                <span class="svc-badge">Tersedia add-on</span>
              </div>
          </div>
          <div class="col-md-4">
              <div class="svc-card reveal h-100" style="transition-delay:0.2s">
                <span class="fs-1 mb-3 d-block">🏍️</span>
                <div class="svc-name">ATV Fun Trip</div>
                <p class="text-muted" style="font-size: 0.85rem;">Naiki ATV menyusuri jalur alam yang menantang. Pengalaman seru untuk semua usia.</p>
                <span class="svc-badge">Book terpisah</span>
              </div>
          </div>
        </div>
    </div>
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
      <p class="text-center mt-4 text-muted" style="font-size: 0.85rem;">
        📸 Ganti warna gradient ini dengan foto asli pakai tag <code>background-image: url('...');</code>
      </p>
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
        <a href="https://wa.me/6281234567890" target="_blank" class="btn-custom-outline d-flex align-items-center gap-2">💬 WhatsApp Kami</a>
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
    <div style="font-size:0.85rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem;">© 2024 Wulubung Hill. Kaliurang, Yogyakarta.</div>
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