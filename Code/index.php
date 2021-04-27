<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

  <title>Willow Green</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://kit.fontawesome.com/0493cbe504.js" crossorigin="anonymous"></script>
  <style type="text/css">


@import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,400;1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,400;1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,700&display=swap');

    <?php include "navbar/navbarCSS.php"; ?>

    .cards{
      width: 100vw;
      margin: 10px auto;
    }

    .row_cards{
      margin: 10px auto;
    }

    .myrow{
display: flex !important;
justify-content: space-around !important;
}

.mycard{
translate:.5s ease-in-out !important;
box-shadow : 3px 3px #888888 !important;
}

.mycard:hover{
cursor : pointer;
transform : scale(1.1);
}

.myimg{
  height: 200px;
}

.body-custom{
  font-family: 'Mulish', sans-serif;
}

.custom-heading{
  font-family: 'New Tegomin', serif;
  font-size: 50px;
}
.quotes{
  font-size: 35px;
  font-family: 'Noto Serif', serif;
}
.btn {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:#add8e6;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  margin-top: 200px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.centered {
  color: #ffffff;
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
}

  </style>
</head>

<body>
  <?php include "navbar/navbar.php"; ?>
   <div >
     <div id="carouselIndicators" class="carousel slide" data-ride="carousel" style="width: 100%; ;">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img class=" d-block w-100" src="images/hospital.jpg" alt="First slide" height="700">
           <div class="carousel-caption d-none d-md-block">
           </div>
         </div>
         <div class="carousel-item">
           <img class="d-block w-100 " src="images/one.jpg" alt="Second slide"height="700">
         </div>
         <div class="carousel-item">
           <img class="d-block w-100" src="images/three.jpg" alt="Third slide"height="700">
         </div>

       </div>
       <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
</div>

  <!-- welcome!! -->
  <div class="jumbotron" id="Welcome">
  <div class="sections_group" style="padding-top:30px;" >


  </div>
  </div>

  <!--Cards-->
  <

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
