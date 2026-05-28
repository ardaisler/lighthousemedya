<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hizmetler – Light House Medya</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,300;0,600;1,300;1,600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --bg: #f9f8f5; --dark: #191917; --muted: #7a7268;
      --border: #e8e5de; --tag-bg: #f0ede5;
    }
    body { background: var(--bg); color: var(--dark); font-family: 'DM Sans', sans-serif; min-height: 100vh; }
    html { scroll-behavior: smooth; }

    nav {
      display: flex; justify-content: space-between; align-items: center;
      padding: 20px 60px; background: var(--bg);
      border-bottom: 1px solid var(--border); position: sticky; top: 0; z-index: 100;
    }
    .logo-wrap { display: flex; flex-direction: column; }
    .logo-name { font-family: 'Spectral', serif; font-size: 20px; font-weight: 600; color: var(--dark); white-space: nowrap; }
    .logo-tag  { font-size: 8px; letter-spacing: 2.5px; text-transform: uppercase; color: #9a9588; margin-top: 2px; }
    .nav-links { display: flex; gap: 36px; align-items: center; }
    .nav-links a { font-size: 13px; color: var(--dark); text-decoration: none; transition: opacity .2s; }
    .nav-links a:hover { opacity: .55; }
    .nav-links a.active { border-bottom: 1.5px solid var(--dark); padding-bottom: 2px; }
    .btn-login { font-size: 12px; color: var(--dark); border: 1px solid var(--dark); padding: 9px 20px; background: none; cursor: pointer; font-family: 'DM Sans', sans-serif; font-weight: 500; transition: background .2s, color .2s; }
    .btn-login:hover { background: var(--dark); color: var(--bg); }

    .hero-svc { padding: 64px 60px 52px; border-bottom: 1px solid var(--border); animation: fadeUp .7s ease both; }
    @keyframes fadeUp { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }
    .hero-tag { font-size: 10px; letter-spacing: 3px; text-transform: uppercase; color: #9a9588; margin-bottom: 18px; }
    .hero-h1 { font-family: 'Spectral', serif; font-size: clamp(36px, 5vw, 52px); font-weight: 600; line-height: 1.1; color: var(--dark); max-width: 560px; }
    .hero-h1 em { font-style: italic; font-weight: 300; color: var(--muted); }

    .svc-grid { display: grid; grid-template-columns: repeat(3, 1fr); }
    .svc-card { padding: 40px 36px; border-right: 1px solid var(--border); border-bottom: 1px solid var(--border); transition: background .2s; }
    .svc-card:hover { background: var(--tag-bg); }
    .svc-card:nth-child(3n) { border-right: none; }
    .svc-card:nth-last-child(-n+3) { border-bottom: none; }
    .svc-num { font-family: 'Spectral', serif; font-size: 36px; color: #e0dbd0; margin-bottom: 20px; line-height: 1; }
    .svc-icon { width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; font-size: 20px; }
    .ic1 { background: #eaf3de; color: #3b6d11; }
    .ic2 { background: #faeeda; color: #633806; }
    .ic3 { background: #f0e8f5; color: #72243e; }
    .ic4 { background: #e8eef0; color: #185fa5; }
    .ic5 { background: #e1f5ee; color: #085041; }
    .ic6 { background: #f1efe8; color: #444441; }
    .svc-title { font-family: 'Spectral', serif; font-size: 21px; font-weight: 600; color: var(--dark); margin-bottom: 12px; }
    .svc-desc { font-size: 14px; color: var(--muted); line-height: 1.8; font-weight: 300; }

    .cta-strip { padding: 44px 60px; background: var(--dark); display: flex; justify-content: space-between; align-items: center; }
    .cta-text { font-family: 'Spectral', serif; font-size: 24px; color: var(--bg); font-weight: 600; }
    .cta-sub { font-size: 13px; color: rgba(249,248,245,.45); margin-top: 5px; font-weight: 300; }
    .cta-btn { background: var(--bg); color: var(--dark); font-size: 11px; letter-spacing: 1.5px; text-transform: uppercase; padding: 15px 30px; border: none; font-family: 'DM Sans', sans-serif; font-weight: 500; cursor: pointer; transition: opacity .2s; }
    .cta-btn:hover { opacity: .8; }

    footer { border-top: 1px solid var(--border); padding: 28px 60px; display: flex; justify-content: space-between; align-items: center; }
    .footer-logo { font-family: 'Spectral', serif; font-size: 15px; font-weight: 600; color: var(--dark); }
    .footer-copy { font-size: 12px; color: var(--muted); }

    @media (max-width: 900px) {
      nav { padding: 16px 24px; } .nav-links { gap: 18px; }
      .hero-svc { padding: 48px 24px 40px; }
      .svc-grid { grid-template-columns: 1fr; }
      .svc-card { border-right: none !important; border-bottom: 1px solid var(--border) !important; }
      .svc-card:last-child { border-bottom: none !important; }
      .cta-strip { flex-direction: column; gap: 20px; padding: 36px 24px; text-align: center; }
      footer { flex-direction: column; gap: 8px; text-align: center; padding: 24px; }
    }
  </style>
</head>
<body>

<?php
$host='localhost'; $dbname='okul_muhasebe'; $user='root'; $pass='';
try { $pdo=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]); } catch(PDOException $e){ $pdo=null; }
$a=[];
if($pdo){ try{ $s=$pdo->query("SELECT anahtar,deger FROM site_ayarlari"); foreach($s->fetchAll(PDO::FETCH_ASSOC) as $r){ $a[$r['anahtar']]=$r['deger']; } }catch(Exception $e){} }
$a=array_merge([
  'hzm_hero_tag'    => 'Neler yapıyoruz',
  'hzm_hero_baslik' => 'Her anı <em>profesyonel</em><br>bir gözle yakalamanın tam yeri.',
  'hzm_s1_baslik'   => 'Okul Fotoğraf Çekimi',
  'hzm_s1_aciklama' => 'Anaokulu, ilkokul, ortaokul ve lise kademelerinde tüm öğrenciler için bireysel ve sınıf çekimleri. Karne fotoğrafları, mezuniyet törenleri ve okul etkinlikleri kapsamlı şekilde belgelenir.',
  'hzm_s2_baslik'   => 'Okul Video Kaydı',
  'hzm_s2_aciklama' => 'Mezuniyet törenleri, gösteri ve etkinlikler profesyonel ekipmanla video kaydına alınır. Her anınız yıllarca saklayabileceğiniz kaliteli bir hatıraya dönüşür.',
  'hzm_s3_baslik'   => 'Düğün & Nişan Çekimi',
  'hzm_s3_aciklama' => 'Söz, nişan, kına ve düğün törenlerinde hem fotoğraf hem de video hizmeti. O güzel günün her detayı, doğal ve samimi karelerle sonsuza taşınır.',
  'hzm_s4_baslik'   => 'Dış Mekan Çekimi',
  'hzm_s4_aciklama' => 'Evlenecek çiftler için nişan öncesi dış çekim, aile portreleri, bireysel portre. Doğal ışık ve özgün lokasyonlarda kişiye özel bir çekim deneyimi sunulur.',
  'hzm_s5_baslik'   => 'Düğün Video Kaydı',
  'hzm_s5_aciklama' => 'Nikah, düğün salonu ve tüm tören anları sinematik bir dille kayıt altına alınır. Kurgu ve müzik eşliğinde size özel bir film hazırlanır.',
  'hzm_s6_baslik'   => 'Online Randevu',
  'hzm_s6_aciklama' => 'Tüm hizmetler için gün ve saat bazlı online randevu sistemi. Uygun tarihinizi seçin, biz hazır olalım.',
  'hzm_cta_baslik'  => 'Randevu almak ister misiniz?',
  'hzm_cta_alt'     => 'Ana sayfamızdan tarih ve saatinizi seçebilirsiniz.',
  'site_logo'       => '','footer_yazi'     => '© 2025 Light House Medya. Tüm hakları saklıdır.',
],$a);
$randevuAktif = ($a['randevu_aktif'] ?? '1') === '1';
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
    <a href="hizmetler.php" class="active">Hizmetler</a>
    <a href="hakkimizda.php">Hakkımızda</a>
    <a href="iletisim.php">İletişim</a>
    <button class="btn-login" onclick="window.location.href='http://127.0.0.1:8000'">Giriş Yap</button>
  </div>
</nav>

<section class="hero-svc">
  <div class="hero-tag"><?= htmlspecialchars($a['hzm_hero_tag'] ?? '') ?></div>
  <h1 class="hero-h1"><?= $a['hzm_hero_baslik'] ?></h1>
</section>

<div class="svc-grid">
  <?php
  $icons = ['ic1','ic2','ic3','ic4','ic5','ic6'];
  $svgs  = [
    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 17 12 3 21 17"/><path d="M3 17h18"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>',
  ];
  for($i=1;$i<=6;$i++):
  ?>
  <div class="svc-card">
    <div class="svc-num">0<?= $i ?></div>
    <div class="svc-icon <?= $icons[$i-1] ?>"><?= $svgs[$i-1] ?></div>
    <div class="svc-title"><?= htmlspecialchars($a['hzm_s'.$i.'_baslik']) ?></div>
    <p class="svc-desc"><?= htmlspecialchars($a['hzm_s'.$i.'_aciklama']) ?></p>
  </div>
  <?php endfor; ?>
</div>

<div class="cta-strip">
  <div>
    <div class="cta-text"><?= htmlspecialchars($a['hzm_cta_baslik'] ?? '') ?></div>
    <div class="cta-sub"><?= htmlspecialchars($a['hzm_cta_alt'] ?? '') ?></div>
  </div>
  <?php if($randevuAktif): ?>
    <button class="cta-btn" onclick="window.location.href='index.php#randevu'">Randevu Al →</button>
  <?php else: ?>
    <button class="cta-btn" style="opacity:.4;cursor:default" disabled>Randevu Sistemi Kapalı</button>
  <?php endif; ?>
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
