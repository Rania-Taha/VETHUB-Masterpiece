const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const signIn = document.getElementById('signcheck');
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
const urlParams = new URLSearchParams(window.location.search);
const source = urlParams.get('source');

signIn.addEventListener('click', () =>{
    if (source === 'navbar') {
        window.location.href = '../Home/Home.html';
    }  else {
        window.location.href = '../Cart/checkout.html?';
    }
});