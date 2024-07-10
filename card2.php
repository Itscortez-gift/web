<?php

session_start();
include 'php/config.php';
if (!isset($_SESSION['unique_id'])) {
    header("Location: Singup-login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/card 1.css">
    <script src="https://kit.fontawesome.com/af6e45cdde.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <title>Payment</title>
</head>
<body>
    <a href="pricing.php">
        <div class="container">
            <div class="go_back"><div></div></div>
        </div>
    </a>
    <div class="wrapper">
        <div class="payment_form_wrapper">
            <div class="payment_form">
                <div class="back_card">
                    <div class="stripe"></div>
                    <div class="input_field">
                        <label>CVC/CVV</label>
                        <input type="text" name ="cvc-cvv" class="input" placeholder="XXX"
                        maxlength="3">
                    </div>
                </div>
                <div class="front_card">
                    <div class="pay_sec">
                        <div class="pay">
                            <p>PAYING <span>$10 - Membership</span></p>
                        </div>
                        <div class="visa_img">
                            <i class="fa-brands fa-cc-visa"></i>
                        </div>
                    </div>
                    <div class="form">
                        <div class="input_top">
                            <label for="CARD NUMBER"></label>
                            <div class="input_grp">
                                <div class="input_field">
                                    <input type="text" name ="Card Number" class="input" placeholder="XXXX"
                        maxlength="4">
                                </div>
                                <div class="input_field">
                                    <input type="text" name ="Card Number" class="input" placeholder="XXXX"
                        maxlength="4">
                                </div>
                                <div class="input_field">
                                    <input type="text" name ="Card Number" class="input" placeholder="XXXX"
                        maxlength="4">
                                </div>
                                <div class="input_field">
                                    <input type="text" name ="Card Number" class="input" placeholder="XXXX"
                        maxlength="4">
                                </div>
                            </div>
                        </div>
                        <div class="input_bottom"></div>
                        <div class="input_left">
                            <div class="input_field">
                                <label for="CARD HOLDER"></label>
                                <input type="text" name ="codingMarket" class="input" placeholder="CODING MARKET">
                            </div>
                        </div>
                        <div class="input_rigth">
                            <label for="EXPIRATION DATE"></label>
                            <div class="input_grp">
                                <div class="input_field">
                                    <input type="text" name ="Month" class="input" placeholder="XX"
                                     maxlength="2">
                                <div class="input_field">
                                    <input type="text" name ="Date" class="input" placeholder="XX"
                                     maxlength="2">
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn">
                COMPLETE ORDER
            </div>
        </div>
    </div>

</body>