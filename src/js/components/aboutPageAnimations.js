import gsap from 'gsap';

export function initAboutPageAnimations() {
  // Create main timeline
  const tl = gsap.timeline();

  // Hero section animation
  tl.to('.hero__image', {
    opacity: 1,
    duration: 1,
    ease: 'power2.out'
  });

  // Content sections animation
  tl.fromTo('.hero__headline', {
    opacity: 0,
    y: 30,
    duration: 0.8,
    ease: 'power2.out'
  }, {
    opacity: 1,
    y: 0,
  });

  // List items animation
  tl.fromTo('.hero__content li', {
    opacity: 0,
    y: 20,
    ease: 'power2.out'
  }, {
    opacity: 1,
    y: 0,
    duration: 0.6,
    stagger: 0.1,
  }, '-=0.4');
} 