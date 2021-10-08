<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bem vindo</title>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="<?= ASSETS ?>css/navbar.css"/>
    <link rel="stylesheet" href="<?= ASSETS ?>css/areas.css"/>
    <link rel="stylesheet" href="<?= ASSETS ?>css/areas_descricao.css"/>
    <link rel="stylesheet" href="<?= ASSETS ?>css/tour.css"/>
    <link rel="stylesheet" href="<?= ASSETS ?>css/carrousel.css"/>
    <link rel="stylesheet" href="<?= ASSETS ?>css/navuser.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <!-- Fonte -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Montserrat: wght @ 200 & display = swap" rel="stylesheet">


    <!-- Font Awesome -->
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
        </a>
        </li>
            <li class="iten"><a href="#planos">Planos</a></li>
            <li class="iten"><a href="#tour">Fazer Tour</a></li>
            <li class="iten button secondary"><a href="#">usuario</a></li>
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

    <!-- Seccao porque usar o reservaja -->
    <div class="porque-usar">
      <div class="container">
        <div class="grid">
          <div class="right-sobre">
            <h1>Porque usar o <br> <strong>Reservajá?</strong></h1>
                <div class="ajustar">
                    <i class="fas fa-check-circle"></i>
                    <p>Permite a recepção de agendamentos 24 horas por dia.</p>
                </div>
                <div class="ajustar">
                    <i class="fas fa-check-circle"></i>
                    <p>Encurta distâncias, permite uma rápida comunicação com o seu cliente e facilita o acesso ao seu estabelecimento.</p>
                </div>
                <div class="ajustar">
                    <i class="fas fa-check-circle"></i>
                    <p>
                       Melhora o atendimento ao cliente, sendo este um serviço automatizado, evitará atraso no horário das marcações ou reserva; mais de uma marcação no mesmo horário e eliminará as filas de espera.
                    </p>
                </div>
                <div class="ajustar">
                    <i class="fas fa-check-circle"></i>
                    <p>
                    Permite um acesso rápido e completo ao perfil do cliente, caso seja preciso, evita informações incorretas e  reduz o tempo gasto na procura.
                    </p>
                </div>
                <div class="ajustar">
                    <i class="fas fa-check-circle"></i>
                    <p>
                    Permite o agendamento tanto pelo celular quanto pelo computador: marcar um agendamento torna-se uma tarefa simples e que pode ser feita em poucos minutos, onde quer que o seu cliente esteja.
                    </p>
                </div>
                <div class="ajustar">
                    <i class="fas fa-check-circle"></i>
                    <p>
                    Reduz os custos com equipe de atendimento e com ligações telefônicas.
                    </p>
                </div>
                <div class="ajustar">
                    <i class="fas fa-check-circle"></i>
                    <p>
                    Elimina possíveis obstáculos que existem quando um cliente entra em contacto atravéz de chamadas para agendar seu almoço ou jantar, oferecendo mais comodidade e proporcionando experiencias únicas ao cliente.
                    </p>
                </div>
          </div>
          <div class="left-sobre">
            <img src="image/empresa.svg" alt="foto-empresa" />
          </div>
        </div>
      </div>
    </div>
    <!--Planos Area-->

    <div class="planos-titulo-geral" id="planos">
      <h1>Planos_</h1>
    </div>
    
    <div class="planos">
      <div class="planos-descricao-2">
        <div class="planos-titulo">
          <h1>BASICO</h1>
          <p>Materiais de visibilidade</p>
          <p>Agendamento ilimitados sem personalização de serviços</p>
        </div>
        <div class="preco">
          <p>Mensalidade – 2.990,00/Mês</p>
        </div>
        <a href="planoBasico.php"><button class="planos-button">Aderir</button></a>
      </div>
      
      <div class="planos-descricao-1">
        <div class="planos-titulo">
          <h1>PROFISSIONAL</h1>
          <p>Promoção de marca nas redes sociais</p>
          <p>Agendamentos ilimitados com personalização de serviços</p>
        </div>
        <div class="preco">
          <p>Mensalidade – 7.500,00MT/Mês</p>
        </div>
        <a href="planoProfissional.php"><button class="planos-button">Aderir</button></a>
      </div>
    </div>   
    <?php require_once 'footer.php'; ?>
