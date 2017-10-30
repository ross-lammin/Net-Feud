

var burgerMenu = document.querySelector('.header__burger-menu--container');
var navBar = document.querySelector('.menu-primary-container');

document.addEventListener('DOMContentLoaded', function () {
  burgerMenu.addEventListener('click', function () {
    burgerMenu.classList.toggle('header__burger-menu--change');
    navBar.classList.toggle('display-block');
  });



  var search = document.querySelector('.nav-bar__primary--search');
  var searchBar = document.querySelector('.header__searchbar--container');
  var searchBarInput = document.querySelector('.header__searchbar--search-input');
  var searchBarX = document.querySelector('.header__searchbar--clear');

  search.addEventListener('click', function () {
    searchBar.classList.toggle('display-block2');
    search.classList.toggle('nav-bar__primary--search-color');
  });

  searchBarX.addEventListener('click', function () {
    searchBarInput.value = '';
  });

  // var headDrop = document.querySelector('.select__expand');
  // var headDropcl = document.querySelector('.select__close--label');
  // var headDropl = document.querySelector('.select__option');

  // headDrop.addEventListener('click', function () {
  //   headDrop.classList.add('open');
  //   headDropcl.classList.add('display-block');
  // });

  // headDropcl.addEventListener('click', function () {
  //   headDrop.classList.remove('open');
  //   headDropcl.classList.remove('display-block');
  // });

});
