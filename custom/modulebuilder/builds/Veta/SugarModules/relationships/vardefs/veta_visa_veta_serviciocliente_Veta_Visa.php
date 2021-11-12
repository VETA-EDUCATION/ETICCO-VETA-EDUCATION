<?php
// created: 2020-10-14 00:58:39
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_serviciocliente"] = array (
  'name' => 'veta_visa_veta_serviciocliente',
  'type' => 'link',
  'relationship' => 'veta_visa_veta_serviciocliente',
  'source' => 'non-db',
  'module' => 'Veta_ServicioCliente',
  'bean_name' => 'Veta_ServicioCliente',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE',
  'id_name' => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_serviciocliente_name"] = array (
  'name' => 'veta_visa_veta_serviciocliente_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE',
  'save' => true,
  'id_name' => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
  'link' => 'veta_visa_veta_serviciocliente',
  'table' => 'veta_serviciocliente',
  'module' => 'Veta_ServicioCliente',
  'rname' => 'name',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_servicioclienteveta_serviciocliente_idb"] = array (
  'name' => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
  'type' => 'link',
  'relationship' => 'veta_visa_veta_serviciocliente',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE',
);
