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

// Initialize page fade
// initPageFade();

// Initialize header scroll
initHeaderScroll();

// Initialize testimonials slider
initTestimonialsSlider();

// Initialize nav panel
initNavPanel();

// Handle email template form submissions
initEmailTemplateFormSubmissions();

// Initialize video links if the element exists
if (document.querySelector('.links-list')) {
  initVideoLinks();
}

// =============================================================================
// Vendors
// =============================================================================

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