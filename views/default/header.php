<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ReservaJá</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="<?= ASSETS ?>css/navbar.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/areas.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/areas_descricao.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/tour.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/carrousel.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/navuser.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <!-- Fonte -->

    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Montserrat: wght @ 200 & display = swap" rel = "stylesheet">


    <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
  <!--Navbar-->
    <nav>
      <ul class="menu">
        <li class="logo">
          <a href="<?= PATH ?>">
            <img src="<?= ASSETS ?>image/nav bar logo - reservaja tag blue.svg" />
          </a>
        </a>
        </li>
        <li class="iten"><a href="#funcionamento">Como Funciona</a>
        <li class="iten"><a href="#tour">Fazer Tour</a></li>
        <li class="iten button"><a href="<?= PATH ?>empresas/">empresa</a></li>
        <li class="iten button secondary"><a href="<?= SYSTEMURL ?>">usuário</a></li>
        </li>
        <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
      </ul>
    </nav>



    <script>
      const toggle = document.querySelector(".toggle");
      const menu = document.querySelector(".menu");
      const itens = document.querySelectorAll(".iten");

      /* Toggle mobile menu */
      function toggleMenu() {
        if (menu.classList.contains("active")) {
          menu.classList.remove("active");
          toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
        } else {
          menu.classList.add("active");
          toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
        }
      }

        /* Close Submenu From Anywhere */
        function closeSubmenu(e) {
          let isClickInside = menu.contains(e.target);
          if (!isClickInside && menu.querySelector(".submenu-active")) {
            menu.querySelector(".submenu-active").classList.remove("submenu-active");
          }
        }
        /* Event Listeners */
        toggle.addEventListener("click", toggleMenu, false);
        for (let iten of itens) {
          if (iten.querySelector(".submenu")) {
            iten.addEventListener("click", toggleItem, false);
          }
          iten.addEventListener("keypress", toggleItem, false);
        }
        document.addEventListener("click", closeSubmenu, false);
    </script>
