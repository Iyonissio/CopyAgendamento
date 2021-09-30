<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservajá</title>
    <link rel="stylesheet" href="<?= ASSETS ?>css/navbar.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/areas.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/areas_descricao.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/tour.css" />
    <link rel="stylesheet" href="<?= ASSETS ?>css/navuser.css" />

    

    <!-- Fonte -->

    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Montserrat: wght @ 200 & display = swap" rel = "stylesheet">

    <!-- Font Awesome Icones-->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
 
</head>
  <body>
    <!--Navbar-->
    <nav>
      <ul class="menu">
        <li class="logo">
          <a href="index.php">
            <img src="image/nav bar logo - reservaja tag blue.svg" />
          </a>
        </a></li>
        </li>
        <li class="iten button"><a href="empresa.php">empresa</a></li>
        <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
      </ul>
    </nav>
          
    <script>
      const toggle = document.querySelector(".toggle");
      const menu = document.querySelector(".menu");
      const items = document.querySelectorAll(".item");

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

      /* Activate Submenu */
      function toggleItem() {
        if (this.classList.contains("submenu-active")) {
          this.classList.remove("submenu-active");
        } else if (menu.querySelector(".submenu-active")) {
          menu.querySelector(".submenu-active").classList.remove("submenu-active");
          this.classList.add("submenu-active");
        } else {
          this.classList.add("submenu-active");
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
        for (let item of items) {
          if (item.querySelector(".submenu")) {
            item.addEventListener("click", toggleItem, false);
          }
          item.addEventListener("keypress", toggleItem, false);
        }
        document.addEventListener("click", closeSubmenu, false);
    </script>
   

