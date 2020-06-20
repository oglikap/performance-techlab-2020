import $ from 'jquery';

class Search {
  // 1. describe and create/init object
  constructor() {
    this.addSearchHTML();
    this.resultsDiv = $("#search-overlay__results");
    this.openButton = $(".search__icon");
    this.closeButton = $(".search-overlay__close");
    this.searchOverlay = $(".search-overlay");
    this.searchField = $("#search-term");
    this.events();
    this.isOverlayOpen = false;
    this.isSpinnerVisible = false;
    this.previousValue;
    this.typingTimer;
  }

  // 2. events
  events() {
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on("click", this.closeOverlay.bind(this));
    $(document).on("keydown", this.keyPressDispatcher.bind(this));
    this.searchField.on("keyup", this.typingLogic.bind(this));
  }

  // 3. methods
  typingLogic() {
    if (this.searchField.val() != this.previousValue) {
      clearTimeout(this.typingTimer);

      if (this.searchField.val()) {
        if (!this.isSpinnerVisible) {
          this.resultsDiv.html('<div class="spinner-loader"></div>');
          this.isSpinnerVisible = true;
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 750);
      } else {
        this.resultsDiv.html('');
        this.isSpinnerVisible = false;
      }
    }
    this.previousValue = this.searchField.val();
  }

  getResults() {
    $.when(
      $.getJSON(webrootData.root_url + '/wp-json/wp/v2/posts?search=' + this.searchField.val()),
      $.getJSON(webrootData.root_url + '/wp-json/wp/v2/pages?search=' + this.searchField.val())
    ).then((posts, pages) => {
      var combinedResults = posts[0].concat(pages[0]);
      this.resultsDiv.html(`
        <h2 class="search-overlay__section-title">Resultaten</h2>
        ${combinedResults.length ? '<ul class="link-list min-list">' : '<p>Geen resultaten die voldoen aan de zoekopdracht<span>!</span></p>'}
          ${combinedResults.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
        ${posts.length ? '</ul>' : ''}
        `);
        this.isSpinnerVisible = false;
    }, () => {
      this.resultsDiv.html('<p>Onverwacht resultaat; probeer het opnieuw.</p>');
    });
  }

  keyPressDispatcher(e) {
    if (e.keyCode === 83 && !this.isOverlayOpen && !$("input, textarea").is(':focus')) {
      this.openOverlay();
    }

    if (e.keyCode === 27 && this.isOverlayOpen) {
      this.closeOverlay();
    }
  }

  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
    $("body").addClass("body-no-scroll");
    this.searchField.val('');
    setTimeout(() => this.searchField.focus(), 301);
    // console.log("Our open method just ran");
    this.isOverlayOpen = true;
  }

  closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active");
    $("body").removeClass("body-no-scroll");
    // console.log("Our close method just ran");
    this.isOverlayOpen = false;
  }

  addSearchHTML() {
    $("body").append(`
      <div class="search-overlay">
        <div class="search-overlay__top">
          <div class="wrapper">
            <div class="search-overlay__navbar">
              <span uk-icon="icon:search; ratio: 2" class="search-overlay__icon" aria-hidden="true"></span>
              <input type="text" class="search-term" placeholder="Voer zoekterm in" id="search-term">
              <span uk-icon="icon:close; ratio: 2" class="search-overlay__close" aria-hidden="true"></span>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div id="search-overlay__results"></div>
        </div>
      </div>
      `)
  }
}

export default Search;
