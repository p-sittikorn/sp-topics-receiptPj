<?php include "header.php"; ?>

<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
#example1 {
    border: 3px solid coral;
    padding: 10px;
    border-radius: 25px;
}

#example2 {
    border: 2px solid red;
    padding: 10px;
    border-radius: 50px 20px;
}

</style>
</head>
<body>

<?php
// define variables and set to empty values
$name = $address = $road = $payor = $website = $date = "";

?>

<h2><center>ใบสำคัญรับเงิน</center></h2>
<div id="example1">
<p><span class="error">กรุณากรอกข้อมูลให้ครบถ้วน</span></p>
<form>
  <div>
    <label for="date">วันที่-เดือน-ปี:</label>
    <input type="date" id="date" name="date" value="<?php echo $date;?>"><br><br>
  </div>
</form>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    ชื่อ: <input type="text" name="name" value="<?php echo $name;?>"><br><br>
    บ้านเลขที่: <input type="text" name="address" value="<?php echo $address;?>"><br><br>
    ถนน: <input type="text" name="road" value="<?php echo $road;?>"><br><br>
  </form>
    <?php
    echo "<h4>รายการ</h4>";
    ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    ชื่อผู้รับเงิน: <input type="text" name="name" value="<?php echo $name;?>"><br><br>
    ชื่อผู้จ่ายเงิน: <input type="text" name="payor" value="<?php echo $payor;?>"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<br>
<div id="example1">
  <center>
    <?php
    echo "<h3>แบบฟอร์มใบสำคัญรับเงิน</h3>";
    ?>
  <img src="./img/01.jpg" width="600" height="700">
</center>
</div>
<br>


</body>
</html>
<?php include "footer.php"; ?>