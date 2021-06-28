<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
          box-sizing:border-box;
          margin:0;
          padding:0;

        }
        .flex_first{
          
            width: 100%;
            height: 60vh;
background-color: black;
flex-direction: row;
display: flex;
        }
        .in_first{
            flex: 40%;

        }
      
      .in_second{
          position:relative;
          flex: 60%;
          overflow: hidden;
      }
      .poster{
      
         margin-top: 25%;
          padding: 20px 20px 20px;

    margin-left: 12%;
    text-align: center;
    }
#btn_fist{

  margin-top:3.5px;
    background-color: aqua;
    border-radius: 3px;
    border:none;
    width:100px;
    
    line-height:30px;
  }
.card-component{
 display:grid;
 grid-template-columns: auto auto auto;
item-align:center;
 
}
.con_card{
  display:flex;

}
/* card  here _____________________________*/
#card21{
padding-right:10%;
padding-left:10%;
margin-top:25px;
margin-bottom:25px

  width:100%;
 
}
.flexcard{
  float:right;
  margin-right: 2%;
  margin-left: 2%;
 

  display:flex;
  flex-direction:column;
  width:16%;

  height: 250px;
  box-shadow:0 0 20px #878585;
  

}
.firstimage{
  flex: 50%;
}
.firstimage article{
  padding: 10px 10px 10px 10px;
  text-align: center;
}
/*************************************======== */
.imageslider{

  padding:5px 11% 5px 11%;
 height:auto;
 background-color:black;
 width:100%;
 display:flex;
 flex-direction:row;
}
.imageslider_part{
  height:auto;
  padding:10px 10px 10px 10px;
  background-color:black;
  width:50%;
 
 
}

/* button of the */
#first_art{
  margin-top:20px;
  width:100px;
  background-color:transparent;
  color:white;
  border-radius:3px;
  border:2px solid white;
}
#first_art:hover{
  background-color:white;
  color:black;
}
#second-art{
  width:100px;
  margin-top:20px;
  border-radius:3px;
  border:2px solid white;
  background-color:white;
  color:black;
}
#second-art:hover{
  width:100px;
  background-color:transparent;
  color:white;
  border-radius:3px;
  border:2px solid white;
}



article span{

  margin-left:30px;
}
/***** faculty =================== */
/* faculty ==============*/
.faculty{

  width:100%;
  text-align:center;
  padding-right:30%;
  padding-left:30%;

  

}
.abhi{
 
text-align:center;
}
  #btn_fist:hover{
      box-shadow: 0 0 3px white, 0 0 3px aqua, 0 0 3px aqua, 0 0 3px aqua, 0 0 3px aqua, 0 0 3px aqua, 0 0 3px aqua;
  }
      /* it is responsive */

      @media (max-width:1025px){
.flex_first{
    flex-direction: column;


}
/*=============*/
.faculty{

width:100%;
text-align:center;
padding-right:10%;
padding-left:10%;



}

#card21{
padding-right:22%;
padding-left:22%;
margin-top:25px;
margin-bottom:25px;
  width:100%;
 
}


.flexcard{

  
  width:96%;
  height: 250px;
  margin-bottom:15%;
  box-shadow:0 0 20px #878585;
  

}




/*****************************/
 .imageslider{
  padding:25px 0px 25px 0px;
 height:auto;
 width:100%;
 display:flex;
flex-direction:column-reverse;
 }
 .imageslider_part{
  height:auto;
  padding:40px 40px 0px 40px;
  background-color:black;
  width:100%;
 
 
}
.card-component{
 display:grid;
 grid-template-columns: auto ;
 
}




.poster{
  position:relative;
    margin-left: 0px;
    margin-top:3%;
    transform:scale(0.85);
    
}
.in_first{

  position:relative;
    top: 33%;
  
    transform:translate(-50%,-50%);
    left:50%;
    z-index: 1;

    width:100%;
    height:60vh;
    background-color: transparent;

}
.in-second{

    flex:100%;
}


      }

    
    </style>
</head>
<body onload="onLoad()">


</script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>





<!-- it is all flex-->
<div class="flex_first">
    <!-- it is inner-->
<div class="in_first">
    <!-- it is poster -->
<div class="poster" style="color:white; text-align:center; height:100%; ">
<h3>the_abhijeet_kumar</h3>
Change your life today. Don't gamble on the <br>future, act now, without delay <br>
<button id="btn_fist" onclick="buttonWork()">EXPLORE</button>
<!-- it is button -->


    </div>

</div>
<!-- it is second flex box-->
<div class="in_second">
<video autoplay loop muted style="width: 100%; height:auto;" >

<source src="World Connection Animation, Earth Spinning, Earth Motion Graphics, Loop[1].mp4" type="video/mp4">
</video>
</div>



</div>
       
<div id="card21">

<div class="flexcard">
<div class="firstimage">
<img src="hospi2.jpg" style=" width:100%; height:auto;" alt="">
</div>

<section class="firstimage" id="pad">
<article>
 Lorem, ipsum dolor sit amet consectetu
  sit doloremque amet magni suscipit do
 </article>
</section>


</div>

<div class="flexcard">
<div class="firstimage">
<img src="hospi2.jpg" style=" width:100%; height:auto;" alt="">
</div>

<section class="firstimage" id="pad">
<article>
 Lorem, ipsum dolor sit amet consectetu
  sit doloremque amet magni suscipit do
 </article>
</section>


</div>
<div class="flexcard">
<div class="firstimage">
<img src="hospi2.jpg" style=" width:100%; height:auto;" alt="">
</div>

<section class="firstimage" id="pad">
<article>
 Lorem, ipsum dolor sit amet consectetu
  sit doloremque amet magni suscipit do
 </article>
</section>


</div><div class="flexcard">
<div class="firstimage">
<img src="hospi2.jpg" style=" width:100%; height:auto;" alt="">
</div>

<section class="firstimage" id="pad">
<article>
 Lorem, ipsum dolor sit amet consectetu
  sit doloremque amet magni suscipit do
 </article>
</section>


</div>

<div class="flexcard">
<div class="firstimage">
<img src="hospi2.jpg" style=" width:100%; height:auto;" alt="">
</div>

<section class="firstimage" id="pad">
<article>
 Lorem, ipsum dolor sit amet consectetu
  sit doloremque amet magni suscipit do
 </article>
</section>


</div>


</div>

<!----------------->

<br>
<div class="imageslider">

<div class="imageslider_part" style="color:white; font-family: 'Ubuntu', sans-serif;"><!-- txt align and here some inline css -->
<h3 style="margin-top:25px;">the_abhijeet_kumar</h3>
<article>
<strong style="font-weight:bolder;">✔</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore
<br>
<strong style="font-weight:bolder;">✔</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum temporeamet consectetur adipisicing elit. Laborum tempore
<br><strong style="font-weight:bolder;">✔</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore
<br><strong style="font-weight:bolder;">✔</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore
<br><strong style="font-weight:bolder;">✔</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum temporeamet consectetur adipisicing elit. Laborum tempore
<br><strong style="font-weight:bolder;">✔</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum temporeamet consectetur adipisicing elit. Laborum temporeamet consectetur adipisicing elit. Laborum tempore

<br>
<span><button id="first_art" href="#">More</button> <span style="margin-left:0.3px;"></span><button id="second-art" href="">Brochure</button></span>
</article>
<br>

</div>

<div class="imageslider_part">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="danielle-cerullo-bIZJRVBLfOM-unsplash.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="danielle-cerullo-bIZJRVBLfOM-unsplash.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="danielle-cerullo-bIZJRVBLfOM-unsplash.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>




</div>

<!--faculity -->
<div class="faculty">

<section class="abhi">
<h3>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel expedita iusto suscipit quis. Tenetur ad voluptatem ratione velit"</h3>

<span><img src="laptop-3174729_1920.jpg" style="width:60px; height:60px; border-radius:50%;" alt="">
<span style="color:aqua; font-weight:bolder; font-size:23px; line-break:auto; margin-left:10px; margin-top:6px;">ABHIJEET KUMAR  </span> </span>

</section>
</div>





<?php



$addip = $_SERVER['REMOTE_ADDR'];
echo $addip;

$query=@unserialize(file_get_contents('http://ip-api.com/php/'.$addip));
if($query['status']=='success'){
echo "isp:".$query['isp']."<br>";
echo "isp:".$query['country']."<br>";
echo "isp:".$query['countryCode']."<br>";
echo "isp:".$query['regionName']."<br>";
echo "isp:".$query['city']."<br>";
echo "isp:".$query['zip']."<br>";

echo "isp:".$query['timezone']."<br>";
echo "isp:".$query['org']."<br>";
echo "isp:".$query['as']."<br>";

}





?>






</body>

</html>