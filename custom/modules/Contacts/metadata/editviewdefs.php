<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'last_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pasaporte_c',
            'label' => 'LBL_PASAPORTE',
          ),
          1 => 
          array (
            'name' => 'visa_c',
            'label' => 'LBL_VISA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'estado_civil_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_CIVIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pais_c',
            'studio' => 'visible',
            'label' => 'LBL_PAIS',
          ),
          1 => 
          array (
            'name' => 'departamento_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTAMENTO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_c',
            'studio' => 'visible',
            'label' => 'LBL_CIUDAD',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fecha_expiracion_visa_c',
            'label' => 'LBL_FECHA_EXPIRACION_VISA',
          ),
          1 => 
          array (
            'name' => 'genero_c',
            'studio' => 'visible',
            'label' => 'LBL_GENERO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'fecha_viaje_c',
            'label' => 'LBL_FECHA_VIAJE',
          ),
          1 => 
          array (
            'name' => 'fecha_de_viaje_c',
            'label' => 'LBL_FECHA_DE_VIAJE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'direccion_c',
            'label' => 'LBL_DIRECCION',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'pais_nacimiento_c',
            'studio' => 'visible',
            'label' => 'LBL_PAIS_NACIMIENTO',
          ),
          1 => 
          array (
            'name' => 'departamento_nacimiento_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTAMENTO_NACIMIENTO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_nacimiento_c',
            'studio' => 'visible',
            'label' => 'LBL_CIUDAD_NACIMIENTO',
          ),
          1 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nombre_conyuge_c',
            'label' => 'LBL_NOMBRE_CONYUGE',
          ),
          1 => 
          array (
            'name' => 'ocupacion_conyuge_c',
            'label' => 'LBL_OCUPACION_CONYUGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nacimiento_conyuge_c',
            'label' => 'LBL_NACIMIENTO_CONYUGE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'contacto_emergencia_c',
            'label' => 'LBL_CONTACTO_EMERGENCIA',
          ),
          1 => 
          array (
            'name' => 'relacion_contacto_emergencia_c',
            'label' => 'LBL_RELACION_CONTACTO_EMERGENCIA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'email_contacto_emergencia_c',
            'label' => 'LBL_EMAIL_CONTACTO_EMERGENCIA',
          ),
          1 => 
          array (
            'name' => 'celular_contacto_emergencia_c',
            'label' => 'LBL_CELULAR_CONTACTO_EMERGENCIA',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nivel_ingles_c',
            'studio' => 'visible',
            'label' => 'LBL_NIVEL_INGLES',
          ),
          1 => 
          array (
            'name' => 'carrera_universitaria_c',
            'label' => 'LBL_CARRERA_UNIVERSITARIA',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'institucion_australia_c',
            'label' => 'LBL_INSTITUCION_AUSTRALIA',
          ),
          1 => 
          array (
            'name' => 'celular_autralia_c',
            'label' => 'LBL_CELULAR_AUTRALIA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'identificacion_australia_c',
            'label' => 'LBL_IDENTIFICACION_AUSTRALIA',
          ),
          1 => 
          array (
            'name' => 'cuenta_bancaria_australia_c',
            'label' => 'LBL_CUENTA_BANCARIA_AUSTRALIA',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
            'comment' => 'How did the contact come about',
            'label' => 'LBL_LEAD_SOURCE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'trabajo_actual_c',
            'label' => 'LBL_TRABAJO_ACTUAL',
          ),
          1 => 'campaign_name',
        ),
      ),
    ),
  ),
);
;
?>
