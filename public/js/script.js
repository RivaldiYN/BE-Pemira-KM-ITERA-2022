const toggleBtn = document.querySelector('#togle-nav-menu');
const menu = document.querySelector('#nav-menu');

toggleBtn.addEventListener('click', function () {
    menu.classList.toggle('hidden');
});