let sidebar = document.querySelector('.userSidebar');

let sidebarBtn = document.querySelector('.sidebarBtn');

sidebarBtn.addEventListener('click', ()=>
{
    sidebar.classList.toggle('collapsed');
})
