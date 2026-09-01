import './bootstrap';

// Fade out "Saved." confirmation flashes a couple of seconds after a
// profile/password update, mirroring the old Alpine.js behaviour without
// the extra dependency.
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.js-saved-flash').forEach((el) => {
        setTimeout(() => {
            el.style.transition = 'opacity 300ms ease-out';
            el.style.opacity = '0';
            setTimeout(() => el.remove(), 300);
        }, 2000);
    });
});
