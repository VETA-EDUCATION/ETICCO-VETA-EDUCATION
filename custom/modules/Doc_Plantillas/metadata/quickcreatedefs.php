<?php
$module_name = 'Doc_Plantillas';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'college',
            'studio' => 'visible',
            'label' => 'LBL_COLLEGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pais',
            'studio' => 'visible',
            'label' => 'LBL_PAIS',
          ),
          1 => 
          array (
            'name' => 'nacionalidad',
            'studio' => 'visible',
            'label' => 'LBL_NACIONALIDAD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tipoproceso',
            'studio' => 'visible',
            'label' => 'LBL_TIPOPROCESO',
          ),
          1 => 
          array (
            'name' => 'tipovisa',
            'studio' => 'visible',
            'label' => 'LBL_TIPOVISA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
