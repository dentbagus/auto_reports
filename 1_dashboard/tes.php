<?php 

// session_start();
// require '../../include/function.php';
// include "../../include/config/conn_local.php";
date_default_timezone_set('Asia/Jakarta');
$year = date('Y');
$month = date('m');

// $html = file_get_contents('http://mis.lottemart.co.id/mis-ng/production/076.dashboard.manual.2020/table_2023a.php?yearnum=2024&monthnum=01&str_cd=06006&sls=gross');
$html = file_get_contents('http://mis.lottemart.co.id/mis-ng/development/076.dashboard.manual.2024/table_2023.php?yearnum=' . $year . '&monthnum=' . $month . '&str_cd=06006&sls=gross');
?>

<!DOCTYPE html>
<html>
<head>
    <title>ALC LSI-06</title>
    <link rel="stylesheet" href="../../include/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../include/assets/css/fontawesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="icon" type="image/png" href="../../include/assets/images/lotte.ico">
    <!-- HTML2CANVAS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
      integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
</head>

<style type="text/css">
  #container {
    width: 100%;
    padding: 10px;
    /* width: 50vw; */
    /* height: 100vh; */
    /* margin: -70px 0 0 -100px;
    padding-bottom: -150px;
    scale: .7; */
    font-size: 13px;
  }
  table {
    width: 100%;
  }
</style>

<body>
  <div id="container">
    <?= $html ?>
  </div>

    <!-- Script -->
    <script type="text/javascript">
      // let date = new Date();
    //   const container = document.getElementById("container");
    //   html2canvas(container).then((canvas) => {

    //     var ajax = new XMLHttpRequest();
    //     ajax.open("POST", "https://ourinv.com/lsi06/auto_report/daily_report/save.php?rpt=dashboard", true);
    //     ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //     ajax.send("image=" + canvas.toDataURL("image/png", 0.9));
    //     ajax.onreadystatechange = function () {

    //       if (this.readyState == 4 && this.status == 200) {

    //         var response = JSON.parse(this.responseText);

    //         if(response == 'success') {

    //            location.href = 'http://10.167.180.111/alc06svr/auto_report/daily/2_sales_cat/';
                  
    //         }
    //       }
    //     }
    //   });

    </script>
</body>
</html>