document.addEventListener('DOMContentLoaded', () => {
    console.log('Rhode Skin Fresh Build Loaded');

    // Video play/pause toggle if needed
    const videoBtn = document.getElementById('video-toggle');
    const heroVideo = document.querySelector('.hero-video');

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
});
