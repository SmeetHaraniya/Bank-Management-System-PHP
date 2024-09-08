<?php
include 'partials/_dbconnect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Contacts</title>
    <style>
        fieldset{
            text-align: center;
            margin-top: 20vh;
            font-size: large;
        }
        h1{
            text-align: center;
            margin-top: 20vh;
        }
        body {
            background-image: url("contacts.jpg");
            background-size: 100vw 100vh;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <?php
    require 'partials/_nav.php';
    ?>
    <h1><b><u>Bank Details</u></b></h1>
    <fieldset>
        
        <b>Helpline number:- 18006548953214<br>
        E-mail:- nadiadco-operativebank@gmail.com<br>
        Address:- Near Sudarshan dairy,kisan samosa no khacho,Nadiad,387001.</b>
        
    </fieldset>
</body>

</html>