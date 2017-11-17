document.addEventListener('DOMContentLoaded', function () {

  var burgerMenu = document.querySelector('.header__burger-menu--container');
  var navBar = document.querySelector('.menu-primary-container');

  /* Script for opening and closing the top nav bar */
  burgerMenu.addEventListener('click', function () {
    burgerMenu.classList.toggle('header__burger-menu--change');
    navBar.classList.toggle('display-block');
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

  contactButton.addEventListener('click', function () {
    contactDetails.classList.toggle('contact__details--open');
    contactDetails.classList.toggle('display-none');
  });

});
