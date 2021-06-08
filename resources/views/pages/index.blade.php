@extends('layouts.app')

@section('content')
<div class="hero" id="page-top">
    
    <h2 class="brand">Temisan's Blog</h2>
    <h2 class="title-txt">{{ $title }}</h2>
    <p class=" intro-subtitle"> <span class="text-slider-items hide-text bor">Web Developer,Web Designer,UX Designer</span><strong class="text-slider"></strong></p>
    </div>
   
   

    

    <div id="project">

      <h1 class="project-title">Projects</h1>

      <div class="projects">

        <div class="proj1 proj">

          <h2><i class="fas fa-hospital-symbol"></i>A Hospital Management System</h2>

          <div class="proj-about">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi repellat cupiditate sequi, dolore sapiente alias accusantium ratione perferendis! Vel quas cum alias similique aliquid blanditiis sint culpa quo aperiam voluptatibus!</p>
            <a href="https://github.com/temisann/hospital-management-system" target="_blank" class="btn">Repo Link</a>
          </div>                                  

          
        </div>

        <div class="proj2 proj">

          <h2><i class="fas fa-syringe"></i>A Personal Blog</h2>

          <div class="proj-about">

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem dignissimos natus animi consequuntur ratione voluptatibus aperiam impedit nam excepturi, tempora, quasi mollitia delectus cumque voluptas ducimus. Consequuntur distinctio inventore molestias!</p>
            <a href="https://github.com/bishalpandit/vaxslot" target="_blank" class="btn">Repo Link</a>
          </div>

        </div>

        <div class="proj3 proj">

          <h2><i class="fas fa-cloud"></i> Weather App</h2>

          <div class="proj-about">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, vel nisi velit magni et obcaecati amet commodi a rem. Corrupti mollitia voluptas vitae nobis quam amet dolore esse commodi laborum.</p>
            <a href="https://github.com/temisann/hospital-management-system" target="_blank" class="btn">Repo Link</a>
          </div>

        </div>

      </div>

    </div>

  
    <footer>

      <div class="foot-social-icons">

        <a class="icon" href="https://github.com/bishalpandit" target="_blank"> <i class="fab fa-github"></i></a>
        <a class="icon" href="https://www.linkedin.com/in/bishalpandit2602/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a class="icon" href="https://twitter.com/bishalpandit4" target="_blank"><i class="fab fa-twitter"></i></a>
        <a class="icon" href="https://www.facebook.com/disxsavvy/" target="_blank"><i class="fab fa-facebook"></i></a>
      </div>
      
      <p>Made with &nbsp; <i class="fa fa-heart" style="font-size:20px;"></i> &nbsp; by Temisanren</p>
  </footer>

   <script src="typed.js/typed.min.js"></script>
  <script src="app.js"></script>

   <!-- jquery latest version -->
   <script src="js/vendor/jquery-3.2.1.min.js"></script>
   <!-- Bootstrap framework js -->
   <script src="js/bootstrap.min.js"></script>
   <!-- All js plugins included in this file. -->
   <script src="js/plugins.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <!-- Waypoints.min.js. -->
   <script src="js/waypoints.min.js"></script>
   <!-- Main js file that contents all jQuery plugins activation. -->
   <script src="js/main.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </body>

</html>
@endsection
