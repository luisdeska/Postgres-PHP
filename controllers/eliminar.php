<?php

require_once '../models/modelo.php';
echo json_encode(Crud::eliminarDatos($_POST['id']));