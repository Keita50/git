//const form = document.querySelector('.contact-form');
//const feedback = document.querySelector('.feedback');

//form.addEventListener('submit', e => {
//    e.preventDefault();

//     const name = form.name.value;
//     const mail = form.email.value;
// });

$(function() {
    $('.back').on('click', function() {
        console.log('back');
        $("#form").attr("action", "./index.php");
        $("#form").submit();
    });
});