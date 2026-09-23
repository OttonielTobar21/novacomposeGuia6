CREATE TABLE IF NOT EXISTS servicios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'ACTIVO'
);

INSERT INTO servicios(nombre, estado) VALUES
('Portal corporativo', 'ACTIVO'),
('Mesa de ayuda', 'ACTIVO');
