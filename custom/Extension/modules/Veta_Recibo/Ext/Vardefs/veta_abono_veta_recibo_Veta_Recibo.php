<?php
// created: 2021-09-02 13:15:21
$dictionary["Veta_Recibo"]["fields"]["veta_abono_veta_recibo"] = array (
  'name' => 'veta_abono_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_abono_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Abono',
  'bean_name' => 'Veta_Abono',
  'side' => 'right',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_ABONO_TITLE',
  'id_name' => 'veta_abono_veta_reciboveta_abono_idb',
);

$dictionary["Veta_Recibo"]["fields"]["veta_abono_veta_recibo_name"] = array (
  'name' => 'veta_abono_veta_recibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_ABONO_TITLE',
  'save' => true,
  'id_name' => 'veta_abono_veta_reciboveta_abono_idb',
  'link' => 'veta_abono_veta_recibo',
  'table' => 'veta_abono',
  'module' => 'Veta_Abono',
  'rname' => 'id',
);

$dictionary["Veta_Recibo"]["fields"]["veta_abono_veta_reciboveta_abono_idb"] = array (
  'name' => 'veta_abono_veta_reciboveta_abono_idb ',
  'type' => 'link',
  'relationship' => 'veta_abono_veta_recibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_ABONO_TITLE',
);

