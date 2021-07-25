<?php 
  include("connection.php");
  $id = $_GET['id'];

  $query = "SELECT * FROM students WHERE id = '$id'";
  $res = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($res);

  $n = $row['name'];
  $b = $row['batch'];
  $c = $row['course'];


  if(isset($_POST['edit_user'])){
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $course = $_POST['course'];


    $query = "UPDATE students SET name = '$name', batch = '$batch', course = '$course' WHERE id = '$id' ";

    $res = mysqli_query($conn, $query);

    if($res){
      echo "<script>alert('User Updated)</script>";

      header("location:index.php");
    }else{
      echo "<script>alert('Failed update')</script>";
    }
  }
  
  if(isset($_POST['cancel'])){
    header("location:index.php");
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP CRUD | Add New User</title>
  </head>
  <body>
          <div class="container">
              <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-4">

                      </div>
                      <div class="col-md-4 my-5">
                          <h4 class="text-center my-2">Add new User</h4>

                          <form method="POST">
                              <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $n ?>" autocomplete="off" required>
                              </div>
                              <div class="mb-3">
                                <label for="batch">Batch</label>
                                <input type="text" name="batch" class="form-control" value="<?php echo $b ?>" autocomplete="off" required>
                              </div>
                              <div class="mb-3">
                                <label for="course">Course</label>
                                <input type="text" name="course" class="form-control" value="<?php echo $c ?>" autocomplete="off" required>
                              </div>
                            
                              <div class="mb-3">                              
                                <input type="submit" name="edit_user" value="Edit User" class="btn btn-primary">
                                <input type="submit" name="cancel" value="Cancel" class="btn btn-secondary">
                              </div>
                          </form>
                    </div>
                    <div class="col-md-4">
                          
                    </div>
                  </div>
              </div>
          </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>