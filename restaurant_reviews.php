<?php

include 'db.php';

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- <title>Document</title> -->
    </head>
    <body>
    <div class="container">
        <h1><ins><b><i><center>Restaurant Reviews</center></i></b></ins></h1>
        <div class="head">
        <table class="table  text-center table-bordered mt-4 mb-3" style="border: 2px solid black;">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Review</th>
                </tr>
            </thead>
                    <?php

                    $query = "SELECT * FROM `restaurant_contact`";
                    $run = mysqli_query($conn, $query);
                    if($run){
                        while ($row = mysqli_fetch_assoc($run)) {
                            // echo $row['user'];
                            ?>
            <tbody>
                <tr>
                <th scope="row"><?php echo $row['user']; ?></th>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['message']; ?></td>
                </tr>
                <?php
                    }
                }
            ?>    
            </tbody>
        </table>
        </div>
    </div>
        
    </body>
    </html>