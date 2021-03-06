<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Pagos',
    'varName' => 'Veta_Pagos',
    'orderBy' => 'veta_pagos.name',
    'whereClauses' => array (
  'name' => 'veta_pagos.name',
  'veta_pagos_veta_liquidacion_name' => 'veta_pagos.veta_pagos_veta_liquidacion_name',
  'medio_pago' => 'veta_pagos.medio_pago',
  'estudiante' => 'veta_pagos.estudiante',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_pagos_veta_liquidacion_name',
  5 => 'medio_pago',
  6 => 'estudiante',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'estudiante' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'estudiante',
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
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PROSPECTO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROSPECTO',
    'id' => 'LEAD_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ESTUDIANTE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'estudiante',
  ),
  'MEDIO_PAGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MEDIO_PAGO',
    'width' => '10%',
    'default' => true,
    'name' => 'medio_pago',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'VETA_PAGOS_VETA_LIQUIDACION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
    'id' => 'VETA_PAGOS_VETA_LIQUIDACIONVETA_LIQUIDACION_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_pagos_veta_liquidacion_name',
  ),
),
);
