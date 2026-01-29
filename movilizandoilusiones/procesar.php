<?php
    require_once('clases/persona.php');
    if(isset($_POST['guardar'])) {
        $persona = new persona();
        $persona ->setNombres($_POST['nombres']);
        $persona ->setApellidos($_POST['apellidos']);
        $persona ->setCedula($_POST['cedula']);
        $persona ->setNacimiento($_POST['nacimiento']);
        $persona ->setNacionalidad($_POST['arrNacionalidad']);
        $persona ->setDireccion($_POST['direccion']);
        $persona ->setTelefonoP($_POST['telefonoP']);
        $persona ->setTelefonoS($_POST['telefonoS']);
        $persona ->setCargo($_POST['cargo']);
        $persona ->setLvlInst($_POST['lvlInst']);
        $persona ->setSede($_POST['sede']);
        if(isset($_POST['arrDisponible'])){
            for ($i = 0 ; $i < count($_POST['arrDisponible']); $i++ ) {
                $persona->addDisponible(new disponible($_POST['arrDisponible'][$i]));
            }
        }
        $persona->mostrarDatos();
        echo '<a href="index.php">Volver</a>';
    }