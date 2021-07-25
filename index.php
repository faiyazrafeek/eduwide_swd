<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <title>PHP CRUD</title>
  </head>
  <body>
      <div class="container">
          <div class="col-md-12 my-5">
              <div class="result">

              </div>
          </div>
      </div>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            load_data();
            function load_data() {
                $.ajax({
                    url:"load_data.php",
                    method: "POST",
                    success:function(data){
                        $(".result").html(data);
                    }
                })
            }

            $(document).on('click', '.delete', function(){
                var id = $(this).attr("id");

                $.ajax({
                    url: "delete_user.php",
                    method:"POST",
                    data: {id:id},
                    success:function(data){
                        load_data();
                    }
                })
            });
        })
    </script>
  </body>
</html>