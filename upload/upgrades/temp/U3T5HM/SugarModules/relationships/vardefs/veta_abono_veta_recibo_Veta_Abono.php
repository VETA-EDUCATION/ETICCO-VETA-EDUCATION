<?php
// created: 2019-11-28 18:33:54
$dictionary["Veta_Abono"]["fields"]["veta_abono_veta_recibo"] = array (
  'name' => 'veta_abono_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_abono_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'id_name' => 'veta_abono_veta_reciboveta_recibo_ida',
);
$dictionary["Veta_Abono"]["fields"]["veta_abono_veta_recibo_name"] = array (
  'name' => 'veta_abono_veta_recibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_abono_veta_reciboveta_recibo_ida',
  'link' => 'veta_abono_veta_recibo',
  'table' => 'veta_recibo',
  'module' => 'Veta_Recibo',
  'rname' => 'name',
);
$dictionary["Veta_Abono"]["fields"]["veta_abono_veta_reciboveta_recibo_ida"] = array (
  'name' => 'veta_abono_veta_reciboveta_recibo_ida',
  'type' => 'link',
  'relationship' => 'veta_abono_veta_recibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_ABONO_TITLE',
);
