<?php
$module_name                   = 'Veta_ServicioCliente';
$listViewDefs [ $module_name ] =
    array(
        //region NAME
        'NAME'                                    =>
            array(
                'width'   => '32%',
                'label'   => 'LBL_NAME',
                'default' => true,
                'link'    => true,
            ),
        //endregion

        //region ESTADO
        'ESTADO'                                  =>
            array(
                'type'    => 'enum',
                'default' => true,
                'studio'  => 'visible',
                'label'   => 'LBL_ESTADO',
                'width'   => '10%',
            ),
        //endregion

        //region PROSPECTO
        'PROSPECTO'                               =>
            array(
                'type'    => 'relate',
                'studio'  => 'visible',
                'label'   => 'LBL_PROSPECTO',
                'id'      => 'LEAD_ID_C',
                'link'    => true,
                'width'   => '10%',
                'default' => true,
            ),
        //endregion

        //region ESTUDIANTE
        'ESTUDIANTE'                              =>
            array(
                'type'    => 'relate',
                'studio'  => 'visible',
                'label'   => 'LBL_ESTUDIANTE',
                'id'      => 'CONTACT_ID_C',
                'link'    => true,
                'width'   => '10%',
                'default' => true,
            ),
        //endregion

        //region VETA_VISA_VETA_SERVICIOCLIENTE_NAME
        'VETA_VISA_VETA_SERVICIOCLIENTE_NAME'     =>
            array(
                'type'    => 'relate',
                'link'    => true,
                'label'   => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_VISA_TITLE',
                'id'      => 'VETA_VISA_VETA_SERVICIOCLIENTEVETA_VISA_IDA',
                'width'   => '10%',
                'default' => true,
            ),
        //endregion

        //region VETA_SERVICIOCLIENTE_OPPORTUNITIES_NAME
        'VETA_SERVICIOCLIENTE_OPPORTUNITIES_NAME' =>
            array(
                'type'    => 'relate',
                'link'    => true,
                'label'   => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
                'id'      => 'VETA_SERVICIOCLIENTE_OPPORTUNITIESOPPORTUNITIES_IDA',
                'width'   => '10%',
                'default' => true,
            ),
        //endregion

        //region ASSIGNED_USER_NAME
        'ASSIGNED_USER_NAME'                      =>
            array(
                'width'   => '9%',
                'label'   => 'LBL_ASSIGNED_TO_NAME',
                'module'  => 'Employees',
                'id'      => 'ASSIGNED_USER_ID',
                'default' => true,
            ),
        //endregion

        //region DESCRIPTION
        'DESCRIPTION'                             =>
            array(
                'type'     => 'text',
                'label'    => 'LBL_DESCRIPTION',
                'sortable' => false,
                'width'    => '10%',
                'default'  => true,
            ),
        //endregion

        //region DATE_ENTERED
        'DATE_ENTERED'                            =>
            array(
                'type'    => 'datetime',
                'label'   => 'LBL_DATE_ENTERED',
                'width'   => '10%',
                'default' => true,
            ),
        //endregion

        //region CREATED_BY_NAME
        'CREATED_BY_NAME'                         =>
            array(
                'type'    => 'relate',
                'link'    => true,
                'label'   => 'LBL_CREATED',
                'id'      => 'CREATED_BY',
                'width'   => '10%',
                'default' => false,
            ),
        //endregion

        //region MODIFIED_BY_NAME
        'MODIFIED_BY_NAME'                        =>
            array(
                'type'    => 'relate',
                'link'    => true,
                'label'   => 'LBL_MODIFIED_NAME',
                'id'      => 'MODIFIED_USER_ID',
                'width'   => '10%',
                'default' => false,
            ),
        //endregion

        //region DATE_MODIFIED
        'DATE_MODIFIED'                           =>
            array(
                'type'    => 'datetime',
                'label'   => 'LBL_DATE_MODIFIED',
                'width'   => '10%',
                'default' => false,
            ),
        //endregion

        //region SOEL_FECHA_EXPIRACION_VISA
        'SOEL_FECHA_EXPIRACION_VISA'              =>
            array(
                'type'    => 'date',
                'label'   => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
                'width'   => '10%',
                'default' => true,
                'sortable' => false,
            ),
        //endregion

        //region SOEL_FECHA_VIAJE
        'SOEL_FECHA_VIAJE'                        =>
            array(
                'type'    => 'datetime',
                'label'   => 'LBL_SOEL_FECHA_VIAJE',
                'width'   => '10%',
                'default' => true,
            ),
        //endregion

        //region SOEL_REFERIDO
        'SOEL_REFERIDO'                           =>
            array(
                'type'    => 'varchar',
                'label'   => 'LBL_SOEL_REFERIDO',
                'width'   => '10%',
                'default' => true,
            ),
        //endregion

        //region FECHA_ULTIMO_CONTACTO
        'FECHA_ULTIMO_CONTACTO'                   =>
            array(
                'type'    => 'datetimecombo',
                'label'   => 'LBL_FECHA_ULTIMO_CONTACTO',
                'width'   => '10%',
                'default' => false,
            ),
        //endregion

        //region FECHA_PROXIMO_CONTACTO
        'FECHA_PROXIMO_CONTACTO'                  =>
            array(
                'type'    => 'datetimecombo',
                'label'   => 'LBL_FECHA_PROXIMO_CONTACTO',
                'width'   => '10%',
                'default' => false,
            ),
        //endregion

    );
?>
