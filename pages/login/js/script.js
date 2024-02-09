// Переключение между формой регистрации и авторизации
const titles = document.querySelectorAll('.enter__title'),
        forms = document.querySelectorAll('.enter__form');

titles[0].addEventListener('click', () => {
    titles[0].classList.add('active');
    titles[1].classList.remove('active');

    forms[0].classList.add('active');
    forms[1].classList.remove('active');
});

titles[1].addEventListener('click', () => {
    titles[1].classList.add('active');
    titles[0].classList.remove('active');

    forms[1].classList.add('active');
    forms[0].classList.remove('active');
});