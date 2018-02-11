<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basal Metabolic Rate (BMR)</title>
    <link rel="stylesheet" href="css/bmr.css" style="text/css">
  </head>
  <body>

    <!--Drop down Options----------------->
    <div id="wrapper">
      <div id="main">
        <p style="font-size:59px;margin-top: 30px;">Online Health Check</p>
        <hr>
    <!--Drop down Options----------------->
    <br>
    <select id="myselect" name="" onchange="window.location=this.value">
      <option value="bmi.php" >Body Mass Index (BMI) คำนวณดัชณีมวลกาย</option>
      <option value="bmr.php"selected>Basal Metabolic Rate (BMR) คำนวณการเผาผลาญพลังงาน</option>
      <option value="cholesterol.php">Cholesterol Calculate คำนวณค่าคอเลสเตอรอลรวม</option>
    </select>
  <!----------------------------------------------------------------->



    <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
      <br>
      <label for="">ส่วนสูง/เซนติเมตร</label>
      <label for="" style="margin-left: 135px;">น้ำหนัก/กิโลกรัม</label>
       <br>
      <input type="text" name="height">

      <input type="text" name="weight" style="margin-left: 50px;"> <br> <br>
      อายุ/ปี
      <label for="" style="margin-left: 210px;">เพศ</label> <br>
      <input type="text" name="age">

      <input type="radio" name="gender" value="male"  style="margin-left: 50px;"checked > ชาย
      <input type="radio" name="gender" value="female" > หญิง<br>
      <br>
      กิจกรรม <br>
      <select name="Select" id="selectMe">

        <option value="1.2" selected style="background-color: white;">ไม่ออกกำลังกายหรือออกกำลังกายน้อยมาก</option>
        <option value="1.375" style="background-color: white;">ออกกำลังกายน้อยเล่นกีฬา 1-3 วัน/สัปดาห์</option>
        <option value="1.55" style="background-color: white;">ออกกำลังกายปานกลางเล่นกีฬา 3-5 วัน/สัปดาห์</option>
        <option value="1.725" style="background-color: white;">ออกกำลังกายหนักเล่นกีฬา 6-7 วัน/สัปดาห์</option>
        <option value="1.9" style="background-color: white;">ออกกำลังกายหนักมากเป็นนักกีฬา</option>

      </select>
      <br><br>
      <input type="submit" name="submit" value="คำนวณ" >
    </form>
    <br>
    <div id="result">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $h = $_POST["height"];
          $w = $_POST["weight"];
          $age = $_POST["age"];
          $gender = $_POST["gender"];

          if( is_numeric($h) && is_numeric($w) && is_numeric($age)){
            if($gender == "male"){
              $BMR = 66 + (13.7 * $w) + (5 * $h) - (6.8 * $age);
            }else if($gender == "female"){
              $BMR = 665 + (9.6 * $w) + (1.8 * $h) - (4.7 * $age);
            }
            printf("BMR (Basal Metabolic Rate) ของคุณคือ %d กิโลแคลอรี่ <br>",$BMR);
            echo "TDEE\n\n(Total Daily Energy Expenditure) ของคุณคือ\n";
            printf("%d",$BMR * $_POST["Select"]);
            echo "\nกิโลแคลอรี่";
          }else{
            echo "คุณใส่ค่าผิด กรุณาใส่ใหม่อีกรอบครับ";
          }
        }




     ?>
     </div>
   </div>
 </div>


  </body>
</html>
