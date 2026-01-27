const erNombres = /^[a-zA-Z]+\s[a-zA-Z]+$/
const erApellidos = /^[a-zA-Z]+\s[a-zA-Z]+$/
const erCedula = /^[0-9]+$/
const erTelefonoP = /^(0414|0424|0416|0426|0412|0422)[0-9]{7}$/
const erTelefonoS = /^(0414|0424|0416|0426|0412|0422)[0-9]{7}$/



function enviar() {
    let nombres = document.getElementById('nombres').value;
    let apellidos = document.getElementById('apellidos').value;
    let cedula = document.getElementById('cedula').value;
    const nacimiento = document.getElementById('nacimiento');
    const nacionalidad = document.querySelector('input[name="arrNacionalidad"]:checked');
    let telefonoP = document.getElementById('telefonoP').value;
    let telefonoS = document.getElementById('telefonoS').value;
    const cargo = document.getElementById('cargo');
    const lvlInst = document.getElementById('lvlInst');
    const dias = document.querySelectorAll('input[name="arrDisponible[]"]');

    if (erNombres.test(nombres) == false ) {
        alert('Ingrese su primer y segundo nombre con un espacio en medio (solo letras) ');
        return false;
    }

    if (erApellidos.test(apellidos) == false ) {
        alert('Ingrese su primer y segundo apellido con un espacio en medio (solo letras)');
        return false;
    }

    if (erCedula.test(cedula) == false ) {
        alert('Ingrese su cedula (solo numeros).');
        return false;
    }

    if (nacimiento.value == "" ) {
        alert('ingrese su fecha de nacimiento.');
        return false;
    }

    if (!nacionalidad) {
        alert("Debes seleccionar una Nacionalidad (Venezolano [V] o Extranjero [E] ).");
        return false; 
    }

    if (erTelefonoP.test(telefonoP) == false ) {
        alert('Ingrese su codigo de operadora móvil seguido de otros siete digitos. (ejemplo: 04141234567). ');
        return false;
    }

    if ( telefonoS !== "" && erTelefonoS.test(telefonoS) == false ) {
        alert('Ingrese su codigo de operadora móvil seguido de otros siete digitos (ejemplo: 04141234567) o deje el campo vacio.');
        return false;
    }

    if (cargo.value == "" ) {
        alert('Seleccione su cargo.');
        return false;
    }

    if (lvlInst.value == "") {
        alert('Seleccione su nivel institucional.');
        return false;
    }
    
    let contador = 0;
    dias.forEach
    (function(dia) {
        if (dia.checked)
        contador++;
    })

    if (contador < 3 || contador > 5 ) {
        alert("Seleccione entre 3 a 5 dias laborales.");
        return false;
    }
    return true;
    
}