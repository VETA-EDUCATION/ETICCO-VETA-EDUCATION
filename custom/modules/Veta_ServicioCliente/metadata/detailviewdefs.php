<?php
$module_name = 'Veta_ServicioCliente';
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
            'name' => 'estudiante',
            'studio' => 'visible',
            'label' => 'LBL_ESTUDIANTE',
          ),
          1 => 
          array (
            'name' => 'prospecto',
            'studio' => 'visible',
            'label' => 'LBL_PROSPECTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'veta_serviciocliente_opportunities_name',
            'label' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'veta_visa_veta_serviciocliente_name',
            'label' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_VISA_TITLE',
          ),
          1 => 
          array (
            'name' => 'fecha_expiracion_visa',
            'label' => 'LBL_FECHA_EXPIRACION_VISA',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
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
