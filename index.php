<?php date_default_timezone_set('Asia/Kolkata'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Masterclass India — Learn Business in 8 Hours | School of 7</title>
    <meta name="description" content="Master how to start & scale a startup in 8 hours. India's affordable business masterclass — validate ideas, raise funds, build your team. Enroll for ₹199.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://schoolof7.com/">
    <link rel="preload" as="image" href="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/startup%20course%20for%20corporate%20employee.png">

    <!-- Open Graph -->
    <meta property="og:title" content="Startup Masterclass India — Learn Business in 8 Hours | School of 7">
    <meta property="og:description" content="Master how to start & scale a startup in 8 hours. Validate ideas, raise funds, build your team. Enroll for ₹199.">
    <meta property="og:image" content="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/yourmasterclasstostartup.png">
    <meta property="og:url" content="https://schoolof7.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="School of 7">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Startup Masterclass India — Learn Business in 8 Hours | School of 7">
    <meta name="twitter:description" content="Master how to start & scale a startup in 8 hours. Validate ideas, raise funds, build your team. Enroll for ₹199.">
    <meta name="twitter:image" content="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/yourmasterclasstostartup.png">

    <link rel="icon" type="image/webp" href="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/sof.png">
    <link rel="apple-touch-icon" href="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/sof.png">

    <!-- Preconnect to speed up font & image loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev" crossorigin>
    <link rel="preconnect" href="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev" crossorigin>
    <link rel="dns-prefetch" href="https://checkout.razorpay.com">
    <link rel="dns-prefetch" href="https://connect.facebook.net">
    <link rel="dns-prefetch" href="https://www.clarity.ms">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">

   
    <!-- Preload logo font to prevent FOUT -->
    <link rel="preload" href="https://fonts.gstatic.com/s/luckiestguy/v22/_gP_1RrxsjcxVvHOtOGkgUQJPPI.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Fonts: non-blocking load -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Barlow+Condensed:wght@500;600;700;800&family=Luckiest+Guy&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Barlow+Condensed:wght@500;600;700;800&family=Luckiest+Guy&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    </noscript>

    <link rel="stylesheet" href="style.css">

    <!-- ALL CSS in one place — clean, no duplicates -->
    <style>
        /* ── Mentor section ── */
        .mentor-section, #mentor, section.mentor-section, section#mentor {
            background-color: #e7eef8 !important;
            background: #e7eef8 !important;
        }

        /* ── FOUT prevention for Luckiest Guy logo font ── */
        .logo a, .footer-logo {
            opacity: 0;
            transition: opacity 0.2s ease;
        }
        .fonts-loaded .logo a,
        .fonts-loaded .footer-logo {
            opacity: 1;
        }

        /* ── Feature highlight — quiet breathing animation ── */
        .feature-highlight-text {
            display: inline-block;
            font-weight: 700;
            color: #0d1f0a;
            padding: 5px 14px;
            border-radius: 6px;
            background: #d4e8ce;
            border-left: 3px solid #4e6a47;
            line-height: 1.6;
            white-space: nowrap;
            -webkit-animation: quietBreathe 2.5s ease-in-out infinite;
            animation: quietBreathe 2.5s ease-in-out infinite;
        }
        @-webkit-keyframes quietBreathe {
            0%   { background: #d4e8ce; border-left-color: #4e6a47; }
            50%  { background: #b3d4aa; border-left-color: #2d5226; }
            100% { background: #d4e8ce; border-left-color: #4e6a47; }
        }
        @keyframes quietBreathe {
            0%   { background: #d4e8ce; border-left-color: #4e6a47; }
            50%  { background: #b3d4aa; border-left-color: #2d5226; }
            100% { background: #d4e8ce; border-left-color: #4e6a47; }
        }
        @media (prefers-reduced-motion: reduce) {
            .feature-highlight-text {
                -webkit-animation: none;
                animation: none;
                background: #d4e8ce;
            }
        }

        /* ── Feature image — remove gap above & below ── */
        .feature-image {
            line-height: 0;
            font-size: 0;
        }
        .feature-image img {
            display: block;
            width: 100%;
            height: auto;
            vertical-align: middle;
        }
        .feature-image .zoom-btn {
            font-size: 14px;
        }

        /* ── Top hero banner ── */
        .top-hero-banner {
            width: 100%;
            background: #0d1f0a;
            padding: 60px 20px;
            box-sizing: border-box;
        }
        .top-hero-inner {
            max-width: 1100px;
            margin: 0 auto;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 48px;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .top-hero-image-wrap {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 380px;
            flex: 1 1 380px;
            min-width: 280px;
            max-width: 560px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }
        .top-hero-img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .top-hero-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 300px;
            flex: 1 1 300px;
            min-width: 260px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }
        .top-hero-heading {
            font-family: 'Barlow Condensed', 'Oswald', sans-serif;
            font-size: clamp(2rem, 5vw, 3.4rem);
            font-weight: 800;
            color: #ffffff;
            line-height: 1.1;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.02em;
        }
        .top-hero-sub {
            font-family: 'Inter', sans-serif;
            font-size: clamp(0.95rem, 2vw, 1.1rem);
            color: #b5c9ae;
            line-height: 1.6;
            margin: 0;
        }
        .top-hero-btn {
            display: inline-block;
            background: #4e6a47;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            padding: 16px 36px;
            border-radius: 50px;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            -webkit-transition: background 0.2s ease, -webkit-transform 0.2s ease, box-shadow 0.2s ease;
            transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
            -ms-flex-item-align: start;
            align-self: flex-start;
            box-shadow: 0 4px 20px rgba(78,106,71,0.4);
        }
        .top-hero-btn:hover {
            background: #3a5035;
            -webkit-transform: translateY(-2px);
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(78,106,71,0.55);
        }
        .top-hero-btn:active {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        /* Tablet */
        @media (max-width: 820px) {
            .top-hero-inner { gap: 32px; }
            .top-hero-image-wrap { -webkit-box-flex: 1; -ms-flex: 1 1 100%; flex: 1 1 100%; max-width: 100%; }
            .top-hero-body { -webkit-box-flex: 1; -ms-flex: 1 1 100%; flex: 1 1 100%; }
        }

        /* Mobile */
        @media (max-width: 480px) {
            .top-hero-banner { padding: 40px 16px; }
            .top-hero-inner { gap: 24px; }
            .top-hero-btn { width: 100%; text-align: center; padding: 15px 20px; -ms-flex-item-align: stretch; align-self: stretch; }
            .top-hero-image-wrap { border-radius: 12px; }
        }
    </style>

    <!-- Font load detection -->
    <script>
        if (document.fonts) {
            document.fonts.ready.then(function() {
                document.documentElement.classList.add('fonts-loaded');
            });
        } else {
            document.documentElement.classList.add('fonts-loaded');
        }
    </script>

    <!-- Microsoft Clarity — async so it never blocks render -->
    <script async type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "vdjpcazphk");
    </script>
</head>

<body>

    <!-- Sticky Header -->
    <header class="site-header">
        <button class="hamburger-btn" id="hamburgerBtn">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="nav-left">
            <a href="#curriculum">CURRICULUM</a>
            <a href="#testimonials">TESTIMONIALS</a>
        </div>
        <div class="logo">
            <a href="#">SCHOOL OF 7</a>
        </div>
        <div class="nav-right">
            <a href="https://login.schoolof7.com/contactus">ENQUIRE NOW</a>
            <a href="https://login.schoolof7.com/t/u/activeCourses">LOGIN</a>
        </div>
    </header>

    <!-- Mobile Dropdown Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#curriculum">CURRICULUM</a>
        <a href="#testimonials">TESTIMONIALS</a>
        <a href="https://login.schoolof7.com/contactus">ENQUIRE NOW</a>
        <a href="https://login.schoolof7.com/t/u/activeCourses">LOGIN</a>
    </div>

    <!-- Feature Section 1 — TOP OF PAGE, optimized for fast load -->
<section class="feature-section">
    <div class="feature-content">
        <h3 class="feature-title">Learn to Build a successful Startup. Build your Fortune.</h3>
        <p class="feature-description">
            <span class="feature-highlight-text">Join the Business Masterclass on<br>28th March 2026<br>11:00 AM - 1:00 PM IST</span>
        </p>
        <a href="#pricing" class="btn btn--outline-dark btn--sm">Book Your Seat At ₹199</a>
    </div>
    <div class="feature-image">
        <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/startup%20course%20for%20corporate%20employee.png"
             alt="Digital Workshop"
             width="560"
             height="400"
             fetchpriority="high"
             decoding="async">
        <button class="zoom-btn">+</button>
    </div>
</section>




    <!-- Section: Video Course Preview -->
    <section class="section video-help-section">
        <h2 class="video-help-title">How This Masterclass Will Help You?</h2>
        <div class="video-container-framed">
            <div class="video-wrapper">
                <video muted preload="none" id="coursePreviewVideo" playsinline webkit-playsinline controls
                    poster="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/Business%20masterclass%20at%20199%20rupees.png">
                </video>
            </div>
            <h3 class="video-caption" style="color: #67635f; margin-top: 20px;">" The cost of waiting is high.<br>Start & Scale your business right<br> - not random. "</h3>
        </div>
    </section>

    <!-- Section: Target Audience -->
    <section class="section audience-section">
        <h2 class="audience-title">Masterclass <em>Success</em> Stories!</h2>
        <div class="audience-carousel-wrapper">
            <button class="audience-nav-btn prev" id="audiencePrev">‹</button>
            <div class="audience-grid" id="audienceCarousel">
                <div class="audience-card">
                    <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/Best%20startup%20course%20in%20India.png" alt="Corporate Employee success story" width="400" height="400" loading="lazy">
                    <div class="audience-info">
                        <h4>CORPORATE EMPLOYEE</h4>
                        <p>scaled from India & went global</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/Startup%20course.png" alt="Business owner success story" width="400" height="400" loading="lazy">
                    <div class="audience-info">
                        <h4>BUSINESS OWNER</h4>
                        <p>built strategies to scale</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/Business%20success%20course.png" alt="Student success story" width="400" height="400" loading="lazy">
                    <div class="audience-info">
                        <h4>STUDENT</h4>
                        <p>chose to startup against college placement</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/Mr7%20business%20course.png" alt="Corporate employee success story" width="400" height="400" loading="lazy">
                    <div class="audience-info">
                        <h4>CORPORATE EMPLOYEE</h4>
                        <p>started from scratch</p>
                    </div>
                </div>
            </div>
            <button class="audience-nav-btn next" id="audienceNext">›</button>
        </div>
    </section>

    <!-- Section: Curriculum -->
    <section class="section curriculum-section" id="curriculum">
        <div class="curriculum-content">
            <h2 class="curriculum-heading"><span class="heading-bold">WHAT WILL YOU LEARN</span><br>In 2 hours Masterclass?</h2>
            <div class="accordion curriculum-accordion">
                <div class="accordion-item">
                    <button class="accordion-header">The Modern ways of Doing Business <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• What is Business?<br>• Why it's the right time to start Business?<br>• Old vs Modern Business ways?<br>• Automation via AI</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">How to Beat Competition? <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• The Generational Fatigue Concept<br>• Customer Segmentation Strategy<br>• Creating USP for your Brand.<br>• The Market Openness Strategy<br>• Case Studies</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">7 Strategy Case Studies <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Bata Nike case study<br>• Apple case study<br>• Cadbury case study<br>• Harpic Apple case study<br>• Ola-Rapido-Uber case study<br>• Apple-Tupperware case study<br>• The Shopkeeper case study</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">How to Select the right Business Idea? <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• 5 Levers to decide the right price<br>• Consumer Surplus analysis for pricing<br>• Price analysis via customer segmentation</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">Do's & Dont's of Business <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Co-Founder vs Solopreneur<br>• Product & Team building principles<br>• Best hiring practices<br>• Train yourself to become a CEO</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">Leader's Mindset to Grow & Scale the Business <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Understanding Product Market Fit(PMF)<br>• Scaling Product via customer segmentation<br>• Product Cannibalisation strategy</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">How to Build System's & Processes to Scale your Business? <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Troxler's experiment<br>• Organic & Inorganic marketing strategies<br>• Positioning & Perception mapping<br>• How to design ads via customer segmentation<br>• Push - Pull methodology</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">Consumer's Behavorial & Buying Psychology <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Cost of co-ordination strategy for Founder<br>• How to identify pain points of customers?<br>• The customer buying journey analysis<br>• 5 leaders' weapons for growth</div>
                </div>
            </div>
        </div>
        <div class="curriculum-image">
            <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/how-to-validate-startup-idea-india.png" alt="Course Syllabus" width="560" height="560" loading="lazy">
        </div>
    </section>

    <!-- Section: Mentor -->
    <section class="mentor-section" id="mentor" style="background-color: #e7eef8; border-radius: 16px; margin: 0 0 1rem 0;">
        <div class="mentor-content">
            <h3 class="mentor-label">Your Mentor</h3>
            <h2 class="mentor-headline">To <span class="highlight">INSPIRE</span>, <span class="highlight">EDUCATE</span>, and <span class="highlight">EMPOWER</span> the next generation of BUSINESS leaders for lasting results that reveal themselves over time.</h2>
            <p class="mentor-name">Mr 7</p>
            <button class="btn btn--outline-dark btn--sm">OUR VALUES</button>
            <div class="mentor-links">
                <div class="mentor-link active" data-text="To <span class='highlight'>INSPIRE</span>, <span class='highlight'>EDUCATE</span>, and <span class='highlight'>EMPOWER</span> the next generation of BUSINESS leaders for lasting results that reveal themselves over time.">mission</div>
                <div class="mentor-link" data-text="We believe that <span class='highlight'>MOST STARTUP LAGS</span>, because the founders were never taught about the fundamentals of building a business. Our philosophy centers on <span class='highlight'>FRAMEWORKS, CASE STUDIES, PROBLEMS & SOLUTIONS</span> which makes the founder BUSINESS READY.">philosophy</div>
                <div class="mentor-link" data-text="He is an <span class='highlight'>ENTREPRENEUR & INVESTOR </span>and is an MBA graduate from XLRI Jamshedpur. He has 10+ years of experience in CONSULTING & MENTORING Startups. He is the <span class='highlight'>FOUNDER</span> of School of 7.">about</div>
            </div>
        </div>
        <div class="mentor-image">
            <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/online-business-course-business-owners-india.png" alt="Mr 7 - Your Mentor" width="560" height="560" loading="lazy">
        </div>
    </section>

    <!-- Section: Course Pricing 1 (Demo Masterclass) -->
    <section class="section course-pricing-section" id="pricing">
        <h2 class="section-title text-center">Invest in your Future</h2>
        <p class="section-subtitle text-center">Choose <strong>The</strong> <em>Plan</em></p>
        <div class="course-pricing-grid">
            <div class="course-card premium" style="background: linear-gradient(to bottom, #36562f, #20331c);">
                <div class="best-value-badge">BEST VALUE</div>
                <div class="card-icon">📹</div>
                <h3 class="plan-title">Demo Masterclass</h3>
                <p class="plan-lang">English | Full Access</p>
                <div class="plan-price">₹199/-</div>
                <ul class="plan-features">
                    <li class="check">Pre-recorded Video Lectures</li>
                    <li class="check">Downloadable PDF Course Notes</li>
                    <li class="check">Course Virtual Community</li>
                    <li class="check">Course Upgrades at Zero Cost</li>
                    <li class="check">Certificate of Achievement</li>
                </ul>
                <button onclick="initiatePayment(19900, 'Demo Masterclass', 'The-Complete-Guide-To-Starting-Up')" class="btn btn--blue-brand">Enroll Now</button>
                <p class="refund-policy">Founder Ready in 8 Modules</p>
            </div>
        </div>
    </section>

    <!-- Section: Testimonials -->
    <section class="section testimonials-section" id="testimonials">
        <div class="testimonials-header">
            <div class="testimonials-title-group">
                <h3 class="testimonials-title">school of 7 <span class="plus">+</span> testimonials</h3>
                <p class="students-counter"><span class="counter" data-target="63345">0</span> students enrolled</p>
            </div>
            <a href="https://www.instagram.com/mr7_strategy?igsh=ODVvMHd1YjRobGpi" class="btn btn--outline-dark btn--xs">FIND US ON SOCIAL</a>
        </div>
        <div class="ugc-carousel-wrapper">
            <div class="ugc-carousel" id="ugcCarousel">
                <div class="ugc-item" data-index="0">
                    <video preload="none" muted loop playsinline controls poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t1.png"></video>
                </div>
                <div class="ugc-item" data-index="1">
                    <video preload="none" muted loop playsinline controls poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t2.png"></video>
                </div>
                <div class="ugc-item" data-index="2">
                    <video preload="none" muted loop playsinline controls poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t3.png"></video>
                </div>
                <div class="ugc-item" data-index="3">
                    <video preload="none" muted loop playsinline controls poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t4.png"></video>
                </div>
                <div class="ugc-item" data-index="4">
                    <video preload="none" muted loop playsinline controls poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t5.png"></video>
                </div>
            </div>
        </div>
        <div class="ugc-divider"></div>
        <div class="ugc-nav">
            <button class="ugc-nav-btn prev" id="ugcPrev">‹</button>
            <button class="ugc-nav-btn next" id="ugcNext">›</button>
        </div>
    </section>

        <!-- ===== HERO BANNER SECTION 1 ===== -->
    <section class="top-hero-banner">
        <div class="top-hero-inner">
            <div class="top-hero-image-wrap">
                <img
                    src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/MBA%20for%20startup%20course%20India.png"
                    alt="Startup Masterclass India"
                    class="top-hero-img"
                    width="560" height="400"
                    loading="lazy"
                >
            </div>
            <div class="top-hero-body">
                <h1 class="top-hero-heading">AI will eat away most of the Jobs!</h1>
                <p class="top-hero-sub">Adapting & Building something of your own is the future. — Elon Musk</p>
                <a href="#pricing" class="top-hero-btn">Let's Build →</a>
            </div>
        </div>
    </section>
    
    <!-- Hero Video Section -->
    <section class="hero-section">
        <div class="hero-video-container">
            <video autoplay loop muted playsinline webkit-playsinline class="hero-video" id="heroVideo" preload="none"
                poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/yourmasterclasstostartup.png">
            </video>
            <div class="hero-overlay"></div>
            <button class="video-control" id="video-toggle">II</button>
            <button class="hero-mute-btn" id="hero-mute-toggle" title="Toggle Sound">
                <svg class="mute-icon" width="20" height="20" viewBox="0 0 24 24" fill="white">
                    <path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/>
                </svg>
            </button>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Learn Fast<br>Execute Faster.</h1>
            <p class="hero-subtitle">The ultimate guide to scaling your business online.</p>
            <div class="hero-actions">
                <a href="#pricing" class="btn btn--grey">START LEARNING</a>
            </div>
        </div>
    </section>

    <!-- Feature Section 2 -->
    <section class="feature-section">
        <div class="feature-content">
            <h3 class="feature-title">Ideation → Launch → Marketing → Automation → Scaling → Funding</h3>
            <p class="feature-description">
                <span class="feature-highlight-text">Join the Business Masterclass on<br>28th March 2026<br>11:00 AM - 1:00 PM IST</span>
            </p>
            <a href="#pricing" class="btn btn--outline-dark btn--sm">Book Your Seat At ₹199</a>
        </div>
        <div class="feature-image">
            <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/startup-masterclass-india-school-of-7.png" alt="Startup Masterclass India" width="560" height="400" loading="lazy">
            <button class="zoom-btn">+</button>
        </div>
    </section>

    <!-- ===== HERO BANNER SECTION 2 ===== -->
    <section class="top-hero-banner">
        <div class="top-hero-inner">
            <div class="top-hero-image-wrap">
                <img
                    src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/Business%20course%20by%20school%20of%207.png"
                    alt="School of 7 Business Course"
                    class="top-hero-img"
                    width="560" height="400"
                    loading="lazy"
                >
            </div>
            <div class="top-hero-body">
                <h1 class="top-hero-heading">Ready to Build Your Startup?</h1>
                <p class="top-hero-sub">India's most practical business masterclass — 8 modules, 8 hours, founder ready.</p>
                <a href="#pricing" class="top-hero-btn">Get Started →</a>
            </div>
        </div>
    </section>

    <!-- Section: Course Pricing 2 (Full Plans) -->
    <section class="section course-pricing-section">
        <h2 class="section-title text-center">Choose The Plan</h2>
        <p class="section-subtitle text-center">That <strong>Fits You</strong> <em>Best</em></p>
        <div class="course-pricing-grid">
            <div class="course-card premium" style="background: linear-gradient(to bottom, #36562f, #20331c);">
                <div class="best-value-badge">BEST VALUE</div>
                <div class="card-icon">📹</div>
                <h3 class="plan-title">Advanced Learning Plan</h3>
                <p class="plan-lang">English | Full Access</p>
                <div class="plan-price">₹1899/-</div>
                <ul class="plan-features">
                    <li class="check">Pre-recorded Video Lectures</li>
                    <li class="check">Downloadable PDF Course Notes</li>
                    <li class="check">Course Virtual Community</li>
                    <li class="check">Course Upgrades at Zero Cost</li>
                    <li class="check">Certificate of Achievement</li>
                </ul>
                <button onclick="initiatePayment(189900, 'Advanced Learning Plan', 'The-Complete-Guide-To-Starting-Up')" class="btn btn--blue-brand">Enroll Now</button>
                <p class="refund-policy">Founder Ready in 8 Modules</p>
            </div>
            <div class="course-card standard">
                <div class="card-icon">🕐</div>
                <h3 class="plan-title">Standard Learning Plan</h3>
                <p class="plan-lang">English | Limited Access</p>
                <div class="plan-price">₹1499/-</div>
                <ul class="plan-features">
                    <li class="check">Pre-recorded Video Lectures</li>
                    <li class="cross">Downloadable PDF Course Notes</li>
                    <li class="cross">Course Virtual Community</li>
                    <li class="cross">Course Upgrades at Zero Cost</li>
                    <li class="cross">Certificate of Achievement</li>
                </ul>
                <button onclick="initiatePayment(149900, 'Standard Learning Plan', 'Sub-Variant---The-Complete-Guide-To-Starting-Up-Copy')" class="btn btn--blue-light">Enroll Now</button>
                <p class="refund-policy">Founder Ready in 8 Modules</p>
            </div>
        </div>
    </section>

    <!-- Section: FAQ -->
    <section class="section faq-section" id="faq">
        <div class="faq-content">
            <h2 class="faq-title">FAQ</h2>
            <p class="faq-subtitle">Find out more about the Masterclass.</p>
            <div class="accordion faq-accordion">
                <div class="accordion-item">
                    <button class="accordion-header">DO I NEED PRIOR EXPERIENCE? HOW THIS BUSINESS COURSE WILL HELP ME?</button>
                    <div class="accordion-body">No. From basic to advanced topics, which will develop founders' business acumen, all are discussed at length substantiated with real life examples.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">HOW LONG WILL IT TAKE TO GET THE LINK TO THE MASTERCLASS?</button>
                    <div class="accordion-body">It will be delivered to your email inbox within 5–10 minutes of your purchase. Please check your promotions/updates tab and spam folder as well.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WHAT IS THE TIME COMMITMENT REQUIRED FOR THIS MASTERCLASS?</button>
                    <div class="accordion-body">The masterclass will require 2 hours to complete.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">DOES THE BUSINESS/STARTUP MASTERCLASS COME WITH ANY LIVE INTERACTION?</button>
                    <div class="accordion-body">YES</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WHAT LANGUAGE IS THE MASTERCLASS IN?</button>
                    <div class="accordion-body">The language is English.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">HOW CAN I CONTACT IN CASE OF DOUBTS OR CONCERNS?</button>
                    <div class="accordion-body">You can write to us at Mr7@schoolof7.com or +91 9529245492</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">HOW CAN I CONTACT Mr 7 IN CASE OF DOUBTS RELATED TO COURSE CONCEPTS?</button>
                    <div class="accordion-body">You can mail us your doubts/queries at Mr7@schoolof7.com</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">IS THERE A CERTIFICATE?</button>
                    <div class="accordion-body">NO</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WHAT IS THE REFUND POLICY?</button>
                    <div class="accordion-body">There is no refund policy for this course.</div>
                </div>
            </div>
        </div>
        <div class="faq-image">
            <img src="https://pub-548474bf1ef14b739e232f68668f1f91.r2.dev/images/mr7-startup-business-course-india.jpg" alt="Masterclass FAQ" width="560" height="560" loading="lazy">
        </div>
    </section>

    <!-- Section: Struggling With -->
    <section class="section pricing-section">
        <div class="section-header">
            <h2 class="section-title">Are You Struggling With?</h2>
            <p class="section-subtitle">Challenges <em>like</em></p>
        </div>
        <div class="pricing-grid" id="pricingCarousel">
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">money</span>
                    <h3 class="card-big-title">revenue<br>inconsistency</h3>
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%202.png" alt="Revenue inconsistency" class="card-img-default" width="400" height="400" loading="lazy">
                    <div class="card-hover-overlay">
                        <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%202a.png" alt="Fund Raising" class="card-img-hover" width="400" height="400" loading="lazy">
                        <a href="#pricing" class="buy-btn">Join the Program</a>
                    </div>
                    <span class="swipe-hint">swipe</span>
                </div>
                <div class="card-details">
                    <div class="card-row">
                        <h4 class="product-name">FUND RAISING</h4>
                        <span class="price">PREP</span>
                    </div>
                    <p class="product-desc">Learners rated this course</p>
                    <div class="rating">★★★★½ (15,318)</div>
                </div>
            </div>
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">idea noise</span>
                    <h3 class="card-big-title">idea<br>validation</h3>
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%201.png" alt="Idea validation" class="card-img-default" width="400" height="400" loading="lazy">
                    <div class="card-hover-overlay">
                        <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%201a.png" alt="Startup Ideas" class="card-img-hover" width="400" height="400" loading="lazy">
                        <a href="#pricing" class="buy-btn">Let's Validate Ideas</a>
                    </div>
                    <span class="swipe-hint">swipe</span>
                </div>
                <div class="card-details">
                    <div class="card-row">
                        <h4 class="product-name">FIGURING STARTUP IDEAS</h4>
                        <span class="price">GROW</span>
                    </div>
                    <p class="product-desc">Learners rated this course</p>
                    <div class="rating">★★★★½ (15,318)</div>
                </div>
            </div>
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">product chef</span>
                    <h3 class="card-big-title">product<br>building</h3>
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%203.png" alt="Product building" class="card-img-default" width="400" height="400" loading="lazy">
                    <div class="card-hover-overlay">
                        <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%203a.png" alt="Scaling product" class="card-img-hover" width="400" height="400" loading="lazy">
                        <a href="#pricing" class="buy-btn">Learn to Scale</a>
                    </div>
                    <span class="swipe-hint">swipe</span>
                </div>
                <div class="card-details">
                    <div class="card-row">
                        <h4 class="product-name">SCALING PRODUCT</h4>
                        <span class="price">SCALE</span>
                    </div>
                    <p class="product-desc">Learners rated this course</p>
                    <div class="rating">★★★★½ (15,318)</div>
                </div>
            </div>
        </div>
        <div class="carousel-dots" id="carouselDots"></div>
    </section>

    <!-- Section: Certificate -->
    <section class="section promise-section">
        <div class="promise-image">
            <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/certificate.png" alt="Certificate of Completion" width="560" height="400" loading="lazy">
        </div>
        <div class="promise-content">
            <h2 class="promise-title">GET certified</h2>
            <p class="promise-subtitle">INDUSTRY RECOGNIZED CREDENTIAL</p>
            <div class="promise-details">
                <div class="detail-item">
                    <h4>BENEFITS:</h4>
                    <p>• Verified Digital Certificate</p>
                </div>
                <div class="detail-item">
                    <h4>WHERE IT FITS IN YOUR CAREER</h4>
                    <p>• In Business - will help to strategize<br>• In Business - will help to raise funds</p>
                </div>
                <div class="detail-item">
                    <h4>THE IMPACT</h4>
                    <p>• Develop Business Acumen<br>• Validate Startup Ideas Faster<br>• Better Decision Making</p>
                </div>
                <div class="detail-item">
                    <h4>ACCREDITED BY</h4>
                    <p>School of 7</p>
                </div>
            </div>
            <div class="routine-steps">
                <div class="step active">PREP</div>
                <div class="step">GROW</div>
                <div class="step">SCALE</div>
            </div>
        </div>
    </section>

    <!-- Sticky Enroll Bar -->
    <div class="sticky-bar" style="background-color: #ffffff;">
        <div class="sticky-content">
            <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/mike.png" alt="Mr 7" class="sticky-avatar"
                style="width: 70px; height: 70px; border: none; border-radius: 0; margin-top: -35px; object-fit: contain; box-shadow: none;"
                width="70" height="70" loading="lazy">
            <div class="sticky-offer">
                <div class="sticky-offer-row">
                    <span class="new-price">Rs 199</span>
                    <span class="old-price">Rs 1299</span>
                </div>
                <div class="sticky-deadline"><strong>84% Off Today</strong>&nbsp;</div>
            </div>
        </div>
        <div class="sticky-actions">
            <a href="#pricing" class="btn btn--red">ENROLL NOW</a>
        </div>
        <div class="sticky-bottom-label">Business Masterclass</div>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-brand" style="width: 100%; padding: 0;">
            <h2 class="footer-logo" style="font-size: 16vw; white-space: nowrap; width: 100%; margin: 0; padding: 0; text-align: center; letter-spacing: 0.02em; text-transform: uppercase;">School of 7</h2>
        </div>
        <div class="footer-main">
            <div class="footer-newsletter">
                <p class="newsletter-text">Join us on the road to BUSINESS JOURNEY</p>
                <p class="newsletter-subtext">Get your inbox filled with tips, tricks & exclusive content from our mentors.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Email Address" class="newsletter-input">
                    <button type="submit" class="newsletter-btn">SUBSCRIBE</button>
                </form>
                <p class="privacy-note">By signing up, you agree to our <a href="https://login.schoolof7.com/privacypolicy">Privacy Policy</a>.</p>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h4>NAVIGATE</h4>
                    <ul>
                        <li><a href="#pricing">Courses</a></li>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#mentor">Mentors</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#curriculum">Curriculum</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>SOCIAL</h4>
                    <ul>
                        <li><a href="https://www.instagram.com/mr7_strategy?igsh=ODVvMHd1YjRobGpi" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 8px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink: 0;" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            <span>Instagram</span>
                        </a></li>
                        <li><a href="https://youtube.com/@mr7_strategy?si=miYTemnidraRuAUk" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 8px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink: 0;" aria-hidden="true"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                            <span>YouTube</span>
                        </a></li>
                        <li><a href="https://www.linkedin.com/in/mr7-286047106" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 8px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink: 0;" aria-hidden="true"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                            <span>LinkedIn</span>
                        </a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>OFFICIAL</h4>
                    <ul>
                        <li><a href="https://login.schoolof7.com/privacypolicy">Privacy Policy</a></li>
                        <li><a href="https://login.schoolof7.com/termsofuse">Terms & Conditions</a></li>
                        <li><a href="https://login.schoolof7.com/refundpolicy">Refund Policy</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="https://login.schoolof7.com/contactus">Enquire Now</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>SUPPORT</h4>
                    <p class="support-text">Email: Mr7@schoolof7.com</p>
                    <p class="support-text">Message at: +91 9529245492</p>
                    <p class="support-text">We're here M-F 9am - 5pm IST.</p>
                    <p class="support-text">Drop us a note anytime.</p>
                    <p class="support-text">Do Not Sell or Share My Personal Information</p>
                    <p class="support-text">Cookie Preferences</p>
                    <p class="copyright">© Schoolof7 2026</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span class="footer-country">🌐 India (INR ₹)</span>
        </div>
    </footer>

    <!-- Main site script -->
    <script src="script.js?v=<?php echo time(); ?>"></script>

    <!-- Razorpay — deferred so it never blocks page render -->
    <script src="https://checkout.razorpay.com/v1/checkout.js" defer></script>

    <!-- Modals -->
    <div id="contactModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; justify-content: center; align-items: center;">
        <div style="background: #fff; padding: 35px 40px; border-radius: 16px; text-align: center; max-width: 400px; width: 90%; margin: 20px;">
            <h2 style="color: #4e6a47; font-size: 24px; margin-bottom: 8px;">Complete Your Enrollment</h2>
            <p id="formPlanName" style="color: #67635f; font-size: 14px; margin-bottom: 20px;"></p>
            <form id="enrollForm" onsubmit="return submitEnrollForm(event)">
                <input type="text" id="customerName" placeholder="Full Name" required
                    style="width: 100%; padding: 12px 15px; margin-bottom: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box;">
                <input type="email" id="customerEmail" placeholder="Email Address" required
                    style="width: 100%; padding: 12px 15px; margin-bottom: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box;">
                <input type="tel" id="customerPhone" placeholder="Phone Number (10 digits)" required pattern="[0-9]{10}"
                    style="width: 100%; padding: 12px 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box;">
                <button type="submit" style="background: #4e6a47; color: #fff; border: none; padding: 14px 40px; border-radius: 30px; font-size: 14px; font-weight: 600; cursor: pointer; width: 100%;">
                    Proceed to Payment
                </button>
            </form>
            <button onclick="closeContactModal()" style="background: none; border: none; color: #999; margin-top: 15px; cursor: pointer; font-size: 13px;">Cancel</button>
        </div>
    </div>

    <div id="successModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; justify-content: center; align-items: center;">
        <div style="background: #fff; padding: 40px 50px; border-radius: 16px; text-align: center; max-width: 500px; margin: 20px;">
            <div style="font-size: 60px; margin-bottom: 20px;">🎉</div>
            <h2 style="color: #4e6a47; font-size: 28px; margin-bottom: 15px;">Thank You!</h2>
            <p style="color: #67635f; font-size: 16px; margin-bottom: 10px;">Your enrollment is successful!</p>
            <p id="successPlanName" style="color: #333; font-weight: 600; font-size: 18px; margin-bottom: 20px;"></p>
            <p style="color: #67635f; font-size: 14px; margin-bottom: 25px;">You will receive a confirmation email shortly with your login details.</p>
            <a href="https://login.schoolof7.com/s/authenticate?url=/t/allcourses" style="display: inline-block; background: #4e6a47; color: #fff; border: none; padding: 12px 30px; border-radius: 30px; font-size: 14px; font-weight: 600; cursor: pointer; text-decoration: none;">Continue</a>
        </div>
    </div>

    <!-- Payment & tracking script -->
    <script>
        let currentAmount = 0;
        let currentPlanName = '';
        let currentCourseUrl = '';
        let customerName = '';
        let customerEmail = '';
        let customerPhone = '';
        let razorpayLoaded = false;

        function loadRazorpay() {
            return new Promise((resolve, reject) => {
                if (typeof Razorpay !== 'undefined') { razorpayLoaded = true; resolve(); return; }
                const script = document.createElement('script');
                script.src = 'https://checkout.razorpay.com/v1/checkout.js';
                script.onload = () => { razorpayLoaded = true; resolve(); };
                script.onerror = () => reject(new Error('Failed to load payment system. Please disable ad blocker and refresh the page.'));
                document.body.appendChild(script);
            });
        }

        loadRazorpay().catch(err => console.warn('Initial Razorpay load failed:', err.message));

        function generateEventID() {
            return 'evt_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
        }

        let pricingViewed = false;
        const pricingSection = document.getElementById('pricing');
        if (pricingSection) {
            const pricingObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !pricingViewed) {
                        pricingViewed = true;
                        const eventID = generateEventID();
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({ 'event': 'viewContent', 'content_name': 'Startup Masterclass Pricing', 'content_category': 'Course', 'content_type': 'product', 'content_ids': ['startup-masterclass-2026'], 'value': 199, 'currency': 'INR', 'eventID': eventID });
                        if (typeof fbq !== 'undefined') { fbq('track', 'ViewContent', { content_name: 'Startup Masterclass Pricing', content_category: 'Course', content_type: 'product', content_ids: ['startup-masterclass-2026'], value: 199, currency: 'INR' }, {eventID: eventID}); }
                        if (typeof gtag !== 'undefined') { gtag('event', 'view_item', { currency: 'INR', value: 199, items: [{ item_id: 'startup-masterclass-2026', item_name: 'Startup Masterclass Pricing', item_category: 'Course', price: 199 }] }); }
                    }
                });
            }, { threshold: 0.3 });
            pricingObserver.observe(pricingSection);
        }

        function initiatePayment(amountInPaise, planName, courseUrl) {
            currentAmount = amountInPaise;
            currentPlanName = planName;
            currentCourseUrl = courseUrl || '';
            const productId = planName.includes('Advanced') ? 'advanced-plan-2026' : 'standard-plan-2026';
            const eventIDCheckout = generateEventID();
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({ 'event': 'initiateCheckout', 'content_name': planName, 'content_ids': [productId], 'content_type': 'product', 'value': amountInPaise / 100, 'currency': 'INR', 'num_items': 1, 'eventID': eventIDCheckout });
            if (typeof fbq !== 'undefined') { fbq('track', 'InitiateCheckout', { content_name: planName, content_category: 'Course', content_ids: [productId], content_type: 'product', value: amountInPaise / 100, currency: 'INR', num_items: 1 }, {eventID: eventIDCheckout}); }
            if (typeof gtag !== 'undefined') { gtag('event', 'begin_checkout', { currency: 'INR', value: amountInPaise / 100, items: [{ item_id: productId, item_name: planName, item_category: 'Course', price: amountInPaise / 100, quantity: 1 }] }); }
            document.getElementById('formPlanName').textContent = planName + ' - ₹' + (amountInPaise / 100).toLocaleString('en-IN');
            document.getElementById('enrollForm').reset();
            document.getElementById('contactModal').style.display = 'flex';
            const eventIDCart = generateEventID();
            window.dataLayer.push({ 'event': 'addToCart', 'content_name': planName, 'content_ids': [productId], 'content_type': 'product', 'value': amountInPaise / 100, 'currency': 'INR', 'num_items': 1, 'eventID': eventIDCart });
            if (typeof fbq !== 'undefined') { fbq('track', 'AddToCart', { content_name: planName, content_category: 'Course', content_ids: [productId], content_type: 'product', value: amountInPaise / 100, currency: 'INR', num_items: 1 }, {eventID: eventIDCart}); }
            if (typeof gtag !== 'undefined') { gtag('event', 'add_to_cart', { currency: 'INR', value: amountInPaise / 100, items: [{ item_id: productId, item_name: planName, item_category: 'Course', price: amountInPaise / 100, quantity: 1 }] }); }
        }

        function closeContactModal() {
            document.getElementById('contactModal').style.display = 'none';
        }

        async function submitEnrollForm(e) {
            e.preventDefault();
            customerName = document.getElementById('customerName').value;
            customerEmail = document.getElementById('customerEmail').value;
            customerPhone = document.getElementById('customerPhone').value;
            const productId = currentPlanName.includes('Advanced') ? 'advanced-plan-2026' : 'standard-plan-2026';
            const eventIDLead = generateEventID();

            async function hashData(data) {
                const msgBuffer = new TextEncoder().encode(data.toLowerCase().trim());
                const hashBuffer = await crypto.subtle.digest('SHA-256', msgBuffer);
                return Array.from(new Uint8Array(hashBuffer)).map(b => b.toString(16).padStart(2, '0')).join('');
            }

            let hashedEmail = '', hashedPhone = '';
            try {
                hashedEmail = await hashData(customerEmail);
                hashedPhone = await hashData(customerPhone.replace(/\D/g, ''));
            } catch (err) { console.warn('Hashing error:', err); }

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({ 'event': 'lead', 'content_name': currentPlanName, 'content_ids': [productId], 'content_type': 'product', 'value': currentAmount / 100, 'currency': 'INR', 'eventID': eventIDLead, 'user_data': { 'em': hashedEmail, 'ph': hashedPhone } });
            if (typeof fbq !== 'undefined') { fbq('track', 'Lead', { content_name: currentPlanName, content_category: 'Course', content_ids: [productId], content_type: 'product', value: currentAmount / 100, currency: 'INR' }, { eventID: eventIDLead, em: hashedEmail, ph: hashedPhone }); }
            if (typeof gtag !== 'undefined') { gtag('event', 'generate_lead', { currency: 'INR', value: currentAmount / 100, items: [{ item_id: productId, item_name: currentPlanName, item_category: 'Course' }] }); }

            try {
                const pageUrl = window.location.href;
                const urlParams = new URLSearchParams(window.location.search);
                await fetch('send-webhook.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name: customerName, email: customerEmail, phone: customerPhone, plan_name: currentPlanName, course_url: currentCourseUrl, amount: currentAmount / 100, payment_id: 'pending', order_id: 'pending', event_type: 'lead_submitted', page_url: pageUrl, utm_source: urlParams.get('utm_source') || '', utm_medium: urlParams.get('utm_medium') || '', utm_campaign: urlParams.get('utm_campaign') || '', utm_term: urlParams.get('utm_term') || '', utm_content: urlParams.get('utm_content') || '', referrer: document.referrer || '' })
                });
            } catch (webhookError) { console.error('Lead webhook error:', webhookError); }

            closeContactModal();

            try {
                const response = await fetch('create-order.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ amount: currentAmount, plan_name: currentPlanName, course_url: currentCourseUrl, customer_name: customerName, customer_email: customerEmail, customer_phone: customerPhone })
                });
                if (!response.ok) { const errorText = await response.text(); alert('Server error (' + response.status + '): ' + errorText); return; }
                let data;
                try { data = await response.json(); } catch (jsonError) { alert('Invalid server response. Check console for details.'); return; }
                if (!data.success) { alert('Error creating order: ' + (data.error || 'Unknown error')); return; }

                const options = {
                    key: data.key_id, amount: data.amount, currency: data.currency,
                    name: 'School of 7', description: currentPlanName, order_id: data.order_id,
                    prefill: { name: customerName, email: customerEmail, contact: customerPhone },
                    theme: { color: '#4e6a47' },
                    handler: async function(response) {
                        const params = new URLSearchParams({ plan: currentPlanName, amount: (currentAmount / 100), pid: response.razorpay_payment_id, oid: response.razorpay_order_id });
                        window.location.href = '/thankyou?' + params.toString();
                    },
                    modal: { ondismiss: function() { console.log('Checkout closed'); } }
                };

                if (typeof Razorpay === 'undefined') {
                    try { await loadRazorpay(); } catch (loadError) { alert('Unable to load payment system. Please:\n1. Disable any ad blocker\n2. Check your internet connection\n3. Refresh the page and try again'); return; }
                }

                const rzp = new Razorpay(options);
                rzp.on('payment.failed', function() { alert('Payment failed. Please try again.'); });

                const eventIDPayment = generateEventID();
                window.dataLayer.push({ 'event': 'addPaymentInfo', 'content_name': currentPlanName, 'content_ids': [productId], 'content_type': 'product', 'value': currentAmount / 100, 'currency': 'INR', 'order_id': data.order_id, 'eventID': eventIDPayment });
                if (typeof fbq !== 'undefined') { fbq('track', 'AddPaymentInfo', { content_name: currentPlanName, content_category: 'Course', content_ids: [productId], content_type: 'product', value: currentAmount / 100, currency: 'INR' }, {eventID: eventIDPayment}); }
                if (typeof gtag !== 'undefined') { gtag('event', 'add_payment_info', { currency: 'INR', value: currentAmount / 100, items: [{ item_id: productId, item_name: currentPlanName, item_category: 'Course', price: currentAmount / 100, quantity: 1 }] }); }

                rzp.open();
            } catch (error) { alert('Something went wrong: ' + error.message + '\n\nPlease check the browser console (F12) for details.'); }
            return false;
        }
    </script>

    <!-- DataLayer init -->
    <script>window.dataLayer = window.dataLayer || [];</script>

    <!-- Facebook Pixel -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '879330084480824');
        fbq('track', 'PageView', {}, { eventID: 'pageview_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9) });
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=879330084480824&ev=PageView&noscript=1"/></noscript>

    <!-- Google Analytics 4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6QJHLP6W66"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-6QJHLP6W66');
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Startup Masterclass India",
      "description": "Learn how to start and scale a startup in 8 modules and 8 hours. Covers idea validation, MVP, pricing, fundraising, co-founder equity split, and ESOPs.",
      "url": "https://schoolof7.com",
      "provider": {
        "@type": "Organization",
        "name": "School of 7",
        "url": "https://schoolof7.com",
        "logo": "https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/sof.png"
      },
      "offers": {
        "@type": "Offer",
        "price": "199",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "https://schoolof7.com/#pricing"
      },
      "hasCourseInstance": {
        "@type": "CourseInstance",
        "courseMode": "online",
        "inLanguage": "en",
        "courseWorkload": "PT2H"
      },
      "teaches": [
        "How to find and validate startup ideas",
        "Minimum Viable Product (MVP)",
        "Startup pricing strategy",
        "Product Market Fit",
        "Startup fundraising in India",
        "Co-founder equity split",
        "ESOPs",
        "Startup marketing strategy"
      ],
      "educationalLevel": "Beginner to Advanced",
      "timeRequired": "PT2H"
    }
    </script>

</body>
</html>
