<?php include "../backend/function_loggedin.php";
    include "../backend/config.php";
    if(isset($_POST['submit'])){
        $data1 = mysqli_real_escape_string($con,$_POST['marks1']);
        $data2 = mysqli_real_escape_string($con,$_POST['marks2']);
        $data3 = mysqli_real_escape_string($con,$_POST['marks3']);
        $data4 = mysqli_real_escape_string($con,$_POST['marks4']);

        if ($data1 != "" && $data2 != "" && $data3 != "" && $data4 != ""  ){
            echo "Hello Debug Test1";
            $sql_insert_datarow_1 = "INSERT INTO physical_resource_management_main (School_ID,Activity_Number,Marks,Session_Name) VALUE ('{$_SESSION['school_id']}','7.7.1',$data1,'{$_SESSION['username']}')";

            $sql_insert_datarow_2 = "INSERT INTO physical_resource_management_main (School_ID,Activity_Number,Marks,Session_Name) VALUE ('{$_SESSION['school_id']}','7.7.2',$data2,'{$_SESSION['username']}')";

            $sql_insert_datarow_3 = "INSERT INTO physical_resource_management_main (School_ID,Activity_Number,Marks,Session_Name) VALUE ('{$_SESSION['school_id']}','7.7.3',$data3,'{$_SESSION['username']}')";

            $sql_insert_datarow_4 = "INSERT INTO physical_resource_management_main (School_ID,Activity_Number,Marks,Session_Name) VALUE ('{$_SESSION['school_id']}','7.7.4',$data4,'{$_SESSION['username']}')";


            $result_1 = mysqli_query($con,$sql_insert_datarow_1);
            $result_2 = mysqli_query($con,$sql_insert_datarow_2);
            $result_3 = mysqli_query($con,$sql_insert_datarow_3);
            $result_4 = mysqli_query($con,$sql_insert_datarow_4);

            if($result_1 && $result_2 && $result_3 && $result_4 ){ }else{
            echo("Error description: " . mysqli_error($con));}

        

    }

}

$marks1 = "";
$sql = "SELECT  Marks FROM physical_resource_management_main WHERE Activity_Number ='7.7.1' && School_ID ='{$_SESSION['school_id']}' order by Physical_Resource_Management_ID desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks1 = $row["Marks"];  } // The value we usually set is the primary 

}


$marks2 = "";
$sql = "SELECT  Marks FROM physical_resource_management_main WHERE Activity_Number ='7.7.2' && School_ID ='{$_SESSION['school_id']}' order by Physical_Resource_Management_ID desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks2 = $row["Marks"];  } // The value we usually set is the primary 

}

$marks3 = "";
$sql = "SELECT  Marks FROM physical_resource_management_main WHERE Activity_Number ='7.7.3' && School_ID ='{$_SESSION['school_id']}' order by Physical_Resource_Management_ID desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks3 = $row["Marks"];  } // The value we usually set is the primary 

}

$marks4 = "";
$sql = "SELECT  Marks FROM physical_resource_management_main WHERE Activity_Number ='7.7.4' && School_ID ='{$_SESSION['school_id']}' order by Physical_Resource_Management_ID desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks4 = $row["Marks"];  } // The value we usually set is the primary 

}

 ?>
<!doctype html>
<html lang="en">
<head>
   
    <style >

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}



.styled-table thead tr {
    background-color: #968c8c;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid    #968c8c;
}

.form-submit-button {
background: #968c8c;
color: white;
border-style: outset;
border-color: #968c8c;
height: 50px;
width: 200px;
font: bold15px arial,sans-serif;
text-shadow: none;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=file] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=date] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}

input[type=number]:focus {
  border: 3px solid #555;
}

input[type=file]:focus {
  border: 3px solid #555;
}

input[type=date]:focus {
  border: 3px solid #555;
}




</style>


    <meta charset="utf-8" />
    <link rel="icon" type="../.././image/png" href="../.././assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SBQE & AI - Form</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="../.././bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="../.././assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="../.././assets/css/demo.css" rel="stylesheet" />
    <link href="../.././assets/css/form.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
    <?php include ".././backend/navbar.php";?>

<div class="wrapper">

    <div class="main">
        <div class="section">
         <div class="container tim-container">
            <div class="tim-title">
                <h3><b>School Based Quality Education & Assessment Indicators</b></h3>
            </div>


<form action="" method="POST">
<table class="styled-table">
  <h3> 7. Physical Resource Management</h3>
  <p>Awarding marks: Award marks for each indicator according to the following rating scales using the descriptions
given in the indicators.</p>

<p>01 mark – Immediate development required </p>
<p>02 marks – Development required</p>
<p>03 marks - Satisfactory</p>
<p>04 marks – Good </p>
<p>05 marks – Very good</p>
<p>06 marks - Excellent </p>
  <thead>
  <tr>
    <th ></th>
    <th>Indicator</th>
    <th> Marks</th>
  </tr>
</thead>

  <tr class="active-row" >
    <td>7.7.1</td>
    <td>The computer unit is maintained as a clean and tidy place while 
creating a stimulating learning environment and maintaining and 
updating hardware and software properly</td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" required ></td>
    
  </tr>

    <tr class="active-row" >
    <td>7.7.2</td>
    <td>All computers are marked with a proper numbering to support 
system and a series of guidelines and visual aids to support their use are 
on display</td>
    <td><input type="number"  autocomplete="off" name="marks2" value="<?php echo $marks2; ?>" required ></td>
    
  </tr>

   <tr class="active-row" >
    <td>7.7.3</td>
    <td> All relevant documents held in the information and communication 
centre are used in computer units accord with the centre’s handbook (log 
entry book, lists of goods, stable assets, consumables, documents and 
record books etc.)</td>
    <td><input type="number"  autocomplete="off" name="marks3" value="<?php echo $marks3; ?>" required ></td>
    
  </tr>

  <tr class="active-row" >
    <td>7.7.4</td>
    <td> The learning-teaching process is facilitated with good quality 
internet access and different software resources</td>
   <td><input type="number"  autocomplete="off" name="marks4" value="<?php echo $marks4; ?>" required ></td>
    
  </tr>

  



    <tr class="active-row" >
    <td></td>
    <td>Total Marks for the criterion</td>
     <td><input type="number"  autocomplete="off" name="" value="<?php echo $total_marks = $marks1 + $marks2 + $marks3 + $marks4; ?>" disabled ></td>
    <?php $_SESSION["physical.7_7"] = $total_marks; ?>
    <?php echo "Marks Total"."  ". $_SESSION["physical.7_7"]; ?>
  </tr>


  
</table>
<center> <input class="form-submit-button "  type="submit"  id="submit_primary_section" name="submit" placeholder='Sumbit' onclick="register(event)">
</center>
</form>

    

<a  style="float:right; color: black"; href=" physical.7.8.php" >Go to next page</a>
<a  style="float:left; color: black;" href="physical.7.6.php" >Go to previous page</a>


                
            <br> <br>

            </div>
    </div>
</div>




<?php include ".././backend/footer.php";?>
</div>


</body>

    <script src="../.././assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../.././assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

    <script src="../.././bootstrap3/js/bootstrap.js" type="text/javascript"></script>

    <!--  Plugins -->
    <script src="../.././assets/js/ct-paper-checkbox.js"></script>
    <script src="../.././assets/js/ct-paper-radio.js"></script>
    <script src="../.././assets/js/bootstrap-select.js"></script>
    <script src="../.././/js/bootstrap-datepicker.js"></script>

    <script src="../.././assets/js/ct-paper.js"></script>
</html>
    