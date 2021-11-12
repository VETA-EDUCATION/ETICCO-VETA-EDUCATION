<?php
$module_name = 'Veta_InformacionLaboral';
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
          0 => 'description',
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
        4 => 
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
      ),
    ),
  ),
);
;
?>
