import gsap from 'gsap';

export function initNewsPageAnimations() {
  // Create main timeline
  const tl = gsap.timeline();

  // Hero section animation
  tl.from('.hero', {
    opacity: 0,
    duration: 1,
    ease: 'power2.out'
  });

  // Headline animation
  tl.from('.hero__headline', {
    opacity: 0,
    y: 30,
    duration: 0.8,
    ease: 'power2.out'
  });

  // Content animation
  tl.from('.hero__subheadline', {
    opacity: 0,
    y: 30,
    duration: 0.8,
    ease: 'power2.out'
  }, '-=0.4');
} 