<?php

// $conn = new mysqli('localhost', 'root', 'Ce425adm42689712890', 'cadastroCrud');
$conn = new mysqli('localhost', 'root', 'bcd127', 'cadastroCrud');

if (!$conn) {
    die(mysqli_error($conn));
}
