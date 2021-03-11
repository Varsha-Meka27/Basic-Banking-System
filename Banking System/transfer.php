<html>
<head>
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color : aquamarine;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2" style="text-align:center"><?php echo $rows['id'] ?></td>
                        <td class="py-2" style="text-align:center"><?php echo $rows['name']?></td>
                        <td class="py-2" style="text-align:center"><?php echo $rows['email']?></td>
                        <td class="py-2" style="text-align:center"><?php echo $rows['balance']?></td>
                        <td style="text-align:center"><a href="users.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
        <a href="home.php"><h1>Click Here to go back to Home Page</h1></a>
</body>
</html>