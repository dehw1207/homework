<html>
<body>

Welcome <br>
triangle area = <?php echo $_POST["width"]*$_POST["height"]/2; ?><br>
box area = <?php echo $_POST["width"]*$_POST["height"]; ?><br>
circle area = <?php echo 3.14*$_POST["radius"]*$_POST["radius"]; ?><br>
cuboid area = <?php echo $_POST["width"]*$_POST["length"]*$_POST["height"]; ?><br>
cylinder area = <?php echo 3.14*$_POST["radius"]*$_POST["radius"]*$_POST["height"]; ?><br>
sphere area = <?php echo 4/3*3.14*$_POST["radius"]*$_POST["radius"]*$_POST["radius"]; ?>

</body>
</html>