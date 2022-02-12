<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

require_once ('modules/Veta_College/Veta_College.php');

class Veta_Curso extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_Curso';
    public $object_name = 'Veta_Curso';
    public $table_name = 'veta_curso';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $veta_college_id_c;
    public $college;
    public $pps;
    public $currency_id;
    public $inscripcion;
    public $costo_materiales;
    public $costo_extra;
    public $deposito;
    public $examen_medico;
    public $seguro;
    public $visa;
    public $intake;
    public $duracion;

    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    /**
     * Este metodo salva un curso
     * @param false $notify
     * @return mixed
     */
    public function save($notify=false){

        global $app_list_strings;
        $ciudades = $app_list_strings['ciudades_list'];
        
        $college = new Veta_College();
        $college->retrieve( $this->veta_college_id_c);
        //$this->campus = $ciudades[$college->ciudad];
        $this->campus = $college->ciudad;
        
        return parent::save($notify);
    }

    public function procesar_cursos(){

        set_time_limit(0);
        $cursos = file_get_contents("cursos.txt");

        if( $cursos != FALSE) {
            $cursos = json_decode($cursos);

            //for( $fila = 1 ; $fila < count($cursos) ; $fila ++ ){
            foreach( $cursos as $fila) {

                if(strtolower($fila[0]) != "id") {

                    $curso = new Veta_Curso();
                    $curso->retrieve($fila[0]);

                    if( !isset($curso->id )){

                        $curso->new_with_id = true;
                        $curso->id = $fila[0];
                    }

                    $curso->veta_college_id_c = $fila[1];
                    $curso->name = $fila[2];
                    $curso->pps = $fila[3];
                    $curso->inscripcion = $fila[4];
                    $curso->costo_materiales = $fila[5];
                    $curso->costo_extra = $fila[6];
                    $curso->deposito = $fila[7];
                    $curso->duracion = $fila[8];
                    $curso->campus = $fila[9];
                    $curso->intensidad = $fila[10];
                    $curso->jornada = $fila[11];
                    $curso->tipo_curso = $fila[12];
                    $curso->tps = $fila[13];
                    $curso->vacaciones  = $fila[14];
                    $curso->fecha_expiracion = substr($fila[15],0, 10);
                    $curso->save(false);
                }
            }

            unlink("cursos.txt");

        }
    }
}