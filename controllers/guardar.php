<?php
require_once "../models/modelo.php";
 $arrayName = array('nombres' => $_POST['nombres'] ,
 'email' => $_POST['email'] ,
 'edad' => $_POST['edad']  );

 echo json_encode(Crud::guardarDatos($arrayName));