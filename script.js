document.addEventListener('DOMContentLoaded', () => {
    console.log('Rhode Skin Fresh Build Loaded');

    // Video play/pause toggle if needed
    const videoBtn = document.getElementById('video-toggle');
    const heroVideo = document.querySelector('.hero-video');

    // Force video to play immediately when enough buffer is available
    if (heroVideo) {
        // Try to play as soon as possible
        const tryPlay = () => {
            heroVideo.play().catch(() => {
                // Autoplay blocked - will play on user interaction
                console.log('Autoplay blocked, waiting for user interaction');
            });
        };

        // Play when video can start (enough buffer)
        heroVideo.addEventListener('canplay', tryPlay);

        // Also try immediately in case video is cached
        if (heroVideo.readyState >= 3) {
            tryPlay();
        }
    }

    if (videoBtn && heroVideo) {
        videoBtn.addEventListener('click', () => {
            if (heroVideo.paused) {
                heroVideo.play();
                videoBtn.textContent = 'II';
            } else {
                heroVideo.pause();
                videoBtn.textContent = '▶';
            }
        });
    }

    // Mobile Hamburger Menu Toggle
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (hamburgerBtn && mobileMenu) {
        hamburgerBtn.addEventListener('click', () => {
            hamburgerBtn.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        // Close menu when a link is clicked
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                hamburgerBtn.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
        });
    }

    // Accordion Logic
    const accordions = document.querySelectorAll('.accordion-header');
    accordions.forEach(acc => {
        acc.addEventListener('click', function () {
            const item = this.parentElement;

            // Close others (Optional, usually requested for clean UI)
            document.querySelectorAll('.accordion-item').forEach(i => {
                if (i !== item) i.classList.remove('active');
            });

            item.classList.toggle('active');
        });
    });

    // Pricing Carousel Dots
    const carousel = document.getElementById('pricingCarousel');
    const dotsContainer = document.getElementById('carouselDots');

    if (carousel && dotsContainer) {
        const cards = carousel.querySelectorAll('.product-card');

        // Create dots
        cards.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => {
                cards[index].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
            });
            dotsContainer.appendChild(dot);
        });

        const dots = dotsContainer.querySelectorAll('.dot');

        // Update active dot on scroll
        carousel.addEventListener('scroll', () => {
            const scrollLeft = carousel.scrollLeft;
            const cardWidth = cards[0].offsetWidth + 15; // card width + gap
            const activeIndex = Math.round(scrollLeft / cardWidth);

            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === activeIndex);
            });
        });
    }

    // =========================================================================
    // MOUSE TRACKING 3D TILT EFFECT FOR PRODUCT CARDS (Desktop Only)
    // =========================================================================
    const productCards = document.querySelectorAll('.product-card');

    if (window.innerWidth > 768) {
        productCards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;

                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
            });
        });
    }

    // =========================================================================
    // TESTIMONIALS SECTION
    // =========================================================================

    // Animated Counter
    const counters = document.querySelectorAll('.counter');
    let counterAnimated = false;

    function animateCounter(counter) {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target.toLocaleString();
            }
        };

        updateCounter();
    }

    // UGC Carousel - Video Items
    const ugcCarousel = document.getElementById('ugcCarousel');
    const ugcItems = document.querySelectorAll('.ugc-item');
    const prevBtn = document.getElementById('ugcPrev');
    const nextBtn = document.getElementById('ugcNext');

    // Click to play/pause videos
    ugcItems.forEach(item => {
        const video = item.querySelector('video');
        if (video) {
            item.addEventListener('click', () => {
                // Pause all other videos
                ugcItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        const otherVideo = otherItem.querySelector('video');
                        if (otherVideo) {
                            otherVideo.pause();
                            otherItem.classList.remove('playing');
                        }
                    }
                });

                // Toggle current video
                if (video.paused) {
                    video.play();
                    item.classList.add('playing');
                } else {
                    video.pause();
                    item.classList.remove('playing');
                }
            });
        }
    });

    // Navigation arrows
    if (prevBtn && nextBtn && ugcCarousel) {
        const scrollAmount = 300;

        prevBtn.addEventListener('click', () => {
            ugcCarousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', () => {
            ugcCarousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    }

    // IntersectionObserver for auto-play first video and animate counter
    const testimonialsSection = document.getElementById('testimonials');

    if (testimonialsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animate counter (only once)
                    if (!counterAnimated) {
                        counters.forEach(counter => animateCounter(counter));
                        counterAnimated = true;
                    }

                    // Auto-play first video
                    const firstVideo = ugcItems[0]?.querySelector('video');
                    if (firstVideo && firstVideo.paused) {
                        firstVideo.play();
                        ugcItems[0].classList.add('playing');
                    }
                } else {
                    // Pause all videos when section is not visible
                    ugcItems.forEach(item => {
                        const video = item.querySelector('video');
                        if (video) {
                            video.pause();
                            item.classList.remove('playing');
                        }
                    });
                }
            });
        }, { threshold: 0.3 });

        observer.observe(testimonialsSection);
    }

    // =========================================================================
    // AUDIENCE CAROUSEL NAVIGATION
    // =========================================================================
    const audienceCarousel = document.getElementById('audienceCarousel');
    const audiencePrev = document.getElementById('audiencePrev');
    const audienceNext = document.getElementById('audienceNext');

    if (audienceCarousel && audiencePrev && audienceNext) {
        const scrollAmount = 250;

        audiencePrev.addEventListener('click', () => {
            audienceCarousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        audienceNext.addEventListener('click', () => {
            audienceCarousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    }

    // Smart Navigation - Hide/Show on scroll
    const header = document.querySelector('.site-header');
    const heroSection = document.querySelector('.hero-section');
    let lastScrollY = 0;
    let ticking = false;

    function updateNavigation() {
        const currentScrollY = window.scrollY;
        const heroHeight = heroSection ? heroSection.offsetHeight : 500;
        const scrollingUp = currentScrollY < lastScrollY;

        // Only switch to transparent when very close to top of video
        if (currentScrollY < 150) {
            // Remove hidden state, transition to transparent
            header.classList.remove('hidden');
            header.classList.remove('scrolled');
            header.classList.add('transparent');

            // If scrolling down from very top, hide
            if (!scrollingUp && currentScrollY > 20) {
                header.classList.add('hidden');
            }
        }
        // Past hero - show/hide based on direction
        else {
            header.classList.remove('transparent');
            header.classList.add('scrolled');

            if (scrollingUp) {
                // Scrolling up - show
                header.classList.remove('hidden');
            } else {
                // Scrolling down - hide
                header.classList.add('hidden');
            }
        }

        lastScrollY = currentScrollY;
        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(updateNavigation);
            ticking = true;
        }
    });

    // Initial state
    updateNavigation();

    // Sticky Bar - Show after scrolling down
    const stickyBar = document.querySelector('.sticky-bar');
    if (stickyBar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                stickyBar.classList.add('visible');
            } else {
                stickyBar.classList.remove('visible');
            }
        });
    }

    // Image Scale Animation on Scroll (excluding UGC carousel to prevent flickering)
    const animatedImages = document.querySelectorAll('.feature-image img, .mentor-image img, .faq-image img, .promise-image img');

    let lastScrollPosition = 0;

    function animateImagesOnScroll() {
        const currentScroll = window.scrollY;
        const scrollingDown = currentScroll > lastScrollPosition;

        animatedImages.forEach(img => {
            const rect = img.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            // Check if image is in viewport
            if (rect.top < windowHeight && rect.bottom > 0) {
                // Calculate how much of the image is visible (0 to 1)
                const visibleRatio = Math.min(1, Math.max(0, (windowHeight - rect.top) / (windowHeight + rect.height)));

                // Scale between 0.92 and 1.0 based on scroll direction and visibility
                let scale;
                if (scrollingDown) {
                    scale = 1 - (visibleRatio * 0.08);
                } else {
                    scale = 0.92 + (visibleRatio * 0.08);
                }

                img.style.transform = `scale(${scale})`;
                img.style.transition = 'transform 0.3s ease-out';
            }
        });

        lastScrollPosition = currentScroll;
    }

    window.addEventListener('scroll', () => {
        window.requestAnimationFrame(animateImagesOnScroll);
    });

    // =========================================================================
    // SCROLL REVEAL ANIMATIONS
    // =========================================================================

    // Add animation classes to elements
    const animateElements = () => {
        // Section headers
        document.querySelectorAll('.section-title, .section-subtitle').forEach((el, i) => {
            el.classList.add('animate-on-scroll');
            el.classList.add(`delay-${(i % 3) + 1}`);
        });

        // Feature section
        document.querySelectorAll('.feature-content, .feature-image').forEach((el, i) => {
            el.classList.add('animate-on-scroll');
            if (i === 0) el.classList.add('from-left');
            if (i === 1) el.classList.add('from-right');
        });

        // Cards - pricing, audience, course cards
        document.querySelectorAll('.product-card, .audience-card, .course-card').forEach((el, i) => {
            el.classList.add('animate-on-scroll', 'scale-in');
            el.classList.add(`delay-${(i % 5) + 1}`);
        });

        // Curriculum section
        document.querySelectorAll('.curriculum-content, .curriculum-image').forEach((el, i) => {
            el.classList.add('animate-on-scroll');
            if (i === 0) el.classList.add('from-left');
            if (i === 1) el.classList.add('from-right');
        });

        // Mentor section
        document.querySelectorAll('.mentor-content, .mentor-image').forEach((el, i) => {
            el.classList.add('animate-on-scroll');
            if (i === 0) el.classList.add('from-left');
            if (i === 1) el.classList.add('from-right');
        });

        // FAQ and Promise sections
        document.querySelectorAll('.faq-content, .faq-image, .promise-content, .promise-image').forEach((el, i) => {
            el.classList.add('animate-on-scroll');
        });

        // Accordion items with stagger
        document.querySelectorAll('.accordion-item').forEach((el, i) => {
            el.classList.add('animate-on-scroll');
            el.classList.add(`delay-${(i % 5) + 1}`);
        });

        // Testimonials header
        document.querySelectorAll('.testimonials-header, .testimonials-title').forEach(el => {
            el.classList.add('animate-on-scroll');
        });

        // UGC items
        document.querySelectorAll('.ugc-item').forEach((el, i) => {
            el.classList.add('animate-on-scroll', 'scale-in');
            el.classList.add(`delay-${(i % 5) + 1}`);
        });

        // Hero content
        document.querySelectorAll('.hero-content').forEach(el => {
            el.classList.add('animate-on-scroll');
        });
    };

    // Initialize animations
    animateElements();

    // Intersection Observer for scroll reveal
    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    // Observe all animate-on-scroll elements
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        scrollObserver.observe(el);
    });

    // =========================================================================
    // COURSE PRICING CARDS SLIDE-IN ANIMATION
    // =========================================================================
    const courseCardObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-visible');
            }
        });
    }, {
        threshold: 0.2
    });

    document.querySelectorAll('.course-card').forEach(card => {
        courseCardObserver.observe(card);
    });

    // =========================================================================
    // ENHANCED HOVER EFFECTS
    // =========================================================================

    // Add hover-lift to cards
    document.querySelectorAll('.product-card, .course-card, .audience-card').forEach(el => {
        el.classList.add('hover-lift');
    });

    // Add image-zoom to image containers
    document.querySelectorAll('.feature-image, .curriculum-image, .mentor-image, .faq-image, .promise-image').forEach(el => {
        el.classList.add('image-zoom');
    });

    // =========================================================================
    // CONTINUOUS PARALLAX ZOOM EFFECT
    // Scroll UP = images scale UP (zoom in)
    // Scroll DOWN = images scale DOWN (zoom out)
    // =========================================================================
    let parallaxLastScrollY = window.scrollY;
    let currentScale = 1;
    const minScale = 0.92;
    const maxScale = 1.08;
    const scaleSpeed = 0.001; // Speed of zoom change

    const parallaxImages = document.querySelectorAll('.feature-image img, .curriculum-image img, .mentor-image img, .faq-image img, .promise-image img');

    // No CSS transition - JavaScript handles smooth animation
    parallaxImages.forEach(img => {
        img.style.willChange = 'transform';
    });

    const updateParallaxZoom = () => {
        const currentScrollY = window.scrollY;
        const scrollDelta = currentScrollY - parallaxLastScrollY;

        // Only update if actually scrolling
        if (scrollDelta !== 0) {
            // Scroll DOWN = scale down, Scroll UP = scale up
            if (scrollDelta > 0) {
                // Scrolling down - zoom out
                currentScale = Math.max(minScale, currentScale - (Math.abs(scrollDelta) * scaleSpeed));
            } else {
                // Scrolling up - zoom in
                currentScale = Math.min(maxScale, currentScale + (Math.abs(scrollDelta) * scaleSpeed));
            }

            // Apply scale immediately to all parallax images in viewport
            parallaxImages.forEach(img => {
                const rect = img.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                // Only animate images in viewport
                if (rect.top < windowHeight && rect.bottom > 0) {
                    img.style.transform = `scale(${currentScale.toFixed(3)})`;
                }
            });
        }

        parallaxLastScrollY = currentScrollY;
    };

    // Use passive scroll listener for better performance
    window.addEventListener('scroll', updateParallaxZoom, { passive: true });

    // =========================================================================
    // SMOOTH ENTRANCE FOR HERO
    // =========================================================================

    setTimeout(() => {
        document.querySelector('.hero-content')?.classList.add('visible');
    }, 300);

});
