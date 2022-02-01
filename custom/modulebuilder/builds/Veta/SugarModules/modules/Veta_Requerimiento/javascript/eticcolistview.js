function enviar_form() {

    sugarListView.get_checks();
    // create new form to post (can't access action property of MassUpdate form due to action input)
    var newForm = document.createElement('form');
    newForm.method = 'post';
    //newForm.action = 'index.php?entryPoint=exportarrequerimientos';
    newForm.action = 'index.php?module=Veta_Requerimiento&action=newlist';
    newForm.name = 'newForm';
    newForm.id = 'newForm';
    newForm.target = '_blank';

    var selectEntireListInput = document.createElement('input');
    selectEntireListInput.name = 'select_entire_list';
    selectEntireListInput.type = 'hidden';
    selectEntireListInput.value = document.MassUpdate.select_entire_list.value;
    newForm.appendChild(selectEntireListInput);

    var uidTa = document.createElement('textarea');
    uidTa.name = 'uid';
    uidTa.style.display = 'none';
    uidTa.value = document.MassUpdate.uid.value;

    /*console.log('uid', document.MassUpdate.uid.value );
    console.log('select_entire_list',  document.MassUpdate.select_entire_list.value);
    console.log('Cases2_CASE_offset', document.MassUpdate.Cases2_CASE_offset.value);
    console.log('show_plus', document.MassUpdate.show_plus.value);
    console.log('lvso', document.MassUpdate.lvso.value);*/


    if (uidTa.value == '') {
        alert('No se ha seleccionado ningun registro');
        return false;
    }

    newForm.appendChild(uidTa);

    var moduleInput = document.createElement('input');
    moduleInput.name = 'module';
    moduleInput.type = 'hidden';
    moduleInput.value = 'Veta_Requerimiento';
    newForm.appendChild(moduleInput);

    var actionInput = document.createElement('input');
    actionInput.name = 'action';
    actionInput.type = 'hidden';
    actionInput.value = 'newlist';
    newForm.appendChild(actionInput);
    document.body.appendChild(newForm);

    newForm.submit();
}

/**
 * Este metodo indica si una entidad es nula o vacia
 * @param data
 * @returns {boolean}
 */
function empty(data) {
    if (typeof (data) == 'number' || typeof (data) == 'boolean') {
        return false;
    }
    if (typeof (data) == 'undefined' || data === null) {
        return true;
    }
    if (typeof (data.length) != 'undefined') {
        return data.length == 0;
    }
    var count = 0;
    for (var i in data) {
        if (data.hasOwnProperty(i)) {
            count++;
        }
    }
    return count == 0;
}

YAHOO.util.Event.onDOMReady(function () {

});

