<?php
// created: 2022-03-22 12:52:23
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
   'docSolicitados' => 
  array (
    'name' => 'docSolicitados',
    'vname' => 'LBL_DOCSOLICITADOS',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(select count(*) AS cuenta from doc_docssolicitados_doc_plantillas_c dddpc
        inner join doc_docssolicitados_opportunities_c ddoc on dddpc.doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida = ddoc.id and ddoc.deleted = 0 and ddoc.doc_docssolicitados_opportunitiesopportunities_ida = doc_plantillas_opportunities_c.doc_plantillas_opportunitiesopportunities_idb
        inner join doc_plantillas_opportunities_c dpoc on ddoc.doc_docssolicitados_opportunitiesopportunities_ida = dpoc.doc_plantillas_opportunitiesopportunities_idb and dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb = dpoc.doc_plantillas_opportunitiesdoc_plantillas_ida and dpoc.deleted = 0
        where dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb =  doc_plantillas.id) AS',
    'default' => true,
  ),
     'docCargados' => 
  array (
    'name' => 'docCargados',
    'vname' => 'LBL_DOCCARGADOS',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(select count(*) AS cuenta from doc_docssolicitados_doc_plantillas_c dddpc 
        inner join doc_docssolicitados_opportunities_c ddoc on dddpc.doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida = ddoc.id and ddoc.deleted = 0 and ddoc.doc_docssolicitados_opportunitiesopportunities_ida = doc_plantillas_opportunities_c.doc_plantillas_opportunitiesopportunities_idb
        inner join doc_plantillas_opportunities_c dpoc on ddoc.doc_docssolicitados_opportunitiesopportunities_ida = dpoc.doc_plantillas_opportunitiesopportunities_idb and dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb = dpoc.doc_plantillas_opportunitiesdoc_plantillas_ida and dpoc.deleted = 0
        inner join doc_docssolicitados dd on ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb = dd.id and dd.estadodocumento = "Cargado"
        where dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb =  doc_plantillas.id) AS',
    'default' => true,
  ),
   'docAprobados' => 
  array (
    'name' => 'docAprobados',
    'vname' => 'LBL_DOCAPROBADOS',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(select count(*) AS cuenta from doc_docssolicitados_doc_plantillas_c dddpc 
        inner join doc_docssolicitados_opportunities_c ddoc on dddpc.doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida = ddoc.id and ddoc.deleted = 0 and ddoc.doc_docssolicitados_opportunitiesopportunities_ida = doc_plantillas_opportunities_c.doc_plantillas_opportunitiesopportunities_idb
        inner join doc_plantillas_opportunities_c dpoc on ddoc.doc_docssolicitados_opportunitiesopportunities_ida = dpoc.doc_plantillas_opportunitiesopportunities_idb and dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb = dpoc.doc_plantillas_opportunitiesdoc_plantillas_ida and dpoc.deleted = 0
        inner join doc_docssolicitados dd on ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb = dd.id and dd.estadodocumento = "Aprobado"
        where dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb =  doc_plantillas.id) AS',
    'default' => 0,
  ),
    'docPendientes' => 
  array (
    'name' => 'docPendientes',
    'vname' => 'LBL_DOCPENDIENTES',
    'width' => '15%',
    'force_blank' => true,
    'force_exists' => true,
    'force_default' => '(select count(*) AS cuenta from doc_docssolicitados_doc_plantillas_c dddpc 
        inner join doc_docssolicitados_opportunities_c ddoc on dddpc.doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida = ddoc.id and ddoc.deleted = 0 and ddoc.doc_docssolicitados_opportunitiesopportunities_ida = doc_plantillas_opportunities_c.doc_plantillas_opportunitiesopportunities_idb
        inner join doc_plantillas_opportunities_c dpoc on ddoc.doc_docssolicitados_opportunitiesopportunities_ida = dpoc.doc_plantillas_opportunitiesopportunities_idb and dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb = dpoc.doc_plantillas_opportunitiesdoc_plantillas_ida and dpoc.deleted = 0
        inner join doc_docssolicitados dd on ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb = dd.id and dd.estadodocumento not in ("Aprobado","Cargado")
        where dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb =  doc_plantillas.id) AS',
    'default' => 0,
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
        inner join doc_plantillas_opportunities_c dpoc on dpvcc.doc_plantillas_veta_collegedoc_plantillas_ida = dpoc.doc_plantillas_opportunitiesdoc_plantillas_ida 
        and dpoc.doc_plantillas_opportunitiesdoc_plantillas_ida = doc_plantillas.id
        inner join veta_aplicacion_opportunities_c vaoc on dpoc.doc_plantillas_opportunitiesopportunities_idb = vaoc.veta_aplicacion_opportunitiesopportunities_ida 
        inner join veta_aplicacion_cstm vac on vaoc.veta_aplicacion_opportunitiesveta_aplicacion_idb = vac.id_c
        inner join veta_curso vc2 on vac.veta_curso_id_c = vc2.id and vc.id = vc2.veta_college_id_c ) AS',
    'default' => 0,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
 
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Doc_Plantillas',
    'width' => '4%',
    'default' => true,
  ),
 
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Doc_Plantillas',
    'width' => '5%',
    'default' => true,
  ),
);