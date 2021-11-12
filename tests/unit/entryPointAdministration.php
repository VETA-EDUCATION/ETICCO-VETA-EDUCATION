<?php

require_once( 'tests/unit/Utils.php' );
require_once ('tests/unit/Migracion/Migracion.php');

if($_REQUEST['escenario'] == 'inicial'){

    echo "Creando escenario, un momento por favor <br>";
    Utils::escenarioInicial();
    echo "Escenario completado";
}

if($_REQUEST['escenario'] == 'visas'){

    echo "Creando escenario, un momento por favor <br>";
    Utils::escenarioVisas();
    echo "Escenario completado";
}

if($_REQUEST['escenario'] == 'ctascobro'){

    echo "Creando escenario, un momento por favor <br>";
    Utils::escenarioCtasCobro();
    echo "Escenario completado";
}

if($_REQUEST['escenario'] == 'loos'){

    echo "Creando escenario, un momento por favor <br>";
    Utils::escenarioLoo();
    echo "Escenario completado";
}

if($_REQUEST['escenario'] == 'liquidaciones'){

    echo "Creando escenario, un momento por favor <br>";
    Utils::escenarioLiquidacion();
    echo "Escenario completado";
}

if($_REQUEST['escenario'] == 'coes'){

    echo "Creando escenario, un momento por favor <br>";
    Utils::escenarioCOE();
    echo "Escenario completado";
}

if($_REQUEST['escenario'] == 'asignacion'){

    echo "Creando escenario, un momento por favor <br>";
    Utils::escenarioAsignacion();
    echo "Escenario completado";
}

if($_REQUEST['escenario'] == 'migracion'){

    echo "Creando escenario, un momento por favor <br>";

    $migracion = new Migracion();
    $migracion->escenario_inicial();

    echo "<br>Escenario completado";
}

if($_REQUEST['escenario'] == 'migracion1'){

    echo "Creando escenario, un momento por favor <br>";

    $migracion = new Migracion();
    $migracion->paso_1();

    echo "<br>Escenario completado";
}

if($_REQUEST['escenario'] == 'migracion2'){

    echo "Creando escenario, un momento por favor <br>";

    $migracion = new Migracion();
    $migracion->paso_2();

    echo "<br>Escenario completado";
}

if($_REQUEST['escenario'] == 'migracion3'){

    echo "Creando escenario, un momento por favor <br>";

    $migracion = new Migracion();
    $migracion->paso_3();

    echo "<br>Escenario completado";
}
