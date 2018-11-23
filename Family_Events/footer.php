<!-- Hardik(Database Connection & get field like city,vendor,more etc. data by function getData11())   -->
<!-- Hardik(Database Connection & get content for footer & contact no. by getContent11())   -->
<!-- Hardik(Database Connection & get heading in reddish & contact mail by getHeading11())   -->
<!-- Hardik(Database Connection & get main heading like why fab? by getMainHeading11() )   -->
<!-- Hardik(Database Connection & get button name by getButton11())   -->
<?php

function getData11($fieldtype)
{
  require 'db_connection_2.php';
 $q="Select * from hsection_11 where field='".$fieldtype."'";
 $result=mysqli_query($conn,$q);
 $num= mysqli_num_rows($result);
  for($i=0;$i<$num;$i++)
 {
  $row=mysqli_fetch_array($result);
  echo $row['option']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 }
}

function getContent11($id)
{
  require 'db_connection_2.php';
$q="Select * from hsection_112 where id=".$id;
 $result=mysqli_query($conn,$q);
 $num = mysqli_num_rows($result);
  for($i=0;$i<$num;$i++)
 {
  $row=mysqli_fetch_array($result);
  echo $row['content'];
 }
}

function getHeading11($id)
{
  require 'db_connection_2.php';
 $q="Select * from hsection_112 where id=".$id;
 $result=mysqli_query($conn,$q);
 $num= mysqli_num_rows($result);
  for($i=0;$i<$num;$i++)
 {
  $row=mysqli_fetch_array($result);
  echo $row['heading'];
 }
}
function getMainHeading11($id)
{
  require 'db_connection_2.php';
$q="Select * from hsection_112 where id=".$id;
 $result=mysqli_query($conn,$q);
 $num= mysqli_num_rows($result);
  for($i=0;$i<$num;$i++)
 {
  $row=mysqli_fetch_array($result);
  echo $row['headingmain'];
 }
}
function getButton11($id)
{
  require 'db_connection_2.php';
$q="Select * from hsection_112 where id=".$id;
 $result=mysqli_query($conn,$q);
 $num= mysqli_num_rows($result);
  for($i=0;$i<$num;$i++)
 {
  $row=mysqli_fetch_array($result);
  echo $row['button'];
 }
}
?>

    
<!doctype html>
<html lang="en">
  <head>
    <!-- link & meta by Naman -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!--  s11_style.css -->
    <link rel="stylesheet" href="resources/css/s11_style.css">
    <!--  fontawasome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

   <!-- link & meta by Shashwat & Hardik -->
    <!-- ------------------------------ uikit CSS ---------------------------- -->
    <link rel="stylesheet" href="resources/uikit/css/uikit.min.css">
<!-- ------------------ GOOGLE FONTS----------------------------------------   -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<!-- -------------------------------- MAIN CSS -------------------------------  -->
   <link rel="stylesheet" href="resources/css/s11_style1.css">
    <title>Fab Occasions section11</title>

  </head>
  <body>
    <!-- upper footer Design by Naman  -->
    <!-- All Php function calls by Hardik -->
    <div class="pt-4" style="background-color: #eee">
        <div class="container" style="background-color: #fff">
          <div class="row pb-4 ">
            <div class="col-sm mt-3" style="border-right:1px solid #818181; ">
              <h5 class="text-center pt-3"><b><?php getMainHeading11(1); ?></b></h5>
              <p class="text-center" style="color: rgb(244,72,58);"><?php getHeading11(1); ?></p>
              <p class="text-center"><?php getContent11(1); ?></p>
              <div style="text-align:center; padding-top: 10px;"><a href="#" class="cus-btn"><?php getButton11(1); ?></a></div>
              <div class="penal penal-default ">
                <div class="penalbody shadow bg-white rounded" style="margin-top: 30px;">
                  <table><tr>
                  <td><img src="./resources/img/icons8-compose-96.png" height="100" width="60"></i></td>
                  <td><p class="text-center" style="font-size:12px; padding-top: 15px;">Keep Track with Log</p></td>
                  <td><img src="./resources/img/icons8-light-on-96.png" height="100" width="60"></i></td>
                  <td><p class="text-center" style="font-size:12px; padding-top: 15px; padding-right: 8px;">Latest Trends & Idea</p></td>
                  <td><img src="./resources/img/icons8-online-payment-with-a-credit-card-128.png" height="100" width="60"></i></td>
                  <td><p class="text-center" style="font-size:12px; padding-top: 15px; ">Book Top Vendor</p></td>
                  </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-sm mt-3" style="border-right:1px solid #818181; ">
              <h5 class="text-center pt-3"><b><?php getMainHeading11(2); ?></b></h5>
              <p class="text-center" style="color: rgb(244,72,58);"><?php getHeading11(2); ?></p>
              <p class="text-center"><?php getContent11(2); ?></p>
               <div style="text-align:center; padding-top: 10px;"><a href="#" class="cus-btn"><?php getButton11(2); ?></a></div>

               <div class="penal penal-default ">
                <div class="penalbody shadow bg-white rounded" style="margin-top: 30px;">
                  <table><tr>
                  <td><img src="./resources/img/icons8-compose-96.png" height="100" width="60"></i></td>
                  <td><p class="text-center" style="font-size:12px; padding-top: 15px;">Keep Track with Log</p></td>
                  <td><img src="./resources/img/icons8-light-on-96.png" height="100" width="60"></i></td>
                  <td><p class="text-center" style="font-size:12px; padding-top: 15px; padding-right: 8px;">Latest Trends & Idea</p></td>
                  <td><img src="./resources/img/icons8-online-payment-with-a-credit-card-128.png" height="100" width="60"></i></td>
                  <td><p class="text-center" style="font-size:12px; padding-top: 15px; ">Book Top Vendor</p></td>
                  </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-sm mt-3">
              <h6 class="text-center pt-3">Follow us on</h6>
              <div class="text-center"><i class="fab fa-facebook" style="font-size: 25px; color:#3b5998;"></i>&nbsp;&nbsp;<i class="fab fa-instagram" style="font-size: 25px; color:#e4405f;"></i>&nbsp;&nbsp;<i class="fab fa-twitter-square" style="font-size: 25px; color:#55acee;"></i></div>
              <p style="color: rgb(244,72,58); font-size: 16px; padding-left: 17px;">Get Latest Blog Alerts</p>
              <form action="setEmail11.php" class="text-center mt-3">
                  <input type="text" placeholder="Email Address" name="email" style="text-indent: 7px; width: 90%" required="required">
                  <button class="mt-2 cus-sub-btn" style="margin-left: 67%" >Submit</button>
              </form>
              <div class="ml-4 mt-3">
                  <p style="color: rgb(244,72,58); font-size: 16px;">Contact to us get best deals</p>
                  <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;<a href="" style="color:black; text-decoration: none;"><?php getContent11(3); ?></a> </p>
                  <p><i class="fas fa-phone"></i>&nbsp;&nbsp;<a href="" style="color:black; text-decoration: none;"><?php getHeading11(3); ?></a> </p>
              </div>
            </div>
          </div>

        <!-- lower footer Design by Shashwat & Hardik  -->
          <div class="s11_footer">
          <div class="s11_fot">
              
                <h2 class="s11_heading">Other Cities</h2>
                <ul class="s11_ulline" style="padding: 0px;">
                <li><?php
                    getData11('city');
                  ?>
                </li>
              </ul>
              <h2 class="s11_heading">Other Vendors</h2>
              <ul class="s11_ulline" style="padding: 0px;">
              <li>
                <?php
                    getData11('vendor');
                  ?>
              </li>
              </ul>
            
            <h2 class="s11_heading ">More</h2>
            <ul class="s11_ulline s11_mar-bot" style="padding: 0px;">
              <li>
              <?php
                    getData11('more');
              ?>
                </li>
            </ul>
      </div>  
    </div>
    <div class="s11_last">
      <p class="s11_para"><a href="#">Terms & Condition</a>  |  <a href="#">Privacy Policy</a></p>
      
      <p class="s11_para-last"><a href="">About Us</a> | <a href="">FAQs</a>  |  <a href="">Suggest a Vendor</a> | <a href="">Send Feedback</a>
        <br><br>
      &copy;2017 Techworm Solutions</p>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>