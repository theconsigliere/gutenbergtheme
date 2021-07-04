import Component from "../Classes/Component"


export default class Modal extends Component {
    constructor () {
        super({
            element: '.modal-group',
            elements: {
                modal: '.modal',
                sider: '#modal-sider',
                close: '.close-group',
            }
        })

       this.activate()
       this.addEventListeners()

    } 

    activate() {

        console.log('this is a modal')

        // grab how many days the modal should be shown again after
        let days = parseInt(this.elements.sider.textContent);

        // SHOW POP UP AGAIN AFTER SO MANY

        // if days set to 1 show pop up everytime
        if (days === 1 ) {
            localStorage.last = Date.now();
            this.elements.modal.classList.remove('hide-modal')  //Show the div because you haven't ever shown it before.

        } else {
            if(localStorage.last){
                if( (localStorage.last - Date.now() ) / (1000*60*60*24*days) >= 1){ //Date.now() is in milliseconds, so convert it all to days, and if it's more than 1 day, show the div
                    this.elements.modal.classList.remove('hide-modal') //Show the div
                    localStorage.last = Date.now(); //Reset your timer
                }
            }
            else {
                localStorage.last = Date.now();
                this.elements.modal.classList.remove('hide-modal') //Show the div because you haven't ever shown it before.
            }
        }
    }

   close() {
    this.elements.modal.classList.add('hide-modal')

    setTimeout( () => {
        console.log(this.element.parentNode, this)
        this.element.parentNode.removeChild(this.element)
      }, 2000)


   }

   addEventListeners() {

   this.elements.close.addEventListener('click', this.close.bind(this))


   }
}