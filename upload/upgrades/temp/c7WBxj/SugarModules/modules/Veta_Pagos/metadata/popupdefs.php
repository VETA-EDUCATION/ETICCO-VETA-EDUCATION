<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Pagos',
    'varName' => 'Veta_Pagos',
    'orderBy' => 'veta_pagos.name',
    'whereClauses' => array (
  'name' => 'veta_pagos.name',
  'veta_pagos_veta_liquidacion_name' => 'veta_pagos.veta_pagos_veta_liquidacion_name',
  'medio_pago' => 'veta_pagos.medio_pago',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_pagos_veta_liquidacion_name',
  5 => 'medio_pago',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'medio_pago' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MEDIO_PAGO',
    'width' => '10%',
    'name' => 'medio_pago',
  ),
  'veta_pagos_veta_liquidacion_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
    'id' => 'VETA_PAGOS_VETA_LIQUIDACIONVETA_LIQUIDACION_IDA',
    'width' => '10%',
    'name' => 'veta_pagos_veta_liquidacion_name',
  ),
),
);
