<?php
include 'partials/_dbconnect.php';
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Welcome</title>

    <style>
        .form-group {
            margin: auto;
        }

        button {
            margin: auto;
        }

        .btn-primary {
            background-color: black;
            margin-left: 290px;
        }

        table{
            background-color: black;
            border: 3px dashed white;
        }

        th{
            border: 2px solid white;
            color: white;
            text-align: center;
        }

        td,tr{
            border: 2px solid white;
            color:gold;
        }

        body{
            background-image: url('transaction.jpg');
            background-repeat: no-repeat;
            background-size: 100vw 100vh;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: gold;
        }
    </style>
</head>

<body>

    <?php
    require 'partials/_nav.php';
    ?>

    <?php
    $error=false;
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $cmpin = $_POST['cmpin'];
        if ($cmpin == $_SESSION['mpinnumber']) {
            $pay_name = $_SESSION["username"];
            $sql = "SELECT * FROM $pay_name ORDER BY `date-time` DESC";
            $result = mysqli_query($conn, $sql);
            $sr_no = 0;

            echo '
                    <div class="container my-4">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Sr no.</th>
                                    <th scope="col">Transction</th>
                                    <th scope="col">Date-Time</th>
                                </tr>
                            </thead>
                    </div>';

            while ($row = mysqli_fetch_assoc($result) and $sr_no < 10) {
                $sr_no += 1;
                echo "
                        <tbody>
                            <tr>
                            <th scope='row'>" . $sr_no . "</th>
                            <td>" . $row["transaction"] . "</td>
                            <td>" . $row["date-time"] . "</td>
                            </tr>
                        </tbody>
                    </div>";
            }
        }
        else{
            echo'<div class="alert alert-danger alert-dismissible fade show"      role="alert">
          <strong>Oops!</strong> Wrong mpin please enter correct mpin.
          <button type="button" class="close" data-dismiss="alert"     aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
        
       
    }
    ?>

    <form action="/Php project/transaction.php" method="post">
        <div class="form-group col-md-4 my-4">
            <label for="cmpin">To see your last 10 transactions, Please enter your mpin.</label>
            <input type="password" class="form-control" id="cmpin" name="cmpin" placeholder="Enter your mpin">
            <button type="submit" class="btn btn-primary my-2 m-0" name="submit">Submit</button>
        </div>
    </form>

</body>

</html>