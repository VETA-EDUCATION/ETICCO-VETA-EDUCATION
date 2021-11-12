<?php
$module_name = 'Veta_PagoColegios';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'monto' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTO',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'monto',
      ),
      'estado' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'oficina_pago',
      ),
      'veta_pagocolegios_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'id' => 'VETA_PAGOCOLEGIOS_OPPORTUNITIESOPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_pagocolegios_opportunities_name',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'monto' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTO',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'monto',
      ),
      'estado' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'oficina_pago',
      ),
      'veta_pagocolegios_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_PAGOCOLEGIOS_OPPORTUNITIESOPPORTUNITIES_IDA',
        'name' => 'veta_pagocolegios_opportunities_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
