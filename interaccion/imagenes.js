
var n = 1;
var b = 2;
var c = 3;
var d = 4;
var e = 5;
var f = 6;
var h = 7;
var i = 8;



function imagen1() {
  var imagen= document.querySelector('.imagens--1')
  imagen.src = "./imagenes/paisaje"+n+".jpg";
  n++;
  if (n > 8) n = 1;
  window.setTimeout("imagen1()", 4000);
}

function imagen2() {
  // <img  src=".../imagenes/paisaje1.jpg" alt="">
  var imagen = document.querySelector('.imagens--2')
  imagen.src = "./imagenes/paisaje"+ b +".jpg";
  b++;
  if (b > 8) b = 1;
  window.setTimeout("imagen2()", 4000);
}

function imagen3() {
  var imagen = document.querySelector('.imagens--3')
  imagen.src = "./imagenes/paisaje"  + c + ".jpg";
  c++;
  if (c > 8) c = 1;
  window.setTimeout("imagen3()", 4000);
}

function imagen4() {
  var imagen = document.querySelector('.imagens--4')
  imagen.src = "./imagenes/paisaje"  + d + ".jpg";
  d++;
  if (d > 8) d = 1;
  window.setTimeout("imagen4()", 4000);
}


function imagen5() {
  var imagen = document.querySelector('.imagens--5')
  imagen.src = "./imagenes/paisaje"  + e + ".jpg";
  e++;
  if (e > 8) e = 1;
  window.setTimeout("imagen5()", 4000);
}

function imagen6() {
    var imagen = document.querySelector('.imagens--6')
    imagen.src = "./imagenes/paisaje"+ f + ".jpg";
    f++;
    if (f > 8 )f= 1;
    window.setTimeout("imagen6()", 4000);
  }

function imagen7() {
    var imagen = document.querySelector('.imagens--7')
    imagen.src = "./imagenes/paisaje"  + h + ".jpg";
    h++;
    if (h > 8) h = 1;
    window.setTimeout("imagen7()", 4000);
  }

  function imagen8() {
    var imagen = document.querySelector('.imagens--8')
    imagen.src = "./imagenes/paisaje"  + i + ".jpg";
    i++;
    if (i > 8) i = 1;
    window.setTimeout("imagen8()", 4000);
  }

window.onload = function (){;
  imagen1(); 
  imagen2();
  imagen3();
  imagen4();
  imagen5();
  imagen6();
  imagen7();
  imagen8();
}
console.log('hola');