<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;

    }
    body{
      background-color: black;
    }
    li{
      list-style: none;
      width: 20%;
      background-color: #c0c0c0;

    }
    button{
      border: none;
      width: 100%;
    }
.ar{
  backdrop-filter: 10px;
}


.ar.show{
  display:  block !important;
}

  </style>
</head>
<body>
  

<div class="conaiter_accor" class="ar">
  <!-- it is about to your name -->
<li>
  <button>click</button>
  <article id="first" class="ar">
    helloa bhijeet how are you tell me <br>
    tell me about your anme is if your have if you have any idea so please tell me can help 
 </article>
</li>
 <!-- it is about to your name -->
 <li>
  <button>click</button>
  <article id="firstt" class="ar">
    helloa bhijeet how are you tell me <br>
    tell me about your anme is if your have if you have any idea so please tell me can help 
 </article>
</li>

 <!-- it is about to your name -->
 <li>
  <button>click</button>
  <article id="firsttt" class="ar">
    helloa bhijeet how are you tell me <br>
    tell me about your anme is if your have if you have any idea so please tell me can help 
 </article>
</li>



<!-- it is script language -->
<script>
  var get=document.getElementsByClassName("ar");
  var i;
  for(i=0;i<get.length;i++){
    get[i].onclick=function(){
      this.classList.toggle('active');
      this.nextElementSibling.classList.toggle("show");
    }
  }





</script>
</div>


</body>
</html>