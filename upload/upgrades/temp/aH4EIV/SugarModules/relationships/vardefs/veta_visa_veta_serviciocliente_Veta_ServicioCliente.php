<?php
// created: 2019-12-19 13:16:45
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
