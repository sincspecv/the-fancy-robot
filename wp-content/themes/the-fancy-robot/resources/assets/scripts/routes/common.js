import Siema from 'siema';
export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    /**
     * Mobile Nav Toggle
     */
    const navToggle = document.querySelector('#nav-toggle')
    const mobileNav = document.querySelector('.nav-mobile')
    navToggle.addEventListener('click', event => {
      event.preventDefault()
      navToggle.classList.toggle('active');
      mobileNav.classList.toggle('active');
    })

    /**
     * Sliders use Siema. See: https://pawelgrzybek.github.io/siema/
     */
    const imageGrids = document.querySelectorAll('.image-grid')
    if(imageGrids != undefined && imageGrids.length) {
      [].forEach.call(imageGrids, imageGrid => {
        const lightbox = imageGrid.querySelector('.image-grid__lightbox')
        const sliderContainer = lightbox.querySelector('.image-grid__slider-container')
        const prevButton = lightbox.querySelector('.image-grid__slide-prev')
        const nextButton = lightbox.querySelector('.image-grid__slide-next')
        const slider = new Siema({
          selector: sliderContainer,
          loop: true,
        })

        prevButton.addEventListener('click', () => slider.prev())
        nextButton.addEventListener('click', () => slider.next())

        lightbox.querySelector('.lightbox-close-button').addEventListener('click', event => {
          event.preventDefault()
          if(lightbox.classList.contains('visible')) {
            lightbox.classList.remove('visible')
            document.body.style.overflow = 'initial'
          }
        })

        const images = imageGrid.querySelectorAll('.image-grid-item')
        if(images != undefined && images.length) {
          [].forEach.call(images, image => {
            const index = image.dataset.index;
            image.addEventListener('click', event => {
              event.preventDefault();
              lightbox.classList.add('visible')
              slider.resizeHandler()
              slider.goTo(index)
              document.body.style.overflow = 'hidden'
            })
          })
        }
      })
    }

    const modal = document.querySelector('#cal-modal');
    const modalClose = modal.querySelector('.modal-close');
    modalClose.addEventListener('click', event => {
      event.preventDefault();
      modal.classList.toggle('visible');
    })

    const modalButtons = document.querySelectorAll('.button.cta-modal');
    [].forEach.call(modalButtons, button => {
      button.addEventListener('click', event => {
        event.preventDefault();
        // const script = modal.querySelector('script[src=""]');
        // if(script) {
        //   script.setAttribute('src', script.dataset.src);
        //   jQuery.getScript(script.dataset.src);
        // }
        modal.classList.toggle('visible');
      })
    })
  },
};
