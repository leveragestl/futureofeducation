import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';

export function initCommentsSwiper() {
  const chatSwiper = new Swiper('.comments-swiper', {
    modules: [Autoplay],
    direction: 'vertical',
    loop: false,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
      reverseDirection: false,
    },
    speed: 1000,  // Slightly adjust speed for even smoother feel, if needed
    slidesPerView: "auto",
    spaceBetween: 20,
    on: {
      slideChange: function () {
      // Remove the class from all slides first to ensure only one has it
      this.slides.forEach(slide => {
        slide.classList.remove('swiper-slide-next-2');
      });

      // Get the slide element at the calculated index
      // Swiper handles the loop internally for the slides array
      const afterNextSlide = this.slides[this.activeIndex + 2];

      // Add the class to the slide after the next one, if it exists
      if (afterNextSlide) {
        afterNextSlide.classList.add('swiper-slide-next-2');
      }
      },
    },
  });

  chatSwiper.slides.forEach((slide, index) => {
    if (index % 3 === 0) {
      slide.classList.add('first-of-three');
    }

    if (index % 3 === 1) {
      slide.classList.add('second-of-three');
    }

    if (index % 3 === 2) {
      slide.classList.add('third-of-three');
    }

    if (index % 2 === 0) {
      slide.classList.add('is-even');
    }

    if (index % 2 === 1) {
      slide.classList.add('is-odd');
    }
  });

  document.addEventListener('scroll', () => {
    const commentsFeature = document.querySelector('.comments-feature');
    if (commentsFeature) {
      const rect = commentsFeature.getBoundingClientRect();
      const windowHeight = window.innerHeight;
      const triggerPoint = windowHeight - rect.height;

      if (window.scrollY >= triggerPoint * 0.75) {
        commentsFeature.classList.add('reveal');
      } else {
        commentsFeature.classList.remove('reveal');
      }
    }
  })
}

export function initCommentClose() {
  document.addEventListener('DOMContentLoaded', function() {
    const closeButton = document.querySelector('.comments-feature-close');
    if (closeButton) {
      closeButton.addEventListener('click', function() {
        const commentsFeature = document.querySelector('.comments-feature');

        if (commentsFeature.classList.contains('is-hidden')) {
          commentsFeature.classList.remove('is-hidden')
          // closeButton.textContent = 'Hide';
        } else {
          commentsFeature.classList.add('is-hidden')
          // closeButton.textContent = 'Show';
        }
      });
    }
  });
} 
