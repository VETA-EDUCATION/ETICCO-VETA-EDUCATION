<?php
$module_name = 'Veta_InformacionAcademica';
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
            'name' => 'nivel_estudios',
            'studio' => 'visible',
            'label' => 'LBL_NIVEL_ESTUDIOS',
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
            'name' => 'fecha_fin',
            'label' => 'LBL_FECHA_FIN',
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
            'name' => 'veta_informacionacademica_leads_name',
            'label' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'veta_informacionacademica_contacts_name',
            'label' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
