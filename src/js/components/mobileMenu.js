export const initMobileMenu = () => {
  const menuToggle = document.getElementById('nav-toggle');
  const siteNav = document.getElementById('site-navigation');
  
  if (menuToggle && siteNav) {
    menuToggle.addEventListener('change', () => {
      // Prevent body scroll when menu is open
      document.body.style.overflow = menuToggle.checked ? 'hidden' : '';
    });

    // Close menu when viewport becomes desktop size
    const mediaQuery = window.matchMedia('(min-width: 80rem)');
    mediaQuery.addEventListener('change', (e) => {
      if (e.matches && menuToggle.checked) {
        menuToggle.checked = false;
        document.body.style.overflow = '';
      }
    });
  }
}; 