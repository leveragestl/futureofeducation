export function initParallax() {
  const parallaxContainers = document.querySelectorAll('.parallax-container');
  const parallaxImages = document.querySelectorAll('.parallax-image');
  
  if (!parallaxContainers.length || !parallaxImages.length) return;

  let ticking = false;
  let lastScrollY = window.scrollY;
  const defaultParallaxFactor = 0.25; // Default parallax speed

  function updateParallax() {
    const scrollY = window.scrollY;
    
    parallaxImages.forEach(image => {
      const container = image.closest('.parallax-container');
      if (!container) return;

      // Get custom speed and direction from data attributes
      const speed = parseFloat(image.dataset.parallaxSpeed) || defaultParallaxFactor;
      const direction = image.dataset.parallaxDirection === 'up' ? -1 : 1;

      const containerRect = container.getBoundingClientRect();
      const containerTop = containerRect.top + scrollY;
      const containerHeight = containerRect.height;
      
      // Only apply parallax when the container is in view
      if (containerTop + containerHeight > scrollY && containerTop < scrollY + window.innerHeight) {
        const scrolled = scrollY - containerTop;
        const translateY = scrolled * speed * direction;
        
        // Use transform3d for hardware acceleration
        image.style.transform = `translate3d(0, ${translateY}px, 0)`;
      }
    });
    
    ticking = false;
  }

  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(updateParallax);
      ticking = true;
    }
  }

  // Add scroll event listener
  window.addEventListener('scroll', onScroll, { passive: true });
  
  // Initial update
  updateParallax();
} 