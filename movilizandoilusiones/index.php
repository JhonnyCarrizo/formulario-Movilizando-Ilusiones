<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Registro</title>
</head>
<body>
    <!-- Formulario -->
    <div id="formulario" >
        <form method="post" action="procesar.php" onsubmit="return enviar()" >
            <!-- Nombres -->
            <div id="boxNombres" >
                <label class="defaultLabel" > Nombres </label><br>
                <input type="text" id="nombres" name="nombres" placeholder="Nombres">
            </div>
            <!-- Apellidos -->
            <div id="boxApellidos" >
                <label class="defaultLabel" for="apellidos" > Apellidos </label><br>
                <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" ><br>
            </div>
            <!-- Cedula de identidad -->
            <div id="boxCedula" >
                <label class="defaultLabel" > Cedula </label><br>
                <input type="text" id="cedula" name="cedula" placeholder="Cedula" ><br>
            </div>
            <!-- Fecha de Nacimiento -->
            <div id="boxFecha" >
                <input id="nacimiento" name="nacimiento" type="date" min="1900-01-01" ><br>
            </div>
            <!-- Nacionalidad -->
            <div id="boxNacionalidad" >
            <label id="nacionalidad" >Nacionalidad</label><br>
            <label> V <input type="radio" id="V" name="arrNacionalidad" value="Venezolano"> </label><br>
            <label> E <input type="radio" id="E" name="arrNacionalidad" value="Extranjero"> </label>
            </div>
            <!-- Direccion -->
            <div id="boxDireccion" >
                <label class="defaultLabel" > Direccion </label><br>
                <input type="text" id="direccion" name="direccion" placeholder="Direccion" ><br>
            </div>
            <!-- Telefono Personal -->
            <div id="boxTelefonoP" >
                <label class="defaultLabel" > Telefono Personal </label><br>
                <input type="tel" id="telefonoP" name="telefonoP" placeholder="Telefono P." ><br>
            </div>
            <!-- Telefono Secundario -->
            <div id="boxTelefonoS" >
                <label class="defaultLabel" > Telefono Secundario </label><br>
                <input type="tel" id="telefonoS" name="telefonoS" placeholder="Telefono S." ><br>
            </div>
            <!-- Cargo -->
            <div id="boxCargo" >
                <label class="defaultLabel" > Cargo </label><br>
                <select name="cargo" id="cargo" >
                    <option value="" disabled selected>Cargo</option>
                    <option value="Gerente"> Gerente </option>
                    <option value="Contador"> Contador </option>
                    <option value="Chofer"> Chofer </option>
            </select><br>
            </div>
            <!-- Nivel Institucional -->
            <div id="boxlvlInst" >
                <label class="defaultLabel" > Nivel Institucional </label><br>
                <select name="lvlInst" id="lvlInst" >
                    <option value="" disabled selected>Nivel institucional</option>
                    <option value="Bachiller"> Bachiller </option>
                    <option value="Técnico"> TSU </option>
                    <option value="Licenciado"> Lcdo. </option>
                    <option value="Ingeniero"> Ing. </option>
            </select><br>
                        </div>
            <!-- Sede -->
            <div id="boxSede" >
                <label class="defaultLabel" > Sede </label><br>
                <select name="sede" id="sede" >
                    <option value="" disabled selected>Sede</option>
                    <option value="Zulia"> Zulia </option>
                    <option value="Caracas"> Caracas </option>
                    <option value="Falcón"> Falcón </option>
                    <option value="Mérida"> Mérida </option>
                    <option value="Monagas"> Monagas </option>
                    <option value="Táchira"> Táchira </option>
            </select><br>
            </div>
            <!-- Dias Disponibles -->
            <div id="boxLaborales" >
                <label id="DL" > Dias laborales </label><br>
                <label id="Lun" > Lunes <input type="checkbox" name="arrDisponible[]" value="Lunes" > </label>
                <label> Martes <input type="checkbox" name="arrDisponible[]" value="Martes" > </label>
                <label> Miercoles <input type="checkbox" name="arrDisponible[]" value="Miercoles" > </label>
                <label> Jueves <input type="checkbox" name="arrDisponible[]" value="Jueves" > </label>
                <label> Viernes <input type="checkbox" name="arrDisponible[]" value="Viernes" > </label>
                <label> Sabado <input type="checkbox" name="arrDisponible[]" value="Sabado" > </label>
                <label> Domingo <input type="checkbox" name="arrDisponible[]" value="Domingo" > </label><br>
            </div>
            <!-- Enviar -->
            <div><input type="submit" name="guardar" value="Enviar"></div>
        </form>
    </div>
    <script src="app.js" ></script>
</body>
</html>