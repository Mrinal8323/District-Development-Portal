<?php

if(isset($_POST['csubmit'])){
  $host="localhost";
  $user="root";
  $pwd="";
  $dbname="jbp";
  $conn=mysqli_connect($host,$user,$pwd,$dbname);
    if ($conn) {
      $pno=$_POST['pno'];
      $problem=$_POST['cmsg'];
      $query="INSERT INTO problem(pno,problem) VALUES('$pno','$problem')";
        if(mysqli_query($conn,$query)){
            echo "Thank You for submitting problem";

        }else{
            echo  "Operation failed";
  }
}
}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>portal</title>
    <link rel="stylesheet" href="jdpdistrict.css">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/abibas" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style media="screen">
  <style media="screen">
  .box1 {
    background-color: #001a1a;
    width: 50%;
    margin: auto;
    padding: 50px;
    border: 2px solid black;
  }
  h1{
    text-align: center;
  }
  </style>

  </head>
  <body id="sattu_bdy">




    <div id="sattu_hed" class="Container">
      <!––<div class="jumbotron"> ––>
<table>
  <tr>
    <td><img id="sattu_logo1"  src="slogo1.png" alt=""></td>
    <td><h2 id="sattu_h2">  &nbsp&nbsp&nbsp&nbsp<b> DISTRICT DEVELOPMENT PORTAL , JABALPUR </b></h2>
      <h2 id="sattu_h2">&nbsp&nbsp&nbsp&nbsp<b> जिला विकास मंच , जबलपुर </b> </h2></td>
  </tr>
</table>

<!––</div>
</div>

<nav id="sattu_nav" class="navbar navbar-default  navbar-fixed-top">
  <div class="container">



      <ul id="sattu_nav" class="nav navbar-nav">

        <li> <a href="index.html"><b style="color:#845422	;">Home </b></a> </li>
        <li> <a href="#"><b style="color:#845422	;">Upload Solutions </b></a> </li>
        <li> <a href="#"><b style="color:#845422	;"> About us</b></a> </li>
      </ul>

      <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
      </form>

    <ul  id="sattu_nav"class="nav navbar-nav navbar-right">
      <li class="Log in">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <b style="color:#845422">Log In</b> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="C:\Users\anvesh.MAA\Desktop\FE\FN1\student_log_inpg.html">Student Log In</a> </li>
          <li><a href="C:\Users\anvesh.MAA\Desktop\FE\FN1\admin_login.html">Administrator Log In</a> </li>
        </ul>
      </li>
      <li><a href="C:\Users\anvesh.MAA\Desktop\FE\FN1\registration_pg.html"> <b style="color:#845422">Registration</b></a> </li>
      <li><a href="#"><span class="glyphicon glyphicon-bell"></span> <b></b></a> </li>
    </ul>
  </div>

</nav>
 <div class="pbox">

   <h1>Enter Problem Statement </h1>

   <div class="box1">
   <form class="CommentForm" action="" method="post">
     <input type="text" name="pno" placeholder="Enter Problem ID" style="width:45%"> <br><br>
   <textarea name="cmsg" rows="4" cols="40" style="width:90.5%" placeholder="Enter problem statement here here......"></textarea>
   <br/>
   <input type="submit" name="csubmit" value="Post">
   <input type="reset" name="creset" value="reset">
   </div>
   </form>


 </div>



  </body>



  <script  src="http://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
