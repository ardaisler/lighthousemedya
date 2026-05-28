<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>İletişim – Light House Medya</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,300;0,600;1,300;1,600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --bg:#f9f8f5; --dark:#191917; --muted:#7a7268; --border:#e8e5de; --tag-bg:#f0ede5; }
    body { background:var(--bg); color:var(--dark); font-family:'DM Sans',sans-serif; min-height:100vh; }

    nav { display:flex; justify-content:space-between; align-items:center; padding:20px 60px; background:var(--bg); border-bottom:1px solid var(--border); position:sticky; top:0; z-index:100; }
    .logo-wrap { display:flex; flex-direction:column; }
    .logo-name { font-family:'Spectral',serif; font-size:20px; font-weight:600; color:var(--dark); white-space:nowrap; }
    .logo-tag  { font-size:8px; letter-spacing:2.5px; text-transform:uppercase; color:#9a9588; margin-top:2px; }
    .nav-links { display:flex; gap:36px; align-items:center; }
    .nav-links a { font-size:13px; color:var(--dark); text-decoration:none; transition:opacity .2s; }
    .nav-links a:hover { opacity:.55; }
    .nav-links a.active { border-bottom:1.5px solid var(--dark); padding-bottom:2px; }
    .btn-login { font-size:12px; color:var(--dark); border:1px solid var(--dark); padding:9px 20px; background:none; cursor:pointer; font-family:'DM Sans',sans-serif; font-weight:500; transition:background .2s,color .2s; }
    .btn-login:hover { background:var(--dark); color:var(--bg); }

    .ct-hero { padding:64px 60px 52px; border-bottom:1px solid var(--border); animation:fadeUp .7s ease both; }
    @keyframes fadeUp { from{opacity:0;transform:translateY(20px)} to{opacity:1;transform:translateY(0)} }
    .ct-tag { font-size:10px; letter-spacing:3px; text-transform:uppercase; color:#9a9588; margin-bottom:18px; }
    .ct-h1  { font-family:'Spectral',serif; font-size:clamp(34px,5vw,50px); font-weight:600; line-height:1.1; color:var(--dark); }
    .ct-h1 em { font-style:italic; font-weight:300; color:var(--muted); }
    .ct-sub { font-size:15px; color:var(--muted); margin-top:14px; font-weight:300; max-width:480px; line-height:1.75; }

    .ct-main { display:grid; grid-template-columns:1fr 1fr; border-bottom:1px solid var(--border); }
    .ct-left  { padding:48px 60px; border-right:1px solid var(--border); }
    .ct-right { padding:48px 60px; }
    .section-lbl { font-size:10px; letter-spacing:2.5px; text-transform:uppercase; color:#9a9588; margin-bottom:24px; }

    .info-row { display:flex; align-items:flex-start; gap:16px; padding:18px 0; border-bottom:1px solid var(--border); }
    .info-row:last-of-type { border-bottom:none; padding-bottom:0; }
    .info-row:first-of-type { padding-top:0; }
    .info-icon { width:40px; height:40px; border-radius:50%; background:var(--tag-bg); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:var(--dark); }
    .info-label { font-size:10px; letter-spacing:1.5px; text-transform:uppercase; color:#9a9588; margin-bottom:4px; }
    .info-val   { font-size:14px; color:var(--dark); line-height:1.6; }
    .info-val a { color:var(--dark); text-decoration:none; }
    .info-val a:hover { text-decoration:underline; }
    .info-note  { font-size:12px; color:#9a9588; margin-top:3px; font-weight:300; }

    .hours-grid { display:grid; grid-template-columns:1fr 1fr; gap:6px 16px; margin-top:4px; }
    .hours-row  { display:flex; justify-content:space-between; font-size:13px; }
    .hours-day  { color:var(--muted); }
    .hours-time { color:var(--dark); font-weight:500; }
    .hours-closed { color:#ccc; }

    .wa-btn { margin-top:28px; display:inline-flex; align-items:center; gap:10px; background:#25d366; color:#fff; padding:14px 24px; border-radius:6px; font-size:14px; font-weight:500; text-decoration:none; transition:opacity .2s; }
    .wa-btn:hover { opacity:.88; }
    .wa-icon { font-size:20px; }

    .form-group { margin-bottom:16px; }
    .form-group label { display:block; font-size:11px; letter-spacing:1px; text-transform:uppercase; color:#9a9588; margin-bottom:6px; }
    .form-group input, .form-group select, .form-group textarea {
      width:100%; padding:11px 14px; border:1px solid var(--border); border-radius:6px;
      font-size:14px; font-family:'DM Sans',sans-serif; color:var(--dark); background:#fff; outline:none; transition:border-color .2s;
    }
    .form-group input:focus, .form-group select:focus, .form-group textarea:focus { border-color:var(--dark); }
    .form-group textarea { resize:vertical; min-height:100px; }
    .form-row { display:grid; grid-template-columns:1fr 1fr; gap:14px; }
    .submit-btn { width:100%; background:var(--dark); color:var(--bg); border:none; padding:14px; font-size:12px; letter-spacing:1.5px; text-transform:uppercase; font-family:'DM Sans',sans-serif; font-weight:500; cursor:pointer; border-radius:3px; margin-top:4px; transition:opacity .2s; }
    .submit-btn:hover { opacity:.82; }

    .success-msg { display:none; background:#eaf3de; border:1px solid #c0dd97; color:#3b6d11; padding:14px 18px; border-radius:6px; font-size:14px; margin-top:12px; }

    .map-wrap { border-top:1px solid var(--border); }
    .map-wrap iframe { display:block; width:100%; height:300px; border:none; }
    .map-fallback { height:280px; background:#edeae4; display:flex; flex-direction:column; align-items:center; justify-content:center; gap:10px; }
    .map-fallback svg { opacity:.25; }
    .map-fallback p { font-size:13px; color:var(--muted); }

    footer { border-top:1px solid var(--border); padding:28px 60px; display:flex; justify-content:space-between; align-items:center; }
    .footer-logo { font-family:'Spectral',serif; font-size:15px; font-weight:600; }
    .footer-copy { font-size:12px; color:var(--muted); }

    @media(max-width:900px){
      nav{padding:16px 24px;} .nav-links{gap:18px;}
      .ct-hero{padding:48px 24px 40px;}
      .ct-main{grid-template-columns:1fr;}
      .ct-left{border-right:none;border-bottom:1px solid var(--border);padding:40px 24px;}
      .ct-right{padding:40px 24px;}
      .form-row{grid-template-columns:1fr;}
      footer{flex-direction:column;gap:8px;text-align:center;padding:24px;}
    }
  </style>
</head>
<body>

<?php
$host='localhost'; $dbname='okul_muhasebe'; $user='root'; $pass='';
try{ $pdo=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]); }catch(PDOException $e){ $pdo=null; }
$a=[];
if($pdo){ try{ $s=$pdo->query("SELECT anahtar,deger FROM site_ayarlari"); foreach($s->fetchAll(PDO::FETCH_ASSOC) as $r){ $a[$r['anahtar']]=$r['deger']; } }catch(Exception $e){} }
$a=array_merge([
  'ct_hero_tag'     => 'Bize ulaşın',
  'ct_hero_baslik'  => 'Bir adım uzağınızdayız,<br><em>hemen yazın.</em>',
  'ct_hero_sub'     => 'Sorularınız, fiyat teklifi ya da randevu için aşağıdaki kanallardan bize ulaşabilirsiniz. En kısa sürede dönüş yaparız.',
  'ct_telefon'      => '+90 500 123 45 67',
  'ct_whatsapp'     => '+90 500 123 45 67',
  'ct_eposta'       => 'info@lighthousemedya.com',
  'ct_adres_satir1' => 'Kızılay Mah. Atatürk Bulvarı No:1',
  'ct_adres_satir2' => 'Çankaya / Ankara',
  'ct_calisma_pzt'  => '09:00 – 18:00',
  'ct_calisma_sal'  => '09:00 – 18:00',
  'ct_calisma_car'  => '09:00 – 18:00',
  'ct_calisma_per'  => '09:00 – 18:00',
  'ct_calisma_cum'  => '09:00 – 18:00',
  'ct_calisma_cmt'  => '10:00 – 16:00',
  'ct_calisma_paz'  => 'Kapalı',
  'ct_maps_embed'   => '',
  'site_logo'       => '','footer_yazi'     => '© 2025 Light House Medya. Tüm hakları saklıdır.',
],$a);

// Form işleme
$formSent = false;
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['gonder'])){
    // Buraya mail gönderimi eklenebilir
    $formSent = true;
}

$gunler = [
  'Pazartesi' => $a['ct_calisma_pzt'],
  'Salı'      => $a['ct_calisma_sal'],
  'Çarşamba'  => $a['ct_calisma_car'],
  'Perşembe'  => $a['ct_calisma_per'],
  'Cuma'      => $a['ct_calisma_cum'],
  'Cumartesi' => $a['ct_calisma_cmt'],
  'Pazar'     => $a['ct_calisma_paz'],
];

$waNum = preg_replace('/[^0-9]/','',$a['ct_whatsapp']);
?>

<nav>
  <div class="logo-wrap" style="flex-direction:row;align-items:center;gap:10px">
    <?php if(!empty($a['site_logo'])): ?>
    <img src="<?= 'http://127.0.0.1:8000/storage/' . htmlspecialchars($a['site_logo'] ?? '') ?>" alt="Logo" style="height:40px;width:auto;object-fit:contain"/>
    <?php endif; ?>
    <div>
      <span class="logo-name">Light House Medya</span>
      <span class="logo-tag">Profesyonel Fotoğrafçılık</span>
    </div>
  </div>
  <div class="nav-links">
    <a href="index.php">Ana Sayfa</a>
    <a href="hizmetler.php">Hizmetler</a>
    <a href="hakkimizda.php">Hakkımızda</a>
    <a href="iletisim.php" class="active">İletişim</a>
    <button class="btn-login" onclick="window.location.href='http://127.0.0.1:8000'">Giriş Yap</button>
  </div>
</nav>

<div class="ct-hero">
  <div class="ct-tag"><?= htmlspecialchars($a['ct_hero_tag'] ?? '') ?></div>
  <h1 class="ct-h1"><?= $a['ct_hero_baslik'] ?></h1>
  <p class="ct-sub"><?= htmlspecialchars($a['ct_hero_sub'] ?? '') ?></p>
</div>

<div class="ct-main">
  <div class="ct-left">
    <div class="section-lbl">İletişim bilgileri</div>

    <div class="info-row">
      <div class="info-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      </div>
      <div>
        <div class="info-label">Telefon</div>
        <div class="info-val"><a href="tel:<?= preg_replace('/[^0-9+]/','',$a['ct_telefon']) ?>"><?= htmlspecialchars($a['ct_telefon'] ?? '') ?></a></div>
      </div>
    </div>

    <div class="info-row">
      <div class="info-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      </div>
      <div>
        <div class="info-label">E-posta</div>
        <div class="info-val"><a href="mailto:<?= htmlspecialchars($a['ct_eposta'] ?? '') ?>"><?= htmlspecialchars($a['ct_eposta'] ?? '') ?></a></div>
        <div class="info-note">Genellikle 24 saat içinde dönüş yapılır</div>
      </div>
    </div>

    <div class="info-row">
      <div class="info-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
      </div>
      <div>
        <div class="info-label">Adres</div>
        <div class="info-val">
          <?= htmlspecialchars($a['ct_adres_satir1'] ?? '') ?><br>
          <?= htmlspecialchars($a['ct_adres_satir2'] ?? '') ?>
        </div>
      </div>
    </div>

    <div class="info-row">
      <div class="info-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <div style="width:100%">
        <div class="info-label">Çalışma Saatleri</div>
        <div class="hours-grid">
          <?php foreach($gunler as $gun => $saat): ?>
          <div class="hours-row">
            <span class="hours-day"><?= $gun ?></span>
            <span class="<?= strtolower($saat)==='kapalı' ? 'hours-closed' : 'hours-time' ?>"><?= htmlspecialchars($saat) ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;flex-wrap:wrap">
      <a href="https://wa.me/<?= $waNum ?>" target="_blank" class="wa-btn" style="margin-top:0">
        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
        WhatsApp'tan Mesaj Gönder
      </a>
      <a href="https://www.instagram.com/lighthousefotograf/" target="_blank"
         style="display:inline-flex;align-items:center;gap:9px;padding:14px 22px;border-radius:6px;font-size:14px;font-weight:500;text-decoration:none;background:linear-gradient(135deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);color:#fff;transition:opacity .2s"
         onmouseover="this.style.opacity='0.88'" onmouseout="this.style.opacity='1'">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
        </svg>
        Instagram'da Takip Et
      </a>
    </div>
  </div>

  <div class="ct-right">
    <div class="section-lbl">Mesaj gönderin</div>

    <?php if($formSent): ?>
    <div class="success-msg" style="display:block">Mesajınız alındı! En kısa sürede size dönüş yapacağız.</div>
    <?php else: ?>
    <form method="POST" action="iletisim.php">
      <div class="form-row">
        <div class="form-group">
          <label>Ad</label>
          <input type="text" name="ad" placeholder="Adınız" required />
        </div>
        <div class="form-group">
          <label>Soyad</label>
          <input type="text" name="soyad" placeholder="Soyadınız" required />
        </div>
      </div>
      <div class="form-group">
        <label>Telefon</label>
        <input type="tel" name="telefon" placeholder="0 5XX XXX XX XX" />
      </div>
      <div class="form-group">
        <label>Konu</label>
        <select name="konu">
          <option>Okul çekimi hakkında bilgi</option>
          <option>Düğün / nişan çekimi</option>
          <option>Dış mekan çekimi</option>
          <option>Video kaydı</option>
          <option>Fiyat teklifi</option>
          <option>Diğer</option>
        </select>
      </div>
      <div class="form-group">
        <label>Mesajınız</label>
        <textarea name="mesaj" placeholder="Merhaba, çekim hakkında bilgi almak istiyorum..." required></textarea>
      </div>
      <button type="submit" name="gonder" class="submit-btn">Mesajı Gönder</button>
    </form>
    <?php endif; ?>
  </div>
</div>

<div class="map-wrap" style="border-top:1px solid var(--border);padding:40px 60px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:20px;">
  <div style="display:flex;align-items:center;gap:16px;">
    <div style="width:48px;height:48px;border-radius:50%;background:var(--tag-bg);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--dark)" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
    </div>
    <div>
      <div style="font-size:11px;letter-spacing:1.5px;text-transform:uppercase;color:#9a9588;margin-bottom:4px;">Konumumuz</div>
      <div style="font-size:14px;color:var(--dark);font-weight:400;"><?= htmlspecialchars($a['ct_adres_satir1'] ?? '') ?></div>
      <div style="font-size:13px;color:var(--muted);margin-top:2px;"><?= htmlspecialchars($a['ct_adres_satir2'] ?? '') ?></div>
    </div>
  </div>
  <a href="https://maps.google.com/?q=<?= urlencode($a['ct_adres_satir1'].', '.$a['ct_adres_satir2']) ?>" target="_blank"
     style="display:inline-flex;align-items:center;gap:8px;padding:13px 24px;border:1px solid var(--border);border-radius:6px;font-size:13px;font-weight:500;color:var(--dark);text-decoration:none;transition:background .2s;"
     onmouseover="this.style.background='var(--tag-bg)'" onmouseout="this.style.background='transparent'">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
    Google Maps'ta Aç
  </a>
</div>

<footer>
  <span class="footer-logo">Light House Medya</span>
  <a href="https://www.instagram.com/lighthousefotograf/" target="_blank"
     style="display:flex;align-items:center;gap:7px;font-size:13px;color:#7a7268;text-decoration:none;transition:color .2s"
     onmouseover="this.style.color='#191917'" onmouseout="this.style.color='#7a7268'">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
    </svg>
    @lighthousefotograf
  </a>
  <span class="footer-copy"><?= htmlspecialchars($a['footer_yazi'] ?? '') ?></span>
</footer>

</body>
</html>
