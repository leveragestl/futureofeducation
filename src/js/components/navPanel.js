export function initNavPanel() {
  const navToggle = document.getElementById('nav-toggle');
  const navPanel = document.querySelector('.siteHeader__navPanel');
  const toggleLabel = document.querySelector('.siteHeader__toggle');

  let toggleChecked = false;

  navToggle.addEventListener('change', function() {
    toggleChecked = this.checked;
  });
  
  if (navToggle && navPanel) {
    document.addEventListener('click', function(event) {
      if (toggleChecked) {
        if (!navPanel.contains(event.target) && !toggleLabel.contains(event.target)) {
          navToggle.checked = false;
          toggleChecked = false;
        }
      }
    });
  }
} 