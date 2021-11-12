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
      'estudiante' => 
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
      'estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado',
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
      'estudiante' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ESTUDIANTE',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACT_ID_C',
        'name' => 'estudiante',
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
