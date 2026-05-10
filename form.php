<?php
$pilih_paket = isset($_GET['paket']) ? $_GET['paket'] : (isset($_GET['pkg']) ? $_GET['pkg'] : '');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Now — Wulubung Hill Outbound</title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet" />
  
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>

  <!-- ── NAVBAR ─────────────────────────────── -->
  <nav class="form-nav">
    <a href="index.php" class="nav-back">← Kembali ke Home</a>
  </nav>

  <!-- ── HERO (Header Form) ─────────────────── -->
  <div class="form-hero">
    <div class="form-hero-inner">
      
      <h1 class="form-title">Booking Outbound<br>Wulubung Hill</h1>
      <p class="form-subtitle">Isi form di bawah dan tim kami akan menghubungi Anda dalam 1×24 jam.</p>
      
      <div class="steps">
        <div class="step active"><div class="step-dot">1</div><span class="step-label">Isi Form</span></div>
        <div class="step-line"></div>
        <div class="step"><div class="step-dot">2</div><span class="step-label">Konfirmasi</span></div>
        <div class="step-line"></div>
        <div class="step"><div class="step-dot">3</div><span class="step-label">Siap Outbound!</span></div>
      </div>
    </div>
  </div>

  <div class="form-wrap">

    <div class="summary-bar">
      <div>
        <div class="summary-label">Paket dipilih</div>
        <div class="summary-pkg" id="summaryPkg">— Belum dipilih —</div>
      </div>
      <div style="text-align:right">
        <div class="summary-price" id="summaryPrice">Rp –</div>
        <div class="summary-note">estimasi / pax</div>
      </div>
    </div>

    <form method="POST" action="proses_booking.php" id="bookingForm">

      <!-- ── DATA PEMOHON ─── -->
      <div class="form-card">
        <div class="form-section-title"> Data Pemohon</div>

        <div class="field-row">
          <div class="field">
            <label class="lbl" for="nama">Nama Lengkap <span class="req">*</span></label>
            <input type="text" id="nama" name="nama" placeholder="Nama PIC kegiatan" required />
          </div>
          <div class="field">
            <label class="lbl" for="instansi">Instansi / Perusahaan</label>
            <input type="text" id="instansi" name="instansi" placeholder="Kosongkan jika personal" />
          </div>
        </div>

        <div class="field-row">
          <div class="field">
            <label class="lbl" for="whatsapp">Nomor WhatsApp <span class="req">*</span></label>
            <input type="tel" id="whatsapp" name="whatsapp" placeholder="08xx xxxx xxxx" required />
          </div>
          <div class="field">
            <label class="lbl" for="peserta">Jumlah Peserta <span class="req">*</span></label>
            <input type="number" id="peserta" name="jumlah_peserta" min="10" placeholder="Min. 10 orang" required />
          </div>
        </div>

        <div class="field">
          <label class="lbl" for="tanggal">Tanggal Event <span class="req">*</span></label>
          <input type="date" id="tanggal" name="tanggal_event" required />
        </div>
      </div>

      <!-- ── PILIH PAKET ─── -->
      <div class="form-card">
        <div class="form-section-title"> Pilih Paket</div>
        <div class="pkg-options">
          
          <input type="radio" class="pkg-radio" id="pkg_BeFun" name="paket" value="BeFun" data-price="50000" data-label="Paket BeFun" <?= (strtolower($pilih_paket) == 'befun') ? 'checked' : ''; ?> required />
          <label class="pkg-label" for="pkg_BeFun">
            <div class="pkg-dot"></div>
            <div>
              <div class="pkg-info-name">Paket BeFun</div>
              <div class="pkg-info-sub">Durasi 2 Jam</div>
            </div>
            <div class="pkg-price-tag">Rp50.000/pax</div>
          </label>

          <input type="radio" class="pkg-radio" id="pkg_BeHappy" name="paket" value="BeHappy" data-price="85000" data-label="Paket BeHappy" <?= (strtolower($pilih_paket) == 'behappy') ? 'checked' : ''; ?> required />
          <label class="pkg-label" for="pkg_BeHappy">
            <div class="pkg-dot"></div>
            <div>
              <div class="pkg-info-name">Paket BeHappy Populer</div>
              <div class="pkg-info-sub">Durasi 3 Jam</div>
            </div>
            <div class="pkg-price-tag">Rp85.000/pax</div>
          </label>

          <input type="radio" class="pkg-radio" id="pkg_BeBetter" name="paket" value="BeBetter" data-price="185000" data-label="Paket BeBetter" <?= (strtolower($pilih_paket) == 'bebetter') ? 'checked' : ''; ?> required />
          <label class="pkg-label" for="pkg_BeBetter">
            <div class="pkg-dot"></div>
            <div>
              <div class="pkg-info-name">Paket BeBetter</div>
              <div class="pkg-info-sub">Durasi 4 - 5 Jam</div>
            </div>
            <div class="pkg-price-tag">Rp185.000/pax</div>
          </label>

        </div>
      </div>

      <!-- ── ADD-ONS ─── -->
      <div class="form-card">
        <div class="form-section-title"> Additional Packages <small style="font-size:0.7rem;font-weight:400;color:var(--text-light)">(Opsional)</small></div>
        <div class="addon-options">
            <!-- Checkbox UI untuk tampilan -->
            <input type="checkbox" class="addon-chk ui-addon" id="addon_paintball" value="Paint Ball" />
            <label class="addon-label" for="addon_paintball"><div class="chk-box"></div> Paint Ball</label>

            <input type="checkbox" class="addon-chk ui-addon" id="addon_jeep" value="Fun Jeep Tour" />
            <label class="addon-label" for="addon_jeep"><div class="chk-box"></div> Fun Jeep Tour</label>

            <input type="checkbox" class="addon-chk ui-addon" id="addon_atv" value="ATV Fun Trip" />
            <label class="addon-label" for="addon_atv"><div class="chk-box"></div> ATV Fun Trip</label>

            <input type="checkbox" class="addon-chk ui-addon" id="addon_dokumentasi" value="Dokumentasi" />
            <label class="addon-label" for="addon_dokumentasi"><div class="chk-box"></div> Dokumentasi (Foto/Video)</label>

            <input type="checkbox" class="addon-chk ui-addon" id="addon_coffee" value="Coffee Break" />
            <label class="addon-label" for="addon_coffee"><div class="chk-box"></div> Coffee Break</label>

            <input type="checkbox" class="addon-chk ui-addon" id="addon_lunch" value="Lunch Package" />
            <label class="addon-label" for="addon_lunch"><div class="chk-box"></div> Lunch Package</label>
            
            <input type="hidden" name="addons" id="hidden_addons" value="">
        </div>
      </div>

      <!-- ── CATATAN ─── -->
      <div class="form-card">
        <div class="form-section-title"> Catatan Tambahan</div>
        <div class="field">
          <label class="lbl" for="notes">Kebutuhan Khusus / Tema / Request</label>
          <textarea id="notes" name="notes" placeholder="Misalnya: tema tertentu, kebutuhan khusus, pertanyaan, dsb."></textarea>
        </div>
      </div>

      <button type="submit" class="form-submit">Kirim Booking Request →</button>
      <p class="form-note">
        Dengan submit, Anda menyetujui <a href="#">syarat &amp; ketentuan</a> kami.
        Kami akan menghubungi Anda via WhatsApp dalam 1×24 jam.
      </p>
    </form>
  </div>

  <!-- ── JAVASCRIPT LOGIC ───────────────────── -->
  <script>
    // 1. Script Update Summary Harga & Paket
    function fmt(n) { return 'Rp' + parseInt(n).toLocaleString('id-ID'); }
    
    function updateSummary() {
      const radio = document.querySelector('.pkg-radio:checked');
      if (radio) {
        document.getElementById('summaryPkg').textContent = radio.getAttribute('data-label');
        document.getElementById('summaryPrice').textContent = fmt(radio.getAttribute('data-price'));
      }
    }
    
    // Pasang listener di semua radio button paket
    document.querySelectorAll('.pkg-radio').forEach(r => r.addEventListener('change', updateSummary));
    updateSummary(); // Jalankan saat pertama kali load kalau form otomatis pre-fill dari URL

    // 2. Script Gabungin Checkbox Addons ke Input Hidden
    const addonCheckboxes = document.querySelectorAll('.ui-addon');
    const hiddenAddons = document.getElementById('hidden_addons');

    function updateHiddenAddons() {
        let selectedAddons = [];
        addonCheckboxes.forEach(chk => {
            if (chk.checked) {
                selectedAddons.push(chk.value);
            }
        });
        // Gabungkan array menjadi string dipisah koma
        hiddenAddons.value = selectedAddons.join(', ');
    }

    // Pasang listener di semua checkbox Addons
    addonCheckboxes.forEach(chk => chk.addEventListener('change', updateHiddenAddons));
  </script>

</body>
</html>