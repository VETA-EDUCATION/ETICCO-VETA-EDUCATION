<?php
$module_name = 'Veta_Pasaporte';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_expiracion',
            'label' => 'LBL_FECHA_EXPIRACION',
          ),
          1 => 
          array (
            'name' => 'fecha_emision',
            'label' => 'LBL_FECHA_EMISION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'autoridad_emite',
            'label' => 'LBL_AUTORIDAD_EMITE',
          ),
          1 => 
          array (
            'name' => 'pais',
            'label' => 'LBL_PAIS',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'veta_pasaporte_leads_name',
          ),
          1 => 
          array (
            'name' => 'veta_pasaporte_contacts_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
