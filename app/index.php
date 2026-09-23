<?php
mysqli_report(MYSQLI_REPORT_OFF);

$host = getenv('DB_HOST') ?: 'db';
$db   = getenv('DB_NAME') ?: 'novaservices';
$user = getenv('DB_USER') ?: 'novaapp';
$pass = getenv('DB_PASSWORD') ?: '';

$mysqli = @new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    http_response_code(503);
    echo '<h1>NovaServices</h1>';
    echo '<p>Base de datos no disponible.</p>';
    exit;
}

$result = $mysqli->query('SELECT COUNT(*) AS total FROM servicios');
$total = $result ? $result->fetch_assoc()['total'] : 0;

echo '<h1>NovaServices Web Platform</h1>';
echo '<p>Contenedor web operativo.</p>';
echo '<p>MySQL conectado: ' . htmlspecialchars($mysqli->server_info) . '</p>';
echo '<p>Servicios registrados: ' . (int)$total . '</p>';
?>
