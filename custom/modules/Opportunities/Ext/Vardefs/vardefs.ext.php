<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-08-07 18:53:01
$dictionary["Opportunity"]["fields"]["doc_plantillas_opportunities"] = array (
  'name' => 'doc_plantillas_opportunities',
  'type' => 'link',
  'relationship' => 'doc_plantillas_opportunities',
  'source' => 'non-db',
  'module' => 'Doc_Plantillas',
  'bean_name' => 'Doc_Plantillas',
  'vname' => 'LBL_DOC_PLANTILLAS_OPPORTUNITIES_FROM_DOC_PLANTILLAS_TITLE',
);


// created: 2021-08-07 18:53:01
$dictionary["Opportunity"]["fields"]["doc_documentos_adic_opportunities"] = array (
  'name' => 'doc_documentos_adic_opportunities',
  'type' => 'link',
  'relationship' => 'doc_documentos_adic_opportunities',
  'source' => 'non-db',
  'module' => 'Doc_Documentos_Adic',
  'bean_name' => 'Doc_Documentos_Adic',
  'vname' => 'LBL_DOC_DOCUMENTOS_ADIC_OPPORTUNITIES_FROM_DOC_DOCUMENTOS_ADIC_TITLE',
);


// created: 2021-08-07 18:53:01
$dictionary["Opportunity"]["fields"]["doc_comentarios_opportunities"] = array (
  'name' => 'doc_comentarios_opportunities',
  'type' => 'link',
  'relationship' => 'doc_comentarios_opportunities',
  'source' => 'non-db',
  'module' => 'Doc_Comentarios',
  'bean_name' => 'Doc_Comentarios',
  'side' => 'right',
  'vname' => 'LBL_DOC_COMENTARIOS_OPPORTUNITIES_FROM_DOC_COMENTARIOS_TITLE',
);


// created: 2019-12-07 16:06:28
$dictionary["Opportunity"]["fields"]["leads_opportunities_1"] = array (
  'name' => 'leads_opportunities_1',
  'type' => 'link',
  'relationship' => 'leads_opportunities_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_opportunities_1leads_ida',
);
$dictionary["Opportunity"]["fields"]["leads_opportunities_1_name"] = array (
  'name' => 'leads_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_opportunities_1leads_ida',
  'link' => 'leads_opportunities_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["leads_opportunities_1leads_ida"] = array (
  'name' => 'leads_opportunities_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


$dictionary['Opportunity']['fields']['soel_asignado_aplicacion'] = array(
    'name' => 'soel_asignado_aplicacion',
    'vname' => 'LBL_SOEL_ASIGNADO_APLICACION',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getAsignadoLeads',
    'massupdate' => false,
);


$dictionary['Opportunity']['fields']['soel_referido'] = array(
    'name' => 'soel_referido',
    'vname' => 'LBL_SOEL_REFERIDO',
    'type' => 'varchar',
    'source' => 'non-db',
    
);


$dictionary['Opportunity']['fields']['soel_fecha_expiracion_visa'] = array(
    'name' => 'soel_fecha_expiracion_visa',
    'vname' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


// created: 2021-08-07 18:53:01
$dictionary["Opportunity"]["fields"]["doc_docssolicitados_opportunities"] = array (
  'name' => 'doc_docssolicitados_opportunities',
  'type' => 'link',
  'relationship' => 'doc_docssolicitados_opportunities',
  'source' => 'non-db',
  'module' => 'Doc_DocsSolicitados',
  'bean_name' => 'Doc_DocsSolicitados',
  'side' => 'right',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_OPPORTUNITIES_FROM_DOC_DOCSSOLICITADOS_TITLE',
);


$dictionary['Opportunity']['fields']['soel_asignado_visas'] = array(
    'name' => 'soel_asignado_visas',
    'vname' => 'LBL_SOEL_ASIGNADO_VISAS',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getAsignadoLeads',
    'massupdate' => false,
);



$dictionary['Opportunity']['fields']['soel_oficina'] = array(
    'name' => 'soel_oficina',
    'vname' => 'LBL_SOEL_OFICINA',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getOficinasComercial',
);

// created: 2021-09-02 13:15:21
$dictionary["Opportunity"]["fields"]["veta_serviciocliente_opportunities"] = array (
  'name' => 'veta_serviciocliente_opportunities',
  'type' => 'link',
  'relationship' => 'veta_serviciocliente_opportunities',
  'source' => 'non-db',
  'module' => 'Veta_ServicioCliente',
  'bean_name' => 'Veta_ServicioCliente',
  'side' => 'right',
  'vname' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_VETA_SERVICIOCLIENTE_TITLE',
);


$dictionary['Opportunity']['fields']['soel_fecha_viaje'] = array(
    'name' => 'soel_fecha_viaje',
    'vname' => 'LBL_SOEL_FECHA_VIAJE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


// created: 2021-09-02 13:15:23
$dictionary["Opportunity"]["fields"]["veta_visa_opportunities"] = array (
  'name' => 'veta_visa_opportunities',
  'type' => 'link',
  'relationship' => 'veta_visa_opportunities',
  'source' => 'non-db',
  'module' => 'Veta_Visa',
  'bean_name' => 'Veta_Visa',
  'side' => 'right',
  'vname' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_VETA_VISA_TITLE',
);


$dictionary['Opportunity']['fields']['soel_visto_bueno_visas'] = array(
    'name' => 'soel_visto_bueno_visas',
    'vname' => 'LBL_SOEL_VISTO_BUENO_VISAS',
    'type' => 'bool',
    'source' => 'non-db',
    'default' => '0',
    'no_default' => false,
);

$dictionary['Opportunity']['fields']['soel_docs_solicitados'] = array(
    'name' => 'soel_docs_solicitados',
    'vname' => 'LBL_SOEL_DOCS_SOLICITADOS',
    'type' => 'varchar',
    'source' => 'non-db',
    
    
);


$dictionary['Opportunity']['fields']['soel_docs_pendientes'] = array(
    'name' => 'soel_docs_pendientes',
    'vname' => 'LBL_SOEL_DOCS_PENDIENTES',
    'type' => 'varchar',
    'source' => 'non-db',
    
    
);

$dictionary['Opportunity']['fields']['soel_docs_cargados'] = array(
    'name' => 'soel_docs_cargados',
    'vname' => 'LBL_SOEL_DOCS_CARGADOS',
    'type' => 'varchar',
    'source' => 'non-db',
    
    
);

$dictionary['Opportunity']['fields']['soel_docs_aprobados'] = array(
    'name' => 'soel_docs_aprobados',
    'vname' => 'LBL_SOEL_DOCS_APROBADOS',
    'type' => 'varchar',
    'source' => 'non-db',
    
    
);


$dictionary['Opportunity']['fields']['soel_date_estudiante'] = array(
    'name' => 'soel_date_estudiante',
    'vname' => 'LBL_SOEL_DATE_ESTUDIANTE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


$dictionary['Opportunity']['fields']['soel_date_asesor'] = array(
    'name' => 'soel_date_asesor',
    'vname' => 'LBL_SOEL_DATE_ASESOR',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);

// created: 2021-09-02 13:15:24
$dictionary["Opportunity"]["fields"]["veta_recibo_opportunities"] = array (
  'name' => 'veta_recibo_opportunities',
  'type' => 'link',
  'relationship' => 'veta_recibo_opportunities',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_VETA_RECIBO_TITLE',
  'id_name' => 'veta_recibo_opportunitiesveta_recibo_ida',
);
$dictionary["Opportunity"]["fields"]["veta_recibo_opportunities_name"] = array (
  'name' => 'veta_recibo_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_VETA_RECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_opportunitiesveta_recibo_ida',
  'link' => 'veta_recibo_opportunities',
  'table' => 'veta_recibo',
  'module' => 'Veta_Recibo',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["veta_recibo_opportunitiesveta_recibo_ida"] = array (
  'name' => 'veta_recibo_opportunitiesveta_recibo_ida',
  'type' => 'link',
  'relationship' => 'veta_recibo_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_VETA_RECIBO_TITLE',
);


// created: 2019-11-02 16:48:22
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_opportunities_1contacts_ida',
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1_name"] = array (
  'name' => 'contacts_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_opportunities_1contacts_ida',
  'link' => 'contacts_opportunities_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1contacts_ida"] = array (
  'name' => 'contacts_opportunities_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Opportunity"]["fields"]["veta_aplicacion_opportunities"] = array (
  'name' => 'veta_aplicacion_opportunities',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_opportunities',
  'source' => 'non-db',
  'module' => 'Veta_Aplicacion',
  'bean_name' => 'Veta_Aplicacion',
  'side' => 'right',
  'vname' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_VETA_APLICACION_TITLE',
);


$dictionary['Opportunity']['fields']['soel_requerimiento'] = array(
    'name' => 'soel_requerimiento',
    'vname' => 'LBL_SOEL_REQUERIMIENTO',
    'type' => 'varchar',
    'source' => 'non-db',
);


// created: 2021-09-02 13:15:22
$dictionary["Opportunity"]["fields"]["veta_pagocolegios_opportunities"] = array (
  'name' => 'veta_pagocolegios_opportunities',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_opportunities',
  'source' => 'non-db',
  'module' => 'Veta_PagoColegios',
  'bean_name' => 'Veta_PagoColegios',
  'side' => 'right',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_VETA_PAGOCOLEGIOS_TITLE',
);



$dictionary['Opportunity']['fields']['soel_campus'] = array(
    'name' => 'soel_campus',
    'vname' => 'LBL_SOEL_CAMPUS',
    'type' => 'varchar',
    'source' => 'non-db',
    
);

$dictionary['Opportunity']['fields']['soel_visto_bueno_comercial'] = array(
    'name' => 'soel_visto_bueno_comercial',
    'vname' => 'LBL_SOEL_VISTO_BUENO_COMERCIAL',
    'type' => 'bool',
    'source' => 'non-db',
    'default' => '0',
    'no_default' => false,
);

// created: 2019-11-02 17:11:43
$dictionary["Opportunity"]["fields"]["opportunities_cases_1"] = array (
  'name' => 'opportunities_cases_1',
  'type' => 'link',
  'relationship' => 'opportunities_cases_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CASES_1_FROM_CASES_TITLE',
);


$dictionary['Opportunity']['fields']['soel_asignado_servicio_cliente'] = array(
    'name' => 'soel_asignado_servicio_cliente',
    'vname' => 'LBL_SOEL_ASIGNADO_SERVICIO_CLIENTE',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getAsignadoLeads',
    'massupdate' => false,
);


// created: 2021-09-02 13:15:24
$dictionary["Opportunity"]["fields"]["veta_coe_opportunities"] = array (
  'name' => 'veta_coe_opportunities',
  'type' => 'link',
  'relationship' => 'veta_coe_opportunities',
  'source' => 'non-db',
  'module' => 'Veta_COE',
  'bean_name' => 'Veta_COE',
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_VETA_COE_TITLE',
);


 // created: 2019-10-09 10:48:06
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2020-01-23 15:00:52
$dictionary['Opportunity']['fields']['fecha_ultimo_contacto_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_ultimo_contacto_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_ultimo_contacto_c']['labelValue']='Fecha Ultimo Contacto';
$dictionary['Opportunity']['fields']['fecha_ultimo_contacto_c']['enable_range_search']='1';

 

 // created: 2019-12-05 07:55:52
$dictionary['Opportunity']['fields']['pendiente_pago_colegios_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['pendiente_pago_colegios_c']['labelValue']='Pendiente Pago Colegios';

 

 // created: 2019-11-02 17:10:03
$dictionary['Opportunity']['fields']['saldo_pendiente_pago_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['saldo_pendiente_pago_c']['labelValue']='Saldo Pendiente de Pago';

 

 // created: 2019-12-07 15:56:54
$dictionary['Opportunity']['fields']['estado_pago_institucion_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['estado_pago_institucion_c']['labelValue']='Estado Pago Institución';

 

 // created: 2020-03-16 15:28:42
$dictionary['Opportunity']['fields']['user_id1_c']['inline_edit']=1;

 

 // created: 2020-03-16 15:31:02
$dictionary['Opportunity']['fields']['user_id2_c']['inline_edit']=1;

 

 // created: 2020-03-16 15:28:07
$dictionary['Opportunity']['fields']['asignado_aplicacion_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['asignado_aplicacion_c']['labelValue']='Asignado Aplicacion';

 

 // created: 2020-01-26 13:14:12
$dictionary['Opportunity']['fields']['estado_admisiones_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['estado_admisiones_c']['labelValue']='Estado Admisiones';

 

 // created: 2021-05-11 13:51:03
$dictionary['Opportunity']['fields']['fecha_aplicacion_visa_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_aplicacion_visa_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_aplicacion_visa_c']['labelValue']='Visa Application Date';
$dictionary['Opportunity']['fields']['fecha_aplicacion_visa_c']['enable_range_search']='1';

 

 // created: 2020-01-23 13:05:03
$dictionary['Opportunity']['fields']['fecha_expiracion_visa_new_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_expiracion_visa_new_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_expiracion_visa_new_c']['labelValue']='Fecha Expiracion Visa.';
$dictionary['Opportunity']['fields']['fecha_expiracion_visa_new_c']['enable_range_search']='1';

 

 // created: 2021-06-16 21:30:50
$dictionary['Opportunity']['fields']['fecha_cierre_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_cierre_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_cierre_c']['labelValue']='Fecha de Cierre';
$dictionary['Opportunity']['fields']['fecha_cierre_c']['enable_range_search']='1';

 

 // created: 2019-12-05 07:25:03
$dictionary['Opportunity']['fields']['estado_gestion_comercial_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['estado_gestion_comercial_c']['labelValue']='Estado Gestion Comercial';

 

 // created: 2020-03-16 15:28:07
$dictionary['Opportunity']['fields']['user_id_c']['inline_edit']=1;

 

 // created: 2020-01-23 13:03:49
$dictionary['Opportunity']['fields']['fecha_cierre_new_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_cierre_new_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_cierre_new_c']['labelValue']='Fecha de Cierre.';
$dictionary['Opportunity']['fields']['fecha_cierre_new_c']['enable_range_search']='1';

 

 // created: 2019-11-02 16:55:58
$dictionary['Opportunity']['fields']['comision_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['comision_c']['labelValue']='Comision';

 

 // created: 2019-11-02 17:08:42
$dictionary['Opportunity']['fields']['porcentaje_pago_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['porcentaje_pago_c']['labelValue']='Porcentaje Pago';

 

 // created: 2019-12-07 15:45:37
$dictionary['Opportunity']['fields']['sales_stage']['default']='Progreso';
$dictionary['Opportunity']['fields']['sales_stage']['options']='sales_stage_list';

 

 // created: 2019-12-27 14:03:26
$dictionary['Opportunity']['fields']['description']['audited']=true;
$dictionary['Opportunity']['fields']['description']['inline_edit']='';
$dictionary['Opportunity']['fields']['description']['comments']='Full text of the note';
$dictionary['Opportunity']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-03-16 08:52:11
$dictionary['Opportunity']['fields']['fecha_viaje_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_viaje_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_viaje_c']['labelValue']='Fecha de Viaje';
$dictionary['Opportunity']['fields']['fecha_viaje_c']['enable_range_search']='1';

 

 // created: 2019-12-11 13:04:59
$dictionary['Opportunity']['fields']['recibo_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['recibo_c']['labelValue']='Recibo';

 

 // created: 2019-11-02 16:57:24
$dictionary['Opportunity']['fields']['estado_recoleccion_documento_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['estado_recoleccion_documento_c']['labelValue']='Estado recolección documentos';

 

 // created: 2019-11-02 16:58:17
$dictionary['Opportunity']['fields']['fecha_apertura_cuenta_bancar_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_apertura_cuenta_bancar_c']['labelValue']='Fecha Apertura Cuenta Bancaria';

 

 // created: 2020-03-16 15:28:43
$dictionary['Opportunity']['fields']['asignado_visas_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['asignado_visas_c']['labelValue']='Asignado Visas';

 

 // created: 2019-11-02 17:09:15
$dictionary['Opportunity']['fields']['revision_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['revision_c']['labelValue']='Revisión';

 

 // created: 2020-01-23 15:01:25
$dictionary['Opportunity']['fields']['fecha_proximo_contacto_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_proximo_contacto_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_proximo_contacto_c']['labelValue']='Fecha Proximo Contacto';
$dictionary['Opportunity']['fields']['fecha_proximo_contacto_c']['enable_range_search']='1';

 

 // created: 2019-11-02 17:02:02
$dictionary['Opportunity']['fields']['fecha_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_c']['labelValue']='Fecha';

 

 // created: 2019-11-02 17:03:35
$dictionary['Opportunity']['fields']['fecha_firma_contrato_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_firma_contrato_c']['labelValue']='Fecha Firma Contrato';

 

 // created: 2019-12-04 09:55:26
$dictionary['Opportunity']['fields']['estado_cartera_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['estado_cartera_c']['labelValue']='Estado Cartera';

 

 // created: 2020-01-23 13:01:04
$dictionary['Opportunity']['fields']['fecha_ultimo_contacto_new_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_ultimo_contacto_new_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_ultimo_contacto_new_c']['labelValue']='Fecha Ultimo Contacto.';
$dictionary['Opportunity']['fields']['fecha_ultimo_contacto_new_c']['enable_range_search']='1';

 

 // created: 2019-11-02 17:04:19
$dictionary['Opportunity']['fields']['fecha_otorgamiento_visa_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_otorgamiento_visa_c']['labelValue']='Fecha Otorgamiento Visa';

 

 // created: 2020-03-16 15:31:03
$dictionary['Opportunity']['fields']['asignado_servicio_cliente_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['asignado_servicio_cliente_c']['labelValue']='Asignado Servicio al Cliente';

 

 // created: 2020-01-23 15:02:34
$dictionary['Opportunity']['fields']['fecha_expiracion_visa_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_expiracion_visa_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_expiracion_visa_c']['labelValue']='Fecha Expiracion Visa';
$dictionary['Opportunity']['fields']['fecha_expiracion_visa_c']['enable_range_search']='1';

 

 // created: 2019-11-02 17:07:51
$dictionary['Opportunity']['fields']['monto_dolares_australianos_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['monto_dolares_australianos_c']['labelValue']='Monto Dolares Australianos';

 

 // created: 2020-03-16 13:06:55
$dictionary['Opportunity']['fields']['fecha_presupuesto_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_presupuesto_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_presupuesto_c']['labelValue']='Fecha del Presupuesto';
$dictionary['Opportunity']['fields']['fecha_presupuesto_c']['enable_range_search']='1';

 

 // created: 2019-12-11 13:04:59
$dictionary['Opportunity']['fields']['veta_recibo_id_c']['inline_edit']=1;

 

 // created: 2019-12-05 07:34:08
$dictionary['Opportunity']['fields']['estado_visas_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['estado_visas_c']['labelValue']='Estado Visas';

 

 // created: 2019-12-05 07:29:58
$dictionary['Opportunity']['fields']['estado_servicio_al_cliente_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['estado_servicio_al_cliente_c']['labelValue']='Estado Servicio al Cliente';

 

 // created: 2019-12-11 18:49:09
$dictionary['Opportunity']['fields']['asesor_servicio_cliente_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['asesor_servicio_cliente_c']['labelValue']='Asesor Servicio al Cliente';
$dictionary['Opportunity']['fields']['asesor_servicio_cliente_c']['massupdate']=true;

 

 // created: 2020-01-23 13:03:06
$dictionary['Opportunity']['fields']['fecha_proximo_contacto_new_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_proximo_contacto_new_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['fecha_proximo_contacto_new_c']['labelValue']='Fecha Proximo Contacto.';
$dictionary['Opportunity']['fields']['fecha_proximo_contacto_new_c']['enable_range_search']='1';

 

 // created: 2019-10-09 10:48:07
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2019-10-09 10:48:06
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2019-10-09 10:48:06
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2019-12-05 07:55:24
$dictionary['Opportunity']['fields']['pendiente_cartera_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['pendiente_cartera_c']['labelValue']='Pendiente Cartera';

 

 // created: 2019-11-02 17:05:05
$dictionary['Opportunity']['fields']['fecha_solicitud_pago_contado_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['fecha_solicitud_pago_contado_c']['labelValue']='Fecha de Solicitud de Pago al Contador';

 
?>