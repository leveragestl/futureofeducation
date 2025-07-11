// =============================================================================
// Components
// =============================================================================
import { initPageFade } from './components/pageFade';
import { initHeaderScroll } from './components/headerScroll';
import { initTestimonialsSlider } from './components/testimonialsSlider';
import { initCommentClose } from './components/commentFeature';
import { initCommentsSwiper } from './components/commentFeature';
import { initNavPanel } from './components/navPanel';
import { initEmailTemplateFormSubmissions } from './components/formSubmission';
import { videoPlayer } from './components/videoPlayer';
import { initVideoLinks } from './components/videoLinks';
import { initPostFilters } from './components/postFilters';
import { initParallax } from './components/parallax';
import { initScrollAnimations } from './components/scrollAnimations';
import { initFrontPageAnimations } from './components/frontPageAnimations';
import { initAboutPageAnimations } from './components/aboutPageAnimations';
import { initGetInvolvedAnimations } from './components/getInvolvedAnimations';
import { initNewsPageAnimations } from './components/newsPageAnimations';
import { initJoinMovementAnimations } from './components/joinMovementAnimations';
import { initMagnetic } from './components/magneticEffect';
import { loadNeoneonFont } from './utils/fontLoader';
import { linksHandler } from './components/linksHandler';
import { initTinymce } from './vendors/tinymce';

// Initialize page fade
// initPageFade();

// Initialize header scroll
initHeaderScroll();

// Initialize parallax effect
if (document.querySelector('.parallax-image')) {
  initParallax();
}

// Initialize scroll animations
initScrollAnimations();

// Initialize front page animations
if (document.querySelector('.home')) {
  initFrontPageAnimations();
}

// Initialize testimonials slider
if (document.querySelector('.testimonials__slider')) {
  initTestimonialsSlider();
}

// Initialize nav panel
initNavPanel();

// Initialize post filters
if (document.querySelector('#ajax-load-more')) {
  initPostFilters();
}

// Handle email template form submissions
if (document.querySelector('[data-form-type="email-template"]')) {
  initEmailTemplateFormSubmissions();
}

// Initialize video links if the element exists
if (document.querySelector('.videos-list')) {
  initVideoLinks();
}

// Initialize about page animations if we're on the about page
if (document.querySelector('.page-template-page-about')) {
  initAboutPageAnimations();
}

// Initialize get involved page animations if we're on the get involved page
if (document.querySelector('.page-template-page-get-involved')) {
  initGetInvolvedAnimations();
}

// Initialize news page animations if we're on the news page
if (document.querySelector('.blog')) {
  initNewsPageAnimations();
}

// Initialize Join the Movement page animations
if (document.querySelector('.page-template-page-join-the-movement')) {
  initJoinMovementAnimations();
}

// Initialize magnetic effect
if (document.querySelector('[data-magnetic]')) {
  initMagnetic();
}

// fancyBox
import { fancyBox } from "./vendors/fancyBox";
if (document.querySelector('[data-fancybox]')) {
  fancyBox()
}

// Initialize video player
if (document.querySelector('.video-container')) {
  videoPlayer()
}

// Call the new initialization if the element exists
if (document.querySelector('.comments-feature')) {
  initCommentClose();
  initCommentsSwiper();
}

if (document.querySelector('.font-neoneon')) {
  loadNeoneonFont();
}

// Initialize links handler
linksHandler();

if (document.querySelector('.wysiwyg-field')) {
  initTinymce();
}