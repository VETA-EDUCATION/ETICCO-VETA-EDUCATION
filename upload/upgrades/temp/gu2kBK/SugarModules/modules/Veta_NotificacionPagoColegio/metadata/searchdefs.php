<?php
$module_name = 'Veta_NotificacionPagoColegio';
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
      'veta_notificacionpagocolegio_veta_pagocolegios_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_NOTIFICACIONPAGOCOLEGIO_VETA_PAGOCOLEGIOS_FROM_VETA_PAGOCOLEGIOS_TITLE',
        'id' => 'VETA_NOTIF37D5OLEGIOS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_notificacionpagocolegio_veta_pagocolegios_name',
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
      'estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado',
      ),
      'veta_notificacionpagocolegio_veta_pagocolegios_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_NOTIFICACIONPAGOCOLEGIO_VETA_PAGOCOLEGIOS_FROM_VETA_PAGOCOLEGIOS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_NOTIF37D5OLEGIOS_IDA',
        'name' => 'veta_notificacionpagocolegio_veta_pagocolegios_name',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
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
