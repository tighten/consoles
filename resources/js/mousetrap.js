/**
 * Polyfill for element.closest()
 */
if (!Element.prototype.matches) {
    Element.prototype.matches = Element.prototype.msMatchesSelector || 
        Element.prototype.webkitMatchesSelector;
}

if (!Element.prototype.closest) {
Element.prototype.closest = function(s) {
    var el = this;

    do {
    if (el.matches(s)) return el;
    el = el.parentElement || el.parentNode;
    } while (el !== null && el.nodeType === 1);
    return null;
};
}

window.Mousetrap = require('mousetrap');

var shortcuts = document.getElementsByClassName('shortcut');

for (let i = 0; i < shortcuts.length; i++) {
    const shortcut = shortcuts[i];
    Mousetrap.bind(
        shortcut.innerHTML,
        function() { shortcut.closest('a').click(); },
    );
}