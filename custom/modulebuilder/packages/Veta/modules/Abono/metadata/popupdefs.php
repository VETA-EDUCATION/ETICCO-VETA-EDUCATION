<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Abono',
    'varName' => 'Veta_Abono',
    'orderBy' => 'veta_abono.name',
    'whereClauses' => array (
  'name' => 'veta_abono.name',
  'veta_abono_veta_recibo_name' => 'veta_abono.veta_abono_veta_recibo_name',
  'assigned_user_id' => 'veta_abono.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_abono_veta_recibo_name',
  5 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_abono_veta_recibo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
    'id' => 'VETA_ABONO_VETA_RECIBOVETA_RECIBO_IDA',
    'width' => '10%',
    'name' => 'veta_abono_veta_recibo_name',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
