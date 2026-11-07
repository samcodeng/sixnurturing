const menuButton = document.querySelector('#menu-button');
const navigation = document.querySelector('#main-navigation');

menuButton?.addEventListener('click', () => {
    const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
    menuButton.setAttribute('aria-expanded', String(!isOpen));
    navigation?.classList.toggle('hidden', isOpen);
    navigation?.classList.toggle('absolute', !isOpen);
    navigation?.classList.toggle('left-0', !isOpen);
    navigation?.classList.toggle('right-0', !isOpen);
    navigation?.classList.toggle('top-20', !isOpen);
    navigation?.classList.toggle('grid', !isOpen);
    navigation?.classList.toggle('gap-5', !isOpen);
    navigation?.classList.toggle('bg-white', !isOpen);
    navigation?.classList.toggle('p-6', !isOpen);
    navigation?.classList.toggle('shadow-lg', !isOpen);
});
