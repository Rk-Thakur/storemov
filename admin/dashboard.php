<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<!-- to do  list -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


</head>

<body>

    



<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
      <a class="mr-5 hover:text-gray-900" >Welcome, <?php  echo $_SESSION['uname'] ?></a>
      
    </nav>
    
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0" href="dashboard.php">
              <img src="../uploads/logo.jpg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-14.5 h-14 text-white   rounded-full" viewBox="0 0 24 24">
        <span class="ml-3 text-xl text-3xl text-bold text-white">StoreMov </span>
      </a>
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="#hero">HOME</a>
      <a href="logout.php" class=" text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-400 rounded text-lg  "><i class="fas fa-sign-in-alt"></i></a>

    </nav>
    </div>
  </div>
</header>



<!-- Admins -->
<div class=" info  " >

        <p class="  text-5xl  text-center font-bold m-5">Admin  </p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Name</th>
                <th class="px-4 py-3 text-center">Password</th>
                <th class="px-4 py-3 text-center">Action</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php
                  include_once("../config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM login_admin ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                    <tr >
                    <td class="px-4 py-3 text-center"><?php echo $count; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["username"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["password"]; ?></td>
                    <td  class="px-4 py-3 text-center "><a href="deleteadmin.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a></td>

                    
                    </tr>
                    <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
              </tr>
            </tbody>
          </table>
</div>


<!-- Users -->
<div class=" info  " >

        <p class="  text-5xl  text-center font-bold m-5">Users  </p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Name</th>
                <th class="px-4 py-3 text-center">Password</th>
                <th class="px-4 py-3 text-center">Action</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php
                  include_once("../config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM login_user ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                    <tr >
                    <td class="px-4 py-3 text-center"><?php echo $count; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["username"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["password"]; ?></td>
                    <td  class="px-4 py-3 text-center "><a href="deleteuser.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a></td>

                    
                    </tr>
                    <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
              </tr>
            </tbody>
          </table>
</div>

<!-- videos -->

<div class="info " >
        <p class="  text-5xl  text-center font-bold m-5">Videos</p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Video</th>
                <th class="px-4 py-3 text-center">Name </th>
                <th class="px-4 py-3 text-center">Description</th>
                <th class="px-4 py-3 text-center">By WHOM?</th>
                <th colspan="2" class="px-4 py-3 text-center" >ACTION</th>

              </tr>
            </thead>
            <tbody>
              <tr>
            <?php
                  include_once("../config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM video ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr>
                  <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>
                    <td class="px-4 py-3 text-center" id="image">  <?php echo '<video src="../uploads/'. $row["file"].'"height= "350" width="350"  autoplay muted controls loop>'; ?></td>
                    


                    <td class="px-4 py-3 text-center"><?php echo $row["name"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["description"]; ?></td>
                    <td class="px-4 py-3 text-center" ><?php  echo $row["bywhom"] ?></td>

            <td  class="px-4 py-3 text-center"><a href="deletevideo.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a></td>
                    
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
                  </tr>
            </tbody>
          </table>
        </div>
    </div>




    


    
</body>
</html>