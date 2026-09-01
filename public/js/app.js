// Plain static asset (no build step) - fades out the "Saved." confirmation
// a couple of seconds after a profile/password update.
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.js-saved-flash').forEach((el) => {
        setTimeout(() => {
            el.style.transition = 'opacity 300ms ease-out';
            el.style.opacity = '0';
            setTimeout(() => el.remove(), 300);
        }, 2000);
    });
});
