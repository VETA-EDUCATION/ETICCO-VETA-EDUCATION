<?php
$module_name = 'Veta_InformacionLaboral';
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
            'name' => 'empresa',
            'label' => 'LBL_EMPRESA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_inicio',
            'label' => 'LBL_FECHA_INICIO',
          ),
          1 => 
          array (
            'name' => 'fecha_retiro',
            'label' => 'LBL_FECHA_RETIRO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'veta_informacionlaboral_leads_name',
            'label' => 'LBL_VETA_INFORMACIONLABORAL_LEADS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'veta_informacionlaboral_contacts_name',
            'label' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
