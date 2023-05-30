<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/FormPasien.php");

$tp = new FormPasien();


if (isset($_POST['add'])) {
    $tp->add($_POST);
} else if (isset($_GET['index'])) {
    $tp->tampil2($_GET['index']);
} else if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $tp->edit($_POST, $id);
} else {
    $data = $tp->tampil();
}
