/* ── Theme toggle ── */
const themeToggleBtn = document.getElementById('theme-toggle');
const darkIcon = document.getElementById('theme-toggle-dark-icon');
const lightIcon = document.getElementById('theme-toggle-light-icon');

// Le sombre est le maître absolu, sauf si 'light' est sauvegardé
if (localStorage.getItem('color-theme') === 'light') {
    document.documentElement.classList.remove('dark');
    darkIcon.classList.remove('hidden');
    lightIcon.classList.add('hidden');
} else {
    // S'il n'y a rien dans le localStorage (première visite) ou si c'est 'dark'
    document.documentElement.classList.add('dark');
    lightIcon.classList.remove('hidden');
    darkIcon.classList.add('hidden');
}
themeToggleBtn.addEventListener('click', function () {
    darkIcon.classList.toggle('hidden');
    lightIcon.classList.toggle('hidden');
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
    } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
    }
});

/* ── Mobile menu ── */
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const hamburgerIcon = document.getElementById('hamburger-icon');
const closeIcon = document.getElementById('close-icon');

mobileMenuBtn.addEventListener('click', function () {
    const isOpen = mobileMenu.classList.contains('open');
    mobileMenu.classList.toggle('open', !isOpen);
    hamburgerIcon.classList.toggle('hidden', !isOpen);
    closeIcon.classList.toggle('hidden', isOpen);
});
function closeMobileMenu() {
    mobileMenu.classList.remove('open');
    hamburgerIcon.classList.remove('hidden');
    closeIcon.classList.add('hidden');
}

/* ── Scroll fade-in ── */
const fadeEls = document.querySelectorAll('.fade-in');
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
            setTimeout(() => entry.target.classList.add('visible'), i * 80);
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.12 });
fadeEls.forEach(el => observer.observe(el));

/* ── Contact form ── */
const form = document.getElementById('contact-form');
const submitBtn = document.getElementById('submit-btn');
const btnText = document.getElementById('btn-text');
const btnArrow = document.getElementById('btn-arrow');
const btnSpinner = document.getElementById('btn-spinner');
const toastOk = document.getElementById('toast-ok');
const toastError = document.getElementById('toast-error');

form.addEventListener('submit', async function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('sujet').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name || !email || !message) {
        toastError.classList.add('show');
        setTimeout(() => toastError.classList.remove('show'), 4500);
        return;
    }

    // Loading state
    submitBtn.disabled = true;
    btnText.textContent = 'Envoi en cours…';
    btnArrow.classList.add('hidden');
    btnSpinner.classList.remove('hidden');

    // NOUVEAU : Récupération dynamique de l'URL et du Token depuis le HTML
    const actionUrl = form.action;
    const csrfToken = form.querySelector('input[name="_token"]').value;

    try {
        const response = await fetch(actionUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken // Utilisation de la variable JS
            },
            body: JSON.stringify({ name, email, subject, message })
        });

        if (response.ok) {
            form.reset();
            toastOk.classList.add('show');
            setTimeout(() => toastOk.classList.remove('show'), 4500);
        } else {
            const errorData = await response.text();
            console.error('Erreur Laravel:', errorData);
        }
    } catch (error) {
        console.error('Erreur réseau:', error);
    } finally {
        submitBtn.disabled = false;
        btnText.textContent = 'Envoyer le message';
        btnArrow.classList.remove('hidden');
        btnSpinner.classList.add('hidden');
    }
});