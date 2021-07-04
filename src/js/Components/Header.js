import Component from "../Classes/Component"
import gsap from "gsap";

export default class Header extends Component {
    constructor () {
        super({
            element: 'header',
            elements: {
                toggleIcon: '.menu_toggle',
                mobileMenu: '.mobile-sidebar',
                pageBackground : '.page-cover',
                page : '.page-in-full',
                fullScreenNav : ".fullscreen-nav-js",
                revealActive: ".header__activate"
            }
        })

        this.scrollUp = "js-scroll-up";
        this.scrollDown = "js-scroll-down";
        this.lastScroll = 0;


       this.init()


    } 

    init () {



        super.create()
      //  this.choosePreloader()
        this.eventListeners()


    }

    eventListeners() {
      window.addEventListener('scroll', this.scrolling.bind(this))
      this.elements.toggleIcon.addEventListener('click', this.toggleMenu.bind(this));

    }

    toggleMenu() {
        this.elements.toggleIcon.classList.toggle('toggle_on');

         // IF we have logo - left header selected
         if (this.elements.mobileMenu) {
          this.elements.mobileMenu.classList.toggle('mobile-menu-appear');
          this.elements.pageBackground.classList.toggle('page-cover-opacity');
          this.elements.page.classList.toggle('paged');
          }
  
          // IF we have logo middle selected
  
          if (this.elements.fullScreenNav) {
            this.elements.fullScreenNav.classList.toggle("opacity-full");
          }

    }

    scrolling () {
      // WHEN YOU SCROLL DOWN HIDE HEADER, REVEAL WHEN SCROLLING UP


     if (this.elements.revealActive != null ) {

      this.currentScroll = window.pageYOffset;

      if (this.currentScroll === 0) {
        this.element.classList.remove(this.scrollUp);
        return
      }

      if (this.currentScroll > this.lastScroll && !this.element.classList.contains(this.scrollDown)) {
        // down
        this.element.classList.remove(this.scrollUp);
        this.element.classList.add(this.scrollDown);
    
        this.elements.toggleIcon.classList.remove('toggle_on');
    
        if (this.elements.fullScreenNav) {
          this.elements.fullScreenNav.classList.remove("opacity-full");
        }
    
    
      } else if (this.currentScroll < this.lastScroll && this.element.classList.contains(this.scrollDown)) {
        // up
        this.element.classList.remove(this.scrollDown);
        this.element.classList.add(this.scrollUp);
      }
      this.lastScroll = this.currentScroll;
     }
    }

}