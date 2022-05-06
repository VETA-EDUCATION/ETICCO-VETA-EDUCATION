<?php
// created: 2022-03-22 12:37:48
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'url' => 
  array (
    'type' => 'url',
    'vname' => 'LBL_URL',
    'width' => '10%',
    'default' => true,
  ),
  'estadodocumento' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'vname' => 'LBL_ESTADODOCUMENTO',
    'width' => '10%',
    'default' => true,
  ),
  'plantilla' => 
  array (
    'name' => 'plantilla',
    'vname' => 'LBL_PLANTILLA',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(select dp.name from doc_docssolicitados_doc_plantillas_c dddpc 
        inner join doc_plantillas dp on dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb = dp.id 
        inner join doc_docssolicitados_opportunities_c ddoc on dddpc.doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida = ddoc.id 
        where ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb = doc_docssolicitados.id) AS',
    'default' => true,
  ),
  'colegio' => 
  array (
    'name' => 'colegio',
    'vname' => 'LBL_COLEGIO',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(select DISTINCT vc.name from veta_college vc 
        inner join doc_plantillas_veta_college_c dpvcc on vc.id = dpvcc.doc_plantillas_veta_collegeveta_college_idb 
        inner join doc_docssolicitados_doc_plantillas_c dddpc on dpvcc.doc_plantillas_veta_collegedoc_plantillas_ida = dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb
        inner join doc_docssolicitados_opportunities_c ddoc on dddpc.doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida = ddoc.id 
        and ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb =  doc_docssolicitados.id
        inner join veta_aplicacion_opportunities_c vaoc on ddoc.doc_docssolicitados_opportunitiesopportunities_ida = vaoc.veta_aplicacion_opportunitiesopportunities_ida
        inner join veta_aplicacion_cstm vac on vaoc.veta_aplicacion_opportunitiesveta_aplicacion_idb = vac.id_c
        inner join veta_curso vc2 on vac.veta_curso_id_c = vc2.id and vc.id = vc2.veta_college_id_c) AS',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Doc_DocsSolicitados',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Doc_DocsSolicitados',
    'width' => '5%',
    'default' => true,
  ),
  'ayuda' => 
  array (
    'name' => 'ayuda',
    'vname' => 'LBL_AYUDA',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(SELECT docs.ayuda FROM doc_docssolicitados_doc_documentos_c docsoldoc,doc_documentos docs 
WHERE docsoldoc.doc_docssolicitados_doc_documentosdoc_documentos_idb = docs.id
and docsoldoc.doc_docssolicitados_doc_documentosdoc_docssolicitados_ida = doc_docssolicitados.id) AS',
    'default' => true,
  ),
  'description' => 
  array (
    'name' => 'description',
    'vname' => 'LBL_DESCRIPCION',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(SELECT docs.description FROM doc_docssolicitados_doc_documentos_c docsoldoc,doc_documentos docs 
WHERE docsoldoc.doc_docssolicitados_doc_documentosdoc_documentos_idb = docs.id
and docsoldoc.doc_docssolicitados_doc_documentosdoc_docssolicitados_ida = doc_docssolicitados.id) AS',
    'default' => true,
  ),
  'observaciones' => 
  array (
    'name' => 'observaciones',
    'vname' => 'LBL_OBSERVACIONES',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(SELECT docs.observaciones FROM doc_docssolicitados_doc_documentos_c docsoldoc,doc_documentos docs 
WHERE docsoldoc.doc_docssolicitados_doc_documentosdoc_documentos_idb = docs.id
and docsoldoc.doc_docssolicitados_doc_documentosdoc_docssolicitados_ida = doc_docssolicitados.id) AS',
    'default' => true,
  ),
  'recursos' => 
  array (
    'name' => 'recursos',
    'vname' => 'LBL_RECURSOS',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(SELECT docs.recursos FROM doc_docssolicitados_doc_documentos_c docsoldoc,doc_documentos docs 
WHERE docsoldoc.doc_docssolicitados_doc_documentosdoc_documentos_idb = docs.id
and docsoldoc.doc_docssolicitados_doc_documentosdoc_docssolicitados_ida = doc_docssolicitados.id) AS',
    'default' => true,
  ),
  'solicitadopor' => 
  array (
    'name' => 'solicitadopor',
    'vname' => 'LBL_SOLICITADOPOR',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(SELECT docs.solicitadopor FROM doc_docssolicitados_doc_documentos_c docsoldoc,doc_documentos docs 
WHERE docsoldoc.doc_docssolicitados_doc_documentosdoc_documentos_idb = docs.id
and docsoldoc.doc_docssolicitados_doc_documentosdoc_docssolicitados_ida = doc_docssolicitados.id) AS',
    'default' => true,
  ),
);