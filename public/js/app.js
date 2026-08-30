// Toast message
document.addEventListener('DOMContentLoaded', () => {
    const toast = document.getElementById('toast');
    console.log(toast);
    if(!toast) return;

    toast.addEventListener('click', (e) => {

    })

    setTimeout(() => {
        toast.remove();
    }, 4000);
})