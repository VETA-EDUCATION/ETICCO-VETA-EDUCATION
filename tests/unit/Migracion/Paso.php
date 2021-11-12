<?php

class Paso{

    protected function crearCampana(){

        $c       = new Campaign();
        $c->name = "prueba";
        $c->save();

        return $c;
    }
}
