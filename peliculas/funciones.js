/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(ocultarMostrarRecuadro);
}

function ocultarMostrarRecuadro() {
  let x = $("#descripcion");
  x.toggle("slow");
}

