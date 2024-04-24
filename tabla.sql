-- Crear la tabla principal para el CV
CREATE TABLE IF NOT EXISTS tabla_cv (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    ocupacion VARCHAR(100) NOT NULL,
    celular VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nacionalidad VARCHAR(50) NOT NULL,
    nivel_ingles VARCHAR(50),
    idiomas TEXT,
    aptitudes TEXT,
    habilidades TEXT,
    formacion_academica TEXT,
    experiencia_laboral TEXT,
    perfil TEXT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Crear una subtabla para las instituciones de formación académica
CREATE TABLE IF NOT EXISTS formacion_academica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    institucion VARCHAR(100) NOT NULL,
    FOREIGN KEY (cv_id) REFERENCES tabla_cv(id) ON DELETE CASCADE
);

-- Crear una subtabla para las experiencias laborales
CREATE TABLE IF NOT EXISTS experiencia_laboral (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    empresa VARCHAR(100) NOT NULL,
    puesto VARCHAR(100) NOT NULL,
    anio_inicio INT NOT NULL,
    anio_fin INT,
    FOREIGN KEY (cv_id) REFERENCES tabla_cv(id) ON DELETE CASCADE
);
