<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:23
$dictionary["Veta_ServicioCliente"]["fields"]["veta_visa_veta_serviciocliente"] = array (
  'name' => 'veta_visa_veta_serviciocliente',
  'type' => 'link',
  'relationship' => 'veta_visa_veta_serviciocliente',
  'source' => 'non-db',
  'module' => 'Veta_Visa',
  'bean_name' => 'Veta_Visa',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_VISA_TITLE',
  'id_name' => 'veta_visa_veta_servicioclienteveta_visa_ida',
);
$dictionary["Veta_ServicioCliente"]["fields"]["veta_visa_veta_serviciocliente_name"] = array (
  'name' => 'veta_visa_veta_serviciocliente_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_VISA_TITLE',
  'save' => true,
  'id_name' => 'veta_visa_veta_servicioclienteveta_visa_ida',
  'link' => 'veta_visa_veta_serviciocliente',
  'table' => 'veta_visa',
  'module' => 'Veta_Visa',
  'rname' => 'name',
);
$dictionary["Veta_ServicioCliente"]["fields"]["veta_visa_veta_servicioclienteveta_visa_ida"] = array (
  'name' => 'veta_visa_veta_servicioclienteveta_visa_ida',
  'type' => 'link',
  'relationship' => 'veta_visa_veta_serviciocliente',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_VISA_TITLE',
);


$dictionary['Veta_ServicioCliente']['fields']['soel_referido'] = array(
    'name' => 'soel_referido',
    'vname' => 'LBL_SOEL_REFERIDO',
    'type' => 'varchar',
    'source' => 'non-db',
);



$dictionary['Veta_ServicioCliente']['fields']['soel_fecha_expiracion_visa'] = array(
    'name' => 'soel_fecha_expiracion_visa',
    'vname' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
    'type' => 'date',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


$dictionary['Veta_ServicioCliente']['fields']['soel_fecha_viaje'] = array(
    'name' => 'soel_fecha_viaje',
    'vname' => 'LBL_SOEL_FECHA_VIAJE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',

    );


// created: 2021-09-02 13:15:21
$dictionary["Veta_ServicioCliente"]["fields"]["veta_serviciocliente_opportunities"] = array (
  'name' => 'veta_serviciocliente_opportunities',
  'type' => 'link',
  'relationship' => 'veta_serviciocliente_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_serviciocliente_opportunitiesopportunities_ida',
);
$dictionary["Veta_ServicioCliente"]["fields"]["veta_serviciocliente_opportunities_name"] = array (
  'name' => 'veta_serviciocliente_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_serviciocliente_opportunitiesopportunities_ida',
  'link' => 'veta_serviciocliente_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_ServicioCliente"]["fields"]["veta_serviciocliente_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_serviciocliente_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_serviciocliente_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_VETA_SERVICIOCLIENTE_TITLE',
);


 // created: 2021-02-16 13:23:47
$dictionary['Veta_ServicioCliente']['fields']['fecha_expiracion_visa']['options']='date_range_search_dom';
$dictionary['Veta_ServicioCliente']['fields']['fecha_expiracion_visa']['enable_range_search']='1';

 

 // created: 2021-02-16 13:23:51
$dictionary['Veta_ServicioCliente']['fields']['fecha_ultimo_contacto']['options']='date_range_search_dom';
$dictionary['Veta_ServicioCliente']['fields']['fecha_ultimo_contacto']['enable_range_search']='1';

 

 // created: 2021-02-16 13:24:24
$dictionary['Veta_ServicioCliente']['fields']['fecha_proximo_contacto']['options']='date_range_search_dom';
$dictionary['Veta_ServicioCliente']['fields']['fecha_proximo_contacto']['enable_range_search']='1';

 
?>