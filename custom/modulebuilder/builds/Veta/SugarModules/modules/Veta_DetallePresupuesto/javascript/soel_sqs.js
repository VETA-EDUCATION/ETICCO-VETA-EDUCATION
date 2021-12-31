console.log('SOEL -> ok');
SUGAR.util.doWhen(
    "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['form_SubpanelQuickCreate_Veta_DetallePresupuesto_curso']) != 'undefined'",
    functionQS
);


function functionQS() {

    console.log('SOEL -> sqs 2');
    sqs_objects['form_SubpanelQuickCreate_Veta_DetallePresupuesto_curso'] = {

        "form": "form_SubpanelQuickCreate_Veta_DetallePresupuesto",
        "method": "query",
        "modules": ["Veta_Curso"],
        "group": "or",
        "field_list": ["name", "id"],
        "populate_list": ["curso", "veta_curso_id_c"],
        "required_list": ["veta_curso_id_c"],
        "conditions": [
            {"name": "name", "op": "like_custom", "end": "%", "value": ""},
            {"name": "activo", "op": "like_custom",  "begin": "%", "end": "%", "value": "1"}
        ],
        "group" : "and",
        "order": "name",
        "limit": "30",
        "no_match_text": "Sin coincidencias"

    };
}