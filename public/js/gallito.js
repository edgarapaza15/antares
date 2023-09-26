console.log("hola");

function redondear(num, decimales = 3) {
    var signo = (num >= 0 ? 1 : -1);
    num = num * signo;
    if (decimales === 0) //con 0 decimales
        return signo * Math.round(num);
    // round(x * 10 ^ decimales)
    num = num.toString().split('e');
    num = Math.round(+(num[0] + 'e' + (num[1] ? (+num[1] + decimales) : decimales)));
    // x * 10 ^ (-decimales)
    num = num.toString().split('e');
    return signo * (num[0] + 'e' + (num[1] ? (+num[1] - decimales) : -decimales));
}

$("#btnCalcular1").click(function(){

	var voltotal = document.getElementById("volumenTotal").value;
	if (voltotal == "" ) {
		alert("Debe ingresar el VOLUMEN TOTAL");
	}else{
		var volUtil = voltotal - 68.012;
		document.getElementById("volumenUtil").value = redondear(volUtil)
	}
});

$("#btnPaltas").click(function(){
	var mirapaltas = document.getElementById("ingresoMiraPalta").value;
	if (mirapaltas == "" ) {
		alert("Debe ingresar el valor de MIRA Paltas");
	}else{
		var caudal1 = 7.7492 * Math.pow(mirapaltas, 4.2176);

		document.getElementById("ingresoCaudalPaltas").value = redondear(caudal1);
	}
});

$("#btnYonan").click(function(){
	var mirayonan = document.getElementById("ingresoMiraYonan").value;
	if (mirayonan == "" ) {
		alert("Debe ingresar el valor de MIRA Yonan");
	}else{
		var caudal1 = 10.8666 * Math.pow(mirayonan, 2.974);
		document.getElementById("ingresoCaudalYonan").value = redondear(caudal1);
	}
});

$("#btnEstacion2").click(function(){
	var mirae2 = document.getElementById("salidaMiraE2").value;
	if (mirae2 == "" ) {
		alert("Debe ingresar el valor de MIRA en la Salida 2");
	}else{
		var caudal1 = 42.3849 * Math.pow(mirae2, 1.8399);

		document.getElementById("salidaCaudalE2").value = redondear(caudal1);
	}
});

$("#btnMiniCentral").click(function(){
	var miraMini = document.getElementById("salidaMiraMinicentral").value;
	if (miraMini == "" ) {
		alert("Debe ingresar el valor de MIRA de Mini Central");
	}else{
		var caudal1 = 4.6578 * Math.pow(miraMini, 2.2578);
		document.getElementById("salidaCaudalMinicentral").value = redondear(caudal1);
	}
});

$("#btncanalgc").click(function(){
	var miracanalgc = document.getElementById("salidaMiraCGC").value;
	if (miracanalgc == "" ) {
		alert("Debe ingresar el valor de MIRA de Canal Gallito Ciego");
	}else{
		var caudal1 = 1.7296 * Math.pow(miracanalgc, 1.4691);
		document.getElementById("salidaCaudalCGC").value = redondear(caudal1);
	}
});

$("#btnCaudaltotal-e").click(function(){
	var caudal1 = document.getElementById("salidaCaudalE2").value;
	/*var caudal2 = document.getElementById("salidaCaudalMinicentral").value;*/
	var caudal3 = document.getElementById("salidaCaudalCGC").value;
	var caudal4 = document.getElementById("salidaCaudalCTorta").value;


	var caudaltotal = (parseFloat(caudal1)+parseFloat(caudal3)+parseFloat(caudal4));
	console.log(caudaltotal);
	document.getElementById("caudalTotal-e").value = redondear(caudaltotal);

});