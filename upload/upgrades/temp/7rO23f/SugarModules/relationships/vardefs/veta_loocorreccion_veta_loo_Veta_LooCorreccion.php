<?php
// created: 2019-11-02 20:52:05
$dictionary["Veta_LooCorreccion"]["fields"]["veta_loocorreccion_veta_loo"] = array (
  'name' => 'veta_loocorreccion_veta_loo',
  'type' => 'link',
  'relationship' => 'veta_loocorreccion_veta_loo',
  'source' => 'non-db',
  'module' => 'Veta_Loo',
  'bean_name' => 'Veta_Loo',
  'vname' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOO_TITLE',
  'id_name' => 'veta_loocorreccion_veta_looveta_loo_ida',
);
$dictionary["Veta_LooCorreccion"]["fields"]["veta_loocorreccion_veta_loo_name"] = array (
  'name' => 'veta_loocorreccion_veta_loo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOO_TITLE',
  'save' => true,
  'id_name' => 'veta_loocorreccion_veta_looveta_loo_ida',
  'link' => 'veta_loocorreccion_veta_loo',
  'table' => 'veta_loo',
  'module' => 'Veta_Loo',
  'rname' => 'name',
);
$dictionary["Veta_LooCorreccion"]["fields"]["veta_loocorreccion_veta_looveta_loo_ida"] = array (
  'name' => 'veta_loocorreccion_veta_looveta_loo_ida',
  'type' => 'link',
  'relationship' => 'veta_loocorreccion_veta_loo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOOCORRECCION_TITLE',
);
