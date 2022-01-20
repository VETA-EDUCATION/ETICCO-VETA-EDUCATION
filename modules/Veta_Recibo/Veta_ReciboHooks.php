<?php

class Veta_ReciboHooks
{
    function procesar( $focus, $event, $args )
    {
        $this->asignar_info_lead( $focus );
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_lead( $focus )
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $departamentos = $app_list_strings[ 'departamentos_list' ];
        $ciudades      = $app_list_strings[ 'ciudades_list' ];

        $query = "SELECT leads.id AS ID,
                    CONCAT(leads.first_name, ' ' , leads.last_name) AS NOMBRE,
                    leads.phone_home AS TELCASA,
                    leads.phone_mobile AS CELULAR,
                    leads.lead_source AS FUENTE,
                    leads_cstm.pais_c AS PAIS,
                    leads_cstm.departamento_c AS DEPARTAMENTO,
                    leads_cstm.ciudad_c AS CIUDAD,     
                    leads_cstm.fecha_expiracion_visa_c AS FECHAEXPIRACIONVISA,
                    leads.date_modified AS FECHAMODIFICACION,
                    leads_cstm.visa_c AS VISA,
                    leads_cstm.ciudad_tmp_c AS CIUDADTMP
                    FROM veta_recibo
                    INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id AND veta_requerimiento_veta_recibo_c.deleted = 0 
                    INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0
                    INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0
                    INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida AND leads.deleted = 0
                    INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                    WHERE veta_recibo.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del prospecto asociado a la carta de oferta " . $focus->id );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null ) {

            /*if ( ! empty( $row[ 'FECHAEXPIRACIONVISA' ] ) )
            {
                $aux                               = date_create( $row[ 'FECHAEXPIRACIONVISA' ] );
                $focus->soel_fecha_expiracion_visa = date_format( $aux, $dateformat );
            }*/

            $focus->soel_ciudad_tmp = $row['CIUDADTMP'];
        }

        return $focus;
    }

}