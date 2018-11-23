<?php

include 'top.php';

print PHP_EOL . '<! Variables>' . PHP_EOL; #----------------------------------

print PHP_EOL . '<! debug>' . PHP_EOL; # -------------------------------

print '<p>Post Array:</p><pre>';
print_r($_POST);
print '</pre>';

print PHP_EOL . '<! Form Variables>' . PHP_EOL; # --------------------

$email = 'shcarlso@uvm.edu'; # Text Box
$firstName = ''; # Text Box
$writeMessage = 'Write us a message!'; # Text Box
$findGoogle = true;     # Check Boxes
$findSpotify = false;
$findSoundcloud = false;
$findFriend = false;
$findOther = false;
$recieveEmails = 'yes'; # Radio Buttons
$state = 'Alabama'; # List Boxes



print PHP_EOL . '<! Error Flags>' . PHP_EOL; # --------------------------

$emailError = false; # Text Box
$firstNameError = false; # Text Box
$writeMessageError = false; # Text Box
$findError = false; # check boxes
$totalChecked = 0;
$recieveEmailError = false; # Radio Buttons
$stateError = false;


print PHP_EOL . '<! Other/misc Variables>' . PHP_EOL; # --------------------------

$errorMsg = array();
$mailed = false;

print PHP_EOL . '<! Form Submission process>' . PHP_EOL; # --------------------------

if (isset($_POST['btnSubmit'])) {

    print PHP_EOL . '<! Security>' . PHP_EOL; # --------------------------

    $thisURL = $domain . $phpself;

    if (!secutityCheck($thisURL)) {
        $msg = '<p>Sorry, You cannot access this page.</p>';
        $msg .= '<p>Security breach detected and reported to webmaster/</p>';
        die($msg);
}

    print PHP_EOL . '<! Sanatize data>' . PHP_EOL; # --------------------------

    print PHP_EOL . '<! Validation>' . PHP_EOL;  # --------------------------

    print PHP_EOL . '<! Process Form- validation passed>' . PHP_EOL;  # --------------------------

    print PHP_EOL . '<! Save Data>' . PHP_EOL; # --------------------------

    print PHP_EOL . '<! Create Message>' . PHP_EOL; # --------------------------

    print PHP_EOL . '<! Mail Responces to user>' . PHP_EOL; # --------------------------
}
print PHP_EOL . '<! Display Form>' . PHP_EOL; # --------------------------

print PHP_EOL . '<! Error Messages>' . PHP_EOL; # --------------------------

print PHP_EOL . '<! Form html Code>' . PHP_EOL; # --------------------------