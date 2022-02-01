<?php
$module_name = 'Veta_Requerimiento';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'referido',
            'label' => 'LBL_REFERIDO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'campana',
            'studio' => 'visible',
            'label' => 'LBL_CAMPANA',
          ),
          1 => 
          array (
            'name' => 'fuente',
            'studio' => 'visible',
            'label' => 'LBL_FUENTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fecha_proximo_contacto',
            'label' => 'LBL_FECHA_PROXIMO_CONTACTO',
          ),
          1 => 
          array (
            'name' => 'fecha_ultimo_contacto',
            'label' => 'LBL_FECHA_ULTIMO_CONTACTO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_viaje_txt',
            'label' => 'LBL_FECHA_VIAJE_TXT',
          ),
          1 => 
          array (
            'name' => 'fecha_viaje',
            'label' => 'LBL_FECHA_VIAJE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'presupuesto',
            'label' => 'LBL_PRESUPUESTO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'visto_bueno_comercial',
            'label' => 'LBL_VISTO_BUENO_COMERCIAL',
          ),
          1 => 
          array (
            'name' => 'visto_bueno_visas',
            'label' => 'LBL_VISTO_BUENO_VISAS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
