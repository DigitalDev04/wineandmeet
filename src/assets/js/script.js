const menuButton = document.getElementById('menu-button');
const menu = document.getElementById('menu');

menuButton.addEventListener('click', function () {
    menuButton.classList.toggle('active');
    menu.classList.toggle('active');
});