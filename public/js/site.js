const menuButton = document.querySelector('#menu-button');
const mainNavigation = document.querySelector('#main-navigation');

menuButton?.addEventListener('click', () => {
  const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';

  menuButton.setAttribute('aria-expanded', String(!isExpanded));
  mainNavigation?.classList.toggle('hidden', isExpanded);
  mainNavigation?.classList.toggle('absolute', !isExpanded);
  mainNavigation?.classList.toggle('left-0', !isExpanded);
  mainNavigation?.classList.toggle('right-0', !isExpanded);
  mainNavigation?.classList.toggle('top-20', !isExpanded);
  mainNavigation?.classList.toggle('grid', !isExpanded);
  mainNavigation?.classList.toggle('gap-5', !isExpanded);
  mainNavigation?.classList.toggle('bg-white', !isExpanded);
  mainNavigation?.classList.toggle('p-6', !isExpanded);
  mainNavigation?.classList.toggle('shadow-lg', !isExpanded);
});
