/*para desktop = felchita cursor*/
const flechita = document.querySelector('.flechita')
const menu = document.querySelector('.desktop__menu--remove')


/*para celular = el extension para mobile*/
const extension=document.querySelector('.extension');
const mobil_menu=document.querySelector('.mobil__menu--remove')

/*carrito de compra = el carrito de compras*/
const carrito_compra=document.querySelector('.navbar-shoping-cart');
const productos_requeridas=document.querySelector('.product-detail--remove')


/* boton*/
const btnFlotante = document.querySelector('.btn-flotante');
const footer = document.querySelector('.footer');
btnFlotante.addEventListener('click', mostrarOcultarFooter);

function mostrarOcultarFooter() {
    if( footer.classList.contains('activo') ) {
        footer.classList.remove('activo');
        footer.classList.remove('activo');
        this.textContent = 'Mas informacion';
    } else {
        footer.classList.add('activo');
        footer.classList.add('activo');
        this.textContent = 'X Cerrar';
    }
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

/*carrito de compra = el carrito de compras*/
carrito_compra.addEventListener('click',()=>{
    productos_requeridas.classList.toggle('product-detail--remove')
    mobil_menu.classList.add('mobil__menu--remove')
    menu.classList.add('desktop__menu--remove')
})