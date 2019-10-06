/**
 * CONFIRM RETOUCHING
 */
const backBtn = document.querySelector('.back');
const confirmForm = document.querySelector('#form');

backBtn.addEventListener('click', e => {
    confirmForm.setAttribute('action', 'index.php');
    confirmForm.submit();
});