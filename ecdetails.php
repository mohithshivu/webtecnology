    <!DOCTYPE html>
    <html>
    <head>
    <title>Customer Details</title>
    <style>
   
     form{padding-top :120px;
			text-align :center;
            font-size: 20px;
			}
		
		h1{text-align:  center;}
		h3{color:blue;}
        title
        {
           text-align :center; 
        }
		body{
		
	    
		background-color: white;
	}
	 table {
    border-collapse: collapse;
    width: 100%;
    color: #000000;
    font-family: inherit;
    font-size: 25px;
    text-align: left;
    }
        .table-title {
    padding-bottom: 15px;
    background: #299be4;
    color: #ffffff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
    th {
    background-color: #000000;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
	

    </style>
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css"> 
    </head>
    <body>
	<h1 style="color: 'green';postion: 'center';">CUSTOMER DETAILS</h1>
    	<table>
    <tr>
    <th>Customer_Id</th>
    <th>First Name</th>
	<th>Last Name</th>
    <th>Bod</th>
	<th>Email</th>	
	<th>Price</th>    
	</tr>
    <?php
	
    $conn = mysqli_connect("localhost", "root", "", "car");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM customer";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
     
   					
   			 							echo "<tr><td>" . $row["c_id"]. "</td><td>" . $row["fname"] . "</td><td>".$row["lname"] . "</td><td>". $row["dob"] . "</td><td>". $row["email"] . "</td><td>".$row["cost"] . "</td></tr>";
    		}	
    } else { echo " zero records"; }
    $conn->close();
    ?>
   </table> 
	
	
	<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-2"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="employeview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
	</div>
    </body>
    </html>
