$(document).ready(function() {
    $("#btndetalle").click(function(e) {
        e.preventDefault();

        mostrarDetalle();
    }); //end #btnComentarios

    async function mostrarDetalle() {
        const datos = new FormData(document.getElementById('detalle'));

        await fetch('assets/data/detallesM.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json()) //mandar llamar y enviar los datos
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "./detallesMu.php";
                    //alert("Mensaje enviado correctamente");
                } else {
                    alert("Datos no válidos");
                }
            })
            .catch(err => {
                console.log(err);
            });
    } //end mostrarDetalle
});