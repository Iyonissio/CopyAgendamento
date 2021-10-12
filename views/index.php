<?php require_once('default/header.php') ?>

<main class="slider-main">
      <div class="slide-container">
        <div class="slider-imagem animate__animated animate__fadeIn">
          <img src="image/1.svg" alt="" />
        </div>
        <div class="slider-texto animate__animated animate__fadeIn">
          <h1>FAZER RESERVAS NUNCA FOI TÃO FÁCIL</h1>
          <p>
           O reservajá é um serviço de marcações e reservas em Clínicas,
           Restaurantes, Salões de estética e beleza. Clique no botão Scroll e faça um tour.
          </p>
          <!--<button class="slider-button">saiba mais</button> -->
        </div>
      </div>
</main>
    <script>
      const items = [
        {
          image: 'image/1.svg',
          title: 'Fazer reservas nunca foi tão facil.',
          description: `O reservajá é um serviço de marcações e reservas em Clínicas,
           Restaurantes, Salões de estética e beleza.`,
          buttonTitle: 'saiba mais',
        },
        {
          image: 'image/dispositivos.svg',
          title: 'Reservas ao tempo certo.',
          description: `Através do seu telemóvel ou computador, podes fazer agendamentos a 
          qualquer hora e lugar. Baixe a aplicação reservajá no Google Play Store ou App Store e siga as instruções.`,
          buttonTitle: 'saiba mais',
        },
        {
          image: 'assets/image/2.svg',
          title: 'Reservas se tornaram muito faceis.',
          description: `Faça seus agendamentos com certeza de que seu pedido será concretizado`,
          buttonTitle: 'saiba mais',
        },
        {
          image: 'assets/image/3.svg',
          title: 'Quando e Onde estiver.',
          description: `Faça seus agendamentos com certeza sem precisar se deslocar ou efectuar chamadas.`,
          buttonTitle: 'saiba mais',
        },
        {
          image: 'image/4.svg',
          title: 'Senta relaxa! já está reservado.',
          description: `Receberás a confirmção do seu agendamento por
           email ou sms, podendo reagendar se necessário.`,
          buttonTitle: 'saiba mais',
        },
      ];
      const imgDIV = document.querySelector('.slider-imagem');
      const textDIV = document.querySelector('.slider-texto');
      const img = document.querySelector('.slider-imagem img');
      const h1 = document.querySelector('.slider-texto h1');
      const p = document.querySelector('.slider-texto p');
      const button = document.querySelector('.slider-texto button');
      let currentIndex = 0;

      const removeEvent1 = () => {
        imgDIV.classList.remove('animate__fadeOut');
        imgDIV.removeEventListener('animationend', removeEvent1);
      };
      const removeEvent2 = () => {
        textDIV.classList.remove('animate__fadeOut');
        textDIV.removeEventListener('animationend', removeEvent2);
      };

      const changeItems = () => {
        imgDIV.classList.remove('animate__fadeIn');
        textDIV.classList.remove('animate__fadeIn');
        imgDIV.classList.add('animate__fadeOut');
        textDIV.classList.add('animate__fadeOut');
        imgDIV.addEventListener('animationend', removeEvent1);
        textDIV.addEventListener('animationend', removeEvent2);
        setTimeout(() => {
          if (currentIndex >= items.length - 1) currentIndex = 0;
          else currentIndex++;
          img.setAttribute('src', items[currentIndex].image);
          h1.innerHTML = items[currentIndex].title;
          p.innerHTML = items[currentIndex].description;
          button.innerHTML = items[currentIndex].buttonTitle;
          imgDIV.classList.add('animate__fadeIn');
          textDIV.classList.add('animate__fadeIn');
        }, 1000);
      };
      setInterval(() => {
        changeItems();
      }, 7000);
    </script>
    <!--Como funciona -->
      <div class="titulo-areas" id="funcionamento">
        <h1>COMO FUNCIONA</h1>
      </div>

    <div class="funciona" >
      <div class="funciona-card">
        <div class="funciona-imagens">
          <img src="image/01.CadastroouEntrar.svg" alt="foto" />
        </div>
        <div class="funciona-card-item">
          <h3>1. Entre ou Cadastre-se</h3>
          <p>
            Efectue o cadastro usando o seu nome, e-mail ou contacto, 
            caso já tenha uma conta, introduza o nome do
            usuário e a senha e click entrar.
          </p>
        </div>
      </div>
      <div class="funciona-card">
        <div class="funciona-imagens">
          <img src="image/02.escolherarea.svg" alt="bike_image" />
        </div>
        <div class="funciona-card-item">
        <h3>2. Escolha a Área</h3>
        <p>
          Poderá escolher entre clínicas, restaurantes e salões de 
          estética e beleza registados no aplicativo.
        </p>
      </div>
      </div>
      <div class="funciona-card">
        <div class="funciona-imagens">
          <img src="image/03..svg" alt="bike_image" />
        </div>
        <div class="funciona-card-item">
        <h3>3. Seleccione o Estabelecimento e Serviço</h3>
        <p>
          Apos a escolha da área, selecione o estabelecimento e 
          serviço pretendido para efectuar a reserva. 
        </p>
        </div>
      </div>
      <div class="funciona-card">
        <div class="funciona-imagens">
          <img src="image/04.PedidoEfectuado.svg" alt="cycle_image" />
        </div>
        <div class="funciona-card-item">
          <h3>4. Submeta o Pedido</h3>
          <p>
            Após a escolha do serviço desejado, 
            seleccione a data e hora pretendida e depois clique em submeter o pedido.
          </p>
        </div>
      </div>
      <div class="funciona-card">
        <div class="funciona-imagens">
          <img src="image/05.Visualizarohistórico.svg" alt="bike_image" />
        </div>
        <div class="funciona-card-item">
        <h3>5. Confirme a Marcação ou Reserva</h3>
        <p>
          Após a submissão do pedido, receberá 
          uma notificação por sms/e-mail, a confirmar a sua marcação ou reserva.
        </p>
        </div>
      </div>
      <div class="funciona-card">
        <div class="funciona-imagens">
        <img src="image/06.Confirmacaodamarcacao.svg" alt="bike_image" />
      </div>
      <div class="funciona-card-item">
        <h3>6. Visualize o seu Histórico</h3>
        <p>
          Poderá fazer a visualização e
          controle de todos seus agendamentos, e reagendar a qualquer momento.
        </p>
       </div>
      </div>
    </div>

    

    <?php require_once('default/footer.php') ?>
