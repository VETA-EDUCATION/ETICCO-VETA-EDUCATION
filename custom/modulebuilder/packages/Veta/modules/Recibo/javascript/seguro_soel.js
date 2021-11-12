// CREADO POR SOEL PARA INTERACTUAR CON EL SEGURO EN EL RECIBO Y EN LA CUENTA DE COBRO

YAHOO.util.Event.onDOMReady(function () {

    // Establecemos el valor por defecto
    $("#soel_asegurador option").filter(function() {
        return $(this).text() == document.getElementById('asegurador').value;
    }).attr('selected', true);

    $("#seguro").attr('readonly', 'readonly');
    $("input[name='Veta_Recibo_subpanel_full_form_button']").hide();
    YAHOO.util.Event.addListener('soel_asegurador', 'change', actualizar_seguro);
    YAHOO.util.Event.addListener('duracion', 'change', actualizar_seguro);
    YAHOO.util.Event.addListener('tipo_seguro', 'change', actualizar_seguro);

    //console.log('Valor por defecto 2' ,   document.getElementById('soel_asegurador').value ,  document.getElementById('asegurador').value);


});

function actualizar_seguro() {

    var asegurador = $("#soel_asegurador option:selected").text();
    asegurador = encodeURIComponent(asegurador);
    var duracion = document.getElementById('duracion').value;
    var tipo = document.getElementById('tipo_seguro').value;

    if (asegurador != '' && duracion != '') {

        $("input[name='Veta_Recibo_subpanel_save_button']").hide();

        //var url = window.location.protocol + '//' + window.location.hostname + '/index.php?entryPoint=obtenerseguro&asegurador=' + asegurador + '&duracion=' + duracion + '&tipo=' + tipo;


        document.getElementById('asegurador').value = $("#soel_asegurador option:selected").text();

        var url = window.location.protocol + '//' + window.location.hostname + window.location.pathname + '?entryPoint=obtenerseguro&asegurador=' + asegurador + '&duracion=' + duracion + '&tipo=' + tipo;
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


