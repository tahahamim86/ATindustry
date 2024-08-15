<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>At_industry</title>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css')}}" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div id="preloader"></div>
    <section class="showcase">
        <header>
            <img src="images_videos/atind.PNG" alt="" class="logo" > 
          <div class="toggle"></div>
        </header>
        <video src="images_videos/background.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <h2 id="accueil" >Bienvenue à  AT Industry </h2>
      
            <h3>Pourquoi nous choisir?</h3>
            <p>
                Nous sommes une société professionel .
                 Nous abordons chaque relation client comme un partenariat pour fournir des plusieurs services. 
                 Nous  installons également des solutions technologiques de la plus haute qualité auprès des principaux innovateurs de l'industrie.
                  Nous comprenons que votre temps est précieux et que vous souhaitez embaucher une entreprise qui répondra à un besoin et vous facilitera la tâche.
            </p>

           <a href="{{url('/datacenter')}}">cliquez ici pour nous
             découvrir!</a>
   
        </div>
        <ul class="social">
    
          <li><a href="https://www.facebook.com/nouvameq"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
          <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
          <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/linkedin.png"></a></li>
        </ul>
      </section>
      <div class="menu">
        <ul>
          <li><a href="#accueil"><i class=" fa fa-home">accueil</i></a></li>
          <li><a href="{{url('/container')}}"> <nbsp></nbsp>conteneurisation_datacenter</a></li>
          <li><a href="{{url('/datacenter')}}">Installation_datacenter</a></li>
          <li><a href="{{url('/electricite')}}">electricité</a></li>
      

         
        </ul>
        
      </div>
      
      
      <iframe width="0" height="0" src="https://www.youtube.com/embed/4KQwiUTQgCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="0" height="0" src="https://www.youtube.com/embed/4KQwiUTQgCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     
     

 <script src="script.js"></script>
 <script>
  var loader=document.getElementById('preloader');
  window.addEventListener("load",function(){
    loader.style.display="none"
  })
 </script>
 <script>
     const menuToggle = document.querySelector('.toggle');
const showcase = document.querySelector('.showcase');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  showcase.classList.toggle('active');
})
 </script>
</body>