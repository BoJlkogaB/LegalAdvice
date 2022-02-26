let contextMenu = document.querySelectorAll('.context-menu');
let contextMenuOpen = document.querySelector('.context-menu-open');
let contextMenuDelete = document.querySelector('#context-menu-delete');
for (let i = 0; i < contextMenu.length; i++) {
    contextMenu[i].addEventListener('contextmenu', function (e) {
        e.preventDefault();
        contextMenuOpen.style.left = e.clientX + 'px';
        contextMenuOpen.style.top = e.clientY + 'px';
        contextMenuOpen.style.display = 'block';
        contextMenuDelete.href = '/' + contextMenuOpen.dataset.modelName + '/delete/?id='+this.dataset.id;
    });
}
window.addEventListener('click', function () {
    contextMenuOpen.style.display = 'none';
});