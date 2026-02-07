<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Bootstrap css ends -->
      <!-- CSS link -->
       <link rel="stylesheet" href="style.css">
       <!-- CSS ends -->
    <title>Document</title>
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
    <div class="welcome">WELCOME</div>
    <div class="container-flex">
    <div class="my-form mx-auto">

    <!-- Form -->
        <form action="" method="POST">
            <div class="login">
              CREATE ACCOUNT
            </div>
            <div class="taking_input">
                <img class="user" src="photos/user.png">
                <input type="text" placeholder="Enter customer name" name="cname">
            </div>
          
            <div class="taking_input">
                <img src="photos/phone.png" class="phone">
                <input type="text" placeholder="Enter phone no." name="phone">
            </div>
           
            <div class="taking_input">
                <img src="photos/balance.png" class="balance">
                <input type="text" placeholder="Enter Balance" name='balance'>
            </div>
             <div class="control">
                <input type="submit" class="btn btn-success" value="Submit" name="submit">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
        </form>
        <!-- Form ends -->
        <div class="image">
        <img src="photos/loginbg.png">
        </div>
    </div>
  
    </div>

    <!-- Data entry -->
     <?php include('connect.php'); ?>
     <?php

    if(isset($_POST['submit']))
    {
        $cname=$_POST['cname'];
        $phone=$_POST['phone'];
        $balance=$_POST['balance'];

        $sql="insert into customer 
        set cname='$cname', phone='$phone', balance='$balance'";

        $res=mysqli_query($conn,$sql);

      if($res==true)
        {
            header("Location:create.php");
        }
        else{
            $_SESSION['submit']="Duplicate Value not possible";
            header("Location:create.php");
        }
    }

     ?>
    <!-- Bootstrap JS Bundle-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>