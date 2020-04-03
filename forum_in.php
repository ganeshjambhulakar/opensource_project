<!DOCTYPE html>
<html lang="en">

<head>
<title>Forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="main.css">
</head>


<body>

<!-- ################################################################################################ -->
<div id="form">
  <center><div class="design1">Registration Forum</div></center>




<form id="myform"  action="Forum_record.php"  method="post" enctype="multipart/form-data" >

<div class="formgroup" id="name-form">
    <label for="name">Your First_Name*</label>
    <input type="text" id="firstName" name="firstName" />
</div>

<div class="formgroup" id="name-form">
    <label for="name">Your Last_Name*</label>
    <input type="text" id="lastName" name="lastName" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">Your e-mail*</label>
    <input type="email" id="email" name="email" />
</div>


  <input type="submit" value="SUBMIT THE DATA" />
</form>

</div>


<div>
  <h3>Previous Submitted Data In DESC Order By Name</h3>


<?php
include('db.php');
$result = mysqli_query($conn,"SELECT * FROM `assign` ORDER BY `firstName` DESC");
?>

    <table algin = "center" border="1px" style="width:600px; line-height:40px;">
      <tr>
        <th colspan="4"><h4>Records</h4></th></th>
      </tr>
      <t>
        <th> ID </th>
        <th> firstName </th>
        <th> lastName </th>
        <th> email </th>
      </t>
    <?php
        while($row=mysqli_fetch_array($result))
        {
    ?>
          <tr>
            <td><?php echo ($row['Id']);?></td>
            <td><?php echo ($row['firstName']);?></td>
            <td><?php echo ($row['lastName']);?></td>
            <td><?php echo ($row['email']);?></td>
          </tr>
      <?php
        }
      ?>
    </table>
    


</div>



</body>
</html>