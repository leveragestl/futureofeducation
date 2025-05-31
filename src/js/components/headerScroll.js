export function initHeaderScroll() {
  const header = document.querySelector('.siteHeader');
  if (!header) return;

  // Initial check
  checkScroll(header);

  // Add scroll listener
  window.addEventListener('scroll', () => checkScroll(header));
}

function checkScroll(header) {
  const scrolled = window.scrollY > 10;
  header.classList.toggle('is-scrolled', scrolled);
} 