import {startLoader, stopLoader} from "../loader.js";
import animate from "../animate.js";

Stimulus.register('app', class extends StimulusController {
  static targets = [
   "warranty", "stickyButton", "track", "menu", "closeMenu", "errorMessage", "form", "successMsg",
    "showForm", "formSubmit", "warrantyAnimate", "number"
  ];

  isAnimationTriggered = false

  animationInstance

  isMobile = false

  connect() {
    this.animationInstance = animate({
      targets: '.number',
      top: '25px',
      loop: false,
      delay: animate.stagger(700, {easing: 'easeOutQuad'}),
    });

    this.isMobile = window.innerWidth < 600;
  }

  scrollDown() {
    this.warrantyTarget.scrollIntoView();
  }

  scrollToTop() {
    this.element.scrollTo({ top: 0, behavior: "smooth" })
    window.location.href.replace(window.location.search,"");
  }

  startAnimate() {
    if (this.isAnimationTriggered === false) {
      this.isAnimationTriggered = true;
      this.animationInstance.play();
    }
  }

  handleScroll(event) {
    if (150 > event.target.scrollTop) {
      this.stickyButtonTarget.classList.add("hidden")
    } else {
      this.stickyButtonTarget.classList.remove("hidden")
    }

    if (this.warrantyAnimateTarget.getBoundingClientRect().top < -150) {
      this.isAnimationTriggered = false;
      this.animationInstance.reset();
    }
  }

  showMenu() {
    this.closeMenuTarget.setAttribute("style", "display: block;")
    this.menuTarget.setAttribute("style", "display: flex");
  }

  hideMenu() {
    if (this.isMobile) {
      this.menuTarget.setAttribute("style", "display: none");
    }
  }

  submitForm(event) {
    const id = startLoader(this.formSubmitTarget)
    this.errorMessageTarget.textContent = "";

    const formData = new FormData(event.target);
    const dataObject = {};

    Array.from(event.target).forEach(el => {
      if (el.classList.contains("has-error")) {
        el.classList.remove("has-error");
        el.previousElementSibling.textContent = "";
      }
    })

    formData.forEach(function(value, key){
      dataObject[key] = value;
    });

    fetch('/order', {
      method: 'POST',
      body: JSON.stringify(dataObject),
      credentials: 'same-origin',
      headers: {
        "X-Requested-With": "XMLHttpRequest",
        'Content-Type': 'application/json',
      }
    })
     .then((response) => {
       stopLoader(this.formSubmitTarget, id)

       if (response.ok && response.status === 201) {
          this.formTarget.classList.add("hidden");
          this.successMsgTarget.classList.remove("hidden");
          this.showFormTarget.classList.remove("hidden");
       } else {
         response.json().then((r) => {
           for (const [key, value] of Object.entries(r.errors)) {
             let selector = document.querySelector(`input[name="${key}"]`);
             selector.classList.add("has-error");
             selector.previousElementSibling.textContent = value
           }

           this.errorMessageTarget.textContent = "Przynajmniej jedno pole jest błędnie wypełnione. Sprawdź wpisaną treść i spróbuj ponownie."
         })
       }
     }).catch((error) => {
      // Wystąpił błąd ogólny
    });
  }

  showForm() {
    this.formTarget.classList.remove("hidden");
    this.successMsgTarget.classList.add("hidden");
    this.showFormTarget.classList.add("hidden");
  }

  _isScrolledIntoView(el) {
    let rect = el.getBoundingClientRect();
    return (rect.top >= 0) && (rect.bottom <= window.innerHeight);
  }
});