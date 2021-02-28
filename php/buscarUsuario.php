<?php
include 'db_connect.php';

$username = $_POST["username"];
$startFrom = $_POST["startFrom"];

$username = trim(htmlspecialchars($username));
$startFrom = filter_var($startFrom, FILTER_VALIDATE_INT);

$sql= "SELECT nombre_completo, n_documentacion, email, telefono
    FROM usuarios WHERE TRUE";

if ($_POST["nacionalidad"]!="") {
    $sql .= " AND nacionalidad IN ('".$_POST["nacionalidad"]."')";
}

if ($_POST["pais"]!="") {
    $sql .= " AND pais IN ('".$_POST["pais"]."')";

}
if ($_POST["genero"]!="") {
    $sql .= " AND genero IN ('".$_POST["genero"]."')";

}
if ($username != "nousers") {
    $sql .= " AND (telefono LIKE '$username%' OR n_documentacion LIKE '$username%' OR nombre_completo LIKE '$username%') ";
}
$stmt = $conn -> prepare($sql);

$stmt->execute();
// The columns in SQL will be bound to the PHP variables
$stmt->bind_result($nombre_completo, $n_documentacion, $email, $telefono);

$array = [];
    while ($stmt -> fetch()){
        $array[] = [
            'nombre_completo' => $nombre_completo,
            'email' => $email,
            'n_documentacion' => $n_documentacion,
            'telefono' => $telefono
        ];
    }

    echo json_encode($array);
    exit();

?>