<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>At_industry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/product.css">
</head>

<body>
    <style>
        .armoire{
            margin-top: 185px;
            margin-bottom: 185px;
        }
        .armoire h1{
        font-size: 3rem;
        font-weight: bolder;
        color: green;
        }
        p{
            font-size: 2rem;
        font-weight:8px;
        }
.armoire p  {

        font-size: 2rem;
        font-weight:8px;
    
}
.armoire ul  li {
    font-size: 2rem;
        font-weight:8px;
}
img{
    width: 30%;
    height: 30%;
   font-size: 2rem;
        font-weight:8px;
}
@media  screen and (max-width:900px) {
    img{
        width:450px;
    }
    
}

    </style>
    <header>
<a href="#" class="logo">AT <nbsp></nbsp><span>Industry</span></a>
  <div class="topnav" id="myTopnav">
            <a href="{{url('/accueil')}}" class="active1">accueil</a>
            
            <a href="#propos">à propos </a>
            <div class="dropdown">
              <button class="dropbtn">services
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="{{url('/datacenter')}}">installation_datacenter</a>
                <a href="{{url('/container')}}">conteneurisation_datacenter</a>
                 <a href="{{url('/electricite')}}">électricité</a>
          
              </div>
            </div>
            <a href="#form">contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
          </div>
   
    </header>
 
    <!-- header section ends -->
    
    <!-- home section starts  -->
    
  
<br>
<br>
<br>
<section class="armoire">
    <h1>Qu’est-ce qu’une armoire électrique ?
</h1>
<br>
<br>
<p>
    
Les armoires électriques sont des boîtiers robustes utilisés pour protéger les composants électriques ou électroniques et les appareillages de commutation. 

Les armoires électriques protègent ainsi l’alimentation électrique contre l’eau, la poussière et la chaleur, mais aussi contre le vandalisme par des personnes non autorisées. 

En fonction de l’application (dans le cadre d’un événement plein air, un chantier, la construction etc…), la taille, le matériau et le niveau de protection IP requis de l’armoire électrique diffèrent.
</p><img src="images/electrique.png" alt="">
<h1>DES SOLUTIONS ADAPTEES
</h1>
<br>
<br>
<p>
Nous réalisons l’étude et la fabrication d’armoires simples ou complexes. Ces armoires, tableaux ou coffrets sont réalisés selon vos besoins.

Nous pouvons reprendre vos schémas électriques ou réaliser l’étude de A-Z afin de répondre à l’ensemble de vos besoins.
Nous intervenons sur les produits suivants :
<ul>
<li>Armoires tertiaires</li>
<li>Armoires d’automatisme</li>
<li>Tableaux TGBT</li>
<li>Coffrets pneumatiques</li>
<li>Armoires modulaires</li>
<li>Etude, analyse et dimensionnement des batterie pour compensation automatique ou fixe.</li>
</ul></p>
<BR></BR>
<p>Toutes nos armoires sont réalisées dans le respect des normes et des règlements. L’ensemble de nos productions sont testées avant de sortir de notre atelier assurant une qualité finale indispensable.</p>
</section>
                <footer>
                    <div class="main-content">
                      <div class="left box">
                        <h2 id="propos">à propos</h2>
                        <div class="content">
                          <p>
    Notre objectif on vise AT Industry participe à une évolution dont les projets datacenter conteneurisé
    comme chez nous et dans le monde.
                          </p>
                          <div class="social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
           
                            <a href="#"><span class="fab fa-linkedin"></span></a>
                          </div>
                        </div>
                      </div>
              
                      <div class="center box">
                        <h2>Address</h2>
                        <div class="content">
                          <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">5, rue des fonderies Z.Ind. Ben Arous Tunis</span>
                          </div>
                          <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">(+216) 71 387 909
                            </span>
                          </div>
                          <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">abc@example.com</span>
                          </div>
                        </div>
                      </div>
              
                      <div class="right box">
                        <h2>Contact nous</h2>
                        <div class="content">
                          <form action="/datacenter" method="POST" id="form" >@csrf
                            <div class="entreprise_name">
                                <div class="text"> Nom_d'entreprise</div>
                                <input type="text" required placeholder="Nom_d'entreprise" name="name">
                            </div><div class="email">
                              <div class="text">Email *</div>
                              <input type="email" required placeholder="email_professionelle" name="mail">
                            </div>
                            <div class="phone">
                                <div class="text"> Num_telephone</div>
                                <input type="text" required placeholder="Num_telephone" name="num">
                            </div>                        
                            <div class="msg">
                              <div class="text">Message *</div>
                              <textarea rows="15" cols="25" required  name="msg"></textarea>
                            </div>
                            <div class="btn">
                              <button type="submit">Envoyer</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="bottom">
                      <center>
                        <span class="credit">Crée <a href="#">Taha Hamim Boughanmi</a> | </span>
                        <span class="far fa-copyright"></span><span> 2022 Tous les droits sont reservés.</span>
                      </center>
                    </div>
                  </footer>
                  <script >function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }</script>
  <script>
    
    function reveal() {
      var reveals = document.querySelectorAll(".reveal");
    
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    
    window.addEventListener("scroll", reveal);
      </script>
</body>
</html>