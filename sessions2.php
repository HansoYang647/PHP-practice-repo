<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // Echo session variables that were set on previous page
    // echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    // echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

<!-- code tested below is a PHP if statement which executes an HTML output
    the variable in the if statement is a PHP session variable set
    in sessions1.php -->
<?php if ($_SESSION["favcolor"] != "green"): ?>
    <p>The statement is true</p>
<?php else: ?>
    <p>The statement is false</p>
<?php endif; ?>

<!-- insert some PHP code later to test out isset() and empty() 
    functions that checks if session variables are empty-->
<?php if(isset($_SESSION["favanimal"])): ?>
    <p>The session variable "favanimal" is set</p>
<?php else: ?>
    <p>The session variable "favanimal" is NOT set</p>
<?php endif; ?>

<?php print_r($_SESSION); ?>

</body>
</html> 