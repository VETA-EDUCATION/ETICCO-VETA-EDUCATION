<?php


class HeredarInfoLead
{
    public function heredar_info( Lead $prospecto ) {

        $this->set_contacts($prospecto);
        $this->set_oportunidades($prospecto);
        $this->set_aplicaciones($prospecto);
        $this->set_loos($prospecto);
        $this->set_loo_correcciones($prospecto);
        $this->set_liquidaciones($prospecto);
        $this->set_pagos($prospecto);
        $this->set_casos($prospecto);
        $this->servicios_cliente($prospecto);
        $this->set_coes($prospecto);
        $this->set_coes_correccion($prospecto);
        $this->set_visas($prospecto);
    }

    private function set_contacts( Lead $prospecto ) {

       /* $sql = "UPDATE contacts_cstm SET fecha_expiracion_visa_c = 'LOO' WHERE id = '$oportunidad->id'";
        $db = DBManagerFactory::getInstance();
        $res = $db->query($sql);  */

    }


}