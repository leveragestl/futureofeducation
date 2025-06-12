import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

// Check if device is desktop with mouse
function isDesktopWithMouse() {
  // Check if device has hover capability (mouse)
  const hasHover = window.matchMedia('(hover: hover)').matches;
  
  // Check if device is not a mobile device
  const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
  
  // Check if screen width is desktop size (optional)
  const isDesktopSize = window.innerWidth >= 1024;
  
  return hasHover && !isMobile && isDesktopSize;
}

export function initScrollAnimations() {
  // Only initialize if on desktop with mouse
  if (!isDesktopWithMouse()) {
    // Set all animated elements to their final state without animation
    document.querySelectorAll('[data-animate]').forEach(element => {
      gsap.set(element, {
        y: 0,
        x: 0,
        scale: 1,
        opacity: 1
      });
    });
    return;
  }

  // Initialize individual elements with data-animate attribute
  const animatedElements = document.querySelectorAll('[data-animate]');
  
  animatedElements.forEach(element => {
    if (element.closest('[data-animate-group]')) return; // Skip if part of a group
    
    const animation = element.dataset.animate;
    const delay = parseFloat(element.dataset.animateDelay) || 0;
    const duration = parseFloat(element.dataset.animateDuration) || 0.6;
    const triggerPosition = element.dataset.animatePosition || 'bottom-=200';
    
    createAnimation(element, animation, delay, duration, triggerPosition);
  });

  // Initialize animation groups
  const animationGroups = document.querySelectorAll('[data-animate-group]');
  
  animationGroups.forEach(group => {
    const groupElements = group.querySelectorAll('[data-animate]');
    const stagger = parseFloat(group.dataset.animateStagger) || 0.1;
    const groupDelay = parseFloat(group.dataset.animateDelay) || 0;
    const triggerPosition = group.dataset.animatePosition || 'bottom-=200';
    
    groupElements.forEach((element, index) => {
      const animation = element.dataset.animate;
      const elementDelay = parseFloat(element.dataset.animateDelay) || 0;
      const duration = parseFloat(element.dataset.animateDuration) || 0.6;
      
      // Calculate total delay including group delay, stagger, and element delay
      const totalDelay = groupDelay + (stagger * index) + elementDelay;
      
      createAnimation(element, animation, totalDelay, duration, triggerPosition);
    });
  });
}

function createAnimation(element, animation, delay, duration, triggerPosition) {
  // Set initial state based on animation type
  const initialStates = {
    'fade-up': { y: 30, opacity: 0 },
    'fade-down': { y: -30, opacity: 0 },
    'fade-left': { x: 30, opacity: 0 },
    'fade-right': { x: -30, opacity: 0 },
    'fade': { opacity: 0 },
    'scale-up': { scale: 0.8, opacity: 0 },
    'scale-down': { scale: 1.2, opacity: 0 }
  };

  const initialState = initialStates[animation] || initialStates['fade-up'];
  
  // Set initial state
  gsap.set(element, initialState);

  // Create the animation
  gsap.to(element, {
    ...initialState,
    y: 0,
    x: 0,
    scale: 1,
    opacity: 1,
    duration: duration,
    delay: delay,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: element,
      start: `top ${triggerPosition}`,
      toggleActions: 'play none none reverse'
    }
  });
} 