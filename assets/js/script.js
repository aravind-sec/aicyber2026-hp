document.addEventListener('DOMContentLoaded', () => {

  // Countdown → actual conference start, Dec 28 2026 09:00 IST
  function updateCountdown() {
    const target = new Date('December 28, 2026 09:00:00 GMT+0530').getTime();
    const now = new Date().getTime();
    const diff = target - now;

    if (diff <= 0) {
      const countdownEl = document.getElementById('countdown');
      if (countdownEl) {
        countdownEl.innerHTML = '<div class="cd-item"><div class="n" style="font-size:1.1rem;">Conference is Live</div></div>';
      }
      return;
    }

    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
    const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const s = Math.floor((diff % (1000 * 60)) / 1000);

    const elDays = document.getElementById('cd-days');
    const elHours = document.getElementById('cd-hours');
    const elMins = document.getElementById('cd-mins');
    const elSecs = document.getElementById('cd-secs');

    if (elDays) elDays.textContent = String(d).padStart(3, '0');
    if (elHours) elHours.textContent = String(h).padStart(2, '0');
    if (elMins) elMins.textContent = String(m).padStart(2, '0');
    if (elSecs) elSecs.textContent = String(s).padStart(2, '0');
  }

  updateCountdown();
  setInterval(updateCountdown, 1000);

  // Mobile menu toggle
  const menuToggleBtn = document.getElementById('mmenu-toggle');
  const mobileMenu = document.getElementById('mmenu');

  if (menuToggleBtn && mobileMenu) {
    menuToggleBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
    });
  }

  // Accordion toggle
  const accHeads = document.querySelectorAll('.acc-head');
  accHeads.forEach(head => {
    // Only bind accordion behavior if it has a collapsible body next to it
    if (head.nextElementSibling && head.nextElementSibling.classList.contains('acc-body')) {
      head.addEventListener('click', () => {
        const body = head.nextElementSibling;
        const icon = head.querySelector('i');
        
        body.classList.toggle('open');
        if (icon) {
          icon.style.transform = body.classList.contains('open') ? 'rotate(180deg)' : 'rotate(0deg)';
        }
      });
    }
  });

  // Smooth scroll + close mobile menu
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const href = a.getAttribute('href');
      if (href === '#') return;

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }

      if (mobileMenu) {
        mobileMenu.classList.remove('open');
      }
    });
  });

  // Image Fallbacks dynamically handled
  document.querySelectorAll('img.fallback-img').forEach(img => {
    img.addEventListener('error', function() {
      const fallbackText = this.getAttribute('data-fallback') || '';
      const span = document.createElement('span');
      span.className = 'logo-fallback';
      span.textContent = fallbackText;
      this.replaceWith(span);
    });
  });

  document.querySelectorAll('img.remove-on-error').forEach(img => {
    img.addEventListener('error', function() {
      this.remove();
    });
  });

});