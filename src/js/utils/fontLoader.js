// fontLoader.js
// Utility to add .fonts-loaded to <html> when Neoneon font is loaded

export function loadNeoneonFont() {
  if (document.fonts) {
    document.fonts.load('1em Neoneon').then(function() {
      document.documentElement.classList.add('fonts-loaded');
    });
  } else {
    // fallback for older browsers
    document.documentElement.classList.add('fonts-loaded');
  }
} 