<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cholesterol Calculate</title>
    <link rel="stylesheet" href="css/cal.css" style="text/css">
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
      <option value="bmr.php">Basal Metabolic Rate (BMR) คำนวณการเผาผลาญพลังงาน</option>
      <option value="cholesterol.php" selected>Cholesterol Calculate คำนวณค่าคอเลสเตอรอลรวม</option>
    </select>
  <!----------------------------------------------------------------->

    <br><br>
    <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
      ระดับไขมันแอลดีแอล มิลลิกรัม/เดซิลิตร<br>
      <input type="text" name="ldl"> <br><br>
      ระดับไขมันเอชดีแอล มิลลิกรัม/เดซิลิตร <br>
      <input type="text" name="hdl"> <br><br>
      ไตรกลีเซอไรด์ มิลลิกรัม/เดซิลิตร <br>
      <input type="text" name="tri"> <br><br>
      <input type="submit" name="submit" value="คำนวณ">
    </form>
    <br><br>
    <div id="result">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $ldl = $_POST["ldl"];
          $hdl = $_POST["hdl"];
          $tri = $_POST["tri"];
          if( is_numeric($ldl) && is_numeric($hdl) && is_numeric($tri)){
              $total_Cholesterol = $ldl + $hdl + ($tri / 5);

              if($total_Cholesterol >= 240){
                printf("ปริมาณค่าคอเลสเตอรอลรวมของคุณคือ %d มิลลิกรัม/เดซิลิตร <b><i>สูง</i></b>",$total_Cholesterol);
              }else if($total_Cholesterol >= 200){
                printf("ปริมาณค่าคอเลสเตอรอลรวมของคุณคือ %d มิลลิกรัม/เดซิลิตร <b><i>ค่อนข้างสูง</i></b>",$total_Cholesterol);
              }else{
                printf("ปริมาณค่าคอเลสเตอรอลรวมของคุณคือ %d มิลลิกรัม/เดซิลิตร <b><i>ดีมาก</i></b>",$total_Cholesterol);
              }
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
