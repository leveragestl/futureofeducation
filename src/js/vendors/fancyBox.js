import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

export function fancyBox() {
  Fancybox.bind("[data-fancybox]", {
    Carousel: {
      transition: "slide",
      Navigation: false,
    },
    Thumbs: {
      showOnStart: false,
    },
    tpl: {
      closeButton:
      `
      <button data-fancybox-close class="f-button is-close-btn">
        <svg width="37" height="39" viewBox="0 0 37 39" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="35.7071" y1="2.70711" x2="0.707107" y2="37.7071" stroke="black" stroke-width="2"/>
          <line x1="0.707107" y1="1.29289" x2="35.7071" y2="36.2929" stroke="black" stroke-width="2"/>
        </svg>
      </button>
      `
    }
  })

  const nextButtons = document.querySelectorAll('.modal__next button')

  for (const nextButton of nextButtons) {
    nextButton.addEventListener('click', () => {
      Fancybox.next()
    })
  }
}