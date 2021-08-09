let button = document.querySelector('.button');
let popup = document.querySelector('.popup');
let email = document.getElementById('email');
let phone = document.getElementById('phone');
const openPopup = () => {
    button.classList.add('display-none');
    button.classList.remove('display-block');
    popup.classList.add('display-block');
    popup.classList.remove('display-none');
}
const closePopup = () => {
    button.classList.add('display-block');
    button.classList.remove('display-none');
    popup.classList.add('display-none');
    popup.classList.remove('display-block');
}

const sendData = () => {
    console.log(email.value);
    console.log(phone.value);
}
