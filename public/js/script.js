let body = document.getElementsByTagName('body');
let notifCard = document.querySelector('.notification-card');
let notifBtn = document.querySelector('.close-notif');

notifBtn.addEventListener('click', ()=>
{
    notifCard.remove();
})