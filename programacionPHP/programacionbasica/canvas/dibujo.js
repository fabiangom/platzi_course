var texto = document.getElementById("cant_lineas");
var btn = document.getElementById("btn_enviar");
btn.addEventListener("click", dibujoPorClick);

var d = document.getElementById("dibujo_canvas");
var ancho = d.width;
var lienzo = d.getContext("2d");

function dibujoPorClick() {
  var lineas = parseInt(texto.value);
  var l = 0;
  var yi, xf;
  var xf2;
  var espacio = ancho / lineas;

  for(l=0; l<lineas; l++) {
    yi = espacio*l;
    xf = espacio*(l+1);
    xf2 = 300 - (l*espacio);

    dibujarLinea("blue", 0, yi, xf, 300);
    dibujarLinea("blue", 300, xf2, xf2, 0);
  }
  dibujarLinea("blue", 1, 1, 1, 300);
  dibujarLinea("blue", 1, 300, 300, 300);
  dibujarLinea("blue", 1, 1, 300, 1);
  dibujarLinea("blue", 300, 1, 300, 300);
}

// while(l < lineas) {
//   yi = 10*l;
//   xf = 10*(l+1);
//
//   dibujarLinea("blue", 0, yi, xf, 300);
//   l++;
// }

function dibujarLinea(color, xinicial, yinicial, xfinal, yfinal) {
  lienzo.beginPath();
  lienzo.strokeStyle = color;
  lienzo.moveTo(xinicial,yinicial);
  lienzo.lineTo(xfinal,yfinal);
  lienzo.stroke();
  lienzo.closePath();
}
