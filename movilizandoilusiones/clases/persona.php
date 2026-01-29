<?php
require_once('disponible.php');
class Persona {
    protected $nombres;
    protected $apellidos;
    protected $cedula;
    protected $nacimiento;
    protected $arrNacionalidad;
    protected $direccion;
    protected $telefonoP;
    protected $telefonoS;
    protected $cargo;
    protected $lvlInst;
    protected $sede;
    protected $arrDisponible = [];

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function setCedula($cedula){
        $this->cedula = $cedula;
    }

    public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
    }

    public function setNacionalidad($nacionalidad){
    $this->nacionalidad = $nacionalidad;
    }   

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setTelefonoP($telefonoP){
        $this->telefonoP = $telefonoP;
    }

    public function setTelefonoS($telefonoS){
        $this->telefonoS = $telefonoS;
    }    

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function setLvlInst($LvlInst){
        $this->lvlInst = $LvlInst;
    } 

        public function setSede($sede){
        $this->sede = $sede;
    }
    
    public function getNombres($nombres){
        $this->nombres = $nombres;
    }

    public function getApellidos($apellidos){
        return $this->apellidos;
    }

    public function getCedula($cedula){
        return $this->cedula;
    }

    public function getNacimiento($nacimiento){
        return $this->nacimiento;
    }

    public function getNacionalidad($nacionalidad){
        return $this->nacionalidad;
    }   

    public function getDireccion($direccion){
        return $this->direccion;
    }

    public function getTelefonoP($telefonoP){
        return $this->telefonoP;
    }

    public function getTelefonoS($telefonoS){
        return $this->telefonoS;
    }    

    public function getCargo($cargo){
        return $this->cargo;
    }

    public function getLvlInst($LvlInst){
        return $this->lvlInst;
    }

        public function getSede($sede){
        return $this->sede;
    }

    public function addDisponible(disponible $disponible) {
        $this->arrDisponible[] = $disponible;
    }

    public function mostrarDatos() {
    echo '<h3>Datos Ingresados</h3><br>';
    echo '<b>Nombres</b><br>';
    echo $this->nombres. '<br>';
    echo '<b>Apellidos</b><br>';
    echo $this->apellidos. '<br>';
    echo '<b>Cedula</b><br>';
    echo $this->cedula. '<br>';
    echo '<b>Nacimiento</b><br>';
    echo $this->nacimiento. '<br>';
    echo '<b>Nacionalidad</b><br>';
    echo $this->nacionalidad. '<br>';
    echo '<b>Direccion</b><br>';
    echo $this->direccion. '<br>';
    echo '<b>Telefono Personal</b><br>';
    echo $this->telefonoP. '<br>';
    echo '<b>Telefono Secundario</b><br>';
    echo $this->telefonoS. '<br>';
    echo '<b>Cargo</b><br>';
    echo $this->cargo. '<br>';
    echo '<b>Nivel Institucional</b><br>';
    echo $this->lvlInst. '<br>';
    echo '<b>Sede</b><br>';
    echo $this->sede. '<br><br>';
    echo '<b>Dias Laborales seleccionados</b><br>';
    echo "<ul>";
    if (!empty($this->arrDisponible)) {
        foreach ($this->arrDisponible as $disp) {
            echo "<li>" . $disp->getNombre() . "</li>";
        }
    } else {
        echo "<li>No hay días seleccionados</li>";
    }
    echo "</ul>";
    }

}