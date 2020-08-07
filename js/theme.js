function themeshow() {
    document.getElementById('theme-opcion').style.display = "inline";
    document.getElementById('mostrar').style.display = "none";
    document.getElementById('ocultar').style.display = "inline";
}

function themehide() {
    document.getElementById('theme-opcion').style.display = "none";
    document.getElementById('mostrar').style.display = "inline";
    document.getElementById('ocultar').style.display = "none";
}

function viewmenu() {
    document.getElementById('menu-hidden').style.display = "flex";
    document.getElementById('hide').style.display = "none";
    document.getElementById('show').style.display = "inline";
}

function hidemenu() {
    document.getElementById('menu-hidden').style.display = "none";
    document.getElementById('hide').style.display = "inline";
    document.getElementById('show').style.display = "none";
}