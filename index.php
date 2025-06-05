<?php
// ART-VISION Protected Demo - Server-Side Generated
// Copyright 2025 - Unauthorized reproduction prohibited

session_start();

// Dynamic class name generation - changes every request
$classMap = [
    'header' => 'x' . substr(md5('header' . time()), 0, 6),
    'nav' => 'y' . substr(md5('nav' . time()), 0, 6),
    'hero' => 'z' . substr(md5('hero' . time()), 0, 6),
    'services' => 'a' . substr(md5('services' . time()), 0, 6),
    'products' => 'b' . substr(md5('products' . time()), 0, 6),
    'about' => 'c' . substr(md5('about' . time()), 0, 6),
    'contact' => 'd' . substr(md5('contact' . time()), 0, 6),
    'footer' => 'e' . substr(md5('footer' . time()), 0, 6)
];

// Encoded content arrays
$encodedContent = [
    'title' => base64_decode('QVJULVZJU0lPTiBzLnIuby4gfCBQcm9qZWvEjW7DrSB0ZWNobmlrYSAmIEludGVyYWt0aXZuw60gdsO9dWth'),
    'company' => base64_decode('QVJULVZJU0lPTg=='),
    'hero_title' => base64_decode('UHJvamVrxI1uw60gdGVjaG5pa2EgcHJvIGJ1ZG91Y25vc3Q='),
    'hero_subtitle' => base64_decode('UHJvZmVzaW9uw6Fsbs65IEFWIMWZZcWhZW7DrSAmIEludGVyYWt0aXZuw60gdsO9dWth')
];

// Dynamic CSS generator
function generateCSS($classMap) {
    $css = "/* Generated CSS - Protected Content */\n";
    $css .= "*{margin:0;padding:0;box-sizing:border-box}";
    
    // CSS variables encoded
    $css .= ":root{";
    $vars = [
        '--p1' => '#1e40af',
        '--p2' => '#3b82f6', 
        '--p3' => '#06b6d4',
        '--p4' => '#0f172a',
        '--p5' => '#f8fafc'
    ];
    foreach($vars as $k => $v) {
        $css .= "$k:$v;";
    }
    $css .= "}";
    
    // Dynamic classes
    foreach($classMap as $original => $encoded) {
        switch($original) {
            case 'header':
                $css .= ".{$encoded}{background:white;position:fixed;top:0;left:0;right:0;z-index:1000;box-shadow:0 2px 10px rgba(0,0,0,0.08);height:72px;}";
                break;
            case 'nav':
                $css .= ".{$encoded}{max-width:1400px;margin:0 auto;padding:0 20px;display:flex;justify-content:space-between;align-items:center;height:100%;}";
                break;
            case 'hero':
                $css .= ".{$encoded}{background:linear-gradient(135deg,var(--p1) 0%,var(--p2) 100%);color:white;padding:140px 0 80px;margin-top:72px;}";
                break;
        }
    }
    
    return $css;
}

// Content sections encoded and split
$sections = [
    'services' => [
        base64_decode('UHJvZGVq'),
        base64_decode('UHJvbsOhamVt'),
        base64_decode('TW9udMOhxb4gYSBpbnN0YWxhY2U='),
        base64_decode('SW50ZXJha3Rpdm7DrSB2w7l1a2E='),
        base64_decode('QXVkaW8gc3lzdMOpbXk='),
        base64_decode('U2VydmlzIGEgcG9kcG9yYQ==')
    ],
    'products' => [
        'DLP Projektor 4K' => 'Od 89 000 Kč',
        'LED Panel 75"' => 'Od 125 000 Kč',
        'Interaktivní tabule' => 'Od 95 000 Kč',
        'Přenosný projektor' => 'Od 35 000 Kč',
        'Audio systém' => 'Od 45 000 Kč',
        'Konferenční systém' => 'Od 180 000 Kč'
    ]
];

// JavaScript obfuscator
function obfuscateJS() {
    $js = base64_decode('Ly8gT2JmdXNjYXRlZCBKYXZhU2NyaXB0');
    $js .= "\nconst _=document,__=console;";
    $js .= "_.addEventListener('contextmenu',e=>e.preventDefault());";
    $js .= "_.addEventListener('keydown',e=>{if(e.ctrlKey&&[83,65,67,86,88,80,85,123].includes(e.keyCode))e.preventDefault();});";
    $js .= "setInterval(()=>__.clear(),3000);";
    return $js;
}

// Anti-tamper token
$token = hash('sha256', $_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'] . date('Y-m-d'));

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $encodedContent['title']; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Anti-inspection measures -->
    <meta name="generator" content="Protected CMS v<?php echo rand(1,9) . '.' . rand(0,9); ?>">
    <meta name="robots" content="noindex,nofollow">
    <meta name="referrer" content="no-referrer">
    
    <style>
        <?php echo generateCSS($classMap); ?>
        
        /* Additional dynamic styles */
        body{font-family:'Segoe UI',sans-serif;background:white;color:var(--p4);}
        
        .<?php echo $classMap['nav']; ?> .logo{font-size:1.6rem;font-weight:700;color:var(--p1);display:flex;align-items:center;gap:8px;}
        .<?php echo $classMap['nav']; ?> .logo i{color:var(--p3);font-size:1.8rem;}
        
        .<?php echo $classMap['hero']; ?> .container{max-width:1200px;margin:0 auto;padding:0 20px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;}
        .<?php echo $classMap['hero']; ?> h1{font-size:3.5rem;font-weight:700;margin-bottom:20px;line-height:1.2;}
        .<?php echo $classMap['hero']; ?> .subtitle{font-size:1.3rem;margin-bottom:30px;opacity:0.9;}
        .<?php echo $classMap['hero']; ?> p{font-size:1.1rem;margin-bottom:40px;opacity:0.8;}
        
        .btn-primary{background:var(--p3);color:white;padding:14px 30px;border:none;border-radius:8px;font-weight:600;text-decoration:none;display:inline-flex;align-items:center;gap:8px;transition:all 0.3s ease;}
        .btn-primary:hover{background:#0891b2;transform:translateY(-2px);box-shadow:0 10px 25px rgba(6,182,212,0.3);}
        
        .btn-secondary{background:transparent;color:white;border:2px solid white;padding:14px 30px;border-radius:8px;font-weight:600;text-decoration:none;display:inline-flex;align-items:center;gap:8px;transition:all 0.3s ease;}
        .btn-secondary:hover{background:white;color:var(--p1);}
        
        .hero-card{background:rgba(255,255,255,0.1);backdrop-filter:blur(10px);border-radius:20px;padding:40px;text-align:center;border:1px solid rgba(255,255,255,0.2);}
        .hero-card i{font-size:4rem;color:var(--p3);margin-bottom:20px;}
        
        .services{padding:100px 0;background:var(--p5);}
        .section-header{text-align:center;margin-bottom:60px;}
        .section-header h2{font-size:2.5rem;color:var(--p4);margin-bottom:15px;}
        .section-header p{font-size:1.2rem;color:#475569;}
        
        .services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:30px;max-width:1200px;margin:0 auto;padding:0 20px;}
        .service-card{background:white;padding:40px 30px;border-radius:15px;text-align:center;box-shadow:0 10px 30px rgba(0,0,0,0.1);transition:all 0.3s ease;border:1px solid #e2e8f0;}
        .service-card:hover{transform:translateY(-10px);box-shadow:0 20px 50px rgba(0,0,0,0.15);}
        .service-card i{font-size:3rem;color:var(--p2);margin-bottom:20px;}
        .service-card h3{font-size:1.5rem;color:var(--p4);margin-bottom:15px;}
        .service-card p{color:#475569;line-height:1.6;}
        
        .products{padding:100px 0;}
        .products-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;max-width:1200px;margin:60px auto 0;padding:0 20px;}
        .product-card{background:white;border-radius:15px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.1);transition:all 0.3s ease;border:1px solid #e2e8f0;}
        .product-card:hover{transform:translateY(-5px);box-shadow:0 20px 50px rgba(0,0,0,0.15);}
        .product-image{height:200px;background:linear-gradient(135deg,var(--p1) 0%,var(--p2) 100%);display:flex;align-items:center;justify-content:center;color:white;font-size:3rem;}
        .product-info{padding:25px;}
        .product-info h4{font-size:1.3rem;color:var(--p4);margin-bottom:10px;}
        .product-info p{color:#475569;margin-bottom:15px;font-size:0.95rem;}
        .product-specs{display:flex;gap:15px;margin-bottom:20px;}
        .spec{background:#f1f5f9;padding:5px 12px;border-radius:20px;font-size:0.85rem;color:#475569;}
        .price{font-size:1.2rem;font-weight:bold;color:#10b981;}
        
        .about{padding:100px 0;background:#f1f5f9;}
        .about-content{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;max-width:1200px;margin:0 auto;padding:0 20px;}
        .about-text h2{font-size:2.5rem;color:var(--p4);margin-bottom:20px;}
        .about-text p{color:#475569;margin-bottom:20px;font-size:1.1rem;}
        .stats{display:grid;grid-template-columns:repeat(2,1fr);gap:30px;margin-top:40px;}
        .stat{text-align:center;}
        .stat-number{font-size:2.5rem;font-weight:bold;color:var(--p1);}
        .stat-label{color:#475569;font-size:0.9rem;}
        .about-visual{background:white;border-radius:20px;padding:40px;text-align:center;box-shadow:0 20px 50px rgba(0,0,0,0.1);}
        .about-visual i{font-size:5rem;color:var(--p2);margin-bottom:20px;}
        
        .contact{padding:100px 0;background:var(--p4);color:white;}
        .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;max-width:1200px;margin:60px auto 0;padding:0 20px;}
        .contact-info h3{font-size:1.5rem;margin-bottom:30px;color:var(--p3);}
        .contact-item{display:flex;align-items:center;gap:15px;margin-bottom:20px;}
        .contact-item i{color:var(--p3);font-size:1.2rem;width:20px;}
        .contact-form{background:rgba(255,255,255,0.05);padding:40px;border-radius:15px;border:1px solid rgba(255,255,255,0.1);}
        .form-group{margin-bottom:20px;}
        .form-group label{display:block;margin-bottom:5px;color:var(--p3);}
        .form-group input,.form-group textarea,.form-group select{width:100%;padding:14px 16px;border:1px solid rgba(255,255,255,0.2);border-radius:8px;background:rgba(255,255,255,0.1);color:white;font-size:1rem;transition:all 0.3s ease;}
        .form-group input:focus,.form-group textarea:focus,.form-group select:focus{outline:none;border-color:var(--p3);background:rgba(255,255,255,0.15);}
        .form-group input::placeholder,.form-group textarea::placeholder{color:rgba(255,255,255,0.6);}
        
        .footer{background:#1e293b;color:white;padding:50px 0 20px;}
        .footer-content{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:40px;margin-bottom:30px;max-width:1200px;margin:0 auto;padding:0 20px;}
        .footer-section h4{color:var(--p3);margin-bottom:20px;}
        .footer-section a{color:rgba(255,255,255,0.8);text-decoration:none;display:block;margin-bottom:10px;transition:color 0.3s ease;}
        .footer-section a:hover{color:var(--p3);}
        .footer-bottom{border-top:1px solid rgba(255,255,255,0.1);padding-top:20px;text-align:center;color:rgba(255,255,255,0.6);max-width:1200px;margin:30px auto 0;padding:20px;}
        
        @media (max-width:768px){
            .<?php echo $classMap['hero']; ?> .container{grid-template-columns:1fr;text-align:center;}
            .<?php echo $classMap['hero']; ?> h1{font-size:2.5rem;}
            .about-content{grid-template-columns:1fr;}
            .contact-grid{grid-template-columns:1fr;}
            .services-grid,.products-grid{grid-template-columns:1fr;}
        }
        
        /* Protection watermark */
        body::before{content:"<?php echo base64_decode('QVJULVZJU0lPTiBERU1P'); ?>";position:fixed;top:50%;left:50%;transform:translate(-50%,-50%) rotate(-45deg);font-size:6rem;color:rgba(0,0,0,0.02);pointer-events:none;z-index:1;font-weight:bold;white-space:nowrap;}
    </style>
    
    <!-- Dynamic token verification -->
    <script>window._token="<?php echo substr($token, 0, 16); ?>";</script>
</head>
<body data-protection="<?php echo $token; ?>">
    
    <!-- Header -->
    <header class="<?php echo $classMap['header']; ?>">
        <nav class="<?php echo $classMap['nav']; ?>">
            <div class="logo">
                <i class="fas fa-video"></i>
                <?php echo $encodedContent['company']; ?>
            </div>
            <div>
                <a href="#contact" class="btn-primary">Získat nabídku</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="<?php echo $classMap['hero']; ?>" id="home">
        <div class="container">
            <div>
                <h1><?php echo $encodedContent['hero_title']; ?></h1>
                <p class="subtitle"><?php echo $encodedContent['hero_subtitle']; ?></p>
                <p>Více než 15 let zkušeností s nejmodernějšími projekčními technologiemi, LED displeji a interaktivními řešeními pro vzdělávání a prezentace.</p>
                <div style="display:flex;gap:20px;margin-top:30px;">
                    <a href="#products" class="btn-primary">
                        <i class="fas fa-shopping-cart"></i>
                        Prohlédnout produkty
                    </a>
                    <a href="#contact" class="btn-secondary">
                        <i class="fas fa-phone"></i>
                        Kontaktovat nás
                    </a>
                </div>
            </div>
            <div style="display:flex;justify-content:center;">
                <div class="hero-card">
                    <i class="fas fa-desktop"></i>
                    <h3>4K Projekce</h3>
                    <p>Špičková kvalita obrazu</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
        <div class="section-header">
            <h2>Naše služby</h2>
            <p>Komplexní řešení pro všechny vaše potřeby v oblasti prezentační techniky</p>
        </div>
        <div class="services-grid">
            <?php 
            $serviceIcons = ['shopping-cart', 'handshake', 'tools', 'chalkboard-teacher', 'microphone', 'cog'];
            $serviceTexts = [
                'Široký sortiment projektorů, LED displejů, interaktivních tabulí a prezentační techniky od předních světových výrobců.',
                'Krátkodobý i dlouhodobý pronájem projekční techniky pro akce, konference, školení a prezentace.',
                'Profesionální instalace a nastavení veškeré AV techniky včí kompletního servisního zázemí.',
                'Moderní řešení pro vzdělávací instituce - interaktivní tabule, projektory a kompletní učební systémy.',
                'Ozvučení sálů, konferenčních místností a auditorií s profesionálním audio vybavením.',
                'Komplexní servisní podpora, pravidelná údržba a technická asistence pro všechny naše produkty.'
            ];
            
            foreach($sections['services'] as $index => $service): ?>
            <div class="service-card">
                <i class="fas fa-<?php echo $serviceIcons[$index]; ?>"></i>
                <h3><?php echo $service; ?></h3>
                <p><?php echo $serviceTexts[$index]; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Products -->
    <section class="products" id="products">
        <div class="section-header">
            <h2>Vybrané produkty</h2>
            <p>Nejprodávanější produkty z našeho sortimentu</p>
        </div>
        <div class="products-grid">
            <?php 
            $productIcons = ['video', 'tv', 'chalkboard', 'laptop', 'volume-up', 'server'];
            $productDescs = [
                'Vysokosvítivý DLP projektor s rozlišením 4K, ideální pro velké sály a auditorium.',
                'Profesionální LED displej s Ultra HD rozlišením pro prezentace a digital signage.',
                'Dotykowa tabule s multi-touch funkcionalitou pro moderní vzdělávání.',
                'Kompaktní a lehký projektor s vysokou svítivostí pro mobilní prezentace.',
                'Profesionální ozvučení s bezdrátovými mikrofony pro konferenční sály.',
                'Kompletní AV řešení pro moderní konferenční místnosti s video konferenčními možnostmi.'
            ];
            
            $index = 0;
            foreach($sections['products'] as $product => $price): ?>
            <div class="product-card">
                <div class="product-image">
                    <i class="fas fa-<?php echo $productIcons[$index]; ?>"></i>
                </div>
                <div class="product-info">
                    <h4><?php echo $product; ?></h4>
                    <p><?php echo $productDescs[$index]; ?></p>
                    <div class="product-specs">
                        <span class="spec">Premium</span>
                        <span class="spec">4K</span>
                        <span class="spec">Pro</span>
                    </div>
                    <div class="price"><?php echo $price; ?></div>
                </div>
            </div>
            <?php $index++; endforeach; ?>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-content">
            <div class="about-text">
                <h2>O společnosti <?php echo $encodedContent['company']; ?></h2>
                <p>Jsme česká společnost se sídlem v Liberci, která se více než 15 let specializuje na prodej, pronájem a instalaci moderní prezentační techniky.</p>
                <p>Naše zkušenosti pokrývají široké spektrum projektů - od vybavení škol a univerzit interaktivními tabulemi po instalaci komplexních AV systémů v konferenčních centrech a auditoriumech.</p>
                <div class="stats">
                    <div class="stat">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Let zkušeností</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Spokojených zákazníků</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Školních projektů</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Technická podpora</div>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <i class="fas fa-award"></i>
                <h3>Certifikovaný partner</h3>
                <p>Jsme autorizovaným distributorem a servisním partnerem předních světových značek v oblasti AV techniky.</p>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="section-header">
            <h2 style="color: white;">Kontaktujte nás</h2>
            <p style="color: rgba(255,255,255,0.8);">Rádi vám pomůžeme s výběrem vhodného řešení pro vaše potřeby</p>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Kontaktní informace</h3>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Ostravská 671/10, 460 07 Liberec</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span>+420 485 123 456</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>info@art-vision.eu</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <span>Po-Pá: 8:00-17:00</span>
                </div>
            </div>
            <div class="contact-form">
                <h3>Poptávkový formulář</h3>
                <form>
                    <div class="form-group">
                        <label>Typ služby</label>
                        <select>
                            <option>Vyberte službu</option>
                            <option>Prodej</option>
                            <option>Pronájem</option>
                            <option>Instalace</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jméno a příjmení</label>
                        <input type="text" placeholder="Vaše jméno">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" placeholder="vas@email.cz">
                    </div>
                    <div class="form-group">
                        <label>Zpráva</label>
                        <textarea rows="4" placeholder="Popište nám vaše požadavky..."></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="width:100%;">
                        <i class="fas fa-paper-plane"></i>
                        Odeslat poptávku
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4><?php echo $encodedContent['company']; ?> s.r.o.</h4>
                <p>Specialisté na projekční techniku a interaktivní výuku s více než 15 lety zkušeností.</p>
            </div>
            <div class="footer-section">
                <h4>Produkty</h4>
                <a href="#">Projektory</a>
                <a href="#">LED displeje</a>
                <a href="#">Audio systémy</a>
            </div>
            <div class="footer-section">
                <h4>Služby</h4>
                <a href="#">Prodej</a>
                <a href="#">Pronájem</a>
                <a href="#">Instalace</a>
            </div>
            <div class="footer-section">
                <h4>Kontakt</h4>
                <a href="#">info@art-vision.eu</a>
                <a href="#">+420 485 123 456</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 <?php echo $encodedContent['company']; ?> s.r.o. | Protected Demo | Token: <?php echo substr($token, -8); ?></p>
        </div>
    </footer>

    <script>
        <?php echo obfuscateJS(); ?>
        
        // Token verification
        if(window._token !== "<?php echo substr($token, 0, 16); ?>") {
            location.reload();
        }
        
        // Form handling
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Děkujeme za vaši poptávku! Brzy se vám ozveme.');
        });
        
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({behavior: 'smooth'});
                }
            });
        });
        
        // Animation on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {threshold: 0.1});
        
        document.querySelectorAll('.service-card, .product-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
        
        // Protection notice
        console.log('%c🔒 ART-VISION Protected Demo', 'color: #1e40af; font-size: 20px; font-weight: bold;');
        console.log('%cThis is a protected demonstration. Source code is not available for copying.', 'color: #ef4444;');
        console.log('%cFor licensing inquiries: info@art-vision.eu', 'color: #059669;');
    </script>
    
    <!-- Invisible tracking -->
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" 
         style="position:absolute;top:-1px;left:-1px;width:1px;height:1px;" 
         data-track="<?php echo hash('md5', $_SERVER['REQUEST_TIME'] . $_SERVER['HTTP_USER_AGENT']); ?>">
</body>
</html>

<?php
// Log access attempt
error_log("ART-VISION Demo accessed: " . $_SERVER['REMOTE_ADDR'] . " - " . date('Y-m-d H:i:s'));
?>
