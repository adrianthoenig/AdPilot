export default function toast() {
    const toast = document.getElementById('toast');
    if (!toast) return;

    toast.addEventListener('click', (e) => {
        const clicked = e.target.closest('#toastBtn');
        if (!clicked) return;

        toast.remove();
        clearTimeout(timeout);
    })

    const timeout = setTimeout(() => {
        toast.remove();
    }, 4000);
}