import gsap from 'gsap';

export function initAboutPageAnimations() {
  // Create main timeline
  const tl = gsap.timeline();

  // Hero section animation
  tl.from('.hero', {
    opacity: 0,
    duration: 1,
    ease: 'power2.out'
  });

  // Content sections animation
  tl.from('.hero__headline', {
    opacity: 0,
    y: 30,
    duration: 0.8,
    stagger: 0.2,
    ease: 'power2.out'
  });

  // List items animation
  tl.from('.hero__content li', {
    opacity: 0,
    y: 20,
    duration: 0.6,
    stagger: 0.1,
    ease: 'power2.out'
  }, '-=0.4');
} 