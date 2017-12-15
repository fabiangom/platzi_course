var teclas = {
  LEFT: 37,
  UP: 38,
  RIGHT: 39,
  DOWN: 40
}

document.addEventListener("keyup", dibujarTeclado);
var cuadro = document.getElementById("area_dibujo");
var papel = cuadro.getContext("2d");
var x = 150;
var y = 150;

dibujarLinea("red", 149, 149, 151, 151, papel);

function dibujarLinea(color, xinicial, yinicial, xfinal, yfinal, lienzo) {
  lienzo.beginPath();
  lienzo.strokeStyle = color;
  lienzo.lineWidth = 3;
  lienzo.moveTo(xinicial,yinicial);
  lienzo.lineTo(xfinal,yfinal);
  lienzo.stroke();
  lienzo.closePath();
}

function dibujarTeclado(evento) {
  var colorcito = "blue";
  var mov = 20;

  switch (evento.keyCode) {
    case teclas.DOWN:
    dibujarLinea(colorcito, x, y, x, y + mov, papel);
    y = y + mov;
    break;
    case teclas.UP:
      dibujarLinea(colorcito, x, y, x, y - mov, papel);
      y = y - mov;
    break;
    case teclas.RIGHT:
      dibujarLinea(colorcito, x, y, x + mov, y, papel);
      x = x + mov;
    break;
    case teclas.LEFT:
      dibujarLinea(colorcito, x, y, x - mov, y, papel);
      x = x - mov;
    break;
    default: console.log("otra tecla");
  }
}
