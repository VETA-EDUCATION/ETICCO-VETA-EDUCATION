// CREADO POR SOEL PARA INTERACTUAR CON EL SEGURO EN EL RECIBO Y EN LA CUENTA DE COBRO

YAHOO.util.Event.onDOMReady(function () {

    $("#seguro").attr('readonly', 'readonly');
    $("input[name='Veta_Recibo_subpanel_full_form_button']").hide();
    YAHOO.util.Event.addListener('asegurador', 'change', actualizar_seguro);
    YAHOO.util.Event.addListener('duracion', 'change', actualizar_seguro);
    YAHOO.util.Event.addListener('tipo_seguro', 'change', actualizar_seguro);
});

function actualizar_seguro() {

    var asegurador = document.getElementById('asegurador').value;
    var duracion = document.getElementById('duracion').value;
    var tipo = document.getElementById('tipo_seguro').value;
    if (asegurador != '' && duracion != '' ) {

        $("input[name='Veta_Recibo_subpanel_save_button']").hide();

        var url = window.location.protocol + '//' + window.location.hostname + '/index.php?entryPoint=obtenerseguro&asegurador=' + asegurador + '&duracion=' + duracion + '&tipo=' + tipo;
        var req = new XMLHttpRequest();

        req.open('GET', url, false);
        req.send(null);

        if (req.status == 200) {

            try {
                var result = JSON.parse(req.responseText);
                document.getElementById('seguro').value = result;
                $("input[name='Veta_Recibo_subpanel_save_button']").show();

            } catch (e) {
                $("input[name='Veta_Recibo_subpanel_save_button']").hide();
                window.alert('Imposible conectarse al servidor para obtener el valor del seguro ');
            }
        }
    }
}


