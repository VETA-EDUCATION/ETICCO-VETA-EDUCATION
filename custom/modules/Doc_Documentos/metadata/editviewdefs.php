<?php
$module_name = 'Doc_Documentos';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          0 => 'name',
          1 => 
          array (
            'name' => 'recursos',
            'label' => 'LBL_RECURSOS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'solicitadopor',
            'studio' => 'visible',
            'label' => 'LBL_SOLICITADOPOR',
          ),
          1 => 
          array (
            'name' => 'icq',
            'label' => 'LBL_ICQ',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ayuda',
            'label' => 'LBL_AYUDA',
          ),
          1 => 
          array (
            'name' => 'observaciones',
            'label' => 'LBL_OBSERVACIONES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'idiomaicq_c',
            'studio' => 'visible',
            'label' => 'LBL_IDIOMAICQ',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'description',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
