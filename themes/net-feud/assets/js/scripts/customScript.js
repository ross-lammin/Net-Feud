document.addEventListener('DOMContentLoaded', function () {

  if (document.querySelector('#field_1')) {
    document.querySelector('#field_1').placeholder = 'First name...';
  }
  if (document.querySelector('#field_10')) {
    document.querySelector('#field_10').placeholder = 'Last name...';
  }

  var burgerMenu = document.querySelector('.header__burger-menu--container');
  var navBarLi = document.querySelector('.menu-logged-in-container');
  var navBarLo = document.querySelector('.menu-logged-out-container');
  var homeLogo = document.querySelector('.header__home--container');
  var navAvatar = document.querySelector('.header--avatar__display');

  /* Script for opening and closing the top nav bar */
  burgerMenu.addEventListener('click', function () {
    burgerMenu.classList.toggle('header__burger-menu--change');

    if (document.querySelector('.menu-logged-in-container')) {
      navBarLi.classList.toggle('display-block');
    }

    if (document.querySelector('.menu-logged-out-container')) {
      navBarLo.classList.toggle('display-block');
    }

    homeLogo.classList.toggle('display-block');
    navAvatar.classList.toggle('display-block');
  });

  var search = document.querySelector('.nav-bar__primary--search');
  var searchBar = document.querySelector('.header__searchbar--container');
  var searchBarInput = document.querySelector('.header__searchbar--search-input');
  var searchBarX = document.querySelector('.header__searchbar--clear');

  /* Script for the top nav bar search functionality of 
  changing the color of the active search tab */
  search.addEventListener('click', function () {
    searchBar.classList.toggle('display-block2');
    search.classList.toggle('nav-bar__primary--search-color');
  });

  /* Script for the top nav bar search functionality of 
  reseting the search bar */
  searchBarX.addEventListener('click', function () {
    searchBarInput.value = '';
  });

  /* Script for toggling the display of the contact details with the contact details button */
  var contactButton = document.querySelector('.contact__details--button');
  var contactDetails = document.querySelector('.contact__details');

  if (contactButton) {
    contactButton.addEventListener('click', function () {
      contactDetails.classList.toggle('contact__details--open');
      contactDetails.classList.toggle('display-none');
    });
  }

  if (document.querySelector('.activity-greeting')) {
    document.querySelector('.activity-greeting').innerHTML = 'Update Your Status';
  }

  if (document.querySelector('#aw-whats-new-submit')) {
    document.querySelector('#aw-whats-new-submit').value = 'Post Status';
  }

  if (document.querySelector('.members.friends')) {
    var friendsMessage = document.querySelector('#message').childNodes;
    friendsMessage[1].innerHTML = 'You have no friends! Don’t be a loner send someone a request';
  }

  if (document.querySelector('#profile-edit-form')) {
    var personalEditTitle = document.querySelector('#profile-edit-form').childNodes;
    personalEditTitle[1].innerHTML = 'Edit Profile';
  }

  /* 
  * This function removes the links for the single conversation for for 
  * preperation to create the popup window with single convo with comments.
  */
  var singleActivityLink = document.getElementsByClassName('activity-time-since');
  var linkDisable = document.querySelector('.time-since');

  function removeConversationLinks() {
    var i;

    for (i = 0; i < singleActivityLink.length; i++) {
      singleActivityLink[i].removeAttribute('href');
    }

  }
  removeConversationLinks();

});
