var villa = document.getElementById("villa_fabian");
var papel = villa.getContext("2d");

var fondo = {
  url: "tile.png",
  cargaOk: false
}
var vaca = {
  url: "vaca.png",
  cargaOk: false
}
var cerdo = {
  url: "cerdo.png",
  cargaOk: false
}
var pollo = {
  url: "pollo.png",
  cargaOk: false
}

var cantidadVaca = aleatorio(1, 5);
var cantidadCerdo = aleatorio(5, 10);
var cantidadPollo = aleatorio(10, 15);

fondo.imagen = new Image();
fondo.imagen.src = fondo.url;
fondo.imagen.addEventListener("load", cargarFondo);

vaca.imagen = new Image();
vaca.imagen.src = vaca.url;
vaca.imagen.addEventListener("load", cargarVaca);
cerdo.imagen = new Image();
cerdo.imagen.src = cerdo.url;
cerdo.imagen.addEventListener("load", cargarCerdo);
pollo.imagen = new Image();
pollo.imagen.src = pollo.url;
pollo.imagen.addEventListener("load", cargarPollo);

function cargarFondo() {
  fondo.cargaOk = true;
  dibujar();
}

function cargarVaca() {
  vaca.cargaOk = true;
  dibujar();
}
function cargarCerdo() {
  cerdo.cargaOk = true;
  dibujar();
}
function cargarPollo() {
  pollo.cargaOk = true;
  dibujar();
}

function dibujar() {
  if (fondo.cargaOk) {
    papel.drawImage(fondo.imagen, 0, 0);
  }
  if (vaca.cargaOk) {
    console.log(cantidadVaca);
    for (var v = 0; v < cantidadVaca; v++) {
      var x = aleatorio(0, 420);
      var y = aleatorio(0, 420);
      papel.drawImage(vaca.imagen, x, y);
    }
  }
  if (cerdo.cargaOk) {
    console.log(cantidadCerdo);
    for (var c = 0; c < cantidadCerdo; c++) {
      var x = aleatorio(0, 420);
      var y = aleatorio(0, 420);
      papel.drawImage(cerdo.imagen, x, y);
    }
  }
  if (pollo.cargaOk) {
    console.log(cantidadPollo);
    for (var p = 0; p < cantidadPollo; p++) {
      var x = aleatorio(0, 420);
      var y = aleatorio(0, 420);
      papel.drawImage(pollo.imagen, x, y);
    }
  }
}

function aleatorio(min, max) {
  var res;
  res = Math.floor(Math.random() * (max - min + 1)) + min;
  return res;
}
