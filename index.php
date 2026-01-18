<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Masterclass | School of 7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Barlow+Condensed:wght@500;600;700;800&family=Luckiest+Guy&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .mentor-section, #mentor, section.mentor-section, section#mentor {
            background-color: #e7eef8 !important;
            background: #e7eef8 !important;
        }
    </style>
</head>

<body>

    <!-- Notification Bar - At very top -->
    <!-- <div class="notification-bar">
        <span>JOIN 47,000++ STUDENTS • ENROLLMENT CLOSING SOON • <a href="#">SECURE YOUR SPOT</a></span>
    </div> -->

    <!-- Sticky Header -->
    <header class="site-header">
        <!-- Hamburger Menu (Mobile only) -->
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
            <a href="https://login.schoolof7.com/s/page/cb1/edit?url=contactus&theme=theme3">ENQUIRE NOW</a>
            <a href="https://login.schoolof7.com/t/allcourses">LOGIN</a>
        </div>
    </header>
    
    <!-- Mobile Dropdown Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#curriculum">CURRICULUM</a>
        <a href="#testimonials">TESTIMONIALS</a>
        <a href="#">INQUIRE NOW</a>
        <a href="https://login.schoolof7.com/t/allcourses">LOGIN</a>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-video-container">
            <!-- Desktop Video -->
            <video autoplay loop muted playsinline class="hero-video hero-video-desktop" id="heroVideoDesktop" preload="auto">
                <source src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/bannervideodesktop.mp4" type="video/mp4">
            </video>
            <!-- Mobile Video -->
            <video autoplay loop muted playsinline class="hero-video hero-video-mobile" id="heroVideoMobile" preload="auto">
                <source src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/bannervideomobile.mp4" type="video/mp4">
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
            <h1 class="hero-title">UNLEASH THE FOUNDER <br>WITHIN YOU</h1>
            <p class="hero-subtitle">The ultimate guide to scaling your business online.
            </p>
            <div class="hero-actions">
                <a href="#pricing" class="btn btn--grey">START LEARNING</a>
            </div>
        </div>
    </section>

    <!-- Feature Section: Why This Course -->
    <section class="feature-section">
        <div class="feature-content">
            <h3 class="feature-title">Your Masterclass<br>To Startup</h3>
            <p class="feature-description">8 Modules. 8 Hours. Business Ready.</p>
            <a href="#pricing" class="btn btn--outline-dark btn--sm">Let's Learn</a>
        </div>
        <div class="feature-image">
            <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/yourmasterclasstostartup.webp" alt="Digital Workshop">
            <button class="zoom-btn">+</button>
        </div>
    </section>

    <!-- Section 5: Pricing Plans -->
    <section class="section pricing-section">
        <div class="section-header">
            <h2 class="section-title">Are You Struggling With?</h2>
            <p class="section-subtitle">Choose The Path That Fits Your <em>goals</em></p>
        </div>
        <div class="pricing-grid" id="pricingCarousel">
            <!-- Card 1 -->
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">product chef</span>
                    <h3 class="card-big-title">product</h3>
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%202.png" alt="Building Product" class="card-img-default">
                    <div class="card-hover-overlay">
                        <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%202a.png" alt="Basic Access Hover" class="card-img-hover">
                        <a href="#pricing" class="buy-btn">Join the Program</a>
                    </div>
                    <span class="swipe-hint">swipe</span>
                </div>
                <div class="card-details">
                    <div class="rating">★★★★☆ (2,002)</div>
                    <div class="card-row">
                        <h4 class="product-name">BUILDING PRODUCT</h4>
                        <span class="price">$199</span>
                    </div>
                    <p class="product-desc">Approach to Product Market Fit</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">idea noise</span>
                    <h3 class="card-big-title">idea</h3>
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%201.png" alt="Figuring Startup Idea" class="card-img-default">
                    <div class="card-hover-overlay">
                        <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%201a.png" alt="Pro Hover" class="card-img-hover">
                        <a href="#pricing" class="buy-btn">Let's Validate Ideas</a>
                    </div>
                    <span class="swipe-hint">swipe</span>
                </div>
                <div class="card-details">
                    <div class="rating">★★★★½ (15,318)</div>
                    <div class="card-row">
                        <h4 class="product-name">FIGURING STARTUP IDEAS</h4>
                        <span class="price">$299</span>
                    </div>
                    <p class="product-desc">Learn Frameworks & Tools To Analyse Your Idea</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">money</span>
                    <h3 class="card-big-title">finance</h3>
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%203.png" alt="Fund Raising" class="card-img-default">
                    <div class="card-hover-overlay">
                        <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%203a.png" alt="Elite Hover" class="card-img-hover">
                        <a href="#pricing" class="buy-btn">Learn to Scale</a>
                    </div>
                    <span class="swipe-hint">swipe</span>
                </div>
                <div class="card-details">
                    <div class="rating">★★★★★ (13,231)</div>
                    <div class="card-row">
                        <h4 class="product-name">FUND RAISING</h4>
                        <span class="price">$999</span>
                    </div>
                    <p class="product-desc">Right Time & How to Raise Funds</p>
                </div>
            </div>
        </div>
        <!-- Carousel Dots (visible on mobile) -->
        <div class="carousel-dots" id="carouselDots"></div>
    </section>

    <!-- Section 6: Video Course Preview -->
    <section class="section video-help-section">
        <h2 class="video-help-title">How This Course Will Help You?</h2>
        <div class="video-container-framed">
            <video controls muted preload="metadata" id="coursePreviewVideo" poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/thumbnail%20video%20image.webp">
                <source src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/howthiscoursewillhelpyou.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-play-btn" id="videoPlayBtn">▶</div>
            <h3 class="video-caption" style="color: #67635f;">" Don't Start a Business Blind - Buy the Map "</h3>
        </div>
    </section>

    <!-- Section 7: Testimonials -->
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
                <!-- UGC Video Item 1 -->
                <div class="ugc-item" data-index="0">
                    <video controls src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t1.mp4" preload="metadata" muted loop playsinline poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t1.webp"></video>
                    <div class="play-icon">▶</div>
                </div>
                <!-- UGC Video Item 2 -->
                <div class="ugc-item" data-index="1">
                    <video controls src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t2.mp4" preload="metadata" muted loop playsinline poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t2.webp"></video>
                    <div class="play-icon">▶</div>
                </div>
                <!-- UGC Video Item 3 -->
                <div class="ugc-item" data-index="2">
                    <video controls src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t3.mp4" preload="metadata" muted loop playsinline poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t3.webp"></video>
                    <div class="play-icon">▶</div>
                </div>
                <!-- UGC Video Item 4 -->
                <div class="ugc-item" data-index="3">
                    <video controls src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t4.mp4" preload="metadata" muted loop playsinline poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t4.webp"></video>
                    <div class="play-icon">▶</div>
                </div>
                <!-- UGC Video Item 5 -->
                <div class="ugc-item" data-index="4">
                    <video controls src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t5.mp4" preload="metadata" muted loop playsinline poster="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/t5.webp"></video>
                    <div class="play-icon">▶</div>
                </div>
            </div>
        </div>
        <div class="ugc-divider"></div>
        <div class="ugc-nav">
            <button class="ugc-nav-btn prev" id="ugcPrev">‹</button>
            <button class="ugc-nav-btn next" id="ugcNext">›</button>
        </div>
    </section>

    <!-- Section 8: Curriculum -->
    <section class="section curriculum-section" id="curriculum">
        <div class="curriculum-content">
            <h2 class="curriculum-heading"><span class="heading-bold">COURSE </span><br><span class="heading-bold">CURRICULUM</span> </h2>
            <div class="accordion curriculum-accordion">
                <div class="accordion-item active">
                    <button class="accordion-header">MODULE 1: Shortlisting Startup Ideas <span class="icon-circle">-</span></button>
                    <div class="accordion-body">• How to find ideas in the first place?<br>• 4 categories of startup ideas<br>• How to improve your research abilities?<br>• Your personal assessment as a founder<br>• Home Work</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 2: Finalising the Right Startup Idea <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Size - growth - competition framework<br>•  Demand - supply | Demand - value framework<br>• Customer segmentation<br>• Understanding Unit Economics<br>• Demand analysis tools<br>• Live demand analysis via Meta simulation<br>•  Home Work</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 3: Creating Your First Product/Service Version <span class="icon-circle">+</span></button>
                    <div class="accordion-body">•  Minimum Viable Product(MVP): approach & significance<br>•  Unique Selling Point(USP): Analysis for MVP<br>•  Methods for Product/Service manufacturing<br>•  Home Work</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 4: Pricing Your Product/Service <span class="icon-circle">+</span></button>
                    <div class="accordion-body">•  5 Levers to decide the right price<br>•  Consumer Surplus analysis for pricing<br>•  Price analysis via customer segmentation<br>•  Home Work</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 5: Building Your Founding Team <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Co-Founder vs Solopreneur<br>• Product & Team building principles<br>• Best hiring practices<br>• Train yourself to become a CEO<br>• Home Work</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 6: Scaling Your Product/Service <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Understanding Product Market Fit(PMF)<br>• Scaling Product via customer segmentation<br>• Product Cannibalisation strategy<br>• Home Work</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 7: Marketing Your Product/Service <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Organic & Inorganic marketing strategies<br>• Positioning & Perception mapping<br>• How to design ads via customer segmentation<br>• Push - Pull methodology<br>• Brand Generational Fatigue<br>• Home Work</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 8: Fundraising | Co-Founder Equity Split | ESOPs <span class="icon-circle">+</span></button>
                    <div class="accordion-body">• Skepticism around fundraising<br>• Fundraising concepts & principles<br>• When and at which stage should you raise funds?<br>• Analysing company valuation: pre & post fundraising<br>• Fundraising trap/process<br>• Equity split with co-founder<br>• ESOPs sharing/distribution concepts<br>• Home Work</div>
                </div>
            </div>
        </div>
        <div class="curriculum-image">
            <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/course-curriculom.webp" alt="Course Syllabus">
        </div>
    </section>

    <!-- Section 9: Target Audience -->
    <section class="section audience-section">
        <h2 class="audience-title">who's this <em>masterclass</em> for?</h2>
        <div class="audience-carousel-wrapper">
            <button class="audience-nav-btn prev" id="audiencePrev">‹</button>
            <div class="audience-grid" id="audienceCarousel">
                <div class="audience-card">
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/1.webp" alt="Entrepreneurs">
                    <div class="audience-info">
                        <h4>ENTREPRENEURS</h4>
                        <p>business owners looking to scale online</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/2.webp" alt="Freelancers">
                    <div class="audience-info">
                        <h4>FREELANCERS</h4>
                        <p>wanting to upskill & charge more</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/3.webp" alt="Students">
                    <div class="audience-info">
                        <h4>STUDENTS</h4>
                        <p>building a global brand</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/4.webp" alt="Creatives">
                    <div class="audience-info">
                        <h4>CREATIVES</h4>
                        <p>artists wanting to sell their work online</p>
                    </div>
                </div>
            </div>
            <button class="audience-nav-btn next" id="audienceNext">›</button>
        </div>
    </section>

    <!-- Section 10: Mentor -->
    <section class="mentor-section" id="mentor" style="background-color: #e7eef8; border-radius: 16px; margin: 0 0 1rem 0;">
        <div class="mentor-content">
            <h3 class="mentor-label">Your Mentor</h3>
            <h2 class="mentor-headline">To <span class="highlight">INSPIRE</span>, <span class="highlight">EDUCATE</span>, and <span class="highlight">EMPOWER</span> the next generation of BUSINESS leaders for lasting results that reveal themselves over time.</h2>
            <p class="mentor-name">Mr 7</p>
            <button class="btn btn--outline-dark btn--sm">OUR VALUES</button>
            <div class="mentor-links">
                <div class="mentor-link active" data-text="To <span class='highlight'>INSPIRE</span>, <span class='highlight'>EDUCATE</span>, and <span class='highlight'>EMPOWER</span> the next generation of BUSINESS leaders for lasting results that reveal themselves over time.">mission</div>
                <div class="mentor-link" data-text="We believe that <span class='highlight'>MOST STARTUP LAGS</span>, because the founders were never taught about the fundamentals of building a business. Our philosophy centers on <span class='highlight'>FRAMEWORKS, CASE STUDIES, PROBLEMS & SOLUTIONS</span> which makes the founder BUSINESS READY.">philosophy</div>
                <div class="mentor-link" data-text="He is an <span class='highlight'>ENTREPRENEUR & INVESTOR</span>and is an MBA graduate from XLRI Jamshedpur. He has 10+ years of experience in CONSULTING & MENTORING Startups. He is the <span class='highlight'>FOUNDER</span> of School of 7.">about</div>
            </div>
        </div>
        <div class="mentor-image">
            <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/mr7.webp" alt="Mr 7 - Your Mentor">
        </div>
    </section>

    <!-- Section 11: Course Pricing (Blue Cards) -->
    <section class="section course-pricing-section" id="pricing">
        <h2 class="section-title text-center">Choose The Plan</h2>
        <p class="section-subtitle text-center">That <strong>Fits You</strong> <em>Best</em></p>

        <div class="course-pricing-grid">
            <!-- Basic Video Plan - BEST VALUE -->
            <div class="course-card premium" style="background: linear-gradient(to bottom, #36562f, #20331c);">
                <div class="best-value-badge">BEST VALUE</div>
                <div class="card-icon">📹</div>
                <h3 class="plan-title">Basic Video Plan</h3>
                <p class="plan-lang">English | Essential Access</p>
                <div class="plan-price">₹1,899/-</div>
                <ul class="plan-features">
                    <li class="check">Pre-recorded Video Lectures</li>
                    <li class="check">"Learn With AI" Sections in Every Module</li>
                    <li class="check">Assignments & Evaluation Guide</li>
                    <li class="check">Downloadable PDF Course Notes</li>
                    <li class="check">Course Virtual Community</li>
                    <li class="check">Course Upgrades at Zero Cost</li>
                    <li class="check">Certificate of Completion</li>
                </ul>
                <button onclick="initiatePayment(100, 'Basic Video Plan', 'The-Complete-Guide-To-Starting-Up')" class="btn btn--blue-brand">Enroll Now</button>
                <p class="refund-policy">Founder Ready in 8 Modules</p>
            </div>

            <!-- Standard Learning Plan -->
            <div class="course-card standard">
                <div class="card-icon">🕐</div>
                <h3 class="plan-title">Standard Learning Plan</h3>
                <p class="plan-lang">English | Limited Access</p>
                <div class="plan-price">₹1,499/-</div>
                <ul class="plan-features">
                    <li class="check">Pre-recorded Video Lectures</li>
                    <li class="cross">"Learn With AI" Sections in Every Module</li>
                    <li class="check">Assignments & Evaluation Guide</li>
                    <li class="check">Downloadable PDF Course Notes</li>
                    <li class="cross">Course Virtual Community</li>
                    <li class="cross">Course Upgrades at Zero Cost</li>
                    <li class="check">Certificate of Completion</li>
                </ul>
                <button onclick="initiatePayment(200, 'Standard Learning Plan', 'Sub-Variant---The-Complete-Guide-To-Starting-Up-Copy')" class="btn btn--blue-light">Enroll Now</button>
                <p class="refund-policy">Founder Ready in 8 Modules</p>
            </div>
        </div>
    </section>

    <!-- Section 12: FAQ -->
    <section class="section faq-section" id="faq">
        <div class="faq-content">
            <h2 class="faq-title">FAQ</h2>
            <p class="faq-subtitle">Find out more about the Masterclass.</p>

            <div class="accordion faq-accordion">
                <div class="accordion-item">
                    <button class="accordion-header">DO I NEED PRIOR EXPERIENCE?</button>
                    <div class="accordion-body">No, this course starts from the basics and covers all the advanced topics.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">HOW LONG WILL IT TAKE TO GET ACCESS TO THE COURSE?</button>
                    <div class="accordion-body">Your credentials to access the course, will be delivered to your inbox within 5–10 minutes of your purchase. Please check your promotions/updates tab and spam folder as well.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WHAT IS THE TIME COMMITMENT REQUIRED FOR THIS COURSE?</button>
                    <div class="accordion-body">The course is self-paced and will require 8+ hours to complete, similar to other comprehensive business startup courses.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WHAT IS THE COMMUNITY EXPERIENCE IN THE COURSE?</button>
                    <div class="accordion-body">The advanced version of this course includes virtual community access, where students can communicate with each other and school of 7 and clear their doubts & queries.</div>
                </div>
                 <div class="accordion-item">
                    <button class="accordion-header">DOES THE COURSE COME WITH ANY LIVE INTERACTION?</button>
                    <div class="accordion-body">No, this is a self-paced course and doesn't have any live interaction, making it flexible for learners to complete the course at their own pace.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WHAT LANGUAGE IS THE COURSE IN?</button>
                    <div class="accordion-body">The course language is English.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">HOW CAN I CONTACT YOU IN CASE OF DOUBTS OR CONCERNS?</button>
                    <div class="accordion-body">You can mail us at ...</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">HOW LONG DO I HAVE ACCESS TO THIS COURSE?</button>
                    <div class="accordion-body">You get lifetime access to the course content.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">IS THERE A CERTIFICATE?</button>
                    <div class="accordion-body">Yes, you will receive a verified certificate upon completion from School of 7</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WHAT IS THE REFUND POLICY?</button>
                    <div class="accordion-body">There is no refund policy for this course.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WILL MORE MODULES BE ADDED?</button>
                    <div class="accordion-body">Yes, we regularly update the course with new content at no extra cost for advanced learning plan. For Standard learning plan there in no course update.</div>
                </div>
            </div>
        </div>
        <div class="faq-image">
            <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/faq.jpg" alt="Masterclass FAQ">
        </div>
    </section>

    <!-- Section 13: Promise (Certificate) -->
    <section class="section promise-section">
        <div class="promise-image">
            <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/certificate.webp" alt="Certificate of Completion">
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
                    <p>• DEVELOP Business Acumen<br>• Validate Startup Ideas Faster<br>• Better Decision Making</p>
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
            <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/mike.png" alt="Mr 7" class="sticky-avatar" style="width: 70px; height: 70px; border: none; border-radius: 0; margin-top: -35px; object-fit: contain; box-shadow: none;">
            <div class="sticky-info">
                <h5>Startup Masterclass</h5>
                <p>62K+ Students Enrolled</p>
            </div>
        </div>
        <div class="sticky-actions">
            <span class="old-price" style="text-decoration: line-through; font-size: inherit;">₹7999</span>
            <span class="new-price">₹1899</span>
            <a href="#pricing" class="btn btn--red">Enroll Now</a>
        </div>
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
                <p class="privacy-note">By signing up, you agree to our <a href="#">Privacy Policy</a>.</p>
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
                        <li><a href="https://www.instagram.com/mr7_strategy?igsh=ODVvMHd1YjRobGpi" target="_blank" style="display: flex; align-items: center; gap: 8px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink: 0;"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            <span>Instagram</span>
                        </a></li>
                        <li><a href="https://youtube.com/@mr7_strategy?si=miYTemnidraRuAUk" target="_blank" style="display: flex; align-items: center; gap: 8px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink: 0;"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                            <span>YouTube</span>
                        </a></li>
                        <li><a href="https://www.linkedin.com/in/mr7-286047106?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" style="display: flex; align-items: center; gap: 8px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink: 0;"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                            <span>LinkedIn</span>
                        </a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>OFFICIAL</h4>
                    <ul>
                        <li><a href="https://vividh.graphy.com/privacypolicy">Privacy Policy</a></li>
                        <li><a href="https://vividh.graphy.com/termsofuse">Terms & Conditions</a></li>
                        <li><a href="https://vividh.graphy.com/refundpolicy">Refund Policy</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="https://vividh.graphy.com/contactus">Enquire Now</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>SUPPORT</h4>
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

    <script src="script.js"></script>
    <!-- Razorpay Checkout Script - Load before payment code -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <!-- Razorpay Integration -->
    <!-- Contact Form Modal -->
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

    <!-- Success Modal -->
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

    <script>
        let currentAmount = 0;
        let currentPlanName = '';
        let currentCourseUrl = '';
        let customerName = '';
        let customerEmail = '';
        let customerPhone = '';
        let razorpayLoaded = false;
        
        // Dynamic Razorpay Loader
        function loadRazorpay() {
            return new Promise((resolve, reject) => {
                if (typeof Razorpay !== 'undefined') {
                    razorpayLoaded = true;
                    resolve();
                    return;
                }
                
                const script = document.createElement('script');
                script.src = 'https://checkout.razorpay.com/v1/checkout.js';
                script.onload = () => {
                    razorpayLoaded = true;
                    console.log('Razorpay SDK loaded successfully');
                    resolve();
                };
                script.onerror = () => {
                    console.error('Failed to load Razorpay SDK');
                    reject(new Error('Failed to load payment system. Please disable ad blocker and refresh the page.'));
                };
                document.body.appendChild(script);
            });
        }
        
        // Try to load Razorpay when page loads
        loadRazorpay().catch(err => console.warn('Initial Razorpay load failed:', err.message));
        
        function initiatePayment(amountInPaise, planName, courseUrl) {
            currentAmount = amountInPaise;
            currentPlanName = planName;
            currentCourseUrl = courseUrl || '';
            document.getElementById('formPlanName').textContent = planName + ' - ₹' + (amountInPaise / 100).toLocaleString('en-IN');
            document.getElementById('enrollForm').reset();
            document.getElementById('contactModal').style.display = 'flex';
        }
        
        function closeContactModal() {
            document.getElementById('contactModal').style.display = 'none';
        }
        
        async function submitEnrollForm(e) {
            e.preventDefault();
            
            customerName = document.getElementById('customerName').value;
            customerEmail = document.getElementById('customerEmail').value;
            customerPhone = document.getElementById('customerPhone').value;
            
            closeContactModal();
            
            try {
                console.log('Starting payment for:', currentPlanName, 'Amount:', currentAmount);
                
                const response = await fetch('create-order.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        amount: currentAmount,
                        plan_name: currentPlanName,
                        course_url: currentCourseUrl
                    })
                });
                
                console.log('Response status:', response.status);
                
                if (!response.ok) {
                    const errorText = await response.text();
                    console.error('HTTP Error:', response.status, errorText);
                    alert('Server error (' + response.status + '): ' + errorText);
                    return;
                }
                
                let data;
                try {
                    data = await response.json();
                } catch (jsonError) {
                    const responseText = await response.text();
                    console.error('JSON Parse Error:', jsonError, 'Response:', responseText);
                    alert('Invalid server response. Check console for details.');
                    return;
                }
                
                console.log('Order response:', data);
                
                if (!data.success) {
                    console.error('Order creation failed:', data);
                    alert('Error creating order: ' + (data.error || 'Unknown error'));
                    return;
                }
                
                const options = {
                    key: data.key_id,
                    amount: data.amount,
                    currency: data.currency,
                    name: 'School of 7',
                    description: currentPlanName,
                    order_id: data.order_id,
                    prefill: {
                        name: customerName,
                        email: customerEmail,
                        contact: customerPhone
                    },
                    theme: {
                        color: '#4e6a47'
                    },
                    handler: async function(response) {
                        // Send data to webhook via server-side PHP
                        try {
                            await fetch('send-webhook.php', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json' },
                                body: JSON.stringify({
                                    name: customerName,
                                    email: customerEmail,
                                    phone: customerPhone,
                                    plan_name: currentPlanName,
                                    amount: currentAmount / 100,
                                    payment_id: response.razorpay_payment_id,
                                    order_id: response.razorpay_order_id
                                })
                            });
                        } catch (webhookError) {
                            console.error('Webhook error:', webhookError);
                        }
                        
                        // Redirect to thank you page
                        window.location.href = '/thankyou';
                    },
                    modal: {
                        ondismiss: function() {
                            console.log('Checkout closed');
                        }
                    }
                };
                
                // Check if Razorpay is loaded, try to load if not
                if (typeof Razorpay === 'undefined') {
                    console.log('Razorpay not found, attempting to load...');
                    try {
                        await loadRazorpay();
                    } catch (loadError) {
                        alert('Unable to load payment system. Please:\n1. Disable any ad blocker\n2. Check your internet connection\n3. Refresh the page and try again');
                        console.error('Razorpay load failed:', loadError);
                        return;
                    }
                }
                
                const rzp = new Razorpay(options);
                rzp.on('payment.failed', function(response) {
                    alert('Payment failed. Please try again.');
                });
                rzp.open();
                
            } catch (error) {
                console.error('Payment error:', error);
                alert('Something went wrong: ' + error.message + '\n\nPlease check the browser console (F12) for details.');
            }
            
            return false;
        }
    </script>
</body>

</html>