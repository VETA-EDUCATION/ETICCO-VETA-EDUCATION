<?php
$viewdefs ['Contacts'] = 
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
          4 => 
          array (
            'customCode' => '<input type="submit" class="button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';',
                'name' => 'Manage Subscriptions',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
          ),
          'AOP_CREATE' => 
          array (
            'customCode' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'createPortalUser\';" value="{$MOD.LBL_CREATE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CREATE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'createPortalUser\';',
                'name' => 'buttonCreatePortalUser',
                'id' => 'createPortalUser_button',
              ),
              'template' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
          'AOP_DISABLE' => 
          array (
            'customCode' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'disablePortalUser\';" value="{$MOD.LBL_DISABLE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'disablePortalUser\';',
                'name' => 'buttonDisablePortalUser',
                'id' => 'disablePortalUser_button',
              ),
              'template' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
          'AOP_ENABLE' => 
          array (
            'customCode' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'enablePortalUser\';" value="{$MOD.LBL_ENABLE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'enablePortalUser\';',
                'name' => 'buttonENablePortalUser',
                'id' => 'enablePortalUser_button',
              ),
              'template' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
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
        'LBL_EDITVIEW_PANEL6' => 
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
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
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
            'name' => 'fecha_viaje_c',
            'label' => 'LBL_FECHA_VIAJE',
          ),
          1 => 
          array (
            'name' => 'fecha_de_viaje_c',
            'label' => 'LBL_FECHA_DE_VIAJE',
          ),
        ),
        7 => 
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
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'carrera_universitaria_c',
            'label' => 'LBL_CARRERA_UNIVERSITARIA',
          ),
          1 => 
          array (
            'name' => 'trabajo_actual_c',
            'label' => 'LBL_TRABAJO_ACTUAL',
          ),
        ),
        2 => 
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
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'edad_c',
            'label' => 'LBL_EDAD',
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
            'name' => 'edad_conyuge_c',
            'label' => 'LBL_EDAD_CONYUGE',
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
            'name' => 'anos_sin_estudiar_c',
            'label' => 'LBL_ANOS_SIN_ESTUDIAR',
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
    ),
  ),
);
;
?>
