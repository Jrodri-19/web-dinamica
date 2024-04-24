<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    <title>Formulario a curriculum vitae</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor=#d1dedc>
        <form action="proceso.php" method="POST">
            <h1>Formulario a Curriculum Vitae</h1>
            <fieldset>
                <h2>Datos</h2>
                <div class="int-group">
                <label for="name">Nombre: </label>
                <input type="text" name="Nombre" id="name" placeholder="Escriba su nombre" required><br>
                <label for="apellido">Apellidos: </label>
                <input type="text" name="Apellido" id="apellido" placeholder="Escriba sus apellidos" required><br>
                <label for="nacimiento">Fecha de nacimiento: </label>
                <input type="date" name="Nacimiento" id =nacimiento required><br>
                <label for="ocupacion">Ocupación: </label>
                <input type="text" name=" Ocupacion" id="ocupacion" placeholder="Escriba su ocupación" required>
            </fieldset>
            <fieldset>
                <h2>Contactos</h2>
                <label for="phone">Telefono: </label>
                <input type="tel" name="Celular" id="celular" placeholder="Numero de teléfono" required><br>
                <label for="gmail" >Correo electronico: </label>
                <input type="email" name="Email" id="email" placeholder="ejemplo@gmail.com" required>
            </fieldset>
            <fieldset>
                <legend><h2>Formación Académica</h2></legend>
                <div id="formacion-academica">
                    <div class="grupo-formacion">
                        <input type="text" name="institucion[]" class="institucion" placeholder="Nombre de la institución" required>
                        <button type="button" class="eliminar-formacion">Eliminar</button>
                    </div>
                </div>
                <button type="button" id="agregar-formacion">Agregar Formación</button>
                <div id="formaciones-guardadas"></div>
            </fieldset>
            <fieldset>
                <h2>Información de procedencia</h2>
                <label for="Nacionalidad">Nacionalidad: </label>
                <select name="Nacionalidad" id="nacionalidad" required>
                    <option value="Perú">Perú</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Chile">Chile</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="EEUU">EEUU</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Otro pais">Otro</option>
                </select>
            </fieldset> 
            <fieldset>
                <h2>Idiomas</h2>   
                <div id="idiomas-container">
                    <div>
                        <input type="text" name="idioma[]" placeholder="Ingrese idioma" required>
                        <label><input type="radio" name="nivel[]" value="Básico" onclick="actualizarIdioma(this,'idioma1')"> Básico</label>
                        <label><input type="radio" name="nivel[]" value="Intermedio" onclick="actualizarIdioma(this)"> Intermedio</label>
                        <label><input type="radio" name="nivel[]" value="Avanzado" onclick="actualizarIdioma(this)"> Avanzado</label>
                        <button type="button" onclick="eliminarIdioma(this)">Eliminar</button>
                    </div>
                </div>
                <button type="button" onclick="agregarIdioma()">Agregar Idioma</button>
            </fieldset>
            <fieldset>
            <label for="Lenguaje"><h2>Lenguajes de Programación</h2></label>
                <div id="lenguajes-container">
                    <select name="lenguajes[]" id="lenguajes" multiple="multiple" required>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="Go">Go</option>
                        <option value="Java">Java</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="jQuery">jQuery</option>
                        <option value="PHP">PHP</option>
                        <option value="Python">Python</option>
                        <option value="R">R</option>
                        <option value="SQL">SQL</option>
                        <option value="Swift">Swift</option>
                        <option value=".NET">.NET</option>
                        <!-- Opción adicional -->
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <button type="button" onclick="agregarLenguaje()">Agregar Lenguaje</button>
                <fieldset>
                    <h2>Lenguajes Seleccionados</h2>
                    <ul id="lenguajes-seleccionados"></ul>
                </fieldset>
            </fieldset>
            
            <fieldset>
                <label for="aptitud"><h2>Aptitudes</h2></label>
                <input type="text" list="browsers" name="Aptitud" id="aptitud" placeholder="Aptitudes">
                <datalist id="browsers">
                    <option value="Adaptabilidad"> 
                    <option value="Multitasking">
                    <option value="Innovación">
                    <option value="Proactividad">
                    <option value="Productividad">
                </datalist>
                <button type="button" onclick="agregarAptitud()">Agregar Aptitud</button>
                <fieldset>
                    <h2>Aptitudes Seleccionados</h2>
                    <ul id="aptitudesSeleccionadas"></ul>
                </fieldset>
            </fieldset>
            
            <fieldset>
                <label for="habilidades"><h2>Habilidades</h2></label><br>
                <input type="checkbox" id="vehicle1" name="habilidades[]" value="Creatividad">
                <label for="habilidad1"> Creatividad.</label><br>
                <input type="checkbox" id="vehicle2" name="habilidades[]" value="Colaboración">
                <label for="habilidad2">Colaboración. </label><br>
                <input type="checkbox" id="vehicle3" name="habilidades[]" value="Iniciativa">
                <label for="habilidad3"> Iniciativa.</label><br>
                <input type="checkbox" id="vehicle4" name="habilidades[]" value="Razonamiento analítico">
                <label for="habilidad4"> Razonamiento analítico.</label><br>
                <fieldset>
                    <h2>Habilidades-seleccionadas</h2>
                    <ul id="lista-habilidades"></ul>
                </fieldset>
            </fieldset>

            
            <fieldset>
                <legend><h2>Experiencia Laboral</h2></legend>
                <div id="experiencia-laboral">
                    <div class="grupo-experiencia">
                        <label for="empresa">Empresa:</label>
                        <input type="text" name="empresa[]" class="empresa" placeholder="Nombre de la empresa" required><br>
                        <label for="puesto">Puesto:</label>
                        <input type="text" name="puesto[]" class="puesto" placeholder="Puesto desempeñado" required><br>
                        <label for="anio">Año de inicio:</label>
                        <input type="number" name="anio[]" class="anio" placeholder="Año de inicio" required><br>
                        <label for="anio">Año de fin:</label>
                        <input type="number" name="anio[]" class="anio" placeholder="Año de fin (opcional)">
                        <button type="button" class="guardar-experiencia">Guardar</button>
                    </div>
                </div>
                <hr>
                <fieldset>
                    <legend><h2>Experiencias Guardadas</h2></legend>
                    <ul id="experiencias-lista"></ul>
                    
                </fieldset>
            </fieldset>
            <fieldset>
                <label for="perfil"><h2>Perfil</h2></label>
                <textarea name="perfil" placeholder="Describe tu perfil"></textarea>
            </fieldset>
                <input class="btn" type="submit" value="Generar CV"> 
            </div>
        </form>
        <script>
            function agregarIdioma() {
                var container = document.getElementById('idiomas-container');
                var div = document.createElement('div');
                div.innerHTML = '<div><input type="text" name="idioma[]" placeholder="Ingrese idioma" required>' +
                                '<label><input type="radio" name="nivel[]" value="Básico" onclick="actualizarIdioma(this)"> Básico</label>' +
                                '<label><input type="radio" name="nivel[]" value="Intermedio" onclick="actualizarIdioma(this)"> Intermedio</label>' +
                                '<label><input type="radio" name="nivel[]" value="Avanzado" onclick="actualizarIdioma(this)"> Avanzado</label>' +
                                '<button type="button" onclick="eliminarIdioma(this)">Eliminar</button></div>';
                container.appendChild(div);
            }

            function eliminarIdioma(button) {
                button.parentNode.remove();
            }

            function actualizarIdioma(radio) {
                var div = radio.parentNode.parentNode;
                var idiomaInput = div.querySelector('input[name="idioma[]"]');
                if (radio.checked) {
                    idiomaInput.value = idiomaInput.placeholder + ' - ' + radio.value;
                }
            }
            function agregarLenguaje() {
                    var select = document.getElementById("lenguajes");
                    var selectedOptions = select.selectedOptions;
                    var lenguajesSeleccionadosUl = document.getElementById("lenguajes-seleccionados");

                    // Limpiar el contenido actual
                    // lenguajesSeleccionadosUl.innerHTML = "";

                    // Recorrer las opciones seleccionadas y agregarlas a la lista
                    for (var i = 0; i < selectedOptions.length; i++) {
                        var option = selectedOptions[i];
                        var lenguaje = option.value;
                        var lenguajeLi = document.createElement("li");
                        lenguajeLi.textContent = lenguaje;

                        // Crear un botón para eliminar el lenguaje
                        var botonEliminar = document.createElement("button");
                        botonEliminar.textContent = "Eliminar";
                        botonEliminar.setAttribute("data-lenguaje", lenguaje); // Agregar un atributo para almacenar el lenguaje
                        botonEliminar.addEventListener("click", function() {
                            // Eliminar el elemento de la lista al hacer clic en el botón
                            this.parentElement.remove();
                        });

                        // Agregar el botón al elemento de la lista
                        lenguajeLi.appendChild(botonEliminar);

                        // Agregar el elemento de la lista a la lista de lenguajes seleccionados
                        lenguajesSeleccionadosUl.appendChild(lenguajeLi);
                    }
                }
                function agregarAptitud() {
                var aptitudInput = document.getElementById('aptitud');
                var aptitudSeleccionada = aptitudInput.value.trim();
                var divAptitudes = document.getElementById('aptitudesSeleccionadas');

                if (aptitudSeleccionada !== '') {
                    var nuevoElemento = document.createElement('div');
                    nuevoElemento.className = 'aptitud-item';

                    var pAptitud = document.createElement('p');
                    pAptitud.textContent = aptitudSeleccionada;

                    var botonEliminar = document.createElement('button');
                    botonEliminar.textContent = 'Eliminar';
                    botonEliminar.onclick = function() {
                        divAptitudes.removeChild(nuevoElemento);
                    };

                    nuevoElemento.appendChild(pAptitud);
                    nuevoElemento.appendChild(botonEliminar);
                    divAptitudes.appendChild(nuevoElemento);
                }

                aptitudInput.value = ''; // Limpiar el campo después de agregar
            }
                        // Obtener los checkboxes
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            // Obtener la lista donde se mostrarán las habilidades seleccionadas
            var listaHabilidades = document.getElementById("lista-habilidades");

            // Escuchar el evento de cambio en cada checkbox
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', actualizarHabilidadesSeleccionadas);
            });

            function actualizarHabilidadesSeleccionadas() {
                // Limpiar la lista de habilidades seleccionadas
                listaHabilidades.innerHTML = "";

                // Recorrer los checkboxes y mostrar las habilidades seleccionadas
                checkboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        var habilidad = checkbox.value;
                        var habilidadElemento = document.createElement("li");
                        habilidadElemento.textContent = habilidad;
                        listaHabilidades.appendChild(habilidadElemento);
                    }
                });

                // Si no se ha seleccionado ninguna habilidad, mostrar un mensaje
                if (listaHabilidades.children.length === 0) {
                    var mensaje = document.createElement("li");
                    mensaje.textContent = "Ninguna habilidad seleccionada";
                    listaHabilidades.appendChild(mensaje);
                }
            }
            function agregarLenguaje() {
                var select = document.getElementById("lenguajes");
                var selectedOptions = select.selectedOptions;
                var lenguajesSeleccionadosUl = document.getElementById("lenguajes-seleccionados");

                // Limpiar el contenido actual
                // lenguajesSeleccionadosUl.innerHTML = "";

                // Recorrer las opciones seleccionadas y agregarlas a la lista
                for (var i = 0; i < selectedOptions.length; i++) {
                    var option = selectedOptions[i];
                    var lenguaje = option.value;
                    var lenguajeLi = document.createElement("li");
                    lenguajeLi.textContent = lenguaje;

                    // Crear un botón para eliminar el lenguaje
                    var botonEliminar = document.createElement("button");
                    botonEliminar.textContent = "Eliminar";
                    botonEliminar.setAttribute("data-lenguaje", lenguaje); // Agregar un atributo para almacenar el lenguaje
                    botonEliminar.addEventListener("click", function() {
                        // Eliminar el elemento de la lista al hacer clic en el botón
                        this.parentElement.remove();
                    });

                    // Agregar el botón al elemento de la lista
                    lenguajeLi.appendChild(botonEliminar);

                    // Agregar el elemento de la lista a la lista de lenguajes seleccionados
                    lenguajesSeleccionadosUl.appendChild(lenguajeLi);
                }
            }
                document.addEventListener("DOMContentLoaded", function() {
                var agregarFormacionBtn = document.getElementById("agregar-formacion");
                var formacionAcademicaDiv = document.getElementById("formacion-academica");
                var formacionesGuardadasDiv = document.getElementById("formaciones-guardadas");

                agregarFormacionBtn.addEventListener("click", function() {
                    var nuevoGrupoFormacion = document.createElement("div");
                    nuevoGrupoFormacion.classList.add("grupo-formacion");
                    nuevoGrupoFormacion.innerHTML = `
                        <input type="text" name="institucion[]" class="institucion" placeholder="Nombre de la institución" required>
                        <button type="button" class="eliminar-formacion">Eliminar</button>
                    `;
                    formacionAcademicaDiv.appendChild(nuevoGrupoFormacion);
                });

                formacionAcademicaDiv.addEventListener("click", function(event) {
                    if (event.target.classList.contains("eliminar-formacion")) {
                        var grupoFormacion = event.target.parentNode;
                        grupoFormacion.parentNode.removeChild(grupoFormacion);
                    }
                });
            });
            document.addEventListener("DOMContentLoaded", function() {
                var experienciaLaboralDiv = document.getElementById("experiencia-laboral");
                var experienciasLista = document.getElementById("experiencias-lista");

                experienciaLaboralDiv.addEventListener("click", function(event) {
                    if (event.target.classList.contains("guardar-experiencia")) {
                        var empresa = experienciaLaboralDiv.querySelector(".empresa").value;
                        var puesto = experienciaLaboralDiv.querySelector(".puesto").value;
                        var anioInicio = experienciaLaboralDiv.querySelector(".anio").value;
                        var anioFin = experienciaLaboralDiv.querySelectorAll(".anio")[1].value;
                        var experienciaTexto = "Empresa: " + empresa + ", Puesto: " + puesto + ", Año de inicio: " + anioInicio + ", Año de fin: " + (anioFin ? anioFin : "Actualidad");

                        var listaItem = document.createElement("li");
                        listaItem.textContent = experienciaTexto;
                        
                        var eliminarBtn = document.createElement("button");
                        eliminarBtn.textContent = "Eliminar";
                        eliminarBtn.classList.add("eliminar-experiencia");
                        
                        listaItem.appendChild(eliminarBtn);
                        experienciasLista.appendChild(listaItem);

                        experienciaLaboralDiv.querySelector(".empresa").value = "";
                        experienciaLaboralDiv.querySelector(".puesto").value = "";
                        experienciaLaboralDiv.querySelector(".anio").value = "";
                        experienciaLaboralDiv.querySelectorAll(".anio")[1].value = "";
                    }
                });

                experienciasLista.addEventListener("click", function(event) {
                    if (event.target.classList.contains("eliminar-experiencia")) {
                        var listItem = event.target.parentNode;
                        listItem.parentNode.removeChild(listItem);
                    }
                });
            });
        </script>
    </body>
</html>
