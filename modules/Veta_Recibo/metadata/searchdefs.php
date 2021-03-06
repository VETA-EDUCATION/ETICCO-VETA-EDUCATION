<?php
$module_name = 'Veta_Recibo';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'veta_recibo_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_RECIBO_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_leads_name',
      ),
      'veta_recibo_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_RECIBO_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_contacts_name',
      ),
      'veta_recibo_veta_presupuesto_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
        'id' => 'VETA_RECIBO_VETA_PRESUPUESTOVETA_PRESUPUESTO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_veta_presupuesto_name',
      ),
      'veta_recibo_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'id' => 'VETA_RECIBO_OPPORTUNITIESOPPORTUNITIES_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_opportunities_name',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'tipo_visa' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_TIPO_VISA',
        'id' => 'VETA_TIPOSVISA_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'tipo_visa',
      ),
      'veta_recibo_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_RECIBO_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_leads_name',
      ),
      'veta_recibo_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_RECIBO_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_contacts_name',
      ),
      'veta_recibo_veta_presupuesto_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
        'id' => 'VETA_RECIBO_VETA_PRESUPUESTOVETA_PRESUPUESTO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_veta_presupuesto_name',
      ),
      'veta_recibo_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_RECIBO_OPPORTUNITIESOPPORTUNITIES_IDB',
        'name' => 'veta_recibo_opportunities_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
     //region soel_ciudad_tmp
        'soel_ciudad_tmp'                     =>
            array(
                'type'     => 'varchar',
                'default'  => true,
                'label'    => 'LBL_SOEL_CIUDAD_TMP',
                'width'    => '10%',
                'name'     => 'soel_ciudad_tmp',
                'sortable' => false,
            ),
        //endregion

     //region soel_localizacion
        'soel_localizacion'                     =>
            array(
                'type'     => 'multienum',
                'default'  => true,
                'label'    => 'LBL_SOEL_LOCALIZACION',
                'width'    => '10%',
                'name'     => 'soel_localizacion',
                'sortable' => false,
            ),
        //endregion
		'veta_abono_fechainsert' => 
			  array (
				'type' => 'datetime',
				'label' => 'LBL_ABONO_FECHAINSERT',
				'width' => '10%',
				'default' => true,
				'name' => 'veta_abono_fechainsert',
			  ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
