// import $ from 'jquery';

// class Menu {
//     constructor() {
//         this.openButton = $("menu-icon");
//         this.closeButton = $("close-icon");
//         this.menuOverlay = $("menu-overlay");
//         this.events();
//      }

//      events() {
//          this.openButton.on("click", this.openOverlay.bind(this));
//          this.closeButton.on("click", this.closeOverlay.bind(this))
//      }

//     openOverlay() {
//         this.menuOverlay.addClass("menu-overlay--active");
//     }

//     closeOverlay() {
//         this.menuOverlay.removeClass("menu-overlay--active");
//     }

// }

// export default Menu;

const menuButton = document.querySelector(".menu-icon");
const closeButton = document.querySelector(".close-icon");
const menuOverlay = document.querySelector(".menu-overlay");
 
// Actions
const events = {
  openOverlay() {
    menuOverlay.classList.add("menu-overlay--active");
  },
  closeOverlay() {
    menuOverlay.classList.remove("menu-overlay--active");
  }
}
 
// Events
menuButton.addEventListener('click', events.openOverlay)
closeButton.addEventListener('click', events.closeOverlay)