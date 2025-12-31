<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Masterclass | School of 7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Barlow+Condensed:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Preloader - Shows until website is fully loaded -->
    <div id="preloader">
        <div class="preloader-content">
            <div class="preloader-spinner"></div>
            <p class="preloader-text">Loading...</p>
        </div>
    </div>

    <!-- Notification Bar - At very top -->
    <div class="notification-bar">
        <span>JOIN 47,000+ STUDENTS • ENROLLMENT CLOSING SOON • <a href="#">SECURE YOUR SPOT</a></span>
    </div>

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
            <a href="#">SCHOOLOF7</a>
        </div>
        <div class="nav-right">
            <a href="https://login.schoolof7.com/t/allcourses">LOGIN</a>
            <a href="#pricing">ENROLL NOW</a>
            <a href="#" class="cart-icon">🛒 (0)</a>
        </div>
        
        <!-- Mobile Icons -->
        <div class="mobile-icons">
            <a href="#" class="cart-icon">🛒</a>
        </div>
    </header>
    
    <!-- Mobile Dropdown Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#">CURRICULUM</a>
        <a href="#testimonials">TESTIMONIALS</a>
        <a href="https://login.schoolof7.com/t/allcourses">LOGIN</a>
        <a href="#pricing">ENROLL NOW</a>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-video-container">
            <video autoplay loop muted playsinline class="hero-video" id="heroVideo" preload="auto">
                <source src="https://pub-f50d30ee223d4536a0ce3f175f922495.r2.dev/hero-video.mp4" type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
            <button class="video-control" id="video-toggle">II</button>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">UNLOCK YOUR<br>DIGITAL POTENTIAL.</h1>
            <p class="hero-subtitle">The ultimate guide to mastering digital marketing and scaling your business online.
            </p>
            <div class="hero-actions">
                <button class="btn btn--grey">START LEARNING</button>
            </div>
        </div>
    </section>

    <!-- Feature Section: Why This Course -->
    <section class="feature-section">
        <div class="feature-content">
            <h3 class="feature-title">WHY MASTER DIGITAL SKILLS?</h3>
            <p class="feature-description">In today's economy, digital attention is the new currency. Learn the
                strategies that top brands use to dominate their markets.</p>
            <button class="btn btn--outline-dark btn--sm">VIEW SYLLABUS</button>
        </div>
        <div class="feature-image">
            <img src="images/feature-course.jpg" alt="Digital Workshop">
            <button class="zoom-btn">+</button>
        </div>
    </section>

    <!-- Section 5: Pricing Plans -->
    <section class="section pricing-section">
        <div class="section-header">
            <h2 class="section-title">Investment Plans</h2>
            <p class="section-subtitle">Choose The Path That Fits Your <em>goals</em></p>
        </div>
        <div class="pricing-grid" id="pricingCarousel">
            <!-- Card 1 -->
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">self-paced</span>
                    <h3 class="card-big-title">basic</h3>
                    <img src="images/audience-1.jpg" alt="Basic Access" class="card-img-default">
                    <div class="card-hover-overlay">
                        <img src="images/audience-2.jpg" alt="Basic Access Hover" class="card-img-hover">
                        <button class="buy-btn">BUY BASIC - $199</button>
                    </div>
                </div>
                <div class="card-details">
                    <div class="rating">★★★★☆ (2,002)</div>
                    <div class="card-row">
                        <h4 class="product-name">BASIC ACCESS</h4>
                        <span class="price">$199</span>
                    </div>
                    <p class="product-desc">Access to all video modules</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">best seller</span>
                    <h3 class="card-big-title">pro</h3>
                    <img src="images/audience-3.jpg" alt="Pro Masterclass" class="card-img-default">
                    <div class="card-hover-overlay">
                        <img src="images/audience-4.jpg" alt="Pro Hover" class="card-img-hover">
                        <button class="buy-btn">BUY PRO - $299</button>
                    </div>
                </div>
                <div class="card-details">
                    <div class="rating">★★★★½ (15,318)</div>
                    <div class="card-row">
                        <h4 class="product-name">PRO MASTERCLASS</h4>
                        <span class="price">$299</span>
                    </div>
                    <p class="product-desc">Videos + Weekly Q&A Calls</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="product-card">
                <div class="card-image-wrapper">
                    <span class="badge">limited spots</span>
                    <h3 class="card-big-title">elite</h3>
                    <img src="images/mentor.jpg" alt="Elite Mentorship" class="card-img-default">
                    <div class="card-hover-overlay">
                        <img src="images/feature-course.jpg" alt="Elite Hover" class="card-img-hover">
                        <button class="buy-btn">BUY ELITE - $999</button>
                    </div>
                </div>
                <div class="card-details">
                    <div class="rating">★★★★★ (13)</div>
                    <div class="card-row">
                        <h4 class="product-name">ELITE MENTORSHIP</h4>
                        <span class="price">$999</span>
                    </div>
                    <p class="product-desc">1-on-1 Coaching & Audit</p>
                </div>
            </div>
        </div>
        <!-- Carousel Dots (visible on mobile) -->
        <div class="carousel-dots" id="carouselDots"></div>
    </section>

    <!-- Section 6: Video Course Preview -->
    <section class="section video-help-section">
        <h2 class="video-help-title">Course Preview</h2>
        <div class="video-container-framed">
            <video controls poster="images/feature-course.jpg">
                <source src="images/hero-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3 class="video-caption">“ Your Blueprint to Online Success ”</h3>
        </div>
    </section>

    <!-- Section 7: Testimonials -->
    <section class="section testimonials-section" id="testimonials">
        <div class="testimonials-header">
            <div class="testimonials-title-group">
                <h3 class="testimonials-title">school <span class="plus">+</span> you</h3>
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
            <h2 class="curriculum-heading"><span class="heading-bold">COURSE MODULES</span> staples for<br><span class="heading-bold">DIGITAL</span> success.</h2>
            <div class="accordion curriculum-accordion">
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 1: FOUNDATIONS <span class="icon-circle">+</span></button>
                    <div class="accordion-body">Understanding the digital landscape, setting goals, and defining your target audience.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 2: CONTENT STRATEGY <span class="icon-circle">+</span></button>
                    <div class="accordion-body">How to create compelling content that engages and converts. Copywriting secrets and visual storytelling.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 3: PAID ADVERTISING <span class="icon-circle">+</span></button>
                    <div class="accordion-body">Mastering Facebook and Google Ads. Funnel building and ROAS optimization.</div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">MODULE 4: ANALYTICS & SCALING <span class="icon-circle">+</span></button>
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
        <h2 class="audience-title">meet the <em>masterclass</em> students</h2>
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
            <h2 class="mentor-headline">To <span class="highlight">INSPIRE</span>, <span class="highlight">EDUCATE</span>, and <span class="highlight">EMPOWER</span> the next generation of digital leaders for lasting results that reveal themselves over time.</h2>
            <button class="btn btn--outline-dark btn--sm">OUR VALUES</button>
            <div class="mentor-links">
                <div class="mentor-link">mission</div>
                <div class="mentor-link">philosophy</div>
                <div class="mentor-link">sustainability</div>
            </div>
        </div>
        <div class="mentor-image">
            <img src="images/mentor-image.jpg" alt="Your Instructor">
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
            <h2 class="promise-title">certified</h2>
            <p class="promise-subtitle">INDUSTRY RECOGNIZED CREDENTIAL</p>

            <div class="promise-details">
                <div class="detail-item">
                    <h4>BENEFITS:</h4>
                    <p>• Verified Digital Certificate<br>• LinkedIn Badge for your profile</p>
                </div>

                <div class="detail-item">
                    <h4>WHERE IT FITS IN YOUR CAREER</h4>
                    <p>After completing all modules and assignments</p>
                </div>

                <div class="detail-item">
                    <h4>THE IMPACT</h4>
                    <p>Validate your skills to employers and clients</p>
                </div>

                <div class="detail-item">
                    <h4>ACCREDITED BY</h4>
                    <p>School of 7 • Digital Marketing Association • Top Brands</p>
                </div>
            </div>

            <div class="routine-steps">
                <div class="step active">PREP</div>
                <div class="step">LEARN</div>
                <div class="step">GROW</div>
            </div>
        </div>
    </section>

    <!-- Sticky Enroll Bar -->
    <div class="sticky-bar">
        <div class="sticky-content">
            <img src="images/mentor.jpg" alt="Instructor" class="sticky-avatar">
            <div class="sticky-info">
                <h5>Digital Masterclass 2.0</h5>
                <p>47K+ Students Enrolled</p>
            </div>
        </div>
        <div class="sticky-actions">
            <span class="old-price">$599</span>
            <span class="new-price">$299</span>
            <a href="#pricing" class="btn btn--red">Enroll Now</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-brand">
            <h2 class="footer-logo">Schoolof7</h2>
        </div>
        
        <div class="footer-main">
            <div class="footer-newsletter">
                <p class="newsletter-text">Join us on the road to digital mastery.</p>
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
                    <p class="copyright">© Schoolof7 2025</p>
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