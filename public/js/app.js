// Copy to Clipboard from Input
function copyToClipboard(id) {
    document.getElementById(id).select();
    if (true === document.execCommand('copy')) {
        toastr.success('Ссылка успешно скопирована.')
    } else {
        toastr.error('Что-то пошло не так...')
    }
}

// Выделение пункта меню
const pathname_url = window.location.pathname;
const href_url = window.location.href;
$("nav a").each(function () {
    let link = $(this).attr("href");
    if (pathname_url === link || href_url === link) {
        $(this).addClass("active");
    }
});