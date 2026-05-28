<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hakkımızda – Light House Medya</title>
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

    .about-hero { display:grid; grid-template-columns:1fr 1fr; border-bottom:1px solid var(--border); animation:fadeUp .7s ease both; }
    @keyframes fadeUp { from{opacity:0;transform:translateY(20px)} to{opacity:1;transform:translateY(0)} }
    .ah-left { padding:64px 60px; border-right:1px solid var(--border); }
    .ah-tag  { font-size:10px; letter-spacing:3px; text-transform:uppercase; color:#9a9588; margin-bottom:18px; }
    .ah-h1   { font-family:'Spectral',serif; font-size:clamp(34px,5vw,50px); line-height:1.1; font-weight:600; color:var(--dark); }
    .ah-h1 em { font-style:italic; font-weight:300; color:var(--muted); }
    .ah-right { padding:64px 60px; display:flex; flex-direction:column; justify-content:center; }
    .ah-lead  { font-size:16px; color:#4a4846; line-height:1.85; font-weight:300; }

    .story { display:grid; grid-template-columns:1fr 1fr; border-bottom:1px solid var(--border); }
    .story-col { padding:52px 60px; }
    .story-col:first-child { border-right:1px solid var(--border); }
    .section-lbl { font-size:10px; letter-spacing:2.5px; text-transform:uppercase; color:#9a9588; margin-bottom:20px; }
    .story-h2 { font-family:'Spectral',serif; font-size:28px; font-weight:600; color:var(--dark); margin-bottom:18px; line-height:1.2; }
    .story-p  { font-size:14px; color:var(--muted); line-height:1.85; font-weight:300; margin-bottom:16px; }
    .story-p:last-child { margin-bottom:0; }

    .values { display:grid; grid-template-columns:repeat(3,1fr); border-bottom:1px solid var(--border); }
    .val-item { padding:36px; border-right:1px solid var(--border); }
    .val-item:last-child { border-right:none; }
    .val-icon  { width:44px; height:44px; border-radius:50%; display:flex; align-items:center; justify-content:center; margin-bottom:16px; }
    .vi1 { background:#eaf3de; color:#3b6d11; }
    .vi2 { background:#e8eef0; color:#185fa5; }
    .vi3 { background:#f0e8f5; color:#72243e; }
    .val-title { font-size:15px; font-weight:500; color:var(--dark); margin-bottom:10px; }
    .val-desc  { font-size:13px; color:#9a9588; line-height:1.75; font-weight:300; }

    .about-cta { padding:44px 60px; background:var(--dark); display:flex; justify-content:space-between; align-items:center; }
    .ac-text { font-family:'Spectral',serif; font-size:24px; color:var(--bg); font-weight:600; }
    .ac-sub  { font-size:13px; color:rgba(249,248,245,.45); margin-top:5px; font-weight:300; }
    .ac-btn  { background:var(--bg); color:var(--dark); font-size:11px; letter-spacing:1.5px; text-transform:uppercase; padding:15px 30px; border:none; font-family:'DM Sans',sans-serif; font-weight:500; cursor:pointer; }
    .ac-btn:hover { opacity:.85; }

    footer { border-top:1px solid var(--border); padding:28px 60px; display:flex; justify-content:space-between; align-items:center; }
    .footer-logo { font-family:'Spectral',serif; font-size:15px; font-weight:600; }
    .footer-copy { font-size:12px; color:var(--muted); }

    @media(max-width:900px){
      nav{padding:16px 24px;} .nav-links{gap:18px;}
      .about-hero,.story{grid-template-columns:1fr;}
      .ah-left,.story-col:first-child{border-right:none;border-bottom:1px solid var(--border);}
      .ah-left,.ah-right,.story-col{padding:40px 24px;}
      .values{grid-template-columns:1fr;}
      .val-item{border-right:none;border-bottom:1px solid var(--border);}
      .val-item:last-child{border-bottom:none;}
      .about-cta{flex-direction:column;gap:20px;padding:36px 24px;text-align:center;}
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
  'hk_hero_tag'    => 'Biz kimiz',
  'hk_hero_baslik' => 'Işığı takip eden<br>bir <em>hikaye anlatıcısı.</em>',
  'hk_hero_lead'   => 'Okulların koridorlarından düğün törenlerine, açık havanın özgürlüğünden çiftlerin en samimi anlarına — her karede aynı tutkuyu taşıyoruz: o anı gerçekten hissettirecek şekilde ölümsüzleştirmek.',
  'hk_hikaye_lbl'  => 'Hikayemiz',
  'hk_hikaye_h2'   => 'Fotoğraf bir an değil, bir hatıradır.',
  'hk_hikaye_p1'   => 'Yıllarca farklı okullarda, törenlerde ve özel günlerde binlerce kareye imza attık. Her çekimde öğrendik ki en iyi fotoğraf, insanların kendini unuttuğu o serbest anda çekilendir.',
  'hk_hikaye_p2'   => 'Light House Medya olarak okullarımızdaki çocukların büyüme hikayelerini, çiftlerin mutluluk anlarını ve dış mekânın eşsiz ışığını tek bir çatı altında bir araya getiriyoruz.',
  'hk_calisma_lbl' => 'Nasıl çalışıyoruz',
  'hk_calisma_h2'  => 'Hazırlıktan teslimat sürecine kadar.',
  'hk_calisma_p1'  => 'Her çekim öncesinde lokasyonu, ışığı ve programı titizlikle planlıyoruz. Çekim günü yanınızda olurken sizi rahatlatmayı, sizi siz yapan o anlara odaklanmayı tercih ediyoruz.',
  'hk_calisma_p2'  => 'Çekim sonrasında editör gözüyle seçilen en iyi kareler özenle düzenlenir ve belirlenen sürede teslim edilir.',
  'hk_d1_baslik'   => 'Gerçek anlar',
  'hk_d1_aciklama' => 'Sahte pozlar değil, o günün gerçek havasını yansıtan doğal kareler. Her fotoğraf bir duyguyu taşır.',
  'hk_d2_baslik'   => 'Zamanında teslimat',
  'hk_d2_aciklama' => 'Söz verilen teslim tarihine uyum bizim için olmazsa olmazdır. Bekletmeyiz.',
  'hk_d3_baslik'   => 'Kalite önce gelir',
  'hk_d3_aciklama' => 'Profesyonel ekipman, titiz seçim ve özenli düzenlemeyle her kare en iyi halini alır.',
  'hk_cta_baslik'  => 'Birlikte çalışalım mı?',
  'hk_cta_alt'     => 'Randevu sistemi ile hemen başlayın.',
  'footer_yazi'    => '© 2025 Light House Medya. Tüm hakları saklıdır.',
],$a);
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
    <a href="hakkimizda.php" class="active">Hakkımızda</a>
    <a href="iletisim.php">İletişim</a>
    <button class="btn-login" onclick="window.location.href='http://127.0.0.1:8000'">Giriş Yap</button>
  </div>
</nav>

<div class="about-hero">
  <div class="ah-left">
    <div class="ah-tag"><?= htmlspecialchars($a['hk_hero_tag'] ?? '') ?></div>
    <h1 class="ah-h1"><?= $a['hk_hero_baslik'] ?></h1>
  </div>
  <div class="ah-right">
    <p class="ah-lead"><?= htmlspecialchars($a['hk_hero_lead'] ?? '') ?></p>
  </div>
</div>

<div class="story">
  <div class="story-col">
    <div class="section-lbl"><?= htmlspecialchars($a['hk_hikaye_lbl'] ?? '') ?></div>
    <div class="story-h2"><?= htmlspecialchars($a['hk_hikaye_h2'] ?? '') ?></div>
    <p class="story-p"><?= htmlspecialchars($a['hk_hikaye_p1'] ?? '') ?></p>
    <p class="story-p"><?= htmlspecialchars($a['hk_hikaye_p2'] ?? '') ?></p>
  </div>
  <div class="story-col">
    <div class="section-lbl"><?= htmlspecialchars($a['hk_calisma_lbl'] ?? '') ?></div>
    <div class="story-h2"><?= htmlspecialchars($a['hk_calisma_h2'] ?? '') ?></div>
    <p class="story-p"><?= htmlspecialchars($a['hk_calisma_p1'] ?? '') ?></p>
    <p class="story-p"><?= htmlspecialchars($a['hk_calisma_p2'] ?? '') ?></p>
  </div>
</div>

<div class="values">
  <div class="val-item">
    <div class="val-icon vi1">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
    </div>
    <div class="val-title"><?= htmlspecialchars($a['hk_d1_baslik'] ?? '') ?></div>
    <p class="val-desc"><?= htmlspecialchars($a['hk_d1_aciklama'] ?? '') ?></p>
  </div>
  <div class="val-item">
    <div class="val-icon vi2">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
    </div>
    <div class="val-title"><?= htmlspecialchars($a['hk_d2_baslik'] ?? '') ?></div>
    <p class="val-desc"><?= htmlspecialchars($a['hk_d2_aciklama'] ?? '') ?></p>
  </div>
  <div class="val-item">
    <div class="val-icon vi3">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
    </div>
    <div class="val-title"><?= htmlspecialchars($a['hk_d3_baslik'] ?? '') ?></div>
    <p class="val-desc"><?= htmlspecialchars($a['hk_d3_aciklama'] ?? '') ?></p>
  </div>
</div>

<div class="about-cta">
  <div>
    <div class="ac-text"><?= htmlspecialchars($a['hk_cta_baslik'] ?? '') ?></div>
    <div class="ac-sub"><?= htmlspecialchars($a['hk_cta_alt'] ?? '') ?></div>
  </div>
  <button class="ac-btn" onclick="window.location.href='iletisim.php'">İletişime Geç →</button>
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
