import Component from "../Classes/Component"
import imagesLoaded from "imagesloaded";
import gsap from "gsap";

export default class Preloader extends Component {
    constructor () {
        super({
            element: '.pre_loader',
            elements: {
                images: 'img',
                numberText: '.preloader__number__text'
            }
        })

       this.length = 0
       this.imageLoader()

    } 

    imageLoader() {

        const imgLoad = imagesLoaded( this.elements.images);

        imgLoad.on('progress', (instance, img) => {
            this.onImagesLoaded(instance, img)

        })
    }

    onImagesLoaded (instance, img) {
     //   console.log( 'this image is loaded', img)

        this.length += 1
        const percent = this.length / this.elements.images.length

        this.elements.numberText.innerHTML = `${Math.round(percent * 100)}%`

        if (percent === 1) {
           
            // after we have loaded all the images wait 2 seconds before removing preloader
            setTimeout( () => {
                this.onComplete()
              }, 3000)
        }

    }


    onComplete() {
       this.element.classList.add('hidden__preloader')

        setTimeout( () => {
          this.element.parentNode.removeChild(this.element)
        }, 2000)

    }

}