<?php
$viewdefs ['Notes'] = 
array (
  'DetailView' => 
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_NOTE_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_note_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'estudiante_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTUDIANTE',
          ),
          1 => 
          array (
            'name' => 'parent_name',
            'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'filename',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTE_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'veta_pagocolegios_activities_notes_name',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'veta_aplicacion_activities_notes_name',
          ),
          1 => 
          array (
            'name' => 'veta_loo_activities_notes_name',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'veta_coe_activities_notes_name',
          ),
          1 => 
          array (
            'name' => 'veta_visas_activities_notes_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'veta_liquidacion_activities_notes_name',
          ),
          1 => 
          array (
            'name' => 'veta_liquidacion_activities_notes_name',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'veta_visa_activities_notes_name',
          ),
          1 => 
          array (
            'name' => 'veta_visa_activities_notes_name',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'veta_visa_activities_notes_name',
          ),
          1 => 
          array (
            'name' => 'veta_visa_activities_notes_name',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'veta_visa_activities_notes_name',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
      ),
    ),
  ),
);
;
?>
