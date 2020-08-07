function show_terms() {
    document.getElementById('terms').style.display = "inline";
    document.getElementById('showterms').style.display = "none";
}

function goodbyeterms() {
    document.getElementById('terms').style.display = "none";
}

function login() {
    document.getElementById('form-login').style.display = 'flex';
    document.getElementById('form-register').style.display = 'none';
}

function register() {
    document.getElementById('form-login').style.display = 'none';
    document.getElementById('form-register').style.display = 'flex';
}