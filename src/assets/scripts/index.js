document.addEventListener('DOMContentLoaded', (event) => {
  const nav = document.getElementsByClassName('header__nav')[0];
  const navToggle = document.getElementsByClassName('header__nav-toggle')[0];

  navToggle.addEventListener('click', () => {
    nav.classList.toggle('open');
  });
});
