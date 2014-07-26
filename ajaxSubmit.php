<?php
$nombre = $_POST['nombre'];

echo json_encode(array(
    'Mensaje' => sprintf('Se recibió tu mail %s', $nombre),
));
