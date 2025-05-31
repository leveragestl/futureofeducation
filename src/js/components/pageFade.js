// Initial page fade in
export function initPageFade() {
  setTimeout(() => {
    document.querySelector('body').classList.add('ready');
  }, 350);

  document.addEventListener('click', handleLinkClick);
}

// Handle link clicks for page transitions
function handleLinkClick(e) {
  // Find the nearest <a> element (in case the click is on a child element)
  const link = e.target.closest('a');
  if (!link) return; // Click did not occur on a link

  // If the link has the "popupLink" class, skip firing the function
  if (link.classList.contains('popupLink')) return;

  // Skip if the link is external (different hostname)
  if (link.hostname && link.hostname !== window.location.hostname) return;

  // Get the href attribute for additional checks
  const href = link.getAttribute('href');

  // Skip if the href starts with '#' (a pure anchor link)
  if (href && href.startsWith('#')) return;

  // Skip if the href is javascript:void(0)
  if (href && href.startsWith('javascript:void(0)')) return;

  // Also skip if the link points to the same page (only differs by a hash)
  if (
    link.hostname === window.location.hostname &&
    link.pathname === window.location.pathname &&
    link.search === window.location.search &&
    link.hash
  ) {
    return;
  }

  // Fire page fade out
  pageFade();
}

// Page fade out function
function pageFade() {
  document.querySelector('body').classList.remove('ready');
} 