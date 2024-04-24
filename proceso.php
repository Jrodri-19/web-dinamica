<?php
include 'conexion.php'; // Incluye el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica si la solicitud es de tipo POST

    // Verificar si todos los campos obligatorios están llenos
    if (
        isset($_POST['Nombre'], $_POST['Apellido'], $_POST['Nacimiento'], $_POST['Ocupacion'], $_POST['Celular'], $_POST['Email'], $_POST['Nacionalidad'], $_POST['perfil'])
        && !empty($_POST['Nombre'])
        && !empty($_POST['Apellido'])
        && !empty($_POST['Nacimiento'])
        && !empty($_POST['Ocupacion'])
        && !empty($_POST['Celular'])
        && !empty($_POST['Email'])
        && !empty($_POST['Nacionalidad'])
        && !empty($_POST['perfil'])
    ) {
        // Recibe y procesa los datos del formulario
        $nombre = $_POST['Nombre'];
        $apellidos = $_POST['Apellido'];
        $nacimiento = $_POST['Nacimiento'];
        $ocupacion = $_POST['Ocupacion'];
        $celular = $_POST['Celular'];
        $email = $_POST['Email'];
        $nacionalidad = $_POST['Nacionalidad'];
        $nivel_ingles = isset($_POST['nivel']) ? $_POST['nivel'] : ''; // Actualizado para leer el nivel de inglés
        $idiomas = isset($_POST['idioma']) ? $_POST['idioma'] : []; // Actualizado para asegurar que sea un array
        $idiomas_str = is_array($idiomas) ? implode(", ", $idiomas) : $idiomas; // Verifica si es un array antes de usar implode
        $aptitudes = isset($_POST['Aptitud']) ? $_POST['Aptitud'] : []; // Actualizado para asegurar que sea un array
        $aptitudes_str = is_array($aptitudes) ? implode(", ", $aptitudes) : $aptitudes; // Verifica si es un array antes de usar implode
        $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : []; // Actualizado para asegurar que sea un array
        $habilidades_str = is_array($habilidades) ? implode(", ", $habilidades) : $habilidades; // Verifica si es un array antes de usar implode

        $perfil = $_POST['perfil'];

        // Inserta los datos en la base de datos
        $query = "INSERT INTO tabla_cv(nombre, apellidos, fecha_nacimiento, ocupacion, celular, email, nacionalidad, nivel_ingles, idiomas, aptitudes, habilidades, perfil) VALUES ('$nombre', '$apellidos', '$nacimiento', '$ocupacion', '$celular', '$email', '$nacionalidad', '$nivel_ingles', '$idiomas_str', '$aptitudes_str', '$habilidades_str', '$perfil')";

        // Ejecuta la consulta SQL
        if (mysqli_query($conn, $query)) {
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conn); // Muestra un mensaje de error si la inserción falla
        }
    } else {
        echo "Por favor complete todos los campos obligatorios."; // Mensaje si falta algún dato obligatorio
    }

    mysqli_close($conn); // Cierra la conexión a la base de datos
} else {
    echo "Error al procesar el formulario."; // Si la solicitud no es de tipo POST, muestra un mensaje de error
}
?>
