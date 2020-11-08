/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(ocultarRecuadro);
  x = $("#boton2");
  x.click(mostrarRecuadro);
}

function ocultarRecuadro() {
  let x = $("#descripcion");
  x.hide("slow");
}

function mostrarRecuadro() {
  let x = $("#descripcion");
  x.show("fast");
}

