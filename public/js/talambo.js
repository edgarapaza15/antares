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

$("#btnCanalTalambo").click(function(){
    var miratalambo = document.getElementById("miracompuertaTalambo").value;
    if (miratalambo == "" ) {
        alert("Debe ingresar el valor de MIRA Canal Talambo Zaña");
    }else{
        var caudalTalambo = 6.7872 * Math.pow(miratalambo, 1.6194);
        document.getElementById("caudalcompuertaTalambo").value = redondear(caudalTalambo);
    }
});

$("#btnEmpalmeguadalupe").click(function(){
    var miraGuadalupe = document.getElementById("miracompuertaGuadalupe").value;
    if (miraGuadalupe == "" ) {
        alert("Debe ingresar el valor de MIRA Canal Guadalupe");
    }else{
        var caudalGuadalupe = 5.5568 * Math.pow(miraGuadalupe, 1.9073);
        document.getElementById("caudalcompuertaGuadalupe").value = redondear(caudalGuadalupe);
    }
});

$("#btnSalidaTotal").click(function(){
    var a = document.getElementById("caudalcompuertaTalambo").value;
    var b = document.getElementById("caudalcompuertaGuadalupe").value;
    var c = document.getElementById("caudalTalambozanaG1").value;

    if (a == "" ) {
        alert("Caudal Talambo Zaña Vacio");
    }else{
        if (b == "" ) {
            alert("Caudal Guadalupe Vacio");
        }else{
            if(c == ""){
                alert("Caudal Final vacio");
            }else{
                var suma = (parseFloat(a)+parseFloat(b)+parseFloat(c));
                document.getElementById("salidaTalambo").value = redondear(suma);
            }
        }
    }
});
