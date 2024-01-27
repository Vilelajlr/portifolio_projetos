let btnMenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay')

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})


menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})


window.onscroll = function() {
    var botao = document.querySelector('.btn-flutuante');
    if (window.pageYOffset > 100) { // Se a altura de rolagem for maior que 100
        botao.style.display = "block"; // Faz o botão flutuante aparecer
    } else {
        botao.style.display = "none"; // Caso contrário, faz o botão flutuante desaparecer
    }
};