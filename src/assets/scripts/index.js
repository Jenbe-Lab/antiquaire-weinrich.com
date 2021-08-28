/**
 * @param {HTMLElement} $nav
 * @param {HTMLElement} $element
 */
const setupNav = ($nav, $element) => {
  $element.addEventListener('click', () => $nav.classList.toggle('open'));
};

document.addEventListener('DOMContentLoaded', async () => {
  let $nav, $toggle;

  // Ugly die-and-retry loop but it works fine
  for (let i = 0; i < 100; i++) {
    $nav = document.getElementsByClassName('header__nav')[0];
    $toggle = document.getElementsByClassName('header__nav-toggle')[0];

    if (!$nav || !$toggle) {
      await new Promise((resolve) => {
        const t = setTimeout(() => {
          clearTimeout(t);
          resolve();
        }, 100);
      });
    } else {
      setupNav($nav, $toggle);
      break;
    }
  }
});
