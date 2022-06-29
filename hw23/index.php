
<?php 
session_start(); 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HOMEWORK 23</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="container">
        <?php
            if (isset($_SESSION["cookie"])) {
                echo '<div>Cookies are set for your IP address!</div>';
            } else if (isset($_POST["submit"])) {
                $_SESSION["cookie"] = "cookie";
                echo '<div>You have accepted cookies!</div>';
            } else { ?>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="alert alert-warning" role="alert">
                                We use third party cookies to personalize content, ads and analyze site traffic. Read our 
                                <a href="cookie_policy.php" class="alert-link">COOKIE POLICY</a>.<br>
                            </div>
                            <form action="index.php" method="POST">
                                Do you accept our Cookie Policy?       
                                <button type="submit" name="submit" class="btn btn-secondary">ACCEPT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <script>
        $(document).ready(function() {
            $("#myModal").modal();
        });
    </script>

</body>
</html>

