import Hero from "../../Classes/Hero";
// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, Autoplay]);

// import Swiper styles
// import 'swiper/swiper-bundle.css';

export default class heroSlideshow extends Hero {
    constructor () {
        super({
            id: 'hero-slideshow',
            heroClassname: '.hero-slideshow',
            heroItems: {
                slider: '.hero__slideshow__container',
                slides: '.hero__slideshow__slide',
                pagination: '.hs__swiper-pagination',
                buttonNext:'hs__button-next',
                buttonPrev:'hs__button-prev',
                scrollBar: 'hs__scrollbar'

            }
        })
    }

    create () {
        super.create()

   

        this.init()
        this.onResize()


    }

    init() {
        this.swiper()
    }


    swiper() {


        this.swiper = new Swiper( this.heroItems.slider, {
          spaceBetween: 30,
          effect: "fade",
          simulateTouch: true,
          loop: true,
          pagination: {
            el: this.heroItems.pagination,
            clickable: true
          },
          autoplay: {
            delay: 5000,
            disableOnInteraction: false
          },
          navigation: {
            nextEl: this.heroItems.buttonNext,
            prevEl: this.heroItems.buttonPrev,
          },

          });


          //console.log(this.swiper)

    }

    onResize() {

    }

    gutenberg () {

        super.gutenberg()

        console.log('gutenberg editor')
        
        if (window.acf) {
            window.acf.addAction(`render_block_preview/type=${this.id}`, this.init.bind(this))
        }
    }





}

