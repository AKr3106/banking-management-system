 
<?php
include("connect.php");
$msg="";
 if(isset($_POST['delete']))
{
    $id=$_POST['id'];
    $stmt=$conn->prepare("select * from customer where id=?");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows>0)
    {
        $stmt=$conn->prepare("delete from customer where id=?");
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $msg="<h2 style='color:blue'>DATA DELETED</h2>";
    }
    else
    {
        $msg="<h2 style='color:red'>DATA NOT FOUND</h2>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" >Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li> -->
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="photos/account.png" >Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="create.php"><img src="photos/create.png" >Create </a></li>
                <li><a class="dropdown-item" href="delete.php"><img src="photos/delete.png" >Delete</a></li>
                <li><a class="dropdown-item" href="modify.php"><img src="photos/modify.png" >Modify</a></li>
                <li><a class="dropdown-item" href="searching.php"> <img src="photos/search.png" >Search</a></li>
              </ul>
            </li>
          </ul>
       
        </div>
      </div>
    </nav>
    
    <div class="welcome">Customer Data Delete</div>
    <div class="container">
    <div class="my-form-2 mx-auto">
        <form action="" method="POST">
             <div class="login">
                DELETE YOUR DATA
            </div>
            <div class="search_side">
            <div class="taking_input">
                <img src="photos/id.png" style="margin-right:10px;">
                <input type="text" placeholder="Enter Customer id" name="id">
            </div>
            <div class="control-2">
                <button class="btn btn-primary" type="submit" name="delete">Delete</button>
            </div>
            </div>
        </form>

    </div>
        <!-- <div class="output"> -->
        <div class="heading2">
            <?php echo $msg; ?>
       
        </div>
    <!-- </div>
  -->
       <!-- Bootstrap JS Bundle-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>