/*para desktop = felchita cursor*/
const flechita = document.querySelector('.flechita')
const menu = document.querySelector('.desktop__menu--remove')


/*para celular = el extension para mobile*/
const extension=document.querySelector('.extension');
const mobil_menu=document.querySelector('.mobil__menu--remove')

/*carrito de compra = el carrito de compras*/
const carrito_compra=document.querySelector('.navbar-shoping-cart');
const productos_requeridas=document.querySelector('.product-detail--remove');

const btnFlotante = document.querySelector('.btn-flotante');
const footer = document.querySelector('.footer');
btnFlotante.addEventListener('click', mostrarOcultarFooter);

function mostrarOcultarFooter() {
    if( footer.classList.contains('footer_activo') ) {
        footer.classList.remove('footer_activo');
        this.textContent = 'x cerrar';
    } else {
        footer.classList.add('footer_activo')
        this.textContent = 'mas informacion';
    }
    console.log('hola')
}

/*para desktop = felchita cursor*/
flechita.addEventListener('click' , () => {
    menu.classList.toggle('desktop__menu--remove')
    productos_requeridas.classList.add('product-detail--remove')
})

/*para celular = el extension para mobile*/
extension.addEventListener('click', ()=>{
    mobil_menu.classList.toggle('mobil__menu--remove')
    productos_requeridas.classList.add('product-detail--remove')
}  
)
