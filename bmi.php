<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Body Mass Index (BMI)</title>
    <link rel="stylesheet" href="css/bmi.css" style="text/css">
  </head>
  <body>
    <div id="wrapper">
      <div id="main">
        <p style="font-size:59px;margin-top: 30px;">Online Health Check</p>
        <hr>
    <!--Drop down Options----------------->
    <br>
    <select id="myselect" name="" onchange="window.location=this.value">
      <option value="bmi.php" selected>Body Mass Index (BMI) คำนวณดัชณีมวลกาย</option>
      <option value="bmr.php">Basal Metabolic Rate (BMR) คำนวณการเผาผลาญพลังงาน</option>
      <option value="cholesterol.php">Cholesterol Calculate คำนวณค่าคอเลสเตอรอลรวม</option>
    </select>


  <!----------------------------------------------------------------->



    <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
      <br>
      ส่วนสูง/เซนติเมตร <br>
      <input type="text" name="height"> <br><br>
      น้ำหนัก/กิโลกรัม <br>
      <input type="text" name="weight"> <br> <br>
      <input type="submit" name="submit" value="คำนวณ">
    </form>
    <br><br>
    <div id="result">


    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $h = $_POST["height"];
          $w = $_POST["weight"];
          if( is_numeric($h) && is_numeric($w)){
            $BMI = $w / ($h/100)**2;

            printf("ดัชนีมวลกายของคุณคือ %.2f ",$BMI);

            if($BMI >= 40){
              echo "<b><i>โรคอ้วนขั้นสูงสุด</i></b>\n ";
            }
            else if($BMI >= 35){
              echo "<b><i>โรคอ้วนขั้นที่ 2</i></b>\n  คุณเสี่ยงต่อการเกิดโรคที่มากับความอ้วน หากคุณมีเส้นรอบเอวมากกว่าเกณฑ์ปกติคุณจะเสี่ยงต่อการเกิดโรคสูง คุณต้องควบคุมอาหาร และออกกำลังกายอย่างจริงจัง";
            }
            else if($BMI >= 28.5){
              echo "<b><i>โรคอ้วนขั้นที่ 1</i></b>\n  และหากคุณมีเส้นรอบเอวมากกว่า 90 ซม.(ชาย) 80 ซม.(หญิง) คุณจะมีโอกาศเกิดโรคความดัน เบาหวานสูง จำเป็นต้องควบคุมอาหาร และออกกำลังกาย";
            }else if($BMI >= 23.5){
              echo "<b><i>น้ำหนักเกิน</i></b>\n หากคุณมีกรรมพันธ์เป็นโรคเบาหวานหรือไขมันในเลือดสูงต้องพยายามลดน้ำหนักให้ดัชนีมวลกายต่ำกว่า 23";
            }else if($BMI >= 18.5){
              echo "<b><i>น้ำหนักปกติ</i></b>\nและมีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย อุบัติการณ์ของโรคเบาหวาน ความดันโลหิตสูงต่ำกว่าผู้ที่อ้วนกว่านี้";
            }else{
              echo "<b><i>น้ำหนักน้อยเกินไป</i></b>\n";
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
