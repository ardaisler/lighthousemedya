<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Light House Medya – Profesyonel Fotoğrafçılık</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,300;0,600;1,300;1,600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --bg:#f9f8f5;--dark:#191917;--muted:#7a7268;--border:#e8e5de;
      --border-light:#d4d0c8;--accent-green:#3a7d5e;--tag-bg:#f0ede5;
      --svc-green:#eaf3de;--svc-pink:#f0e8f5;--svc-blue:#e8eef0;
    }
    html{scroll-behavior:smooth}
    body{background:var(--bg);color:var(--dark);font-family:'DM Sans',sans-serif;min-height:100vh}
    nav{display:flex;justify-content:space-between;align-items:center;padding:20px 60px;background:var(--bg);border-bottom:1px solid var(--border);position:sticky;top:0;z-index:100}
    .logo-wrap{display:flex;flex-direction:column}
    .logo-name{font-family:'Spectral',serif;font-size:20px;font-weight:600;color:var(--dark);white-space:nowrap}
    .logo-tag{font-size:8px;letter-spacing:2.5px;text-transform:uppercase;color:#9a9588;margin-top:2px}
    .nav-links{display:flex;gap:36px;align-items:center}
    .nav-links a{font-size:13px;color:var(--dark);text-decoration:none;transition:opacity .2s}
    .nav-links a:hover{opacity:.55}
    .btn-login{font-size:12px;color:var(--dark);border:1px solid var(--dark);padding:9px 20px;background:none;cursor:pointer;font-family:'DM Sans',sans-serif;font-weight:500;transition:background .2s,color .2s}
    .btn-login:hover{background:var(--dark);color:var(--bg)}
    .hero{padding:100px 60px 90px;display:flex;flex-direction:column;align-items:center;text-align:center;animation:fadeUp .7s ease both}
    @keyframes fadeUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
    .hero-badge{display:inline-flex;align-items:center;gap:8px;background:var(--tag-bg);border:1px solid var(--border-light);padding:7px 16px;border-radius:100px;margin-bottom:36px}
    .badge-dot{width:7px;height:7px;background:var(--accent-green);border-radius:50%}
    .badge-dot.kapali{background:#e57373}
    .badge-txt{font-size:12px;color:#5a5750}
    .hero h1{font-family:'Spectral',serif;font-size:clamp(44px,6vw,72px);line-height:1.06;color:var(--dark);margin-bottom:24px;font-weight:600;max-width:680px}
    .hero h1 em{font-style:italic;font-weight:300;color:var(--muted)}
    .hero p{font-size:16px;color:var(--muted);line-height:1.8;max-width:500px;margin-bottom:48px;font-weight:300}
    .hero-img-wrap{width:100%;max-width:700px;margin-bottom:48px;border-radius:12px;overflow:hidden}
    .hero-img-wrap img{width:100%;height:320px;object-fit:cover;display:block}
    .btn-primary{background:var(--dark);color:var(--bg);font-size:12px;letter-spacing:1.5px;text-transform:uppercase;padding:16px 44px;border:none;cursor:pointer;font-family:'DM Sans',sans-serif;font-weight:500;display:inline-flex;align-items:center;gap:10px;border-radius:3px;transition:opacity .2s,transform .15s}
    .btn-primary:hover{opacity:.85;transform:translateY(-1px)}
    .btn-primary svg{width:17px;height:17px;stroke:currentColor;fill:none;stroke-width:1.8}
    .randevu-kapali-banner{background:#fef2f2;border:1px solid #fecaca;color:#c0392b;padding:14px 28px;border-radius:8px;font-size:13px;text-align:center;max-width:480px}
    .services{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid var(--border)}
    .svc-item{padding:32px 40px;border-right:1px solid var(--border)}
    .svc-item:last-child{border-right:none}
    .svc-head{display:flex;align-items:center;gap:12px;margin-bottom:12px}
    .svc-icon{width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0}
    .svc-icon svg{width:16px;height:16px;stroke-width:1.8;fill:none}
    .ico-green{background:var(--svc-green)}.ico-green svg{stroke:#3b6d11}
    .ico-pink{background:var(--svc-pink)}.ico-pink svg{stroke:#72243e}
    .ico-blue{background:var(--svc-blue)}.ico-blue svg{stroke:#185fa5}
    .svc-title{font-size:14px;font-weight:500;color:var(--dark)}
    .svc-desc{font-size:13px;color:#9a9588;line-height:1.65;font-weight:300}
    .modal-overlay{display:none;position:fixed;inset:0;background:rgba(25,25,23,.55);z-index:200;align-items:center;justify-content:center;padding:20px}
    .modal-overlay.open{display:flex}
    .modal{background:var(--bg);border-radius:12px;width:100%;max-width:720px;max-height:90vh;overflow-y:auto;padding:40px 44px;position:relative;animation:modalIn .25s ease both}
    @keyframes modalIn{from{opacity:0;transform:scale(.96) translateY(12px)}to{opacity:1;transform:scale(1) translateY(0)}}
    .modal-close{position:absolute;top:20px;right:24px;background:none;border:none;font-size:22px;cursor:pointer;color:var(--muted)}
    .modal-close:hover{color:var(--dark)}
    .modal h2{font-family:'Spectral',serif;font-size:28px;font-weight:600;color:var(--dark);margin-bottom:6px}
    .modal-sub{font-size:13px;color:var(--muted);margin-bottom:28px;font-weight:300}
    .steps{display:flex;margin-bottom:32px;border-bottom:1px solid var(--border)}
    .step{flex:1;padding:10px 0;font-size:12px;text-align:center;letter-spacing:.5px;border-bottom:2px solid transparent;color:var(--muted)}
    .step.active{color:var(--dark);border-bottom-color:var(--dark);font-weight:500}
    .step.done{color:var(--accent-green);border-bottom-color:var(--accent-green)}
    .step-panel{display:none}.step-panel.active{display:block}
    .svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-bottom:28px}
    .svc-card{border:1.5px solid var(--border);border-radius:8px;padding:20px 16px;cursor:pointer;text-align:center;transition:border-color .2s,background .2s}
    .svc-card:hover{border-color:var(--dark)}.svc-card.selected{border-color:var(--dark);background:#f0ede5}
    .svc-card svg{width:28px;height:28px;stroke:var(--dark);fill:none;stroke-width:1.5;margin-bottom:10px}
    .svc-card-name{font-size:13px;font-weight:500;color:var(--dark)}
    .cal-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:16px}
    .cal-month{font-family:'Spectral',serif;font-size:18px;font-weight:600;color:var(--dark)}
    .cal-nav{background:none;border:1px solid var(--border);width:34px;height:34px;border-radius:50%;cursor:pointer;font-size:14px;color:var(--dark);display:flex;align-items:center;justify-content:center;transition:background .15s}
    .cal-nav:hover{background:var(--border)}
    .cal-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:4px;margin-bottom:24px}
    .cal-day-name{text-align:center;font-size:11px;color:var(--muted);letter-spacing:1px;padding:6px 0;text-transform:uppercase}
    .cal-day{aspect-ratio:1;display:flex;align-items:center;justify-content:center;border-radius:50%;font-size:13px;cursor:pointer;color:var(--dark);transition:background .15s,color .15s;border:1.5px solid transparent}
    .cal-day:hover:not(.empty):not(.past):not(.dolu){background:var(--tag-bg)}
    .cal-day.empty{cursor:default}.cal-day.past{color:#ccc;cursor:default}
    .cal-day.selected{background:var(--dark);color:var(--bg);border-color:var(--dark)}
    .cal-day.today{border-color:var(--accent-green);color:var(--accent-green);font-weight:500}
    .cal-day.today.selected{background:var(--dark);color:var(--bg)}
    .cal-day.dolu{color:#e57373;cursor:not-allowed;text-decoration:line-through}
    .time-label{font-size:13px;color:var(--muted);margin-bottom:12px;font-weight:300}
    .time-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;margin-bottom:28px}
    .time-slot{padding:10px 6px;text-align:center;border:1px solid var(--border);border-radius:6px;font-size:13px;cursor:pointer;color:var(--dark);transition:all .15s}
    .time-slot:hover:not(.unavail){border-color:var(--dark);background:var(--tag-bg)}
    .time-slot.selected{background:var(--dark);color:var(--bg);border-color:var(--dark)}
    .time-slot.unavail{color:#ccc;cursor:default;text-decoration:line-through}
    .form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px}
    .form-group{display:flex;flex-direction:column;gap:6px;margin-bottom:16px}
    .form-group label{font-size:12px;color:var(--muted);letter-spacing:.5px;text-transform:uppercase}
    .form-group input,.form-group textarea{padding:11px 14px;border:1px solid var(--border);border-radius:6px;font-size:14px;font-family:'DM Sans',sans-serif;color:var(--dark);background:#fff;outline:none;transition:border-color .2s}
    .form-group input:focus,.form-group textarea:focus{border-color:var(--dark)}
    .form-group textarea{resize:vertical;min-height:80px}
    .summary-box{background:var(--tag-bg);border:1px solid var(--border);border-radius:8px;padding:20px 24px;margin-bottom:24px}
    .summary-row{display:flex;justify-content:space-between;align-items:center;padding:6px 0;font-size:14px}
    .summary-row:not(:last-child){border-bottom:1px solid var(--border)}
    .summary-label{color:var(--muted);font-weight:300}.summary-value{color:var(--dark);font-weight:500}
    .modal-footer{display:flex;justify-content:space-between;align-items:center;margin-top:8px}
    .btn-back{background:none;border:1px solid var(--border);padding:12px 24px;font-size:13px;cursor:pointer;font-family:'DM Sans',sans-serif;color:var(--muted);border-radius:3px;transition:border-color .2s}
    .btn-back:hover{border-color:var(--dark);color:var(--dark)}
    .btn-next{background:var(--dark);color:var(--bg);border:none;padding:13px 36px;font-size:13px;cursor:pointer;font-family:'DM Sans',sans-serif;font-weight:500;border-radius:3px;transition:opacity .2s}
    .btn-next:hover{opacity:.82}.btn-next:disabled{opacity:.35;cursor:default}
    .loading-overlay{display:none;position:absolute;inset:0;border-radius:12px;background:rgba(249,248,245,.8);z-index:10;align-items:center;justify-content:center}
    .loading-overlay.show{display:flex}
    .spinner{width:32px;height:32px;border:3px solid var(--border);border-top-color:var(--dark);border-radius:50%;animation:spin .7s linear infinite}
    @keyframes spin{to{transform:rotate(360deg)}}
    .error-msg{background:#fef2f2;border:1px solid #fecaca;color:#c0392b;padding:12px 16px;border-radius:6px;font-size:13px;margin-bottom:16px;display:none}
    .error-msg.show{display:block}
    .success-screen{text-align:center;padding:20px 0 10px}
    .success-icon{width:64px;height:64px;background:var(--svc-green);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 24px}
    .success-icon svg{width:30px;height:30px;stroke:#3b6d11;fill:none;stroke-width:2}
    .success-screen h3{font-family:'Spectral',serif;font-size:26px;font-weight:600;margin-bottom:10px}
    .success-screen p{font-size:14px;color:var(--muted);line-height:1.7;max-width:340px;margin:0 auto 28px}
    footer{border-top:1px solid var(--border);padding:32px 60px;display:flex;justify-content:space-between;align-items:center}
    .footer-logo{font-family:'Spectral',serif;font-size:16px;font-weight:600;color:var(--dark)}
    .footer-copy{font-size:12px;color:var(--muted)}
    @media(max-width:768px){
      nav{padding:16px 24px}.nav-links{gap:16px}.hero{padding:64px 24px 56px}
      .services{grid-template-columns:1fr}.svc-item{border-right:none;border-bottom:1px solid var(--border)}
      .svc-item:last-child{border-bottom:none}.modal{padding:28px 20px}
      .svc-grid{grid-template-columns:1fr}.form-row{grid-template-columns:1fr}
      .time-grid{grid-template-columns:repeat(3,1fr)}footer{flex-direction:column;gap:8px;text-align:center}
    }
  </style>
</head>
<body>

<?php
$host='127.0.0.1';$dbname='okul_muhasebe';$user='root';$pass='';
try{$pdo=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);}
catch(PDOException $e){$pdo=null;}
$ayarlar=[];
if($pdo){try{$stmt=$pdo->query("SELECT anahtar,deger FROM site_ayarlari");foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){$ayarlar[$row['anahtar']]=$row['deger'];}}catch(Exception $e){}}
$_defaults=['hero_baslik'=>'Gününüzün en <em>güzel</em> anları.','hero_aciklama'=>'Okul çekimlerinden düğün törenlerine, dış mekânlardaki portre ve etkinlik çekimlerine kadar — her karede profesyonel dokunuş.','hero_rozet'=>'Şu an randevu alınabilir','randevu_aktif'=>'1','svc1_baslik'=>'Okul Çekimleri','svc1_aciklama'=>'Anaokulu, ilk-orta-lise. Toplu sınıf çekimleri, bireysel karne fotoğrafları, mezuniyet törenleri.','svc2_baslik'=>'Düğün & Nişan','svc2_aciklama'=>'Söz, nişan, düğün, kına gecesi — mutlu gününüzün her anı profesyonel gözle ölümsüzleştirilir.','svc3_baslik'=>'Dış Mekan Çekimi','svc3_aciklama'=>'Portre, aile, ticari — doğal ışık ve özgün lokasyonlarda kişiye özel çekim deneyimi.','footer_yazi'=>'© 2025 Light House Medya. Tüm hakları saklıdır.','hero_gorsel'=>'','site_logo'=>'','calisma_baslangic'=>'09:00','calisma_bitis'=>'17:30','randevu_araliği'=>'30'];
$a=array_merge($_defaults,$ayarlar);
foreach($_defaults as $_k=>$_v){if(!isset($a[$_k])||$a[$_k]===''||$a[$_k]===null)$a[$_k]=$_v;}
$randevuAktif=$a['randevu_aktif']==='1';
function saatleriUret($bas,$bit,$aralik){$s=[];$b=(int)explode(':',$bas)[0]*60+(int)explode(':',$bas)[1];$e=(int)explode(':',$bit)[0]*60+(int)explode(':',$bit)[1];for($d=$b;$d<=$e;$d+=$aralik){$s[]=sprintf('%02d:%02d',intdiv($d,60),$d%60);}return $s;}
$_aralik=max(15,(int)($a['randevu_araliği']??30));
$_bas=$a['calisma_baslangic']??'09:00';
$_bit=$a['calisma_bitis']??'17:30';
$tumSaatler=saatleriUret($_bas,$_bit,$_aralik);
?>

  <nav>
    <div class="logo-wrap" style="flex-direction:row;align-items:center;gap:10px">
      <?php if(!empty($a['site_logo'])): ?>
      <img src="<?= 'http://127.0.0.1:8000/storage/' . $a['site_logo'] ?>" alt="Logo" style="height:40px;width:auto;object-fit:contain"/>
      <?php endif; ?>
      <div>
        <span class="logo-name">Light House Medya</span>
        <span class="logo-tag">Profesyonel Fotoğrafçılık</span>
      </div>
    </div>
    <div class="nav-links">
      <a href="hizmetler.php">Hizmetler</a>
      <a href="hakkimizda.php">Hakkımızda</a>
      <a href="iletisim.php">İletişim</a>
      <button class="btn-login" onclick="window.location.href='http://127.0.0.1:8000'">Giriş Yap</button>
    </div>
  </nav>

  <section class="hero">
    <div class="hero-badge">
      <div class="badge-dot <?= $randevuAktif?'':'kapali' ?>"></div>
      <span class="badge-txt"><?= $randevuAktif ? htmlspecialchars($a['hero_rozet'] ?? '') : 'Randevu sistemi şu an kapalı' ?></span>
    </div>
    <h1><?= $a['hero_baslik'] ?></h1>
    <p><?= htmlspecialchars($a['hero_aciklama'] ?? '') ?></p>
    <?php if(!empty($a['hero_gorsel'])): ?>
    <div class="hero-img-wrap">
      <img src="<?= htmlspecialchars('http://127.0.0.1:8000/storage/'.$a['hero_gorsel']) ?>" alt="Light House Medya" />
    </div>
    <?php endif; ?>
    <?php if($randevuAktif): ?>
      <button class="btn-primary" onclick="openModal()">
        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
        Randevu Al
      </button>
    <?php else: ?>
      <div class="randevu-kapali-banner">Randevu sistemi şu an geçici olarak kapalıdır. Lütfen daha sonra tekrar deneyiniz.</div>
    <?php endif; ?>
  </section>

  <section class="services" id="hizmetler">
    <div class="svc-item">
      <div class="svc-head"><div class="svc-icon ico-green"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div><span class="svc-title"><?= htmlspecialchars($a['svc1_baslik'] ?? '') ?></span></div>
      <p class="svc-desc"><?= htmlspecialchars($a['svc1_aciklama'] ?? '') ?></p>
    </div>
    <div class="svc-item">
      <div class="svc-head"><div class="svc-icon ico-pink"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div><span class="svc-title"><?= htmlspecialchars($a['svc2_baslik'] ?? '') ?></span></div>
      <p class="svc-desc"><?= htmlspecialchars($a['svc2_aciklama'] ?? '') ?></p>
    </div>
    <div class="svc-item">
      <div class="svc-head"><div class="svc-icon ico-blue"><svg viewBox="0 0 24 24"><polygon points="3 17 12 3 21 17"/><path d="M3 17h18"/></svg></div><span class="svc-title"><?= htmlspecialchars($a['svc3_baslik'] ?? '') ?></span></div>
      <p class="svc-desc"><?= htmlspecialchars($a['svc3_aciklama'] ?? '') ?></p>
    </div>
  </section>

  <footer id="iletisim">
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

  <div class="modal-overlay" id="modalOverlay" onclick="handleOverlayClick(event)">
    <div class="modal">
      <div class="loading-overlay" id="loadingOverlay"><div class="spinner"></div></div>
      <button class="modal-close" onclick="closeModal()">✕</button>
      <h2>Randevu Al</h2>
      <?php if(!$randevuAktif): ?>
        <div style="text-align:center;padding:48px 24px">
          <div style="width:56px;height:56px;border-radius:50%;background:#fef2f2;border:2px solid #fecaca;display:flex;align-items:center;justify-content:center;margin:0 auto 20px">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e53e3e" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4m0 4h.01"/></svg>
          </div>
          <h3 style="font-family:'Spectral',serif;font-size:22px;color:#191917;margin-bottom:10px">Randevu Sistemi Kapalı</h3>
          <p style="font-size:14px;color:#7a7268;line-height:1.7;max-width:320px;margin:0 auto 24px">Şu anda online randevu alınamamaktadır. Bizimle iletişime geçerek randevu ayarlayabilirsiniz.</p>
          <a href="iletisim.php" style="display:inline-block;background:#191917;color:#f9f8f5;padding:12px 28px;font-size:12px;letter-spacing:1.5px;text-transform:uppercase;font-family:'DM Sans',sans-serif;font-weight:500;text-decoration:none;">İletişime Geç →</a>
        </div>
      <?php else: ?>
      <p class="modal-sub">Hizmet, tarih ve saati seçerek randevunuzu oluşturun.</p>
      <div class="steps">
        <div class="step active" id="step-tab-1">1. Hizmet</div>
        <div class="step" id="step-tab-2">2. Tarih &amp; Saat</div>
        <div class="step" id="step-tab-3">3. Bilgiler</div>
        <div class="step" id="step-tab-4">4. Onay</div>
      </div>
      <div class="step-panel active" id="panel-1">
        <div class="svc-grid">
          <div class="svc-card" onclick="selectService(this,'<?= htmlspecialchars($a['svc1_baslik'] ?? '') ?>')"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><div class="svc-card-name"><?= htmlspecialchars($a['svc1_baslik'] ?? '') ?></div></div>
          <div class="svc-card" onclick="selectService(this,'<?= htmlspecialchars($a['svc2_baslik'] ?? '') ?>')"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg><div class="svc-card-name"><?= htmlspecialchars($a['svc2_baslik'] ?? '') ?></div></div>
          <div class="svc-card" onclick="selectService(this,'<?= htmlspecialchars($a['svc3_baslik'] ?? '') ?>')"><svg viewBox="0 0 24 24"><polygon points="3 17 12 3 21 17"/><path d="M3 17h18"/></svg><div class="svc-card-name"><?= htmlspecialchars($a['svc3_baslik'] ?? '') ?></div></div>
        </div>
        <div class="modal-footer"><span></span><button class="btn-next" id="btn-next-1" onclick="goStep(2)" disabled>Devam Et →</button></div>
      </div>
      <div class="step-panel" id="panel-2">
        <div class="cal-header"><button class="cal-nav" onclick="changeMonth(-1)">‹</button><span class="cal-month" id="cal-month-label"></span><button class="cal-nav" onclick="changeMonth(1)">›</button></div>
        <div class="cal-grid" id="cal-grid"></div>
        <div id="time-section" style="display:none"><p class="time-label" id="time-label-txt"></p><div class="time-grid" id="time-grid"></div></div>
        <div class="modal-footer"><button class="btn-back" onclick="goStep(1)">← Geri</button><button class="btn-next" id="btn-next-2" onclick="goStep(3)" disabled>Devam Et →</button></div>
      </div>
      <div class="step-panel" id="panel-3">
        <div class="form-row"><div class="form-group"><label>Ad</label><input type="text" id="inp-ad" placeholder="Adınız" oninput="validateForm()"/></div><div class="form-group"><label>Soyad</label><input type="text" id="inp-soyad" placeholder="Soyadınız" oninput="validateForm()"/></div></div>
        <div class="form-row"><div class="form-group"><label>Telefon</label><input type="tel" id="inp-tel" placeholder="0 5XX XXX XX XX" oninput="this.value=this.value.replace(/[^0-9\s+\-]/g,'');validateForm()" inputmode="numeric"/><div id="err-tel" style="color:#e53e3e;font-size:11px;margin-top:4px;display:none">Geçerli bir telefon numarası girin (en az 10 rakam)</div></div><div class="form-group"><label>E-posta</label><input type="email" id="inp-mail" placeholder="ornek@mail.com" oninput="validateForm()"/><div id="err-mail" style="color:#e53e3e;font-size:11px;margin-top:4px;display:none">Geçerli bir e-posta adresi girin</div></div></div>
        <div class="form-group">
    <label>Notlar *</label>
    <textarea id="inp-not" placeholder="Özel isteklerinizi yazabilirsiniz..." oninput="validateForm()"></textarea>
</div>
        <div class="modal-footer"><button class="btn-back" onclick="goStep(2)">← Geri</button><button class="btn-next" id="btn-next-3" onclick="goStep(4)" disabled>Özete Git →</button></div>
      </div>
      <div class="step-panel" id="panel-4">
        <div class="error-msg" id="error-msg"></div>
        <div class="summary-box" id="summary-box"></div>
        <div class="modal-footer"><button class="btn-back" onclick="goStep(3)">← Geri</button><button class="btn-next" onclick="confirmBooking()">Randevuyu Onayla ✓</button></div>
      </div>
      <div class="step-panel" id="panel-success">
        <div class="success-screen">
          <div class="success-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <h3>Randevunuz Alındı!</h3>
          <p>Bilgileriniz tarafımıza iletildi. En kısa sürede size ulaşacağız.</p>
          <button class="btn-primary" onclick="closeModal()">Kapat</button>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <script>
    const BACKEND='/lighthousemedya/api';
    const TUM_SAATLER=<?= json_encode($tumSaatler) ?>;
    const state={service:null,date:null,time:null,currentMonth:new Date().getMonth(),currentYear:new Date().getFullYear(),doluSaatler:{}};
    const DAYS=['Pzt','Sal','Çar','Per','Cum','Cmt','Paz'];
    const MONTHS=['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'];
    function setLoading(v){document.getElementById('loadingOverlay').classList.toggle('show',v)}
async function fetchDoluTarihler(){

    if(!state.service){
        state.doluSaatler={};
        return;
    }

    try{
          console.log("Gönderilen hizmet:", state.service);
        const url = BACKEND + "/dolu_tarihler.php?hizmet=" + encodeURIComponent(state.service);

        console.log("URL:", url);

        const r = await fetch(url);

        const d = await r.json();

        console.log("Seçilen hizmet:", state.service);
        console.log("API cevabı:", d);

        if(d.success){
            state.doluSaatler = d.dolu;
        }

    }catch(e){
        console.error(e);
    }

}
    async function openModal(){document.getElementById('modalOverlay').classList.add('open');document.body.style.overflow='hidden';setLoading(true);await fetchDoluTarihler();setLoading(false);renderCalendar();}
    function closeModal(){
        document.getElementById('modalOverlay').classList.remove('open');
        document.body.style.overflow='';
        // Formu sıfırla — sayfa yenilemeye gerek yok
        setTimeout(()=>{
            // State sıfırla
            state.service=null; state.date=null; state.time=null;
            state.currentMonth=new Date().getMonth(); state.currentYear=new Date().getFullYear();
            // Input alanlarını temizle
            ['inp-ad','inp-soyad','inp-tel','inp-mail','inp-not'].forEach(id=>{
                const el=document.getElementById(id); if(el) el.value='';
            });
            // Hizmet seçimini temizle
            document.querySelectorAll('.service-card').forEach(c=>c.classList.remove('selected'));
            // Adımları sıfırla
            goStep(1);
            // Hata mesajını gizle
            const err=document.getElementById('error-msg');
            if(err){err.textContent='';err.classList.remove('show');}
            // Dolu saatleri yeniden çek (arka planda)
            fetchDoluTarihler();
        }, 300);
    }
    function handleOverlayClick(e){if(e.target===document.getElementById('modalOverlay'))closeModal();}
    function goStep(n){for(let i=1;i<=4;i++){const p=document.getElementById('panel-'+i);const t=document.getElementById('step-tab-'+i);if(p)p.classList.toggle('active',i===n);if(t){t.classList.remove('active','done');if(i===n)t.classList.add('active');else if(i<n)t.classList.add('done');}}document.getElementById('panel-success').classList.remove('active');if(n===4)renderSummary();}
      async function selectService(el,name){

    document.querySelectorAll('.svc-card').forEach(c=>{
        c.classList.remove('selected');
    });

    el.classList.add('selected');

state.service = name;

state.date = null;
state.time = null;

state.doluSaatler = {};

await fetchDoluTarihler();

document.getElementById("time-section").style.display = "none";

renderCalendar();

    document.getElementById('btn-next-1').disabled=false;
}
    function changeMonth(dir){state.currentMonth+=dir;if(state.currentMonth>11){state.currentMonth=0;state.currentYear++;}if(state.currentMonth<0){state.currentMonth=11;state.currentYear--;}renderCalendar();}
    function tumSaatlerDolu(dateStr){const d=state.doluSaatler[dateStr]||[];return TUM_SAATLER.every(s=>d.includes(s));}
    function renderCalendar(){const y=state.currentYear,m=state.currentMonth;document.getElementById('cal-month-label').textContent=MONTHS[m]+' '+y;const grid=document.getElementById('cal-grid');grid.innerHTML='';DAYS.forEach(d=>{const el=document.createElement('div');el.className='cal-day-name';el.textContent=d;grid.appendChild(el);});const fd=new Date(y,m,1).getDay();const off=fd===0?6:fd-1;const dim=new Date(y,m+1,0).getDate();const today=new Date();for(let i=0;i<off;i++){const el=document.createElement('div');el.className='cal-day empty';grid.appendChild(el);}for(let d=1;d<=dim;d++){const el=document.createElement('div');el.className='cal-day';el.textContent=d;const td=new Date(y,m,d);const isPast=td<new Date(today.getFullYear(),today.getMonth(),today.getDate());const ds=y+'-'+String(m+1).padStart(2,'0')+'-'+String(d).padStart(2,'0');if(isPast){el.classList.add('past');}else if(tumSaatlerDolu(ds)){el.classList.add('dolu');el.title='Bu gün dolu';}else{if(y===today.getFullYear()&&m===today.getMonth()&&d===today.getDate())el.classList.add('today');if(state.date===ds)el.classList.add('selected');el.onclick=()=>selectDate(ds,el);}grid.appendChild(el);}}
    function selectDate(ds,el){document.querySelectorAll('.cal-day').forEach(d=>d.classList.remove('selected'));el.classList.add('selected');state.date=ds;state.time=null;const[y,m,d]=ds.split('-');document.getElementById('time-label-txt').textContent=d+' '+MONTHS[parseInt(m)-1]+' '+y+' için uygun saatler:';document.getElementById('time-section').style.display='block';renderTimes();document.getElementById('btn-next-2').disabled=true;}
    function renderTimes(){const grid=document.getElementById('time-grid');const dolu=state.doluSaatler[state.date]||[];grid.innerHTML='';TUM_SAATLER.forEach(t=>{const el=document.createElement('div');el.className='time-slot';el.textContent=t;if(dolu.includes(t)){el.classList.add('unavail');}else{if(state.time===t)el.classList.add('selected');el.onclick=()=>selectTime(t,el);}grid.appendChild(el);});}
    function selectTime(t,el){document.querySelectorAll('.time-slot').forEach(s=>s.classList.remove('selected'));el.classList.add('selected');state.time=t;document.getElementById('btn-next-2').disabled=false;}
    function validateForm(){
        const ad    = document.getElementById('inp-ad').value.trim();
        const soyad = document.getElementById('inp-soyad').value.trim();
        const tel   = document.getElementById('inp-tel').value.replace(/\D/g,'');
        const mail  = document.getElementById('inp-mail').value.trim();

        // Telefon: sadece rakam, en az 10 hane
        const telOk  = tel.length >= 10;
        // E-posta: basit format kontrolü
        const mailOk = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(mail);

        // Hata göster/gizle (sadece dolu ama hatalıysa)
        const telErr  = document.getElementById('err-tel');
        const mailErr = document.getElementById('err-mail');
        if(telErr)  telErr.style.display  = (document.getElementById('inp-tel').value && !telOk)  ? 'block' : 'none';
        if(mailErr) mailErr.style.display = (mail && !mailOk) ? 'block' : 'none';

        const ok = ad && soyad && telOk && mailOk;
        document.getElementById('btn-next-3').disabled = !ok;
    }
    function renderSummary(){const[y,m,d]=state.date.split('-');const tarih=d+' '+MONTHS[parseInt(m)-1]+' '+y;document.getElementById('summary-box').innerHTML=`<div class="summary-row"><span class="summary-label">Hizmet</span><span class="summary-value">${state.service}</span></div><div class="summary-row"><span class="summary-label">Tarih</span><span class="summary-value">${tarih}</span></div><div class="summary-row"><span class="summary-label">Saat</span><span class="summary-value">${state.time}</span></div><div class="summary-row"><span class="summary-label">Ad Soyad</span><span class="summary-value">${document.getElementById('inp-ad').value.trim()} ${document.getElementById('inp-soyad').value.trim()}</span></div><div class="summary-row"><span class="summary-label">Telefon</span><span class="summary-value">${document.getElementById('inp-tel').value.trim()}</span></div><div class="summary-row"><span class="summary-label">E-posta</span><span class="summary-value">${document.getElementById('inp-mail').value.trim()}</span></div>`;document.getElementById('error-msg').classList.remove('show');}
    async function confirmBooking(){setLoading(true);const payload={hizmet:state.service,tarih:state.date,saat:state.time,ad:document.getElementById('inp-ad').value.trim(),soyad:document.getElementById('inp-soyad').value.trim(),telefon:document.getElementById('inp-tel').value.trim(),eposta:document.getElementById('inp-mail').value.trim(),not_field:document.getElementById('inp-not').value.trim()};try{const res=await fetch(BACKEND+'/randevu_kaydet.php',{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(payload)});const data=await res.json();if(data.success){if(!state.doluSaatler[state.date])state.doluSaatler[state.date]=[];state.doluSaatler[state.date].push(state.time);document.querySelectorAll('.step-panel').forEach(p=>p.classList.remove('active'));document.getElementById('panel-success').classList.add('active');document.querySelectorAll('.step').forEach(s=>{s.classList.remove('active');s.classList.add('done');});}else{const e=document.getElementById('error-msg');e.textContent=data.error||'Bir hata oluştu.';e.classList.add('show');await fetchDoluTarihler();renderCalendar();}}catch(e){document.getElementById('error-msg').textContent='Sunucuya bağlanılamadı.';document.getElementById('error-msg').classList.add('show');}setLoading(false);}
  </script>
</body>
</html>