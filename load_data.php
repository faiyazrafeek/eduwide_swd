<?php 
    include("connection.php");

    $query = "SELECT * FROM students ORDER BY id ASC";

    $res = mysqli_query($conn, $query);

    $output = "";

    $output .= "
        <table class='table table-bordered table-striped'>
            <tr>
                <th width='5%'>ID</th>
                <th width='40%'>Name</th>
                <th width='10%'>Batch</th>
                <th width='20%'>Course</th>
                <th width='20%'>Actions</th>
            </tr>
       
    ";

    echo "<a href='add_user.php'>
        <button class='btn btn-success my-3 btn-sm'>Add New User</button>
    </a>";

    if(mysqli_num_rows($res) < 1){
        $output .= "
            <tr>
                <td class='text-center' colspan='4'>No data</td>
            </tr>
        ";
    }

    while($row = mysqli_fetch_array($res)){
        $output .= "
            <tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['batch']."</td>
                <td>".$row['course']."</td>
                <td>
                    <div class='col-md-12'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <a href='edit_user.php?id=".$row['id']."'>
                                    <button id='".$row['id']."' class='btn-sm btn btn-primary col-md-12'>Edit</button>
                                </a>
                            </div>
                            <div class='col-md-6'>
                                <button id='".$row['id']."'  class='delete btn-sm btn btn-danger col-md-12'>Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        ";
    }



    echo $output;



?>