import throttle from 'lodash/throttle'

class StickyHeader {
  constructor() {
    this.siteHeader = document.querySelector(".site-header__wrap")
    this.events()
  }

  events() {
    window.addEventListener("scroll", throttle(() => this.runOnScroll(), 200))
  }

  runOnScroll() {
    if(window.scrollY > 10) {
      this.siteHeader.classList.add("site-header__wrap--invisible")
    } else {
      this.siteHeader.classList.remove("site-header__wrap--invisible")
    }
    if(window.scrollY > 600) {
      this.siteHeader.classList.remove("site-header__wrap--invisible")
      this.siteHeader.classList.add("site-header__wrap--alt")
    } else {
      this.siteHeader.classList.remove("site-header__wrap--alt")
    }
  }
}

export default StickyHeader;
