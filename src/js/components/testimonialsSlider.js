import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export function initTestimonialsSlider() {
  const slider = document.querySelector('.testimonials__slider');
  if (!slider) return;

  new Swiper(slider, {
    modules: [Navigation, Pagination, Autoplay],
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 30,
    loop: true,
    speed: 800,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // Pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
} 