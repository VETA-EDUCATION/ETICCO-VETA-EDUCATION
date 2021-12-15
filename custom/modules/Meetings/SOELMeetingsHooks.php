<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SOELMeetingsHooks
{

    function __construct()
    {

    }

    function establecer_estudiante(&$bean, $event, $arguments)
    {
        $bean->contact_id_c = $this->establecer_estudiante_desde_estudiante($bean);

        if(!isset( $bean->contact_id_c  ) )
            $bean->contact_id_c = $this->establecer_estudiante_desde_parent($bean);
    }

    private function establecer_estudiante_desde_estudiante($bean)
    {
        $cid = null;
        $es = $bean->get_linked_beans('calls_contacts','Contacts');

        foreach( $es as $e )
        {
            $cid = $e->id;
        }
    }

    private function establecer_estudiante_desde_parent($bean)
    {
        $cid = null;

        if(isset($bean->parent_type))
        {
            if($bean->parent_type == "Opportunities")
            {
                $o = new Opportunity();
                $o->retrieve($bean->parent_id);

                $es = $o->get_linked_beans('contacts_opportunities_1','Contacts');

                foreach( $es as $e )
                {
                   $cid = $e->id;
                }
            }
            else
            {
                $b = BeanFactory::getBean($bean->parent_type, $bean->parent_id );
                $cid = $this->establecer_estudiante_desde_parent($b);
            }
        }
        else
        {
            switch (get_class($bean))
            {
                case "Opportunity":
                    $cid = $this->obtener_estudiante_desde_oportunidad($bean);
                    break;
                case "Veta_Aplicacion":
                    $cid = $this->obtener_estudiante_desde_app($bean);
                    break;
                case "Veta_Loo":
                    $cid = $this->obtener_estudiante_desde_loo($bean);
                    break;
                case "Veta_COE":
                    $cid = $this->obtener_estudiante_desde_coe($bean);
                    break;
                case "Veta_LooCorreccion":
                    $cid = $this->obtener_estudiante_desde_loo_correccion($bean);
                    break;
                case "Veta_CorreccionCOE":
                    $cid = $this->obtener_estudiante_desde_coe_correccion($bean);
                    break;
                case "Veta_Visa":
                    $cid = $this->obtener_estudiante_desde_visa($bean);
                    break;
                case "Veta_Liquidacion":
                    $cid = $this->obtener_estudiante_desde_liquidacion($bean);
                    break;
                case "Veta_Pagos":
                    $cid = $this->obtener_estudiante_desde_pagos($bean);
                    break;
                case "Veta_PagoColegios":
                    $cid = $this->obtener_estudiante_desde_pagos_colegios($bean);
                    break;
                case "Veta_NotificacionPagoColegio":
                    $cid = $this->obtener_estudiante_desde_notificacion_pagos_colegios($bean);
                    break;
                case "aCase":
                    $cid = $bean->contact_id_c;
                    break;
            }
        }

        return $cid;

    }

    private function obtener_estudiante_desde_oportunidad($o)
    {
        $cid = null;
        $es = $o->get_linked_beans('contacts_opportunities_1','Contacts');

        foreach( $es as $e )
        {
            $cid = $e->id;
        }

        return $cid;
    }

    private function obtener_estudiante_desde_app($app)
    {
        $cid = null;

        $ops = $app->get_linked_beans('veta_aplicacion_opportunities','Opportunities');

        foreach( $ops as $o )
        {
            $cid = $this->obtener_estudiante_desde_oportunidad($o);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_loo($loo)
    {
        $cid = null;

        $apps = $loo->get_linked_beans('veta_loo_veta_aplicacion','Veta_Aplicacion');

        foreach( $apps as $app )
        {
            $cid = $this->obtener_estudiante_desde_app($app);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_coe($coe)
    {
        $cid = null;

        $apps = $coe->get_linked_beans('veta_coe_veta_aplicacion','Veta_Aplicacion');

        foreach( $apps as $app )
        {
            $cid = $this->obtener_estudiante_desde_app($app);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_loo_correccion($correccion)
    {
        $cid = null;

        $loos = $correccion->get_linked_beans('veta_loocorreccion_veta_loo','Veta_Loo');

        foreach( $loos as $loo )
        {
            $cid = $this->obtener_estudiante_desde_loo($loo);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_coe_correccion($correccion)
    {
        $cid = null;

        $coes = $correccion->get_linked_beans('veta_correccioncoe_veta_coe','Veta_COE');

        foreach( $coes as $coe )
        {
            $cid = $this->obtener_estudiante_desde_coe($coe);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_visa($visa)
    {
        $cid = null;

        $coes = $visa->get_linked_beans('veta_visa_veta_coe','Veta_COE');

        foreach( $coes as $coe )
        {
            $cid = $this->obtener_estudiante_desde_coe($coe);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_liquidacion($l)
    {
        $cid = null;

        $ops = $l->get_linked_beans('veta_liquidacion_opportunities','Opportunities');

        foreach( $ops as $o )
        {
            $cid = $this->obtener_estudiante_desde_oportunidad($o);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_pagos($pago)
    {
        $cid = null;

        $ls = $pago->get_linked_beans('veta_pagos_veta_liquidacion','Veta_Liquidacion');

        foreach( $ls as $l )
        {
            $cid = $this->obtener_estudiante_desde_liquidacion($l);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_pagos_colegios($pago)
    {
        $cid = null;

        $ops = $pago->get_linked_beans('veta_pagocolegios_opportunities','Opportunities');

        foreach( $ops as $o )
        {
            $cid = $this->obtener_estudiante_desde_oportunidad($o);
        }

        return $cid;
    }

    private function obtener_estudiante_desde_notificacion_pagos_colegios($notificacion)
    {
        $cid = null;

        $pagos = $notificacion->get_linked_beans('veta_notificacionpagocolegio_veta_pagocolegios','Veta_PagoColegios');

        foreach( $pagos as $p )
        {
            $cid = $this->obtener_estudiante_desde_pagos_colegios($p);
        }

        return $cid;
    }

    function actualizar_oportunidad(&$bean, $event, $arguments)
    {
        $o = $this->obtener_oportunidad($bean);

        if(isset($o))
        {
            $fuc = $this->obtener_fecha_ultimo_contacto($o);
            $fpc = $this->obtener_fecha_proximo_contacto($o);

            if(isset($fuc))
                $fuc = "'$fuc'";
            else
                $fuc = "NULL";

            if(isset($fpc))
                $fpc = "'$fpc'";
            else
                $fpc = "NULL";


            $q = "UPDATE opportunities_cstm SET fecha_ultimo_contacto_c = $fuc, fecha_c = $fpc WHERE id_c = '" . $o->id . "'";
            $res = $o->db->query( $q , true , "Error actualizando oportunidad : " );
        }
    }

    private function obtener_fecha_ultimo_contacto($o)
    {
        $fecha = null;
        $acts = $this->obtener_actividades($o, 'Held');

        for( $i=1 ; $i < count($acts) ; $i++ )
        {
            for( $j=0 ; $j < count( $acts ) - $i ; $j++ )
            {
                if($acts[$j]->date_end < $acts[$j+1]->date_end)
                {
                        $obj= $acts[ $j+1 ];
                        $acts[ $j+1 ]= $acts[$j];
                        $acts[$j]=$obj;
                }
            }
        }

        if(count($acts)>0)
            $fecha = substr($acts[0]->date_end,0,10);

        return $fecha;

    }

    private function obtener_fecha_proximo_contacto($o)
    {
        $fecha = null;
        $acts = $this->obtener_actividades($o, 'Planned');

        for( $i=1 ; $i < count($acts) ; $i++ )
        {
            for( $j=0 ; $j < count( $acts ) - $i ; $j++ )
            {
                if($acts[$j]->date_end < $acts[$j+1]->date_end)
                {
                    $obj= $acts[ $j+1 ];
                    $acts[ $j+1 ]= $acts[$j];
                    $acts[$j]=$obj;
                }
            }
        }

        if(count($acts)>0)
            $fecha = substr($acts[0]->date_end,0,10);

        return $fecha;

    }

    private function obtener_actividades($o, $estado)
    {
        $acts = array();
        $q = "SELECT id, parent_id, parent_type, 'Meetings' as modulo FROM meetings WHERE status = '" . $estado . "' AND deleted = 0 AND assigned_user_id = '" . $o->user_id_c . "' UNION ALL 
              SELECT id, parent_id, parent_type, 'Calls' as modulo FROM calls WHERE status = '" . $estado . "' AND  deleted = 0 AND assigned_user_id ='" . $o->user_id_c . "'";
        $res = $o->db->query( $q , true , "Error obteniendo la primera cita : " );

        while($row = $o->db->fetchByAssoc($res))
        {
            $b = BeanFactory::getBean($row['parent_type'], $row['parent_id'] );

            switch (get_class($b))
            {
                case "Opportunity":
                    $a = BeanFactory::getBean($row['modulo'], $row['id'] );
                    array_push($acts,$a);
                    break;
                case "Veta_Aplicacion":
                    $op = $this->obtener_oportunidad_desde_app($b);

                    if($op->id == $o->id)
                    {
                        $a = BeanFactory::getBean($row['modulo'], $row['id'] );
                        array_push($acts,$a);
                    }

                    break;
                case "Veta_Loo":
                    $op = $this->obtener_oportunidad_desde_loo($b);

                    if($op->id == $o->id)
                    {
                        $a = BeanFactory::getBean($row['modulo'], $row['id'] );
                        array_push($acts,$a);
                    }

                    break;
                case "Veta_COE":
                    $op = $this->obtener_oportunidad_desde_coe($b);

                    if($op->id == $o->id)
                    {
                        $a = BeanFactory::getBean($row['modulo'], $row['id'] );
                        array_push($acts,$a);
                    }

                    break;
                case "Veta_Visa":
                    $op = $this->obtener_oportunidad_desde_visa($b);

                    if($op->id == $o->id)
                    {
                        $a = BeanFactory::getBean($row['modulo'], $row['id'] );
                        array_push($acts,$a);
                    }

                    break;
                case "Veta_Liquidacion":
                    $op = $this->obtener_oportunidad_desde_liquidacion($b);

                    if($op->id == $o->id)
                    {
                        $a = BeanFactory::getBean($row['modulo'], $row['id'] );
                        array_push($acts,$a);
                    }

                    break;

                case "Veta_PagoColegios":
                    $op = $this->obtener_oportunidad_desde_pagos_colegios($b);

                    if($op->id == $o->id)
                    {
                        $a = BeanFactory::getBean($row['modulo'], $row['id'] );
                        array_push($acts,$a);
                    }

                    break;

                case "aCase":
                    $op = $this->obtener_oportunidad_desde_caso($b);

                    if($op->id == $o->id)
                    {
                        $a = BeanFactory::getBean($row['modulo'], $row['id'] );
                        array_push($acts,$a);
                    }

                    break;
            }

        }

        return $acts;
    }

    private function obtener_oportunidad($bean)
    {
        $o = null;
        $b = BeanFactory::getBean($bean->parent_type, $bean->parent_id );

        switch (get_class($b))
        {
            case "Opportunity":
                $o = $b;
                break;
            case "Veta_Aplicacion":
                $o = $this->obtener_oportunidad_desde_app($b);
                break;
            case "Veta_Loo":
                $o = $this->obtener_oportunidad_desde_loo($b);
                break;
            case "Veta_COE":
                $o = $this->obtener_oportunidad_desde_coe($b);
                break;
            case "Veta_Visa":
                $o = $this->obtener_oportunidad_desde_visa($b);
                break;
            case "Veta_Liquidacion":
                $o = $this->obtener_oportunidad_desde_liquidacion($b);
                break;
            case "Veta_PagoColegios":
                $o = $this->obtener_oportunidad_desde_pagos_colegios($b);
                break;
            case "aCase":
                $o = $this->obtener_oportunidad_desde_caso($b);
                break;
        }

        return $o;
    }

    private function obtener_oportunidad_desde_app($app)
    {
        $o = null;

        $ops = $app->get_linked_beans('veta_aplicacion_opportunities','Opportunities');

        foreach( $ops as $op )
        {
            $o = $op;
        }

        return $op;
    }

    private function obtener_oportunidad_desde_loo($loo)
    {
        $o = null;

        $apps = $loo->get_linked_beans('veta_loo_veta_aplicacion','Veta_Aplicacion');

        foreach( $apps as $app )
        {
            $o = $this->obtener_oportunidad_desde_app($app);
        }

        return $o;
    }

    private function obtener_oportunidad_desde_coe($coe)
    {
        $o = null;

        $apps = $coe->get_linked_beans('veta_coe_veta_aplicacion','Veta_Aplicacion');

        foreach( $apps as $app )
        {
            $o = $this->obtener_oportunidad_desde_app($app);
        }

        return $o;
    }

    private function obtener_oportunidad_desde_visa($visa)
    {
        $o = null;

        $coes = $visa->get_linked_beans('veta_visa_veta_coe','Veta_COE');

        foreach( $coes as $coe )
        {
            $o = $this->obtener_oportunidad_desde_coe($coe);
        }

        return $o;
    }

    private function obtener_oportunidad_desde_liquidacion($l)
    {
        $o = null;

        $ops = $l->get_linked_beans('veta_liquidacion_opportunities','Opportunities');

        foreach( $ops as $op )
        {
            $o = $op;
        }

        return $o;
    }

    private function obtener_oportunidad_desde_pagos_colegios($pago)
    {
        $o = null;

        $ops = $pago->get_linked_beans('veta_pagocolegios_opportunities','Opportunities');

        foreach( $ops as $op )
        {
            $o = $op;
        }

        return $o;
    }

    private function obtener_oportunidad_desde_caso($caso)
    {
        $o = $this->obtener_op_desde_app($caso);

        if(!isset($o))
            $o = $this->obtener_op_desde_loo($caso);

        if(!isset($o))
            $o = $this->obtener_op_desde_coe($caso);

        if(!isset($o))
            $o = $this->obtener_op_desde_visa($caso);

        if(!isset($o))
            $o = $this->obtener_op_desde_liquidacion($caso);

        return $o;
    }

    private function obtener_op_desde_app($caso)
    {
        $o = null;

        $apps = $caso->get_linked_beans('veta_aplicacion_cases','Veta_Aplicacion');

        foreach( $apps as $app )
        {
            $ops = $app->get_linked_beans('veta_aplicacion_opportunities','Opportunities');

            foreach($ops as $op)
            {
                $o = $op;
            }
        }

        return $o;
    }

    private function obtener_op_desde_loo($caso)
    {
        $o = null;

        $loos = $caso->get_linked_beans('veta_loo_cases','Veta_Loo');

        foreach( $loos as $loo )
        {
            $o = $this->obtener_oportunidad_desde_loo($loo);
        }

        return $o;
    }

    private function obtener_op_desde_coe($caso)
    {
        $o = null;

        $coes = $caso->get_linked_beans('veta_coe_cases','Veta_COE');

        foreach( $coes as $coe )
        {
            $o = $this->obtener_oportunidad_desde_coe($coe);
        }

        return $o;
    }

    private function obtener_op_desde_visa($caso)
    {
        $o = null;

        $visas = $caso->get_linked_beans('veta_visa_cases','Veta_Visa');

        foreach( $visas as $visa )
        {
            $o = $this->obtener_oportunidad_desde_visa($visa);
        }

        return $o;
    }

    private function obtener_op_desde_liquidacion($caso)
    {
        $o = null;

        $lqs = $caso->get_linked_beans('veta_liquidacion_cases','Veta_Liquidacion');

        foreach( $lqs as $lq )
        {
            $o = $this->obtener_oportunidad_desde_liquidacion($lq);
        }

        return $o;
    }

}