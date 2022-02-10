<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-02-17 17:00:17
$dictionary['Lead']['fields']['birthdate']['inline_edit']='';
$dictionary['Lead']['fields']['birthdate']['comments']='The birthdate of the contact';
$dictionary['Lead']['fields']['birthdate']['merge_filter']='disabled';
$dictionary['Lead']['fields']['birthdate']['enable_range_search']=false;

 

 // created: 2018-02-16 15:04:35
$dictionary['Lead']['fields']['departamento_c']['inline_edit']='';
$dictionary['Lead']['fields']['departamento_c']['labelValue']='Departamento';

 

 // created: 2018-02-16 14:47:35
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-02-17 17:00:28
$dictionary['Lead']['fields']['converted']['inline_edit']='';
$dictionary['Lead']['fields']['converted']['comments']='Has Lead been converted to a Contact (and other Sugar objects)';
$dictionary['Lead']['fields']['converted']['merge_filter']='disabled';

 

 // created: 2018-02-17 17:01:21
$dictionary['Lead']['fields']['salutation']['len']=100;
$dictionary['Lead']['fields']['salutation']['inline_edit']='';
$dictionary['Lead']['fields']['salutation']['comments']='Contact salutation (e.g., Mr, Ms)';
$dictionary['Lead']['fields']['salutation']['merge_filter']='disabled';

 

 // created: 2019-09-18 10:08:08
$dictionary['Lead']['fields']['date_modified']['audited']=true;
$dictionary['Lead']['fields']['date_modified']['comments']='Date record last modified';
$dictionary['Lead']['fields']['date_modified']['merge_filter']='disabled';

 

 // created: 2018-02-16 15:15:07
$dictionary['Lead']['fields']['ok_visas_c']['inline_edit']='';
$dictionary['Lead']['fields']['ok_visas_c']['labelValue']='Visto Bueno Visas';

 

// created: 2021-09-02 13:15:23
$dictionary["Lead"]["fields"]["veta_pasaporte_leads"] = array (
  'name' => 'veta_pasaporte_leads',
  'type' => 'link',
  'relationship' => 'veta_pasaporte_leads',
  'source' => 'non-db',
  'module' => 'Veta_Pasaporte',
  'bean_name' => 'Veta_Pasaporte',
  'side' => 'right',
  'vname' => 'LBL_VETA_PASAPORTE_LEADS_FROM_VETA_PASAPORTE_TITLE',
);


 // created: 2018-02-17 18:44:43
$dictionary['Lead']['fields']['lead_source']['inline_edit']='';
$dictionary['Lead']['fields']['lead_source']['comments']='';
$dictionary['Lead']['fields']['lead_source']['merge_filter']='disabled';

 

 // created: 2018-02-17 17:00:58
$dictionary['Lead']['fields']['last_name']['inline_edit']='';
$dictionary['Lead']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Lead']['fields']['last_name']['merge_filter']='disabled';

 

// created: 2021-09-02 13:15:25
$dictionary["Lead"]["fields"]["veta_requerimiento_leads"] = array (
  'name' => 'veta_requerimiento_leads',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_leads',
  'source' => 'non-db',
  'module' => 'Veta_Requerimiento',
  'bean_name' => 'Veta_Requerimiento',
  'side' => 'right',
  'vname' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_VETA_REQUERIMIENTO_TITLE',
);


 // created: 2019-08-20 20:56:26
$dictionary['Lead']['fields']['edad_c']['inline_edit']='';
$dictionary['Lead']['fields']['edad_c']['labelValue']='Edad';

 

 // created: 2019-09-26 15:01:52
$dictionary['Lead']['fields']['fecha_expiracion_visa_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_expiracion_visa_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['fecha_expiracion_visa_c']['labelValue']='Fecha Expiracion Visa';
$dictionary['Lead']['fields']['fecha_expiracion_visa_c']['enable_range_search']='1';

 

 // created: 2018-02-16 14:54:04
$dictionary['Lead']['fields']['campaign_id_c']['inline_edit']=1;

 

 // created: 2018-02-16 15:05:36
$dictionary['Lead']['fields']['ciudad_c']['inline_edit']='';
$dictionary['Lead']['fields']['ciudad_c']['labelValue']='Ciudad';

 

 // created: 2018-02-16 15:16:35
$dictionary['Lead']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2018-02-17 17:01:46
$dictionary['Lead']['fields']['title']['inline_edit']='';
$dictionary['Lead']['fields']['title']['comments']='The title of the contact';
$dictionary['Lead']['fields']['title']['merge_filter']='disabled';

 

 // created: 2018-02-17 17:00:35
$dictionary['Lead']['fields']['deleted']['inline_edit']='';
$dictionary['Lead']['fields']['deleted']['comments']='Record deletion indicator';
$dictionary['Lead']['fields']['deleted']['merge_filter']='disabled';
$dictionary['Lead']['fields']['deleted']['reportable']=true;

 

 // created: 2018-02-16 15:16:35
$dictionary['Lead']['fields']['presupuesto_c']['inline_edit']='';
$dictionary['Lead']['fields']['presupuesto_c']['labelValue']='Presupuesto';

 

 // created: 2018-02-17 17:01:29
$dictionary['Lead']['fields']['status']['inline_edit']='';
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';

 

// created: 2021-09-02 13:15:20
$dictionary["Lead"]["fields"]["veta_otrosnombres_leads"] = array (
  'name' => 'veta_otrosnombres_leads',
  'type' => 'link',
  'relationship' => 'veta_otrosnombres_leads',
  'source' => 'non-db',
  'module' => 'Veta_OtrosNombres',
  'bean_name' => 'Veta_OtrosNombres',
  'side' => 'right',
  'vname' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_VETA_OTROSNOMBRES_TITLE',
);


$dictionary['Lead']['fields']['soel_oficina_comercial'] = array(
    'name' => 'soel_oficina_comercial',
    'vname' => 'LBL_SOEL_OFICINA_COMERCIAL',
    'type' => 'varchar',
    'source' => 'non-db',
);

$dictionary['Lead']['fields']['soel_auditoria'] = array(
    'name' => 'soel_auditoria',
    'vname' => 'LBL_SOEL_AUDITORIA',
    'type' => 'varchar',
    'source' => 'non-db',
);

// created: 2021-09-02 13:15:23
$dictionary["Lead"]["fields"]["veta_serviciosadicionales_leads"] = array (
  'name' => 'veta_serviciosadicionales_leads',
  'type' => 'link',
  'relationship' => 'veta_serviciosadicionales_leads',
  'source' => 'non-db',
  'module' => 'Veta_ServiciosAdicionales',
  'bean_name' => 'Veta_ServiciosAdicionales',
  'side' => 'right',
  'vname' => 'LBL_VETA_SERVICIOSADICIONALES_LEADS_FROM_VETA_SERVICIOSADICIONALES_TITLE',
);


// created: 2021-09-02 13:15:20
$dictionary["Lead"]["fields"]["veta_solvenciaeconomica_leads"] = array (
  'name' => 'veta_solvenciaeconomica_leads',
  'type' => 'link',
  'relationship' => 'veta_solvenciaeconomica_leads',
  'source' => 'non-db',
  'module' => 'Veta_SolvenciaEconomica',
  'bean_name' => 'Veta_SolvenciaEconomica',
  'side' => 'right',
  'vname' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_VETA_SOLVENCIAECONOMICA_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Lead"]["fields"]["veta_informacionacademica_leads"] = array (
  'name' => 'veta_informacionacademica_leads',
  'type' => 'link',
  'relationship' => 'veta_informacionacademica_leads',
  'source' => 'non-db',
  'module' => 'Veta_InformacionAcademica',
  'bean_name' => 'Veta_InformacionAcademica',
  'side' => 'right',
  'vname' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_VETA_INFORMACIONACADEMICA_TITLE',
);


 // created: 2018-02-16 15:03:38
$dictionary['Lead']['fields']['pais_c']['inline_edit']='';
$dictionary['Lead']['fields']['pais_c']['labelValue']='Pais';

 

// created: 2021-09-02 13:15:20
$dictionary["Lead"]["fields"]["veta_informacionlaboral_leads"] = array (
  'name' => 'veta_informacionlaboral_leads',
  'type' => 'link',
  'relationship' => 'veta_informacionlaboral_leads',
  'source' => 'non-db',
  'module' => 'Veta_InformacionLaboral',
  'bean_name' => 'Veta_InformacionLaboral',
  'side' => 'right',
  'vname' => 'LBL_VETA_INFORMACIONLABORAL_LEADS_FROM_VETA_INFORMACIONLABORAL_TITLE',
);


// created: 2021-08-02 14:38:16
$dictionary["Lead"]["fields"]["leads_cases_1"] = array (
  'name' => 'leads_cases_1',
  'type' => 'link',
  'relationship' => 'leads_cases_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_LEADS_CASES_1_FROM_CASES_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Lead"]["fields"]["veta_presupuesto_leads"] = array (
  'name' => 'veta_presupuesto_leads',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_leads',
  'source' => 'non-db',
  'module' => 'Veta_Presupuesto',
  'bean_name' => 'Veta_Presupuesto',
  'side' => 'right',
  'vname' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_VETA_PRESUPUESTO_TITLE',
);


 // created: 2018-02-16 15:15:45
$dictionary['Lead']['fields']['pasaporte_c']['inline_edit']='';
$dictionary['Lead']['fields']['pasaporte_c']['labelValue']='Pasaporte';

 

// created: 2021-09-02 13:15:23
$dictionary["Lead"]["fields"]["veta_visas_leads"] = array (
  'name' => 'veta_visas_leads',
  'type' => 'link',
  'relationship' => 'veta_visas_leads',
  'source' => 'non-db',
  'module' => 'Veta_Visas',
  'bean_name' => 'Veta_Visas',
  'side' => 'right',
  'vname' => 'LBL_VETA_VISAS_LEADS_FROM_VETA_VISAS_TITLE',
);


 // created: 2018-02-16 14:47:35
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

// created: 2021-09-02 13:15:24
$dictionary["Lead"]["fields"]["veta_recibo_leads"] = array (
  'name' => 'veta_recibo_leads',
  'type' => 'link',
  'relationship' => 'veta_recibo_leads',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_LEADS_FROM_VETA_RECIBO_TITLE',
);


 // created: 2018-02-16 14:47:35
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

// created: 2021-09-02 13:15:25
$dictionary["Lead"]["fields"]["veta_ciudadania_leads"] = array (
  'name' => 'veta_ciudadania_leads',
  'type' => 'link',
  'relationship' => 'veta_ciudadania_leads',
  'source' => 'non-db',
  'module' => 'Veta_Ciudadania',
  'bean_name' => 'Veta_Ciudadania',
  'side' => 'right',
  'vname' => 'LBL_VETA_CIUDADANIA_LEADS_FROM_VETA_CIUDADANIA_TITLE',
);


 // created: 2019-09-18 10:10:41
$dictionary['Lead']['fields']['campana_c']['inline_edit']='';
$dictionary['Lead']['fields']['campana_c']['labelValue']='Campaign';

 

// created: 2019-12-07 16:06:28
$dictionary["Lead"]["fields"]["leads_opportunities_1"] = array (
  'name' => 'leads_opportunities_1',
  'type' => 'link',
  'relationship' => 'leads_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


 // created: 2018-02-17 17:00:51
$dictionary['Lead']['fields']['first_name']['inline_edit']='';
$dictionary['Lead']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Lead']['fields']['first_name']['merge_filter']='disabled';

 

 // created: 2018-02-16 14:47:35
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-02-17 17:01:37
$dictionary['Lead']['fields']['status_description']['inline_edit']='';
$dictionary['Lead']['fields']['status_description']['comments']='Description of the status of the lead';
$dictionary['Lead']['fields']['status_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status_description']['rows']='4';
$dictionary['Lead']['fields']['status_description']['cols']='20';

 

 // created: 2018-02-16 15:14:20
$dictionary['Lead']['fields']['ok_comercial_c']['inline_edit']='';
$dictionary['Lead']['fields']['ok_comercial_c']['labelValue']='Visto Bueno Comercial';

 

 // created: 2018-02-17 17:00:44
$dictionary['Lead']['fields']['email1']['inline_edit']='';
$dictionary['Lead']['fields']['email1']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:11:30
$dictionary['Lead']['fields']['ok_comercial_c']['inline_edit']='';
$dictionary['Lead']['fields']['ok_comercial_c']['labelValue']='Visto Bueno Comercial';

 

 // created: 2021-08-24 17:17:26
$dictionary['Lead']['fields']['ciudad_c']['inline_edit']='';
$dictionary['Lead']['fields']['ciudad_c']['labelValue']='Ciudad';

 

 // created: 2020-01-23 08:37:45
$dictionary['Lead']['fields']['fecha_ultimo_contacto_new_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_ultimo_contacto_new_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['fecha_ultimo_contacto_new_c']['labelValue']='Fecha Ultimo Contacto.';
$dictionary['Lead']['fields']['fecha_ultimo_contacto_new_c']['enable_range_search']='1';

 

 // created: 2021-08-24 17:11:47
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']='';
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['labelValue']='Longitud';

 

 // created: 2021-08-24 17:02:23
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']='';
$dictionary['Lead']['fields']['jjwg_maps_address_c']['labelValue']='Dirección';

 

 // created: 2021-08-24 17:19:57
$dictionary['Lead']['fields']['lead_source_description']['audited']=true;
$dictionary['Lead']['fields']['lead_source_description']['inline_edit']='';
$dictionary['Lead']['fields']['lead_source_description']['comments']='Description of the lead source';
$dictionary['Lead']['fields']['lead_source_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source_description']['rows']='4';
$dictionary['Lead']['fields']['lead_source_description']['cols']='20';

 

 // created: 2019-10-09 13:31:51
$dictionary['Lead']['fields']['edad_conyuge_c']['inline_edit']='';
$dictionary['Lead']['fields']['edad_conyuge_c']['labelValue']='Edad Conyuge';

 

 // created: 2021-08-24 17:14:11
$dictionary['Lead']['fields']['fecha_primer_presupuesto_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_primer_presupuesto_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['fecha_primer_presupuesto_c']['labelValue']='Fecha Primer Presupuesto';
$dictionary['Lead']['fields']['fecha_primer_presupuesto_c']['enable_range_search']='1';

 

 // created: 2019-10-09 13:31:50
$dictionary['Lead']['fields']['campaign_id_c']['inline_edit']=1;

 

 // created: 2019-12-27 14:03:41
$dictionary['Lead']['fields']['description']['audited']=true;
$dictionary['Lead']['fields']['description']['inline_edit']='';
$dictionary['Lead']['fields']['description']['comments']='Full text of the note';
$dictionary['Lead']['fields']['description']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:16:34
$dictionary['Lead']['fields']['fecha_ultimo_contacto_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_ultimo_contacto_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['fecha_ultimo_contacto_c']['labelValue']='Fecha Ultimo Contacto';
$dictionary['Lead']['fields']['fecha_ultimo_contacto_c']['enable_range_search']='1';

 

 // created: 2019-10-09 13:31:50
$dictionary['Lead']['fields']['anos_sin_estudiar_c']['inline_edit']='';
$dictionary['Lead']['fields']['anos_sin_estudiar_c']['options']='numeric_range_search_dom';
$dictionary['Lead']['fields']['anos_sin_estudiar_c']['labelValue']='Años sin estudiar';
$dictionary['Lead']['fields']['anos_sin_estudiar_c']['enable_range_search']='1';

 

 // created: 2021-08-24 17:01:58
$dictionary['Lead']['fields']['account_name']['audited']=true;
$dictionary['Lead']['fields']['account_name']['inline_edit']='';
$dictionary['Lead']['fields']['account_name']['comments']='Account name for lead';
$dictionary['Lead']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_name']['full_text_search']=NULL;

 

 // created: 2019-10-09 13:31:51
$dictionary['Lead']['fields']['fecha_cotizacion_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_cotizacion_c']['labelValue']='Fecha Cotizacion';

 

 // created: 2021-08-24 17:01:12
$dictionary['Lead']['fields']['alt_address_state']['audited']=true;
$dictionary['Lead']['fields']['alt_address_state']['inline_edit']='';
$dictionary['Lead']['fields']['alt_address_state']['comments']='State for alternate address';
$dictionary['Lead']['fields']['alt_address_state']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:06:52
$dictionary['Lead']['fields']['deleted']['inline_edit']='';
$dictionary['Lead']['fields']['deleted']['comments']='Record deletion indicator';
$dictionary['Lead']['fields']['deleted']['merge_filter']='disabled';
$dictionary['Lead']['fields']['deleted']['reportable']=true;
$dictionary['Lead']['fields']['deleted']['audited']=true;

 

 // created: 2019-10-15 13:56:54
$dictionary['Lead']['fields']['fecha_viaje_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_viaje_c']['labelValue']='Fecha de Viaje';

 

 // created: 2021-08-24 16:33:40
$dictionary['Lead']['fields']['email1']['inline_edit']='';
$dictionary['Lead']['fields']['email1']['merge_filter']='disabled';
$dictionary['Lead']['fields']['email1']['audited']=true;

 

 // created: 2020-01-23 09:03:21
$dictionary['Lead']['fields']['fecha_proximo_contacto_new_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_proximo_contacto_new_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['fecha_proximo_contacto_new_c']['labelValue']='Fecha Proximo Contacto :';
$dictionary['Lead']['fields']['fecha_proximo_contacto_new_c']['enable_range_search']='1';

 

 // created: 2021-08-24 17:02:40
$dictionary['Lead']['fields']['pasaporte_c']['inline_edit']='';
$dictionary['Lead']['fields']['pasaporte_c']['labelValue']='Pasaporte';

 

 // created: 2021-08-24 17:13:49
$dictionary['Lead']['fields']['birthdate']['inline_edit']='';
$dictionary['Lead']['fields']['birthdate']['comments']='The birthdate of the contact';
$dictionary['Lead']['fields']['birthdate']['merge_filter']='disabled';
$dictionary['Lead']['fields']['birthdate']['enable_range_search']=false;
$dictionary['Lead']['fields']['birthdate']['audited']=true;

 

 // created: 2021-08-24 17:05:57
$dictionary['Lead']['fields']['carrera_universitaria_c']['inline_edit']='';
$dictionary['Lead']['fields']['carrera_universitaria_c']['labelValue']='Carrera Universitaria';

 

 // created: 2021-08-24 17:00:10
$dictionary['Lead']['fields']['alt_address_street']['audited']=true;
$dictionary['Lead']['fields']['alt_address_street']['inline_edit']='';
$dictionary['Lead']['fields']['alt_address_street']['comments']='Street address for alternate address';
$dictionary['Lead']['fields']['alt_address_street']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:20:21
$dictionary['Lead']['fields']['account_description']['audited']=true;
$dictionary['Lead']['fields']['account_description']['inline_edit']='';
$dictionary['Lead']['fields']['account_description']['comments']='Description of lead account';
$dictionary['Lead']['fields']['account_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_description']['full_text_search']=NULL;
$dictionary['Lead']['fields']['account_description']['rows']='4';
$dictionary['Lead']['fields']['account_description']['cols']='20';

 

 // created: 2021-08-24 17:07:29
$dictionary['Lead']['fields']['ok_visas_c']['inline_edit']='';
$dictionary['Lead']['fields']['ok_visas_c']['labelValue']='Visto Bueno Visas';

 

 // created: 2021-08-24 17:13:24
$dictionary['Lead']['fields']['edad_c']['inline_edit']='';
$dictionary['Lead']['fields']['edad_c']['labelValue']='Edad';

 

 // created: 2021-08-24 17:20:11
$dictionary['Lead']['fields']['status_description']['inline_edit']='';
$dictionary['Lead']['fields']['status_description']['comments']='Description of the status of the lead';
$dictionary['Lead']['fields']['status_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status_description']['rows']='4';
$dictionary['Lead']['fields']['status_description']['cols']='20';
$dictionary['Lead']['fields']['status_description']['audited']=true;

 

 // created: 2019-10-18 09:58:24
$dictionary['Lead']['fields']['ciudad_tmp_c']['inline_edit']='';
$dictionary['Lead']['fields']['ciudad_tmp_c']['labelValue']='Ciudad TMP';

 

 // created: 2021-08-24 17:19:25
$dictionary['Lead']['fields']['assistant_phone']['audited']=true;
$dictionary['Lead']['fields']['assistant_phone']['inline_edit']='';
$dictionary['Lead']['fields']['assistant_phone']['comments']='Phone number of the assistant of the contact';
$dictionary['Lead']['fields']['assistant_phone']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:06:15
$dictionary['Lead']['fields']['trabajo_actual_c']['inline_edit']='';
$dictionary['Lead']['fields']['trabajo_actual_c']['labelValue']='Trabajo Actual';

 

 // created: 2021-08-24 17:18:35
$dictionary['Lead']['fields']['phone_mobile']['audited']=true;
$dictionary['Lead']['fields']['phone_mobile']['inline_edit']='';
$dictionary['Lead']['fields']['phone_mobile']['comments']='Mobile phone number of the contact';
$dictionary['Lead']['fields']['phone_mobile']['merge_filter']='disabled';

 

 // created: 2019-10-15 13:55:22
$dictionary['Lead']['fields']['visa_c']['inline_edit']='';
$dictionary['Lead']['fields']['visa_c']['labelValue']='Visa';

 

 // created: 2021-08-24 17:01:37
$dictionary['Lead']['fields']['assistant']['audited']=true;
$dictionary['Lead']['fields']['assistant']['inline_edit']='';
$dictionary['Lead']['fields']['assistant']['comments']='Name of the assistant of the contact';
$dictionary['Lead']['fields']['assistant']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:17:49
$dictionary['Lead']['fields']['presupuesto_c']['inline_edit']='';
$dictionary['Lead']['fields']['presupuesto_c']['labelValue']='Presupuesto';

 

 // created: 2021-08-24 17:18:21
$dictionary['Lead']['fields']['phone_home']['audited']=true;
$dictionary['Lead']['fields']['phone_home']['inline_edit']='';
$dictionary['Lead']['fields']['phone_home']['comments']='Home phone number of the contact';
$dictionary['Lead']['fields']['phone_home']['merge_filter']='disabled';

 

 // created: 2021-08-24 16:33:17
$dictionary['Lead']['fields']['department']['audited']=true;
$dictionary['Lead']['fields']['department']['inline_edit']='';
$dictionary['Lead']['fields']['department']['comments']='Department the lead belongs to';
$dictionary['Lead']['fields']['department']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:01:48
$dictionary['Lead']['fields']['refered_by']['audited']=true;
$dictionary['Lead']['fields']['refered_by']['inline_edit']='';
$dictionary['Lead']['fields']['refered_by']['comments']='Identifies who refered the lead';
$dictionary['Lead']['fields']['refered_by']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:01:30
$dictionary['Lead']['fields']['alt_address_country']['audited']=true;
$dictionary['Lead']['fields']['alt_address_country']['inline_edit']='';
$dictionary['Lead']['fields']['alt_address_country']['comments']='Country for alternate address';
$dictionary['Lead']['fields']['alt_address_country']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:01:18
$dictionary['Lead']['fields']['alt_address_postalcode']['audited']=true;
$dictionary['Lead']['fields']['alt_address_postalcode']['inline_edit']='';
$dictionary['Lead']['fields']['alt_address_postalcode']['comments']='Postal code for alternate address';
$dictionary['Lead']['fields']['alt_address_postalcode']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:17:05
$dictionary['Lead']['fields']['fecha_proximo_contacto_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_proximo_contacto_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['fecha_proximo_contacto_c']['labelValue']='Fecha Proximo Contacto';
$dictionary['Lead']['fields']['fecha_proximo_contacto_c']['enable_range_search']='1';

 

 // created: 2021-08-24 17:15:58
$dictionary['Lead']['fields']['date_entered']['audited']=true;
$dictionary['Lead']['fields']['date_entered']['comments']='Date record created';
$dictionary['Lead']['fields']['date_entered']['merge_filter']='disabled';

 

 // created: 2020-10-08 23:42:28
$dictionary['Lead']['fields']['fecha_expiracion_visa_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_expiracion_visa_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['fecha_expiracion_visa_c']['labelValue']='Fecha Expiración Visa';
$dictionary['Lead']['fields']['fecha_expiracion_visa_c']['enable_range_search']='1';

 

 // created: 2021-08-24 16:34:36
$dictionary['Lead']['fields']['primary_address_country']['audited']=true;
$dictionary['Lead']['fields']['primary_address_country']['inline_edit']='';
$dictionary['Lead']['fields']['primary_address_country']['comments']='Country for primary address';
$dictionary['Lead']['fields']['primary_address_country']['merge_filter']='disabled';

 

 // created: 2019-10-09 13:31:52
$dictionary['Lead']['fields']['nacimiento_conyuge_c']['inline_edit']='';
$dictionary['Lead']['fields']['nacimiento_conyuge_c']['labelValue']='Fecha de Nacimiento Conyuge';

 

 // created: 2021-08-24 17:02:13
$dictionary['Lead']['fields']['opportunity_amount']['audited']=true;
$dictionary['Lead']['fields']['opportunity_amount']['inline_edit']='';
$dictionary['Lead']['fields']['opportunity_amount']['comments']='Amount of the opportunity';
$dictionary['Lead']['fields']['opportunity_amount']['merge_filter']='disabled';

 

 // created: 2019-10-09 13:31:52
$dictionary['Lead']['fields']['hijos_c']['inline_edit']='';
$dictionary['Lead']['fields']['hijos_c']['labelValue']='Fecha 2 de Viaje';

 

 // created: 2019-10-09 13:31:53
$dictionary['Lead']['fields']['ocupacion_conyuge_c']['inline_edit']='';
$dictionary['Lead']['fields']['ocupacion_conyuge_c']['labelValue']='Ocupacion Conyuge';

 

 // created: 2021-08-24 17:18:51
$dictionary['Lead']['fields']['phone_work']['inline_edit']='';
$dictionary['Lead']['fields']['phone_work']['comments']='Work phone number of the contact';
$dictionary['Lead']['fields']['phone_work']['merge_filter']='disabled';

 

 // created: 2021-08-24 16:33:57
$dictionary['Lead']['fields']['primary_address_city']['audited']=true;
$dictionary['Lead']['fields']['primary_address_city']['inline_edit']='';
$dictionary['Lead']['fields']['primary_address_city']['comments']='City for primary address';
$dictionary['Lead']['fields']['primary_address_city']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:19:06
$dictionary['Lead']['fields']['phone_other']['audited']=true;
$dictionary['Lead']['fields']['phone_other']['inline_edit']='';
$dictionary['Lead']['fields']['phone_other']['comments']='Other phone number for the contact';
$dictionary['Lead']['fields']['phone_other']['merge_filter']='disabled';

 

 // created: 2021-08-24 16:32:48
$dictionary['Lead']['fields']['first_name']['inline_edit']='';
$dictionary['Lead']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Lead']['fields']['first_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['first_name']['audited']=true;

 

 // created: 2021-08-24 17:19:41
$dictionary['Lead']['fields']['website']['audited']=true;
$dictionary['Lead']['fields']['website']['inline_edit']='';
$dictionary['Lead']['fields']['website']['comments']='URL of website for the company';
$dictionary['Lead']['fields']['website']['merge_filter']='disabled';

 

 // created: 2019-10-09 13:31:50
$dictionary['Lead']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2019-10-09 13:31:50
$dictionary['Lead']['fields']['cargo_c']['inline_edit']='';
$dictionary['Lead']['fields']['cargo_c']['labelValue']='Cargo Actual';

 

 // created: 2019-10-18 09:54:32
$dictionary['Lead']['fields']['expiracion_visa_c']['inline_edit']='';
$dictionary['Lead']['fields']['expiracion_visa_c']['labelValue']='Expiracion de la Visa';

 

 // created: 2021-08-24 16:34:12
$dictionary['Lead']['fields']['primary_address_state']['audited']=true;
$dictionary['Lead']['fields']['primary_address_state']['inline_edit']='';
$dictionary['Lead']['fields']['primary_address_state']['comments']='State for primary address';
$dictionary['Lead']['fields']['primary_address_state']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:07:00
$dictionary['Lead']['fields']['do_not_call']['inline_edit']='';
$dictionary['Lead']['fields']['do_not_call']['comments']='An indicator of whether contact can be called';
$dictionary['Lead']['fields']['do_not_call']['merge_filter']='disabled';

 

 // created: 2019-10-09 13:31:50
$dictionary['Lead']['fields']['campana_c']['inline_edit']='';
$dictionary['Lead']['fields']['campana_c']['labelValue']='Campaign';

 

 // created: 2021-08-24 17:16:49
$dictionary['Lead']['fields']['fecha_viaje_2_c']['inline_edit']='';
$dictionary['Lead']['fields']['fecha_viaje_2_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['fecha_viaje_2_c']['labelValue']='Fecha Viaje 2';
$dictionary['Lead']['fields']['fecha_viaje_2_c']['enable_range_search']='1';

 

 // created: 2021-08-24 17:12:29
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']='';
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['labelValue']='Latitud';

 

 // created: 2021-08-24 17:02:06
$dictionary['Lead']['fields']['opportunity_name']['audited']=true;
$dictionary['Lead']['fields']['opportunity_name']['inline_edit']='';
$dictionary['Lead']['fields']['opportunity_name']['comments']='Opportunity name associated with lead';
$dictionary['Lead']['fields']['opportunity_name']['merge_filter']='disabled';

 

 // created: 2021-08-24 16:32:53
$dictionary['Lead']['fields']['last_name']['inline_edit']='';
$dictionary['Lead']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Lead']['fields']['last_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['last_name']['audited']=true;

 

 // created: 2021-08-24 17:11:11
$dictionary['Lead']['fields']['converted']['inline_edit']='';
$dictionary['Lead']['fields']['converted']['comments']='Has Lead been converted to a Contact (and other Sugar objects)';
$dictionary['Lead']['fields']['converted']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:19:16
$dictionary['Lead']['fields']['phone_fax']['audited']=true;
$dictionary['Lead']['fields']['phone_fax']['inline_edit']='';
$dictionary['Lead']['fields']['phone_fax']['comments']='Contact fax number';
$dictionary['Lead']['fields']['phone_fax']['merge_filter']='disabled';

 

 // created: 2019-10-09 13:31:52
$dictionary['Lead']['fields']['nombre_conyuge_c']['inline_edit']='';
$dictionary['Lead']['fields']['nombre_conyuge_c']['labelValue']='Nombre Conyuge';

 

 // created: 2021-08-24 16:34:28
$dictionary['Lead']['fields']['primary_address_postalcode']['audited']=true;
$dictionary['Lead']['fields']['primary_address_postalcode']['inline_edit']='';
$dictionary['Lead']['fields']['primary_address_postalcode']['comments']='Postal code for primary address';
$dictionary['Lead']['fields']['primary_address_postalcode']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:00:30
$dictionary['Lead']['fields']['alt_address_city']['audited']=true;
$dictionary['Lead']['fields']['alt_address_city']['inline_edit']='';
$dictionary['Lead']['fields']['alt_address_city']['comments']='City for alternate address';
$dictionary['Lead']['fields']['alt_address_city']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:12:59
$dictionary['Lead']['fields']['pais_c']['inline_edit']='';
$dictionary['Lead']['fields']['pais_c']['labelValue']='Pais';

 

 // created: 2021-08-24 16:33:03
$dictionary['Lead']['fields']['title']['inline_edit']='';
$dictionary['Lead']['fields']['title']['comments']='The title of the contact';
$dictionary['Lead']['fields']['title']['merge_filter']='disabled';
$dictionary['Lead']['fields']['title']['audited']=true;

 

 // created: 2021-08-24 17:17:37
$dictionary['Lead']['fields']['departamento_c']['inline_edit']='';
$dictionary['Lead']['fields']['departamento_c']['labelValue']='Departamento';

 

 // created: 2021-08-24 16:33:47
$dictionary['Lead']['fields']['primary_address_street']['audited']=true;
$dictionary['Lead']['fields']['primary_address_street']['inline_edit']='';
$dictionary['Lead']['fields']['primary_address_street']['comments']='Street address for primary address';
$dictionary['Lead']['fields']['primary_address_street']['merge_filter']='disabled';

 

 // created: 2021-08-24 17:02:32
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']='';
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['labelValue']='Estado de Geocodificación';

 
?>