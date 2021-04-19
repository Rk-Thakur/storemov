<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>
  <!-- header -->
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
  <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="index.php">
              <img src="uploads/logo.jpg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-14.5 h-14 text-white   rounded-full" viewBox="0 0 24 24">
        <span class="ml-3 text-xl text-3xl text-bold text-white">StoreMov </span>
      </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="#hero">HOME</a>
      <a class="mr-5 hover:text-gray-900" href="#video">VIDEO</a>
      
    <a href="login.php" class=" text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-400 rounded text-lg  "><i class="fas fa-sign-in-alt"></i></a>
    
    </nav>
  </div>
</header>

<!-- hero area -->
<div class="relative pt-16 pb-32 flex content-center items-center justify-center " style="min-height: 95vh" id="hero">
    <div
      class="absolute top-0 w-full h-full bg-center   bg-cover"
      style="background-image: url('uploads/logo.jpg');">
      <span
        id="blackOverlay"
        class="w-full h-full absolute opacity-75 bg-black"
      ></span>
    </div>
    <div class="container relative mx-auto" >
      <div class="items-center flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
          <div>
            <h1 class="text-white font-semibold text-5xl animate__animated animate__fadeInUp animate__delay-1s" >
              Store The <span class="text-red-500">Movie</span>
            </h1>
            <p class="mt-4 text-lg text-gray-300 font-medium animate__animated animate__fadeInUp animate__delay-1s">
              Welcome to The StoreMov . Best Platform for the privacy. Upload and Watch it.
            </p>
            <!-- <a
              href="#"
              class="bg-transparent hover:bg-orange-500 text-orange-500 font-semibold hover:text-white p-4 border border-orange-500 hover:border-transparent rounded inline-block mt-5 cursor-pointer"
              >Download Brochure</a
            > -->
            <div class="flex justify-center ">
              <a href="#video" class="inline-flex text-white bg-red-500 border-0 py-2 px-6  hover:bg-red-600 rounded text-lg  font-semibold  p-4 border border-orange-500  rounded inline-block mt-5 animate__animated animate__fadeInUp animate__delay-1s">Watch</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
  <!-- videos area -->
  <section class="text-gray-600 body-font" id="video">
        <div class="container px-5 py-24 mx-auto">
            <!-- store and rewatch your video -->
            <div class="flex flex-col">
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                  <div class="w-24 h-full bg-indigo-500"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                  <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">Store and Rewatch Your Video</h1> 
                </div>
            </div>
            <!-- video  -->
          <div class="flex flex-wrap -mx-4 -mb-10 text-center">
          <?php
    include('config.php');
    $query="SELECT * FROM video ORDER BY id desc LIMIT 10";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
            <div class="sm:w-1/2 mb-10 px-4">
              <div class="rounded-lg h-64 overflow-hidden">
                
                <?php echo '<video src="uploads/'.$row["file"].'" class="object-cover object-center h-full w-full"  autoplay muted controls loop ?>'?>
                <?php echo '</video>';?>
              </div>
              </a>
              <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><?php echo $row["name"]; ?></h2>
              <p class="leading-relaxed text-base"><?php echo $row["description"]; ?></p>
            </div>
            <?php
    }
  }
  ?>
          </div>
        </div>
  </section>
</body>
</html>