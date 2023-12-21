const toBottom = document.getElementById('toBottom');
const toTop = document.getElementById('toTop');


toTop.onclick = () => {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

toBottom.onclick = () => {
    window.scrollTo(0, document.body.scrollHeight);
}