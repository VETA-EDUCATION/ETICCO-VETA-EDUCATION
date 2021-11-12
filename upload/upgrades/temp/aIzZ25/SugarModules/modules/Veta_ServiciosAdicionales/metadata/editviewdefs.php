<?php
$module_name = 'Veta_ServiciosAdicionales';
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
            'name' => 'afecciones_acomodacion',
            'label' => 'LBL_AFECCIONES_ACOMODACION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'recoger_aeropuerto',
            'label' => 'LBL_RECOGER_AEROPUERTO',
          ),
          1 => 
          array (
            'name' => 'tiempo_acomodacion',
            'label' => 'LBL_TIEMPO_ACOMODACION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'convivencia_con_mascotas',
            'label' => 'LBL_CONVIVENCIA_CON_MASCOTAS',
          ),
          1 => 
          array (
            'name' => 'convivencia_fumadores',
            'label' => 'LBL_CONVIVENCIA_FUMADORES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'convivencia_ninos',
            'label' => 'LBL_CONVIVENCIA_NINOS',
          ),
          1 => 
          array (
            'name' => 'hijos_viajan',
            'label' => 'LBL_HIJOS_VIAJAN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nombre_tutor',
            'label' => 'LBL_NOMBRE_TUTOR',
          ),
          1 => 
          array (
            'name' => 'email_tutor',
            'label' => 'LBL_EMAIL_TUTOR',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'parentezco_tutor',
            'label' => 'LBL_PARENTEZCO_TUTOR',
          ),
          1 => 
          array (
            'name' => 'otra_convivencia',
            'label' => 'LBL_OTRA_CONVIVENCIA',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'veta_serviciosadicionales_contacts_name',
          ),
          1 => 
          array (
            'name' => 'veta_serviciosadicionales_leads_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
