<?php


if(isset($_POST['filter']))
{
    $value = $_POST['value'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `hospital` WHERE CONCAT(`name`, `units_ap`, `units_an`, `units_bp`, `units_bn`, `units_abp`, `units_abn`, `units_op`, `units_on`, `email`, `number`, `street`, `landmark`, `city`, `state`, `price`, `delivery`) LIKE '%".$value."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `hospital`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "lifeshare");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body class="c2">
        <style type="text/css">

            .c1{
                color: black;
                font-weight: bold;

            }
            .c2{
                
                background-color: #228B22;
                background-size: cover;
            }
            .c3{
                
                font-size: 30px;
                color: #ffffff;
                
                padding: 10px;
            }
            .c4{
                height: 28px;
                width: 160px;
                background: transparent;
                border-style: double;
                color: black;
                font-size: 18px;
                text-align: center;
                margin-top:20px;

            }
            .c6{
                background: black;
                color: white;
                height: 30px;
                width: 110px;
                border: transparent;
                font-size: 18px;
            }
             .c7{
                background: black;
                color: white;
                height: 40px;
                width: 180px;
                border: transparent;
                font-size: 15px;
                margin: auto;


            }
            .c6:hover{
                background: white;
                color: black;
            }
            .c7:hover{
                background: white;
                color: black;
            }
            .c8{
                width:50%; 
                height:100%;
                 margin: auto;
            }
        </style>
        
        <form action="sabrang_solo_event_data.php" method="post">
             <center> <h3> Filter By Location/User Name/Hospital Name etc.</h3></center>

          <center>  <input class="c4" type="text" name="value" placeholder="VALUE TO SEARCH"><br><br></center>
           <center><input class="c6" type="submit" name="filter" value="Filter"><br><br></center>
         

          
          <br><br>
          <p align="right"><a href="logout.php">Logout</a></p>
            
            <table class="c8">
                
                     <th colspan="18"  class="c3"> HOSPITAL DATA </th>

                <tr>

                    <th class="c1">NAME</th>
                    <th class="c1">Units of A+ve</th>
                    <th class="c1">Units of A-ve</th>
                    <th class="c1">Units of B+ve</th>
                    <th class="c1">Units of B-ve</th>
                    <th class="c1">Units of AB+ve</th>
                    <th class="c1">Units of AB-ve</th>
                    <th class="c1">Units of O+ve</th>
                    <th class="c1">Units of O-ve</th>
                    <th class="c1"></th>
                    <th class="c1">Email</th>
                    <th class="c1">PHONE NO</th>
                    <th class="c1">Street</th>
                    <th class="c1">Landmark</th>
                    <th class="c1">City</th>
                    <th class="c1">State</th>
                    <th class="c1">Price</th>
                    <th class="c1">Delivery Available</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td class="c1"><?php echo $row['name'];?></td>
                    <td><?php echo $row['units_ap'];?></td>
                    <td><?php echo $row['units_an'];?></td>
                    <td><?php echo $row['units_bp'];?></td>
                    <td><?php echo $row['units_bn'];?></td>
                    <td><?php echo $row['units_abp'];?></td>
                    <td><?php echo $row['units_abn'];?></td>
                    <td><?php echo $row['units_op'];?></td>
                    <td><?php echo $row['units_on'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['number'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        
         

        
    </body>
</html>