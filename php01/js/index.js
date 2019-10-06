/**
 * VALIDATION
 */
const form = document.querySelector('.contact-form');
const feedbackName = document.querySelector('.feedback.name');
const feedbackEmail = document.querySelector('.feedback.email');

const emailPattern = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

form.addEventListener('submit', e => {
   e.preventDefault();

    const name = form.name.value;
    const mail = form.email.value;

    let isError = false;

    if(!name) {
        feedbackName.classList.add('active');
        isError = true;
    }
    
    if(!emailPattern.test(mail)) {
        feedbackEmail.classList.add('active');
        isError = true;
    }

    if(isError) return false;

    form.submit();
});

form.name.addEventListener('keyup' , e => {
    if(e.target.value) {
        feedbackName.classList.remove('active');
    }
});
form.email.addEventListener('keyup' , e => {
    if(emailPattern.test(e.target.value)) {
        feedbackEmail.classList.remove('active');
    }
});