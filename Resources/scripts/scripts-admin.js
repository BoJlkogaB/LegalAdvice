// Контекстное меню
let contextMenu = document.querySelectorAll('.context-menu');
let contextMenuOpen = document.querySelector('.context-menu-open');
let contextMenuDelete = document.querySelector('#context-menu-delete');
for (let i = 0; i < contextMenu.length; i++) {
    contextMenu[i].addEventListener('contextmenu', function (e) {
        e.preventDefault();
        contextMenuOpen.style.left = e.clientX + 'px';
        contextMenuOpen.style.top = e.clientY + 'px';
        contextMenuOpen.style.display = 'block';
        contextMenuDelete.href = '/' + contextMenuOpen.dataset.modelName + '/delete/?id=' + this.dataset.id;
    });
}
window.addEventListener('click', function () {
    contextMenuOpen.style.display = 'none';
});

// Получаем данные из GET запроса
let paramsGet = window
    .location
    .search
    .replace('?', '')
    .split('&')
    .reduce(
        function (p, e) {
            let a = e.split('=');
            p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );

// Сортировка по ID
let sortID = document.querySelector('#sortID');
let sortDirection = paramsGet['sortID'] ?? 'desc';
sortDirection = sortDirection === 'desc' ? 'asc' : 'desc';
sortID.href = '?sortID=' + sortDirection;



