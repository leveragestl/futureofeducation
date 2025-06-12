import gsap from 'gsap';

export function initGetInvolvedAnimations() {
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
  tl.from(['.hero__image', '.hero__paragraph'], {
    opacity: 0,
    y: 80,
    duration: 0.6,
    stagger: 0.1,
    ease: 'power2.out'
  }, '-=0.4');
} 