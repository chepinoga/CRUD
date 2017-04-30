<?php

require_once 'model/Deletemodel.php';


$id = $_GET['id'];
deleteById($id);


header('Location: index.php');
