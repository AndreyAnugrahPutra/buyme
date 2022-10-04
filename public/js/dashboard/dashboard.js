let productBtn = document.querySelector('.productBtn');
let productMenu = document.querySelector('.productMenu');

productBtn.addEventListener('click', () =>
{
    productBtn.classList.toggle('clicked');
    productMenu.classList.toggle('show');
})

let userBtn = document.querySelector('.userBtn');
let userMenu = document.querySelector('.userMenu');

userBtn.addEventListener('click', () =>
{
    userBtn.classList.toggle('clicked');
    userMenu.classList.toggle('show');
})

let navBtn = document.querySelector('#navBtn');
let sidebar = document.querySelector('.adminSidebar');

navBtn.addEventListener('click', () =>
{
    sidebar.classList.toggle('Collapse'); 
})
