<?php
$module_name = 'Veta_Presupuesto';
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
          0 => 
          array (
            'name' => 'veta_presupuesto_leads_name',
            'label' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'veta_presupuesto_contacts_name',
            'label' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pais',
            'studio' => 'visible',
            'label' => 'LBL_PAIS',
          ),
          1 => 
          array (
            'name' => 'departamento',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTAMENTO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ciudad',
            'studio' => 'visible',
            'label' => 'LBL_CIUDAD',
          ),
          1 => 
          array (
            'name' => 'primer_pago',
            'label' => 'LBL_PRIMER_PAGO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'subtotal',
            'label' => 'LBL_SUBTOTAL',
          ),
          1 => 
          array (
            'name' => 'gran_total',
            'label' => 'LBL_GRAN_TOTAL',
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'aud_usd',
            'label' => 'LBL_AUD_USD',
          ),
          1 => 
          array (
            'name' => 'usd_cop',
            'label' => 'LBL_USD_COP',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'pesos',
            'label' => 'LBL_PESOS',
          ),
          1 => 
          array (
            'name' => 'usd',
            'label' => 'LBL_USD',
          ),
        ),
      ),
    ),
  ),
);
;
?>
