document.addEventListener("DOMContentLoaded", function() {


    document.querySelector("#show-login").addEventListener("click",function (){
        document.querySelector(".popup").classList.add("active");
        disableSubmitButton();
    });

    document.querySelector(".popup .close-button").addEventListener("click",function (){
        document.querySelector(".popup").classList.remove("active");
        document.querySelector("form").reset();
        updateRequirement("match",false);
        updateRequirement("length",false);
        updateRequirement("lowercase",false);
        updateRequirement("uppercase",false);
        updateRequirement('number', false);
        updateRequirement('characters', false);
    });






});



const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm-password");
const showPassword = document.getElementById("show-password");
showPassword.addEventListener('click', (event) => {
    if (password.type === 'password') {
        password.type = "text"
        confirmPassword.type = "text"
        showPassword.innerText = 'Schovaj'
        showPassword.setAttribute('aria-label', 'hide password')
        showPassword.setAttribute('aria-checked', 'true')

    } else {
        password.type = "password"
        confirmPassword.type = "password"
        showPassword.innerText = 'Ukáž'
        showPassword.setAttribute('aria-label', 'show password')
        showPassword.setAttribute('aria-checked', 'false')
    }
})

const updateRequirement = (id, valid) => {
    const requirement = document.getElementById(id);
    if (valid) {
        requirement.classList.remove("error");
        requirement.classList.add("valid");
    } else {
        requirement.classList.remove("valid");
        requirement.classList.add("error");
    }
};

confirmPassword.addEventListener("input", (event) => {
    const value = event.target.value;
    const passwordValue = password.value;
    handleFormValidation();
    updateRequirement('match', value === passwordValue);
});

password.addEventListener("input", (event) => {
    const value = event.target.value;

    updateRequirement('length', value.length >= 8)
    updateRequirement('lowercase', /[a-z]/.test(value))
    updateRequirement('uppercase', /[A-Z]/.test(value))
    updateRequirement('number', /\d/.test(value))
    updateRequirement('characters', /[#.?!@$%^&*-]/.test(value))
    handleFormValidation();
});

const submitButton = document.getElementById("submit");


const handleFormValidation = () => {

    const value = password.value;
    const confirmValue = confirmPassword.value;


    if ( value.length >= 8 && /[a-z]/.test(value) && /[A-Z]/.test(value) && /\d/.test(value) && /[#.?!@$%^&*-]/.test(value) && value === confirmValue) {

        enableSubmitButton();
    } else {
        disableSubmitButton();
    }

};



function disableSubmitButton() {
    submitButton.setAttribute("disabled", true);
    //submitButton.classList.add("disabled");
}

function enableSubmitButton() {
    submitButton.removeAttribute("disabled");
}
