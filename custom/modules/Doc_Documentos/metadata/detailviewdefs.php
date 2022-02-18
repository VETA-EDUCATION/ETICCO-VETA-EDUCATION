<?php
$module_name = 'Doc_Documentos';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'icq',
            'label' => 'LBL_ICQ',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'observaciones',
            'label' => 'LBL_OBSERVACIONES',
          ),
          1 => 
          array (
            'name' => 'recursos',
            'label' => 'LBL_RECURSOS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'idiomaicq_c',
            'studio' => 'visible',
            'label' => 'LBL_IDIOMAICQ',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'solicitadopor',
            'studio' => 'visible',
            'label' => 'LBL_SOLICITADOPOR',
          ),
          1 => 
          array (
            'name' => 'ayuda',
            'label' => 'LBL_AYUDA',
          ),
        ),
      ),
    ),
  ),
);
;
?>
