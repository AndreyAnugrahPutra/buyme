let passwordInput = document.querySelector('.Password');
let eyeIcon = document.querySelector('#eyeShow');
let eyeSlashIcon = document.querySelector('#eyeClose');

eyeIcon.addEventListener('click', () => 
{
    passwordInput.type = 'text';
    eyeIcon.style.display = 'none';
    eyeSlashIcon.style.display = 'inline-block';
})

eyeSlashIcon.addEventListener('click', () =>
{
    passwordInput.type = 'password';
    eyeSlashIcon.style.display = 'none';
    // closeIcon.style.visibility = 'hidden';
    eyeIcon.style.display = 'inline-block';
})