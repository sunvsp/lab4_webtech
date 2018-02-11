<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <title>Lab 4: PHP Script</title>
  </head>
  <body>
      <div id="wrapper">
        <div id="main">
      <p style="font-size:85px;margin-top: 30px;">Online <br> Health Check</p>
      <hr>
      <p style="font-size: 40px;margin-top: 25px;">ตรวจสุขภาพออนไลน์</p>

          <select id="myselect" name="" onChange="window.location = this.value" >
            <option value="index.html" selected>----------------------- Select Options -----------------------</option>
            <option value="bmi.php">Body Mass Index (BMI) คำนวณดัชณีมวลกาย</option>
            <option value="bmr.php">Basal Metabolic Rate (BMR) คำนวณการเผาผลาญพลังงาน</option>
            <option value="cholesterol.php">Cholesterol Calculate คำนวณค่าคอเลสเตอรอลรวม</option>
          </select>

          


      
      </div>
      </div>
  </body>
</html>
