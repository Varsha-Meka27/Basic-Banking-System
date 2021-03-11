<html>
<head>
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
    
<body style="background-color : aquamarine;">
<style>
    body{
        background-image: url(history.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        <br>
        <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered" bgcolor="#b3ffe6">
        <thead style="color : black;">
        <tr>
            <th class="text-center">Sl.No</th>
            <th class="text-center">Sender</th>
            <th class="text-center">Receiver</th>
            <th class="text-center">Amount</th>
        </tr>
        </thead>
            <tbody>
            <?php
                include 'config.php';

                $sql ="SELECT * FROM transfer_details";

                $query =mysqli_query($conn, $sql) or die( mysqli_error($conn));

                while($rows = mysqli_fetch_assoc($query))
                {
            ?>
                <tr style="color : black;">
                <td class="py-2" style="text-align:center"><?php echo $rows['id']; ?></td>
                <td class="py-2" style="text-align:center"><?php echo $rows['sender']; ?></td>
                <td class="py-2" style="text-align:center"><?php echo $rows['receiver']; ?></td>
                <td class="py-2" style="text-align:center"><?php echo $rows['amount']; ?> </td> 
                </tr>
        
            <?php
                }
            ?>
            </tbody>
        </table>
        </div>
    </div>
    <a href="home.php"><h1>Click Here to go back to Home Page</h1></a>
</body>
</html>