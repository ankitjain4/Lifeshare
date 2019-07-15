<?php


if(isset($_POST['filter']))
{
    $value = $_POST['value'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `donor` WHERE CONCAT(`name`, `date_of _birth`, `blood_group`, `suffering_from`, `email`, `number1`, `flat`, `colony`, `landmark`, `city`, `state`) LIKE '%".$value."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `donor`";
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
                font-size: 25px

            }
            .c2{
                
                background-color: #A1D5E7;
                background-size: cover;
            }
            .c3{
                
                font-size: 30px;
                color: #0C0B0B;
                
                padding: 10px;
            }
            .c4{
                height: 28px;
                width: 190px;
                background: transparent;
                border-style: double;
                color: #0C0B0B;
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
                width: 160px;
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
        
        <form action="donor_data.php" method="post">
             <center> <h3> Filter By Location/User Name/Location etc.</h3></center>

          <center>  <input class="c4" type="text" name="value" placeholder="VALUE TO SEARCH"><br><br></center>
           <center><input class="c6" type="submit" name="filter" value="Filter"><br><br></center>
         

          
          <br><br>
          <p align="right"><a href="logout.php">Logout</a></p>
            
            <table class="c8">
                
                     <th colspan="11"  class="c3"> DONOR DATA </th>

                <tr>
                    <th class="c1">Name</th>
                    <th class="c1" >Date_of_Birth</th>
                    <th class="c1">Blood_Group</th>
                    <th class="c1">Suffering from</th>
                    <th class="c1">Email</th>
                    <th class="c1">Phone Number</th>
                    <th class="c1">Flat Number</th>
                    <th class="c1">Colony</th>
                    <th class="c1">Landmark</th>
                    <th class="c1">City</th>
                    <th class="c1">State</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['date_of _birth'];?></td>
                    <td><?php echo $row['blood_group'];?></td>
                    <td><?php echo $row['suffering_from'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['number1'];?></td>
                    <td><?php echo $row['flat'];?></td>
                    <td><?php echo $row['colony'];?></td>
                    <td><?php echo $row['landmark'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['state'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        
         

        
    </body>
</html>