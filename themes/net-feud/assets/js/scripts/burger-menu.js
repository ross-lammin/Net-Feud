var burgerMenu = document.querySelector('.header__burger-menu--container');
var navBar = document.querySelector('.menu-primary-container');

document.addEventListener('DOMContentLoaded', function () {
  burgerMenu.addEventListener('click', function () {
    burgerMenu.classList.toggle('header__burger-menu--change');
    navBar.classList.toggle('display-block');
  });

  var dropdown = document.querySelector('.form__general-select');
  var dropdown2 = document.querySelector('.form__general-select2');
  var dropdown3 = document.querySelector('.form__general-select3');
  var dropdown4 = document.querySelector('.form__general-select4');
  var dropdown5 = document.querySelector('.form__general-select5');
  var dropdown6 = document.querySelector('.form__general-select6');
  var dropdown7 = document.querySelector('.form__general-select7');
  var arrow = document.querySelector('.arrow');
  var arrow2 = document.querySelector('.arrow2');
  var arrow3 = document.querySelector('.arrow3');
  var arrow4 = document.querySelector('.arrow4');
  var arrow5 = document.querySelector('.arrow5');
  var arrow6 = document.querySelector('.arrow6');
  var arrow7 = document.querySelector('.arrow7');

  dropdown.addEventListener('click', function () {
    arrow.classList.toggle('flip-arrow');
  });
  dropdown2.addEventListener('click', function () {
    arrow2.classList.toggle('flip-arrow');
  });
  dropdown3.addEventListener('click', function () {
    arrow3.classList.toggle('flip-arrow');
  });
  dropdown4.addEventListener('click', function () {
    arrow4.classList.toggle('flip-arrow');
  });
  dropdown5.addEventListener('click', function () {
    arrow5.classList.toggle('flip-arrow');
  });
  dropdown6.addEventListener('click', function () {
    arrow6.classList.toggle('flip-arrow');
  });
  dropdown7.addEventListener('click', function () {
    arrow7.classList.toggle('flip-arrow');
  });
});
