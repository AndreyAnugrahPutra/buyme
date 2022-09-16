let Navbar = document.getElementsByClassName('navbar');
let navBtn = document.querySelector('#navBtn');
let navMenu = document.querySelector('.nav-menu');

let openIcon = navBtn.querySelector('.open');
let closeIcon = navBtn.querySelector('.close');

navBtn.addEventListener('click', () =>
{
    navMenu.classList.toggle('show');
    if(navMenu.classList.contains('show'))
    {
        openIcon.style.display = 'none' ;
        closeIcon.style.display = 'block' ;
    }
    else
    {
        closeIcon.style.display = 'none' ;
        openIcon.style.display = 'block' ;
    }
})