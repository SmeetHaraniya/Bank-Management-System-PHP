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

    <title>FAQs</title>
    <style>
        body{
            background-image: url('faqs.jpeg');
            background-repeat: no-repeat;
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
    <br>
    <ol type="i">
        <li>
           <b> When Nadiad Co-operative bank was established?</b><br>
            <b>Ans</b>:- 22/04/2023
        </li>
        <br>
        <li>
            <b>Who are the owner of Nadiad Co-operative bank?<br></b>
            <b>Ans</b>:- Bank is owned by 3 persons (i)Kavan Gajera,(ii)Smit Haraniya and (iii)Faldu Arpit.
        </li>
        <br>
        <li>
            <b>In which of the cities in Gujarat there is the branch of NCB?</b><br>
            <b>Ans</b>:- Our bank has reached almost to every village and remote areas and there are multiple branches in the metro cities too.
        </li>
        <br>
        <li>
        <b>Can anyone open a zero balance account in Nadiad Co-operative bank?</b><br>
            <b>Ans</b>:- Yes we provide the facility of zero balance account opening to our users.
        </li>
        <br>
        <li>
        <b>What amount of interest does NCB provide to the users on F.D?</b><br>
            <b>Ans</b>:- Our bank provides 8.25% interest on F.D's.
        </li>
        <br>
        <li>
        <b>Does Nadiad Co-operative bank provide security t the online users?</b><br>
            <b>Ans</b>:- Yes our website uses block-chain technology so that our website is totally safe and secure for the users to use.
        </li>
        <br>
        <li>
        <b>Where is main branch of Nadiad Co-operative bank located?<br></b>
            <b>Ans</b>:- Main branch of Nadiad Co-operative bank is located in Nadiad near Sudarshan dairy,kishan samosa road,Nadiad 387001. 
        </li>
        <br>
        <li>
        <b>Is net banking facility available for the users?</b><br>
            <b>Ans</b>:- Yes users can use net banking and can easily process their transactions sitting at their home.
        </li>
        <br>
    </ol>
</body>

</html>