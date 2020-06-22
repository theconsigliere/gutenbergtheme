    const startSwiper = () => {
      var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          type: 'progressbar',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    }
      
      
      // Initialize each block on page load (front end).
      document.addEventListener('DOMContentLoaded', function(){ 
        startSwiper();
    }, false);
    
    
          // Initialize dynamic block preview (editor).
          if( window.acf ) {
            window.acf.addAction( 'render_block_preview/type=slideshow', startSwiper );
        }
    
    
    