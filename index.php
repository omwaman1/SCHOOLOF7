<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Masterclass | School of 7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Barlow+Condensed:wght@500;600;700;800&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
            <a href="#">CURRICULUM</a>
            <a href="#testimonials">TESTIMONIALS</a>
        </div>
        <div class="logo">
            <a href="#">SCHOOL OF 7</a>
        </div>
        <div class="nav-right">
            <a href="#">INQUIRE NOW</a>
            <a href="https://login.schoolof7.com/t/allcourses">LOGIN</a>
        </div>
    </header>
    
    <!-- Mobile Dropdown Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#">CURRICULUM</a>
        <a href="#testimonials">TESTIMONIALS</a>
        <a href="#">INQUIRE NOW</a>
        <a href="https://login.schoolof7.com/t/allcourses">LOGIN</a>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-video-container">
            <!-- Desktop Video -->
            <video autoplay loop muted playsinline class="hero-video hero-video-desktop" id="heroVideoDesktop" preload="auto">
                <source src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/home%20banner%20desktop.mp4" type="video/mp4">
            </video>
            <!-- Mobile Video -->
            <video autoplay loop muted playsinline class="hero-video hero-video-mobile" id="heroVideoMobile" preload="auto">
                <source src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/Home%20banner%20mbl.mp4" type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
            <button class="video-control" id="video-toggle">II</button>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">UNLEASH THE FOUNDER <br>WITHIN YOU</h1>
            <p class="hero-subtitle">The ultimate guide to scaling your business online.
            </p>
            <div class="hero-actions">
                <button class="btn btn--grey">START LEARNING</button>
            </div>
        </div>
    </section>

    <!-- Feature Section: Why This Course -->
    <section class="feature-section">
        <div class="feature-content">
            <h3 class="feature-title">Your Masterclass To STARTUP</h3>
            <p class="feature-description">" Don't Start a Business Blind - Buy the Map "</p>
            <button class="btn btn--outline-dark btn--sm">Let's Learn</button>
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
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%201.png" alt="Building Product" class="card-img-default">
                    <div class="card-hover-overlay">
                        <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%201a.png" alt="Basic Access Hover" class="card-img-hover">
                        <button class="buy-btn">Join the Program</button>
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
                    <span class="badge">ideas noise</span>
                    <h3 class="card-big-title">idea</h3>
                    <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%202.png" alt="Figuring Startup Idea" class="card-img-default">
                    <div class="card-hover-overlay">
                        <img src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/image%202a.png" alt="Pro Hover" class="card-img-hover">
                        <button class="buy-btn">Let's Validate Ideas</button>
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
                        <button class="buy-btn">Learn to Scale</button>
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
            <video controls preload="metadata" id="coursePreviewVideo">
                <source src="https://pub-29a82b1a8c4f45c1a62aa880ed0adcc0.r2.dev/The_Reasons_why_you_should_choose_our_Masterclass_to_Startup_1080P.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-play-btn" id="videoPlayBtn">▶</div>
            <h3 class="video-caption">" Your Blueprint to Online Success "</h3>
        </div>
        <p class="video-help-quote">" Your startup playbook - Simplified "</p>
    </section>

    <!-- Section 7: Testimonials -->
    <section class="section testimonials-section" id="testimonials">
        <div class="testimonials-header">
            <div class="testimonials-title-group">
                <h3 class="testimonials-title">school of 7<span class="plus">+</span> testimonials</h3>
                <p class="students-counter"><span class="counter" data-target="63345">0</span> students enrolled</p>
            </div>
            <a href="#" class="btn btn--outline-dark btn--xs">FIND US ON SOCIAL</a>
        </div>
        <div class="ugc-carousel-wrapper">
            <div class="ugc-carousel" id="ugcCarousel">
                <!-- UGC Video Item 1 -->
                <div class="ugc-item" data-index="0">
                    <video src="images/hero-video.mp4" poster="images/audience-1.jpg" muted loop playsinline></video>
                    <div class="play-icon">▶</div>
                </div>
                <!-- UGC Video Item 2 -->
                <div class="ugc-item" data-index="1">
                    <video src="images/hero-video.mp4" poster="images/audience-2.jpg" muted loop playsinline></video>
                    <div class="play-icon">▶</div>
                </div>
                <!-- UGC Video Item 3 -->
                <div class="ugc-item" data-index="2">
                    <video src="images/hero-video.mp4" poster="images/audience-3.jpg" muted loop playsinline></video>
                    <div class="play-icon">▶</div>
                </div>
                <!-- UGC Video Item 4 -->
                <div class="ugc-item" data-index="3">
                    <video src="images/hero-video.mp4" poster="images/audience-4.jpg" muted loop playsinline></video>
                    <div class="play-icon">▶</div>
                </div>
                <!-- UGC Video Item 5 -->
                <div class="ugc-item" data-index="4">
                    <video src="images/hero-video.mp4" poster="images/mentor.jpg" muted loop playsinline></video>
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
    <section class="section curriculum-section">
        <div class="curriculum-content">
            <h2 class="curriculum-heading"><span class="heading-bold">COURSE </span><br><span class="heading-bold">CURRICULUM</span> </h2>
            <div class="accordion curriculum-accordion">
                <div class="accordion-item active">
                    <button class="accordion-header">MODULE 1: Shortlisting Startup Ideas <span class="icon-circle">-</span></button>
                    <div class="accordion-body">✓ How to find ideas in the first place?
✓ 4 categories of startup ideas
✓ How to improve your research abilities?
✓ Your personal assessment as a founder
✓ Home Work</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 2: Finalising the Right Startup Idea <span class="icon-circle">+</span></button>
                    <div class="accordion-body">How to create compelling content that engages and converts. Copywriting secrets and visual storytelling.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 3: Creating Your First Product/Service Version <span class="icon-circle">+</span></button>
                    <div class="accordion-body">Mastering Facebook and Google Ads. Funnel building and ROAS optimization.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 4: Pricing Your Product/Service <span class="icon-circle">+</span></button>
                    <div class="accordion-body">Reading the data, understanding key metrics, and knowing when and how to scale your budget.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 5: Building Your Founding Team <span class="icon-circle">+</span></button>
                    <div class="accordion-body">Reading the data, understanding key metrics, and knowing when and how to scale your budget.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 6: Scaling Your Product/Service <span class="icon-circle">+</span></button>
                    <div class="accordion-body">Reading the data, understanding key metrics, and knowing when and how to scale your budget.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 7: Marketing Your Product/Service <span class="icon-circle">+</span></button>
                    <div class="accordion-body">Reading the data, understanding key metrics, and knowing when and how to scale your budget.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 8: Fundraising | Co-Founder Equity Split | ESOPs <span class="icon-circle">+</span></button>
                    <div class="accordion-body">Reading the data, understanding key metrics, and knowing when and how to scale your budget.</div>
                </div>
            </div>
        </div>
        <div class="curriculum-image">
            <img src="images/feature-course.jpg" alt="Course Syllabus">
        </div>
    </section>

    <!-- Section 9: Target Audience -->
    <section class="section audience-section">
        <h2 class="audience-title">who's this <em>masterclass</em> for?</h2>
        <div class="audience-carousel-wrapper">
            <button class="audience-nav-btn prev" id="audiencePrev">‹</button>
            <div class="audience-grid" id="audienceCarousel">
                <div class="audience-card">
                    <img src="images/audience-1.jpg" alt="Entrepreneurs">
                    <div class="audience-info">
                        <h4>ENTREPRENEURS</h4>
                        <p>business owners looking to scale online</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="images/audience-2.jpg" alt="Freelancers">
                    <div class="audience-info">
                        <h4>FREELANCERS</h4>
                        <p>marketers wanting to upskill & charge more</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="images/audience-3.jpg" alt="Students">
                    <div class="audience-info">
                        <h4>STUDENTS</h4>
                        <p>building a career in digital media</p>
                    </div>
                </div>
                <div class="audience-card">
                    <img src="images/audience-4.jpg" alt="Creatives">
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
    <section class="section mentor-section">
        <div class="mentor-content">
            <h3 class="mentor-label">Your Mentor</h3>
            <h2 class="mentor-headline">To <span class="highlight">INSPIRE</span>, <span class="highlight">EDUCATE</span>, and <span class="highlight">EMPOWER</span> the next generation of BUSINESS leaders for lasting results that reveal themselves over time.</h2>
            <p class="mentor-name">Mr 7</p>
            <button class="btn btn--outline-dark btn--sm">OUR VALUES</button>
            <div class="mentor-links">
                <div class="mentor-link active" data-text="To <span class='highlight'>INSPIRE</span>, <span class='highlight'>EDUCATE</span>, and <span class='highlight'>EMPOWER</span> the next generation of BUSINESS leaders for lasting results that reveal themselves over time.">mission</div>
                <div class="mentor-link" data-text="We believe in <span class='highlight'>LEARNING BY DOING</span>. Our philosophy centers on practical knowledge, real-world applications, and building a mindset that embraces <span class='highlight'>INNOVATION</span> and continuous growth.">philosophy</div>
                <div class="mentor-link" data-text="Building businesses that <span class='highlight'>LAST</span>. We focus on sustainable growth strategies, ethical practices, and creating <span class='highlight'>LONG-TERM VALUE</span> for entrepreneurs and communities alike.">sustainability</div>
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
            <div class="course-card premium">
                <div class="best-value-badge">BEST VALUE</div>
                <div class="card-icon">📹</div>
                <h3 class="plan-title">Basic Video Plan</h3>
                <p class="plan-lang">English & Hindi | Limited Access</p>
                <div class="plan-price">₹1,799/-</div>
                <ul class="plan-features">
                    <li class="check-icon">Pre-recorded Video Lectures</li>
                    <li class="cross">\"Learn With AI\" Sections in Every Module</li>
                    <li class="cross">Assignments & Evaluation Guide</li>
                    <li class="cross">Downloadable PDF Course Notes</li>
                    <li class="cross">Course Virtual Community</li>
                    <li class="cross">Course Upgrades at Zero Cost</li>
                    <li class="check-icon">Certificate of Completion</li>
                </ul>
                <button class="btn btn--blue-brand">Enroll Now</button>
                <p class="refund-policy">100% Refund Policy</p>
            </div>

            <!-- Standard Learning Plan -->
            <div class="course-card standard">
                <div class="card-icon">🕐</div>
                <h3 class="plan-title">Standard Learning Plan</h3>
                <p class="plan-lang">English & Hindi | Essential Access</p>
                <div class="plan-price">₹2,499/-</div>
                <ul class="plan-features">
                    <li class="check">Pre-recorded Video Lectures</li>
                    <li class="cross">\"Learn With AI\" Sections in Every Module</li>
                    <li class="check">Assignments & Evaluation Guide</li>
                    <li class="check">Downloadable PDF Course Notes</li>
                    <li class="cross">Course Virtual Community</li>
                    <li class="cross">Course Upgrades at Zero Cost</li>
                    <li class="check">Certificate of Completion</li>
                </ul>
                <button class="btn btn--blue-light">Enroll Now</button>
                <p class="refund-policy">100% Refund Policy</p>
            </div>
        </div>
    </section>

    <!-- Section 12: FAQ -->
    <section class="section faq-section">
        <div class="faq-content">
            <h2 class="faq-title">FAQ</h2>
            <p class="faq-subtitle">Find out more about the Masterclass.</p>

            <div class="accordion faq-accordion">
                <div class="accordion-item">
                    <button class="accordion-header">DO I NEED PRIOR EXPERIENCE?</button>
                    <div class="accordion-body">No, this course starts from the basics and moves to advanced topics.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">HOW LONG DO I HAVE ACCESS?</button>
                    <div class="accordion-body">You get lifetime access to the course content and all future updates.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">IS THERE A CERTIFICATE?</button>
                    <div class="accordion-body">Yes, you will receive a verified certificate upon completion.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WHAT IS THE REFUND POLICY?</button>
                    <div class="accordion-body">We offer a 30-day no-questions-asked money-back guarantee.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">WILL MORE MODULES BE ADDED?</button>
                    <div class="accordion-body">Yes, we regularly update the course with new content at no extra cost.</div>
                </div>
            </div>
        </div>
        <div class="faq-image">
            <img src="images/faq.jpg" alt="Masterclass FAQ">
        </div>
    </section>

    <!-- Section 13: Promise (Certificate) -->
    <section class="section promise-section">
        <div class="promise-image">
            <img src="images/promise.jpg" alt="Certificate of Completion">
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
                    <p>• In Business - will help to strategize<br>• At Job - Validate your skills to Employeers & Clients</p>
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
    <div class="sticky-bar">
        <div class="sticky-content">
            <img src="images/mentor.jpg" alt="Instructor" class="sticky-avatar">
            <div class="sticky-info">
                <h5>Startup Masterclass</h5>
                <p>47K+ Students Enrolled</p>
            </div>
        </div>
        <div class="sticky-actions">
            <span class="old-price">$7999</span>
            <span class="new-price">$1499</span>
            <a href="#pricing" class="btn btn--red">Enroll Now</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-brand">
            <h2 class="footer-logo">School of 7</h2>
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
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Mentors</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>SOCIAL</h4>
                    <ul>
                        <li><a href="#">📷 Instagram</a></li>
                        <li><a href="#">▶ Youtube</a></li>
                        <li><a href="#">🎵 TikTok</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>OFFICIAL</h4>
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Accessibility</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Events</a></li>
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
</body>

</html>