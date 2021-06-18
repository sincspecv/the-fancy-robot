export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // const getNextSibling = (element, selector) => {
    //   let sibling = element.nextElementSibling;
    //
    //   if(!selector) return sibling;
    //
    //   while(sibling) {
    //     if(sibling.matches(selector)) return sibling;
    //     sibling = sibling.nextElementSibling;
    //   }
    //
    //   return false;
    // }

    const videoEl = document.querySelector('.hero-nav__video');
    if(videoEl && videoEl != undefined) {
      videoEl.playsinline = true;
      videoEl.preload = 'auto'; //but do not set autoplay, because it deletes preload
      videoEl.play();
    }

    const banner = document.querySelector('.banner');
    const hero = document.querySelector('.hero-nav');
    if(banner && banner != undefined) {
      if(hero && hero != undefined) {


        window.addEventListener('scroll', () => {
          const scrollDistance = hero.offsetHeight * 0.75;
          if(window.pageYOffset >= scrollDistance) {
            banner.classList.remove('transparent');
          } else {
            banner.classList.add('transparent');
          }
        });
      }
    }


  },
};
