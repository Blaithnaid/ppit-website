function toggleMenu() {
    let hamburgermenu = document.getElementById('hamburger-menu');
    if (hamburgermenu.style.display === 'none') {
        hamburgermenu.style.display = 'flex';
    } else {
        hamburgermenu.style.display = 'none';
    }
}