<?php
$module_name = 'Veta_Requerimiento';
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
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'referido',
            'label' => 'LBL_REFERIDO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'veta_requerimiento_contacts_name',
            'label' => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'veta_requerimiento_leads_name',
            'label' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'campana',
            'studio' => 'visible',
            'label' => 'LBL_CAMPANA',
          ),
          1 => 
          array (
            'name' => 'fuente',
            'studio' => 'visible',
            'label' => 'LBL_FUENTE',
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
          0 => 
          array (
            'name' => 'fecha_viaje_txt',
            'label' => 'LBL_FECHA_VIAJE_TXT',
          ),
          1 => 
          array (
            'name' => 'fecha_viaje',
            'label' => 'LBL_FECHA_VIAJE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fecha_primer_presupuesto',
            'label' => 'LBL_FECHA_PRIMER_PRESUPUESTO',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'presupuesto',
            'label' => 'LBL_PRESUPUESTO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'visto_bueno_comercial',
            'label' => 'LBL_VISTO_BUENO_COMERCIAL',
          ),
          1 => 
          array (
            'name' => 'visto_bueno_visas',
            'label' => 'LBL_VISTO_BUENO_VISAS',
          ),
        ),
        9 => 
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
        10 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
