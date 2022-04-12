export function rmmExternalLinks()
{
    document.body.addEventListener('click', function (e) {
        if (e.target.tagName !== 'A') {
            return;
        }
        if (e.target.hostname === location.hostname) {
            return;
        }
        if (['stackoverflow.com','someothersite.com'].indexOf(e.target.hostname) !== -1) {
            return;
        }
        e.preventDefault();
        window.open(e.target.href);
        return false;
    });

}




