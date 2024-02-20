<?php

    session_start();

    header('Content-Type: application/json');

    if(isset($_POST['itemName'])) {

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        $_SESSION['cart'][] = $_POST['itemName'];

        $response = array(
            "message" => $_POST['itemName'] . " on edukalt lisatud ostukorvi!",
            "cart" => $_SESSION['cart'],
            "status" => "success"
        );

    } else {

        $response = array(
            "message" => "Toote ostukorvi lisamine ebaõnnestus!",
            "status" => "error"
        );

    }

    echo json_encode($response);

?>