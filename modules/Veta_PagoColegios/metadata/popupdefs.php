<?php
$popupMeta = array (
    'moduleMain' => 'Veta_PagoColegios',
    'varName' => 'Veta_PagoColegios',
    'orderBy' => 'veta_pagocolegios.name',
    'whereClauses' => array (
  'name' => 'veta_pagocolegios.name',
  'estado' => 'veta_pagocolegios.estado',
  'oficina_pago' => 'veta_pagocolegios.oficina_pago',
  'veta_pagocolegios_opportunities_name' => 'veta_pagocolegios.veta_pagocolegios_opportunities_name',
  'estudiante' => 'veta_pagocolegios.estudiante',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'estado',
  6 => 'oficina_pago',
  7 => 'veta_pagocolegios_opportunities_name',
  8 => 'estudiante',
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
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'oficina_pago' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OFICINA_PAGO',
    'width' => '10%',
    'name' => 'oficina_pago',
  ),
  'veta_pagocolegios_opportunities_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_PAGOCOLEGIOS_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'name' => 'veta_pagocolegios_opportunities_name',
  ),
),
);
