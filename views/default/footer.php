 <!--Areas-->

 <div class="titulo-areas" id="tour">
   <h1>FAZER TOUR</h1>
 </div>

 <div class="slider">
   <div class="slideshow-container">
     <div class="mySlides1">
       <img src="image/clinicas.svg" alt="foto" />
       <p>Clínicas</p>
       <a href="clinicas.php">descubrir</a>
     </div>

     <div class="mySlides1">
       <img src="image/restantes.svg" alt="foto" />
       <p>Restaurantes</p>
       <a href="restaurantes.php">descubrir</a>
     </div>

     <div class="mySlides1">
       <img src="image/saloes.svg" alt="foto" />
       <p>Salões</p>
       <a href="saloes.php">descubrir</a>
     </div>
     <a class="preve" onclick="plusSlides(-1, 0)">&#10094;</a>
     <a class="nexte" onclick="plusSlides(1, 0)">&#10095;</a>
   </div>
 </div>

 <script>
   var slideIndex = [1, 1];
   var slideId = ["mySlides1"]
   showSlides(1, 0);
   showSlides(1, 1);

   function plusSlides(n, no) {
     showSlides(slideIndex[no] += n, no);
   }

   function showSlides(n, no) {
     var i;
     var x = document.getElementsByClassName(slideId[no]);
     if (n > x.length) {
       slideIndex[no] = 1
     }
     if (n < 1) {
       slideIndex[no] = x.length
     }
     for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
     }
     x[slideIndex[no] - 1].style.display = "block";
   }
 </script>


 <!--Areas-->
 <div class="section-areas">
   <!--<div class="titulo-areas">
        <h1>FAZER TOUR</h1>
      </div> Remover no Css -->
   <div class="areas">
     <div class="item-areas">
       <img src="image/clinicas.svg" alt="foto" />
       <p>Clínicas</p>
       <a href="clinicas.php">descubrir</a>
     </div>
     <div class="vertical-line" style="height: 100px"></div>
     <div class="item-areas">
       <img src="image/restantes.svg" alt="foto" />
       <p>Restaurantes</p>
       <a href="restaurantes.php">descubrir</a>
     </div>
     <div class="vertical-line" style="height: 100px"></div>
     <div class="item-areas">
       <img src="image/saloes.svg" alt="foto" />
       <p>Salões</p>
       <a href="saloes.php">descubrir</a>
     </div>
   </div>
 </div>
 <footer>

   <div class="footer-section">
     <div class="footer-esquerda">
       <div class="footer-logo">
         <img src="image/logo footer - resevaja.svg" alt="foto" />
       </div>
       <div class="footer-esquerda-descricao">
         <p>Reservas ao tempo certo.</p>
       </div>
     </div>
     <div class="footer-centro">
       <div class="footer-titulo">
         <h3>COMERCIAL</h3>
       </div>
       <p>+258 86 055 2222</p>
       <p>comercial@reservaja.co.mz</p>
       <div class="footer-titulo">
         <h3>SUPORTE</h3>
       </div>
       <p>+258 87 767 8217</p>
       <p>suporte@reservaja.co.mz</p>
     </div>
     <div class="footer-direita">
       <div class="footer-titulo">
         <h3>PODE BAIXAR A APP</h3>
       </div>
       <div class="footer-logo">
         <a href="#"><img style="width: 170px; height: 72px;" src="image/play-store.png" alt="foto" /></a>
         <a href="#"><img style="width: 170px; height: 72px;
          padding-left: px;" src="image/app-store.png" alt="foto" /></a>
       </div>
     </div>
 </footer>
 <div class="footer-final">
   <div class="footer-final-section">
     <div class="footer-final-esquerda">
       <p>Agendamento Online.</p>
     </div>
     <div class="footer-final-centro">
       <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
       <span><a href="https://www.instagram.com/reservajamz/"><i class="fab fa-instagram"></i></a></span>
       <span><a href="https://www.linkedin.com/in/reservaja/"><i class="fab fa-linkedin"></i></a></span>
     </div>

     <div class="footer-final-direita">
       <p>&#169;2021 - Connect Plus, LDA</p>
     </div>
   </div>
   </body>

   </html>