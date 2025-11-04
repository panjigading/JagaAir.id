gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', function() {

  initHeroAnimations();
  initScrollAnimations();
  initInteractiveElements();
  initSmoothScroll();
});

function initHeroAnimations() {
  const tl = gsap.timeline();

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

  gsap.to('.hero-content', {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: 'power2.out',
    delay: 0.5
  });

  gsap.to('.hero-title', {
    duration: 1.2,
    opacity: 1,
    y: 0,
    ease: 'back.out(1.7)',
    delay: 0.6
  });

  gsap.to('.hero-subtitle', {
    duration: 1,
    opacity: 1,
    y: 0,
    ease: 'power2.out',
    delay: 0.8
  });

  gsap.to('.hero-title', {
    y: -20,
    duration: 4,
    ease: 'sine.inOut',
    yoyo: true,
    repeat: -1,
    delay: 1.8
  });
}

function initScrollAnimations() {
  gsap.utils.toArray('.alur-item').forEach((item, index) => {
    gsap.to(item, {
      scrollTrigger: {
        trigger: item,
        start: 'top 80%',
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

  gsap.utils.toArray('.keunggulan-card').forEach((card, index) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: card,
        start: 'top 75%',
        toggleActions: 'play none none reverse',
        once: false
      }
    });

    tl.to(card, {
      opacity: 1,
      y: 0,
      duration: 0.7,
      ease: 'back.out(1.5)'
    }, 0)
      .to(card, {
        x: -5,
        duration: 0.3,
        ease: 'sine.inOut'
      }, 0);
  });

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
      e.preventDefault();

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