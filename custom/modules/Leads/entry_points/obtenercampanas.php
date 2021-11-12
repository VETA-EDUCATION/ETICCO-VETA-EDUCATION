<?php

include_once('modules/Leads/Lead.php');


$sid = $_REQUEST['sid']; // Id de sesion

class DDL
{
    var $id=null;
    var $title=null;

}

// Verificamos que exista la sesion
if(file_exists(ini_get("session.save_path") . "/sess_$sid"))
{
    $ddls = array();
    global $app_list_strings;

    $ddls['campanas'] = array();

    $l = new Lead();

    $q = "select id, name from campaigns where status = 'Active' and deleted = 0 order by name ";

    $res = $l->db->query( $q , true , "Error obteniendo las campañas : " );

    while($row = $l->db->fetchByAssoc($res)) {

        $item = new DDL();
        $item->id = $row['id'];
        $item->title = $row['name'];

        array_push($ddls['campanas'], $item);
    }

    echo json_encode($ddls);
}
else
{
    show_error(1001,'sesion invalida' , 'No es posible cargar la lista campañas porque la sesion es invalida, por favor verificar credenciales');
}


function show_error($number, $name, $description)
{
    $arr = array(
        'name' => $name,
        'number' => $number,
        'description' => $description
    );

    $json = json_encode($arr);

    header('Content-Type: application/json');
    header('Content-Length: '. strlen($json));

    echo $json;
}

?>