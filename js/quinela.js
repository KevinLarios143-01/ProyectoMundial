var blanco;

function getValor(valor){
    let id = valor.id;
    this.blanco = id;
}

function returnValor(){
    return this.blanco;
}

$(function(){

    console.log("funciona quinela");
    $(document).on("click", ".registro", function(e){
        var id = returnValor();
        const postData={
            codigo: id,
            marcadorUno: document.getElementById("CA"+id).value,
            marcadorDos: document.getElementById("CB"+id).value,
        }

        $.post("registrarQuinelas.php", postData, function(response){
            if(response.normalize()==="El marcador se ha ingresado con éxito"){
                alert("Procesado:"+response);
            }else{
                alert("No se puede reingresar quiniela");
            }

        });

    });

});