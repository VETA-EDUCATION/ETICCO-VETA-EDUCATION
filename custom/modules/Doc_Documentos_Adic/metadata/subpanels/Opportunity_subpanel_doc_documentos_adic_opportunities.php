<?php
// created: 2022-04-08 19:36:02
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
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
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_PLANTILLA',
    'id' => 'DOC_PLANTILLAS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Doc_Plantillas',
    'target_record_key' => 'doc_plantillas_id_c',
  ),
  'colegio' => 
  array (
    'name' => 'colegio',
    'vname' => 'colegio',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(select DISTINCT vc.name from veta_college vc 
        inner join doc_plantillas_veta_college_c dpvcc on vc.id = dpvcc.doc_plantillas_veta_collegeveta_college_idb 
        inner join doc_documentos_adic dda on dpvcc.doc_plantillas_veta_collegedoc_plantillas_ida = dda.doc_plantillas_id_c and dda.id = doc_documentos_adic.id
        inner join doc_plantillas_opportunities_c dpoc on dpvcc.doc_plantillas_veta_collegedoc_plantillas_ida = dpoc.doc_plantillas_opportunitiesdoc_plantillas_ida 
        inner join veta_aplicacion_opportunities_c vaoc on dpoc.doc_plantillas_opportunitiesopportunities_idb = vaoc.veta_aplicacion_opportunitiesopportunities_ida 
        inner join veta_aplicacion_cstm vac on vaoc.veta_aplicacion_opportunitiesveta_aplicacion_idb = vac.id_c
        inner join veta_curso vc2 on vac.veta_curso_id_c = vc2.id and vc.id = vc2.veta_college_id_c ) AS',
    'default' => 0,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Doc_Documentos_Adic',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Doc_Documentos_Adic',
    'width' => '5%',
    'default' => true,
  ),
);