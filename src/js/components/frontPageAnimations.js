import gsap from 'gsap';

export function initFrontPageAnimations() {
  const hero = document.querySelector('.hero');
  if (!hero) return;

  // Create timeline
  const tl = gsap.timeline({
    defaults: {
      ease: 'power2.out'
    }
  });

  // Get elements
  const heroImage = hero.querySelector('.hero__image');
  const headline = hero.querySelector('.hero__headline');
  const headlineText = headline?.querySelector('.glow-text__text');
  const headlineOutline = headline?.querySelector('.glow-text__outline');
  const tagline = hero.querySelector('.hero__tagline');
  const videoContainer = hero.querySelector('.hero__video-container');

  // Split headline text into words for animation
  if (headlineText && headlineOutline) {
    const text = headlineText.textContent;
    const outlineText = headlineOutline.textContent;
    
    // Clear existing content
    headlineText.textContent = '';
    headlineOutline.textContent = '';
    
    // Split into words and create spans
    const words = text.split(' ');
    const outlineWords = outlineText.split(' ');
    
    words.forEach((word, i) => {
      const wordSpan = document.createElement('span');
      const outlineWordSpan = document.createElement('span');
      
      // Add space after each word except the last one
      wordSpan.textContent = word + (i < words.length - 1 ? ' ' : '');
      outlineWordSpan.textContent = outlineWords[i] + (i < outlineWords.length - 1 ? ' ' : '');
      
      wordSpan.style.opacity = '0';
      outlineWordSpan.style.opacity = '0';
      
      headlineText.appendChild(wordSpan);
      headlineOutline.appendChild(outlineWordSpan);
    });
  }

  // Build timeline
  tl
    // Fade in hero image
    .set(headline, {
      opacity: 1,
    })
    .to(heroImage, {
      opacity: 1,
      duration: 2.0
    })
    // Animate headline words with flicker
    .to(headlineText?.children || [], {
      opacity: 1,
      duration: 0.1,
      stagger: {
        each: 0.1,
        // from: "random",
        grid: "auto",
        amount: 0.5,
        onStart: function() {
          // Create flicker effect for each word
          gsap.to(this.targets()[0], {
            opacity: 0,
            duration: 0.08,
            repeat: 6,
            yoyo: true,
            ease: "none",
            onComplete: () => {
              gsap.set(this.targets()[0], { opacity: 1 });
            }
          });
        }
      },
      ease: 'power1.in'
    }, '-=1')
    .to(headlineOutline?.children || [], {
      opacity: 1,
      duration: 0.1,
      stagger: {
        each: 0.1,
        // from: "random",
        grid: "auto",
        amount: 0.5,
        onStart: function() {
          // Create flicker effect for each outline word
          gsap.to(this.targets()[0], {
            opacity: 0,
            duration: 0.08,
            repeat: 6,
            yoyo: true,
            ease: "none",
            onComplete: () => {
              gsap.set(this.targets()[0], { opacity: 1 });
            }
          });
        }
      },
      ease: 'power1.in'
    }, '-=1') // Start slightly before the previous animation ends
    // Fade in and up tagline
    .fromTo(tagline, {
      opacity: 0,
      y: 30,
      duration: 0.8
    }, {
      opacity: 1,
      y: 0,
      duration: 0.8
    }, '-=0.5')
    // Fade in and up video container
    .fromTo(videoContainer, {
      opacity: 0,
      y: 30,
      duration: 0.8
    }, {
      opacity: 1,
      y: 0,
      duration: 0.8
    }, '-=0.25');
} 