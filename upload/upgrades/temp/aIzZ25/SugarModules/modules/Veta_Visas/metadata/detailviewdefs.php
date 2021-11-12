<?php
$module_name = 'Veta_Visas';
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
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'pais',
            'label' => 'LBL_PAIS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha',
            'label' => 'LBL_FECHA',
          ),
          1 => 
          array (
            'name' => 'fecha_expiracion',
            'label' => 'LBL_FECHA_EXPIRACION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'negada',
            'label' => 'LBL_NEGADA',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'veta_visas_contacts_name',
          ),
          1 => 
          array (
            'name' => 'veta_visas_leads_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
