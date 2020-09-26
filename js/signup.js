const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const mobile = document.getElementById('user_mobile')
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

// form.addEventListener('submit', e => {
//     e.preventDefault();
//     checkInputs();
// });
// form.submit(function(e) {
//     e.preventDefault();
//     checkInputs();
// });
// form.on('submit', function(e){
//     // validation code here
//     checkInputs();
//     if(!valid) {
//         e.preventDefault();
//     }
// });

function checkInputs() {
    // trim to remove the whitespaces
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const mobileValue = mobile.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
         setErrorFor(username, 'Username cannot be blank');
         return false;

    } else {
         setSuccessFor(username);

    }

    if(emailValue === '') {
         setErrorFor(email, 'Email cannot be Empty');
        return false;
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
        return false;
    } else {
         setSuccessFor(email);

    }
    if (mobileValue === ''){
         setErrorFor(mobile,'Mobile Cannot be Empty');
        return false;
    }else {
       setSuccessFor(mobile);

    }

    if(passwordValue === '') {
         setErrorFor(password, 'Password cannot be Empty');
        return false;
    } else {
         setSuccessFor(password);

    }

    if(password2Value === '') {
         setErrorFor(password2, 'Password cannot be Empty');
        return false;
    } else if(passwordValue !== password2Value) {
        setErrorFor(password2, 'Passwords does not match');
        return false;
    } else{
        setSuccessFor(password2);

    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}