<?php
require_once('config.php');
?>

<?php
echo "Falló la conexión a MySQL: ". $mysqli->connect_errno."<br><hr><hr>";
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT)") ||
    !$mysqli->query("INSERT INTO test(id) VALUES (4), (5), (3),(4), (5), (3),(4), (5), (3),(4), (5), (3),(4), (5), (3),(4), (5), (3)")) {
    echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
}

$resultado = $mysqli->query("SELECT id FROM test ORDER BY id ASC");

echo "Orden inverso...<br>";
for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo " id = " . $fila['id'] . "<br>";
}

echo "Orden del conjunto de resultados...<br>";
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    echo " id = " . $fila['id'] . "<br>";
}
?>