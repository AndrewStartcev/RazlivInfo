const burgerButton = document.querySelector('.header-bottom__burger');
const menu = document.querySelector('.menu');

burgerButton.addEventListener('click', function () {
  burgerButton.classList.toggle('active');
  menu.classList.toggle('menu--active');
});
