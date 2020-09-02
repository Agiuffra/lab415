function savior()
{
            
    //agarra todos los datos del form
    var todo = document.getElementById("formula");
            
            
    //separa los datos
    var mod = todo.elements[0].value;
    var fa = todo.elements[3].value;
    var prof = todo.elements[5].value;

    //verifica si quiere notificación o no
    var si = document.getElementById("si");
    var no = document.getElementById("no");
    if (si.checked == true){
        var notif = todo.elements[6].value;
        var email = todo.elements[8].value;
    } else if (no.checked == true){
        var notif = todo.elements[7].value;
        var email = "no notificar";
    }

    if (mod == "SIEMENS"){
      var con = todo.elements[2].value;
    } else if (mod == "ROCKWELL1" || mod == "ROCKWELL2"){
      var con = todo.elements[1].value;
    }
    
    var d = new Date();
 
    var date = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
 
    var fe = date + "/" + month + "/" + year;

    //lo transforma a JSON
    var obj = {modulo: mod, conexion: con, falla: fa, fecha: fe, nombre: prof, notificacion: notif, correo: email};
    var myJSON = JSON.stringify(obj);
    
    document.getElementById("demo").innerHTML = myJSON;
    alert("formulario enviado");
}

function savior1()
{
            
    //agarra todos los datos del form
    var todo = document.getElementById("formula");
            
            
    //separa los datos
    var mod = todo.elements[0].value;
    var fa = todo.elements[2].value;
    var prof = todo.elements[4].value;

    //verifica si quiere notificación o no
    var si = document.getElementById("si");
    var no = document.getElementById("no");
    if (si.checked == true){
        var notif = todo.elements[5].value;
        var email = todo.elements[7].value;
    } else if (no.checked == true){
        var notif = todo.elements[6].value;
        var email = "no notificar";
    }

    var con = todo.elements[1].value;
    
    var d = new Date();
 
    var date = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
 
    var fe = date + "/" + month + "/" + year;

    //lo transforma a JSON
    var obj = {modulo: mod, conexion: con, falla: fa, fecha: fe, nombre: prof, notificacion: notif, correo: email};
    var myJSON = JSON.stringify(obj);
    
    document.getElementById("demo").innerHTML = myJSON;
    alert("formulario enviado");
}

function display() {
    var x = document.getElementById("info");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
function display2() {
    var y = document.getElementById("info2");
    if (y.style.display === "none") {
      y.style.display = "block";
    } else {
      y.style.display = "none";
    }
  }
function display3() {
    var z = document.getElementById("mail");
    if (z.style.display === "none") {
      z.style.display = "block";
    } else {
      z.style.display = "block";
    }
  }
function display3inv() {
    var z = document.getElementById("mail");
    if (z.style.display === "block") {
      z.style.display = "none";
    } else {
      z.style.display = "none";
    }
  }

function display4() {
    var a = document.getElementById("flujS");
    var b = document.getElementById("flujRW");
    if (a.style.display === "none" && b.style.display === "block") {
      a.style.display = "block";
      b.style.display = "none";
    } else {
      a.style.display = "block";
      b.style.display = "none"; 
    }
  }
function display5(opcion) {
    var a = document.getElementById("flujS");
    var b = document.getElementById("flujRW");
    var c = document.getElementById("flujC");
    if (opcion == "SIEMENS") {
      a.style.display = "block";
      b.style.display = "none";
      c.style.display = "none";
    } else if (opcion == "ROCKWELL1" || opcion == "ROCKWELL2"){
      a.style.display = "none";
      b.style.display = "block";
      c.style.display = "none";
    } else if (opcion == "PCLAB"){
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "block";
    } else {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
    }
  }
function display6(opcion) {
  var g = document.getElementById("otro");
  if (opcion == "otro") {
    g.style.display = "block";
  } else {
    g.style.display = "none";
  }
}
/*
var si = document.getElementById("si").value;
var no = document.getElementById("no").value;

if (si.checked == ture){

}*/