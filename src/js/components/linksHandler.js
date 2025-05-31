export function linksHandler() {
  // ===========================================================================
  // Hash Links
  // ===========================================================================

  let hashLinks = document.querySelectorAll('a[href^="#"]:not([href="#"]):not([data-fancybox])');

  for (const hashLink of hashLinks) {
    hashLink.addEventListener('click', function (event) {
      event.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      const siteHeaderHeight = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--site-header-height')) || 0;

      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - siteHeaderHeight - 50,
          behavior: 'smooth'
        });
      }
    });
  }

  // ===========================================================================
  // External Links
  // ===========================================================================
  function link_is_external(link_element) {
    return (link_element.host !== window.location.host);
  }

  let regLinks = document.querySelectorAll('a[href]:not([href^="#"],[href^="mailto:"],[href^="tel:"],[href^="javascript:"]):not(.no-external-icon)');

  for (const regLink of regLinks) {
    if ((link_is_external(regLink) && !regLink.querySelector('img')) || regLink.href.endsWith('.pdf')) {
      regLink.setAttribute('target', '_blank');
      regLink.classList.add('external');
    }
  } 
}