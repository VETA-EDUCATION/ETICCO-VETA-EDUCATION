<?php

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

    $ddls['paises'] = array();
    $ddls['departamentos'] = array();
    $ddls['ciudades'] = array();


    foreach( $app_list_strings['pais_list'] as $k => $v )
    {
        $item = new DDL();
        $item->id = $k;
        $item->title = $v;

        array_push($ddls['paises'], $item);
    }

    foreach( $app_list_strings['departamentos_list'] as $k => $v )
    {
        $item = new DDL();
        $item->id = $k;
        $item->title = $v;

        array_push($ddls['departamentos'], $item);
    }

    foreach( $app_list_strings['ciudades_list'] as $k => $v )
    {
        $item = new DDL();
        $item->id = $k;
        $item->title = $v;

        array_push($ddls['ciudades'], $item);
    }

    echo json_encode($ddls);
}
else
{
    show_error(1001,'sesion invalida' , 'No es posible cargar la listas de paises, departamentos y ciudaddes porque la sesion es invalida, por favor verificar credenciales');
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