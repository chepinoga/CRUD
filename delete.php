<?php

require_once 'model/model.php';


$id = $_GET['id'];
deleteById($id);

var_dump($id);


header('Location: index.php');
