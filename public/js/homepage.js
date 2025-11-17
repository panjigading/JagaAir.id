gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', function() {

  initHeroAnimations();
  initBackgroundSlider();
  initScrollAnimations();
  initInteractiveElements();
  initSmoothScroll();
});

function initHeroAnimations() {
  const tl = gsap.timeline();

  // Animasi Navbar
  tl.to('.navbar-brand', {
    duration: 0.8,
    opacity: 1,
    y: 0,
    ease: 'power2.out'
  }, 0)
    .to('.navbar-menu li', {
      duration: 0.8,
      opacity: 1,
      y: 0,
      ease: 'power2.out',
      stagger: 0.1
    }, 0.1)
    .to('.btn-login', {
      duration: 0.8,
      opacity: 1,
      y: 0,
      ease: 'power2.out'
    }, 0.2);

  // Animasi Background Waves
  gsap.to('.wave-1', {
    scale: 1.2,
    x: 30,
    y: -30,
    duration: 8,
    ease: 'sine.inOut',
    yoyo: true,
    repeat: -1
  });

  gsap.to('.wave-2', {
    scale: 1.3,
    x: -30,
    y: 30,
    duration: 10,
    ease: 'sine.inOut',
    yoyo: true,
    repeat: -1
  });

  gsap.to('.wave-3', {
    scale: 1.15,
    x: 20,
    y: 40,
    duration: 12,
    ease: 'sine.inOut',
    yoyo: true,
    repeat: -1
  });

  // Animasi Title Letter by Letter
  gsap.to('.title-letter', {
    opacity: 1,
    y: 0,
    rotateX: 0,
    duration: 0.8,
    stagger: 0.05,
    ease: 'back.out(1.7)',
    delay: 0.5
  });

  // Animasi Floating untuk Title
  gsap.to('.hero-title', {
    y: -15,
    duration: 3,
    ease: 'sine.inOut',
    yoyo: true,
    repeat: -1,
    delay: 2
  });

  // Animasi Subtitle
  gsap.to('.hero-subtitle', {
    duration: 1,
    opacity: 1,
    y: 0,
    ease: 'power2.out',
    delay: 1.5
  });

  // Animasi CTA Buttons
  gsap.to('.hero-cta', {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: 'back.out(1.7)',
    delay: 2
  });

  // Particle effect animation
  gsap.to('.hero-section::after', {
    opacity: 0.6,
    duration: 20,
    ease: 'sine.inOut',
    yoyo: true,
    repeat: -1
  });
}

function initBackgroundSlider() {
  const backgrounds = document.querySelectorAll('.hero-background');
  let currentIndex = 0;
  const totalSlides = backgrounds.length;
  const slideInterval = 5000; // Ganti setiap 5 detik

  function showSlide(index) {
    // Hide all backgrounds
    backgrounds.forEach((bg, i) => {
      if (i === index) {
        // Show current slide with GSAP animation
        gsap.to(bg, {
          opacity: 1,
          scale: 1,
          duration: 2,
          ease: 'power2.out',
          onStart: () => {
            bg.classList.add('active');
          }
        });

        // Zoom effect selama slide ditampilkan
        gsap.to(bg, {
          scale: 1.1,
          duration: 15,
          ease: 'linear',
          delay: 2
        });
      } else {
        // Hide other slides
        gsap.to(bg, {
          opacity: 0,
          duration: 2,
          ease: 'power2.in',
          onComplete: () => {
            bg.classList.remove('active');
          }
        });
      }
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  }

  // Start slideshow
  setInterval(nextSlide, slideInterval);

  // Initial animation untuk slide pertama
  gsap.fromTo(backgrounds[0], 
    {
      opacity: 0,
      scale: 1.2
    },
    {
      opacity: 1,
      scale: 1,
      duration: 2,
      ease: 'power2.out',
      delay: 0.5
    }
  );
}

function initScrollAnimations() {
  // ===== ANIMASI UNTUK ALUR CARDS (BARU) =====
  gsap.utils.toArray('.alur-card-interactive').forEach((card, index) => {
    // Animasi munculnya card
    gsap.from(card, {
      scrollTrigger: {
        trigger: card,
        start: 'top 80%',
        toggleActions: 'play none none reverse',
        once: false
      },
      opacity: 0,
      y: 80,
      scale: 0.8,
      rotation: -10,
      duration: 0.8,
      delay: index * 0.15,
      ease: 'back.out(1.7)'
    });

    // Hover interaction dengan GSAP
    const stepIcon = card.querySelector('.step-icon');
    const cardFront = card.querySelector('.alur-card-front');
    const cardBack = card.querySelector('.alur-card-back');

    card.addEventListener('mouseenter', () => {
      // Animasi flip card
      gsap.to(cardFront, {
        rotateY: -180,
        duration: 0.6,
        ease: 'power2.inOut'
      });
      
      gsap.to(cardBack, {
        rotateY: 0,
        duration: 0.6,
        ease: 'power2.inOut'
      });

      // Scale effect
      gsap.to(card, {
        scale: 1.05,
        duration: 0.3,
        ease: 'power2.out'
      });
    });

    card.addEventListener('mouseleave', () => {
      // Kembalikan ke posisi semula
      gsap.to(cardFront, {
        rotateY: 0,
        duration: 0.6,
        ease: 'power2.inOut'
      });
      
      gsap.to(cardBack, {
        rotateY: 180,
        duration: 0.6,
        ease: 'power2.inOut'
      });

      gsap.to(card, {
        scale: 1,
        duration: 0.3,
        ease: 'power2.out'
      });
    });
  });

  // Animasi untuk arrows
  gsap.utils.toArray('.alur-arrow-new').forEach((arrow, index) => {
    gsap.from(arrow, {
      scrollTrigger: {
        trigger: arrow,
        start: 'top 80%',
        toggleActions: 'play none none reverse',
        once: false
      },
      opacity: 0,
      x: -30,
      duration: 0.6,
      delay: index * 0.15 + 0.3,
      ease: 'power2.out'
    });
  });

  gsap.utils.toArray('.keunggulan-card-new').forEach((card, index) => {
    const cardIcon = card.querySelector('.card-icon-new');
    const cardTitle = card.querySelector('.card-title-new');
    const cardDescription = card.querySelector('.card-description-new');

    // Scroll trigger animation
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: card,
            start: 'top 80%',
            toggleActions: 'play none none reverse',
            once: false
        }
    });

    // Stagger animation untuk setiap elemen
    tl.to(card, {
        opacity: 1,
        y: 0,
        scale: 1,
        duration: 0.8,
        ease: 'back.out(1.7)'
    })
    .from(cardIcon, {
        scale: 0,
        rotation: -180,
        duration: 0.6,
        ease: 'back.out(1.7)'
    }, '-=0.4')
    .from(cardTitle, {
        opacity: 0,
        y: 20,
        duration: 0.4,
        ease: 'power2.out'
    }, '-=0.3')
    .from(cardDescription, {
        opacity: 0,
        y: 20,
        duration: 0.4,
        ease: 'power2.out'
    }, '-=0.2');

    // Hover animations
    card.addEventListener('mouseenter', () => {
        gsap.to(cardIcon, {
            scale: 1.15,
            rotation: -10,
            duration: 0.4,
            ease: 'back.out(2)'
        });
        gsap.to(card, {
            y: -15,
            scale: 1.02,
            duration: 0.4,
            ease: 'power2.out'
        });
        // Shine effect
        const shine = document.createElement('div');
        shine.className = 'shine';
        card.appendChild(shine);

        gsap.fromTo(shine, { left: '-100%' },
            { left: '100%', duration: 0.7, ease: 'power2.out' }
        );
        setTimeout(() => shine.remove(), 700);
    });

    card.addEventListener('mouseleave', () => {
        gsap.to(cardIcon, {
            scale: 1,
            rotation: 0,
            duration: 0.4,
            ease: 'back.out(2)'
        });
        gsap.to(card, {
            y: 0,
            scale: 1,
            duration: 0.4,
            ease: 'power2.out'
        });
    });
  });

  // ... sisanya tetap sama (laporan-form-wrapper, form-group, footer-column)
  gsap.to('.laporan-form-wrapper', {
    scrollTrigger: {
      trigger: '.laporan-form-wrapper',
      start: 'top 70%',
      toggleActions: 'play none none reverse',
      once: false
    },
    opacity: 1,
    scale: 1,
    duration: 0.8,
    ease: 'back.out(1.7)'
  });

  gsap.utils.toArray('.form-group').forEach((group, index) => {
    gsap.to(group, {
      scrollTrigger: {
        trigger: '.laporan-form-wrapper',
        start: 'top 70%',
        toggleActions: 'play none none reverse',
        once: false
      },
      opacity: 1,
      x: 0,
      duration: 0.5,
      delay: index * 0.05,
      ease: 'power2.out'
    });

    gsap.set(group, { opacity: 0, x: -20 });
  });

  gsap.utils.toArray('.footer-column').forEach((column, index) => {
    gsap.to(column, {
      scrollTrigger: {
        trigger: '.footer-section',
        start: 'top 70%',
        toggleActions: 'play none none reverse',
        once: false
      },
      opacity: 1,
      y: 0,
      duration: 0.6,
      delay: index * 0.1,
      ease: 'power2.out'
    });
  });
}

function initInteractiveElements() {
  const cards = document.querySelectorAll('.keunggulan-card');

  cards.forEach(card => {
    const cardIcon = card.querySelector('.card-icon');

    card.addEventListener('mouseenter', () => {
      gsap.to(cardIcon, {
        scale: 1.15,
        rotation: 10,
        duration: 0.4,
        ease: 'back.out(1.7)'
      });

      gsap.to(card, {
        boxShadow: '0 20px 40px rgba(118, 214, 255, 0.3)',
        duration: 0.4,
        ease: 'power2.out'
      });
    });

    card.addEventListener('mouseleave', () => {
      gsap.to(cardIcon, {
        scale: 1,
        rotation: 0,
        duration: 0.4,
        ease: 'back.out(1.7)'
      });

      gsap.to(card, {
        boxShadow: '0 10px 30px rgba(118, 214, 255, 0)',
        duration: 0.4,
        ease: 'power2.out'
      });
    });
  });

  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    link.addEventListener('mouseenter', function() {
      gsap.to(this, {
        color: '#76d6ff',
        duration: 0.3,
        ease: 'power2.out'
      });
    });

    link.addEventListener('mouseleave', function() {
      gsap.to(this, {
        color: '#ffffff',
        duration: 0.3,
        ease: 'power2.out'
      });
    });
  });

  const formInputs = document.querySelectorAll('.form-input, .form-select, .form-textarea');

  formInputs.forEach(input => {
    input.addEventListener('focus', function() {
      gsap.to(this, {
        scale: 1.02,
        duration: 0.3,
        ease: 'power2.out'
      });
    });

    input.addEventListener('blur', function() {
      gsap.to(this, {
        scale: 1,
        duration: 0.3,
        ease: 'power2.out'
      });
    });
  });

  const submitBtn = document.querySelector('.btn-submit');

  if (submitBtn) {
    submitBtn.addEventListener('mouseenter', function() {
      gsap.to(this, {
        scale: 1.05,
        duration: 0.3,
        ease: 'back.out(1.7)'
      });
    });

    submitBtn.addEventListener('mouseleave', function() {
      gsap.to(this, {
        scale: 1,
        duration: 0.3,
        ease: 'back.out(1.7)'
      });
    });

    submitBtn.addEventListener('click', function(e) {
      const buttonRect = this.getBoundingClientRect();
      const ripple = document.createElement('span');
      ripple.style.position = 'absolute';
      ripple.style.width = '20px';
      ripple.style.height = '20px';
      ripple.style.background = 'rgba(255, 255, 255, 0.5)';
      ripple.style.borderRadius = '50%';
      ripple.style.pointerEvents = 'none';

      this.style.position = 'relative';
      this.style.overflow = 'hidden';
      this.appendChild(ripple);

      gsap.to(ripple, {
        width: 400,
        height: 400,
        opacity: 0,
        duration: 0.6,
        ease: 'power2.out',
        onComplete: () => {
          ripple.remove();
        }
      });

      gsap.to(submitBtn, {
        scale: 0.98,
        duration: 0.1,
        yoyo: true,
        repeat: 1,
        ease: 'power2.inOut'
      });
    });
  }
}

function initSmoothScroll() {
  const navLinks = document.querySelectorAll('a[href^="#"]');

  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');

      if (href === '#') {
        e.preventDefault();
        return;
      }

      const target = document.querySelector(href);

      if (target) {
        e.preventDefault();

        gsap.to(window, {
          duration: 0.8,
          scrollTo: {
            y: target,
            offsetY: 80
          },
          ease: 'power2.inOut'
        });
      }
    });
  });
}

window.addEventListener('scroll', () => {
  const navbar = document.querySelector('.navbar');

  if (window.scrollY > 50) {
    gsap.to(navbar, {
      background: 'linear-gradient(to bottom, rgba(0, 0, 0, 0.8), transparent)',
      duration: 0.3,
      ease: 'power2.out'
    });
  } else {
    gsap.to(navbar, {
      background: 'linear-gradient(to bottom, rgba(0, 0, 0, 0.5), transparent)',
      duration: 0.3,
      ease: 'power2.out'
    });
  }
});

window.addEventListener('load', () => {
  gsap.to('.hero-section', {
    opacity: 1,
    duration: 0.5,
    ease: 'power2.out'
  });
});

// ===== TAMBAHAN: Stats Animation =====
function animateCounter(element, target, duration = 2000) {
  const start = 0;
  const increment = target / (duration / 16);
  let current = start;
  
  const timer = setInterval(() => {
    current += increment;
    if (current >= target) {
      element.textContent = Math.floor(target);
      clearInterval(timer);
    } else {
      element.textContent = Math.floor(current);
    }
  }, 16);
}

gsap.utils.toArray('.stat-card').forEach((card, index) => {
  const statNumber = card.querySelector('.stat-number');
  const target = parseInt(statNumber.getAttribute('data-target'));
  
  gsap.to(card, {
    scrollTrigger: {
      trigger: card,
      start: 'top 85%',
      toggleActions: 'play none none reverse',
      once: false,
      onEnter: () => {
        animateCounter(statNumber, target);
      }
    },
    opacity: 1,
    y: 0,
    scale: 1,
    duration: 0.8,
    delay: index * 0.15,
    ease: 'back.out(1.7)'
  });
  
  const icon = card.querySelector('.stat-icon');
  card.addEventListener('mouseenter', () => {
    gsap.to(icon, {
      scale: 1.15,
      rotation: 15,
      duration: 0.4,
      ease: 'back.out(2)'
    });
  });
  
  card.addEventListener('mouseleave', () => {
    gsap.to(icon, {
      scale: 1,
      rotation: 0,
      duration: 0.4,
      ease: 'back.out(2)'
    });
  });
});

window.addEventListener('scroll', () => {
  const navbar = document.querySelector('.navbar');
  const statCards = document.querySelectorAll('.stat-card');
  const scrolled = window.pageYOffset;

  if (window.scrollY > 50) {
    gsap.to(navbar, {
      background: 'linear-gradient(to bottom, rgba(0, 0, 0, 0.8), transparent)',
      duration: 0.3,
      ease: 'power2.out'
    });
  } else {
    gsap.to(navbar, {
      background: 'linear-gradient(to bottom, rgba(0, 0, 0, 0.5), transparent)',
      duration: 0.3,
      ease: 'power2.out'
    });
  }

  // Parallax effect untuk stat cards
  statCards.forEach((card, index) => {
    const speed = 0.05 + (index * 0.01);
    const yPos = -(scrolled * speed);
    
    if (scrolled > 200 && scrolled < 1500) {
      gsap.to(card, {
        y: yPos,
        duration: 0.3,
        ease: 'power1.out'
      });
    }
  });
});
// ===== AKHIR TAMBAHAN Stats Animation =====

// ===== SMOOTH SCROLL UNTUK CTA BUTTONS =====
document.addEventListener('DOMContentLoaded', function() {
  // Smooth scroll untuk semua CTA buttons
  const ctaButtons = document.querySelectorAll('.btn-cta-primary, .btn-cta-secondary, .nav-link[href="#laporan"]');
  
  ctaButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      
      if (href && href.startsWith('#')) {
        e.preventDefault();
        const target = document.querySelector(href);
        
        if (target) {
          // Animasi smooth scroll dengan GSAP
          gsap.to(window, {
            duration: 1.2,
            scrollTo: {
              y: target,
              offsetY: 80
            },
            ease: 'power3.inOut'
          });

          // Animasi pulse pada target section
          gsap.fromTo(target, 
            {
              scale: 1
            },
            {
              scale: 1.02,
              duration: 0.3,
              yoyo: true,
              repeat: 1,
              ease: 'power2.inOut'
            }
          );
        }
      }
    });
  });

  // Hover effect untuk CTA buttons
  const primaryBtn = document.querySelector('.btn-cta-primary');
  const secondaryBtn = document.querySelector('.btn-cta-secondary');

  if (primaryBtn) {
    primaryBtn.addEventListener('mouseenter', function() {
      gsap.to(this, {
        scale: 1.05,
        duration: 0.3,
        ease: 'back.out(1.7)'
      });
    });

    primaryBtn.addEventListener('mouseleave', function() {
      gsap.to(this, {
        scale: 1,
        duration: 0.3,
        ease: 'back.out(1.7)'
      });
    });
  }

  if (secondaryBtn) {
    secondaryBtn.addEventListener('mouseenter', function() {
      gsap.to(this, {
        scale: 1.05,
        duration: 0.3,
        ease: 'power2.out'
      });
    });

    secondaryBtn.addEventListener('mouseleave', function() {
      gsap.to(this, {
        scale: 1,
        duration: 0.3,
        ease: 'power2.out'
      });
    });
  }
});