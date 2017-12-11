var d = document.getElementById("dibujo_canvas");
var lienzo = d.getContext("2d");

lienzo.beginPath();
lienzo.strokeStyle = "red";
lienzo.moveTo(50,100);
lienzo.lineTo(200,10);
lienzo.stroke();
lienzo.closePath();
