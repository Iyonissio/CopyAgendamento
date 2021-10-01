<?php require_once('header_logado.php') ?>
<style>
	body {
		margin: 0;
		padding: 0;
	}

	.slider {
		width: 100%;
		overflow: hidden;
	}

	.slider-image {
		width: 100%;
		overflow: hidden;
	}

	.slide-container {
		display: relative;
		max-width: 100%;
		margin: auto;
		position: relative;
	}

	.slide-container .slide {
		display: none;
		width: 100%;
	}

	.slide-container .slide img {
		width: 100%;
		height: 100vh;
		position: relative;
		object-fit: cover;
	}

	.slide-container .antes,
	.slide-container .proximo {
		cursor: pointer;
		position: absolute;
		top: 50%;
		width: auto;
		margin-top: -22px;
		padding: 16px;
		color: white;
		font-weight: bold;
		font-size: 20px;
		transition: all 0.6s ease;
		border-radius: 0 3px 3px 0;
	}

	.slide-container .antes:hover,
	.slide-container .proximo:hover {
		background-color: rgba(0, 0, 0, 0.8);
		color: white;
	}

	.slide-container .antes {
		left: 1px;
	}

	.slide-container .proximo {
		right: 1px;
	}


	/* Parte do Hover */


	.image {
		opacity: 1;
		display: block;
		object-fit: cover;
		width: 100%;
		height: 100vh;
		transition: .5s ease;
		backface-visibility: hidden;
	}

	.middle {
		transition: .5s ease;
		opacity: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		text-align: center;
	}

	.slide-container:hover .image {
		opacity: 0.3;
	}

	.slide-container:hover .middle {
		opacity: 1;
	}
</style>


<!--Destaque Slider-->
<div class="content">
	<div class="slide-container">
		<!--Imagem  Estabelecimento 1 -->
		<div class="slide fade">
			<!-- Coloquei a imagem dentro de um link, assim ao clicar ira a decricao do Estabelecimento -->
			<img src="image/Salao2.jpg" alt="Avatar" class="image">
			<div class="middle">
				<div class="tabela-info">
					<h3>Nome do Estabelecimento 1</h3>
					<p><strong>Endereco:</strong> 930 Av. Julius Nyerere, Maputo</p>
					<a href="sectionClinicaDescricao.php">Agendar</a>
				</div>
			</div>
		</div>

		<!--Imagem  Estabelecimento 2 -->
		<div class="slide fade">
			<!-- Coloquei a imagem dentro de um link, assim ao clicar ira a decricao do Estabelecimento -->
			<img src="image/salao1.jpg" alt="Avatar" class="image">
			<div class="middle">
				<div class="tabela-info">
					<h3>Nome do Estabelecimento 2</h3>
					<p><strong>Endereco:</strong> 930 Av. Julius Nyerere, Maputo</p>
					<a href="sectionClinicaDescricao.php">Agendar</a>
				</div>
			</div>
		</div>
		<!--<h1 class="em-destaque">Estabelecimentos em Destaque</h1> -->
		<a href="#" class="antes" title="antes">&#10094</a>
		<a href="#" class="proximo" title="proximo">&#10095</a>
	</div>
</div>
<!-- Destaque Fim -->

    <main>
    <div class="area_estabelecimento">
        <div class="area_informacao_esquerda">
            <h1>RESTAURANTES DISPONÍVEIS</h1>
            <p>Encontre uma variedade de Restaurantes registados no sistema. Seleccione ou pesquise atravéz do nome do Restaurante pretendido e faça a sua reserva.</p>
        </div>
        <div class="pesquisar">
          <div class="search-container">
              <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
           </div>
        </div>
    </div>


    
<section class="gallery">
	<div class="enquadramento">
		<div class="gallery-items">
			<div class="item">
				<img src="image/salao1.jpg" class="image" alt="gallery" />
				<div class="middle">
					<div class="tabela-info">
						<h3>Nome do Salao</h3>
						<p><strong>Address:</strong> 930 Av. Julius Nyerere, Maputo</p>
             			<a href="sectionRestauranteDescricao.php">Agendar</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="image/salao1.jpg" class="image" alt="gallery" />
				<div class="middle">
					<div class="tabela-info">
						<h3>Nome do Salao</h3>
						<p><strong>Address:</strong> 930 Av. Julius Nyerere, Maputo</p>
             			<a href="sectionRestauranteDescricao.php">Agendar</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="image/salao1.jpg" class="image" alt="gallery" />
				<div class="middle">
					<div class="tabela-info">
						<h3>Nome do Salao</h3>
						<p><strong>Address:</strong> 930 Av. Julius Nyerere, Maputo</p>
             			<a href="sectionRestauranteDescricao.php">Agendar</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="image/salao1.jpg" class="image" alt="gallery" />
				<div class="middle">
					<div class="tabela-info">
						<h3>Nome do Salao</h3>
						<p><strong>Address:</strong> 930 Av. Julius Nyerere, Maputo</p>
             			<a href="sectionRestauranteDescricao.php">Agendar</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="image/salao1.jpg" class="image" alt="gallery" />
				<div class="middle">
					<div class="tabela-info">
						<h3>Nome do Salao</h3>
						<p><strong>Address:</strong> 930 Av. Julius Nyerere, Maputo</p>
             			<a href="sectionRestauranteDescricao.php">Agendar</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="image/salao1.jpg" class="image" alt="gallery" />
				<div class="middle">
					<div class="tabela-info">
						<h3>Nome do Salao</h3>
						<p><strong>Address:</strong> 930 Av. Julius Nyerere, Maputo</p>
             			<a href="sectionRestauranteDescricao.php">Agendar</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="image/restaurant.jpg" class="image" alt="gallery" />
				<div class="middle">
					<div class="tabela-info">
						<h3>Nome do Salao</h3>
						<p><strong>Address:</strong> 930 Av. Julius Nyerere, Maputo</p>
             			<a href="sectionRestauranteDescricao.php">Agendar</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="image/restaurant.jpg" class="image" alt="gallery" />
				<div class="middle">
					<div class="tabela-info">
						<h3>Nome do Salao</h3>
						<p><strong>Address:</strong> 930 Av. Julius Nyerere, Maputo</p>
             			<a href="sectionSalaoRestauranteDescricao.php">Agendar</a>
					</div>
				</div>
			</div>
		</div>

		<div class="pagination">
			<div class="prev">Prev</div>
			<div class="page">Page <span class="page-num"></span></div>
			<div class="next">Next</div>
		</div>
	</div>
</section>

<script>
 const galleryItems=document.querySelector(".gallery-items").children;
 const prev=document.querySelector(".prev");
 const next=document.querySelector(".next");
 const page=document.querySelector(".page-num");
 const maxItem=6;
 let index=1;
  
  const pagination=Math.ceil(galleryItems.length/maxItem);
  console.log(pagination)

  prev.addEventListener("click",function(){
    index--;
    check();
    showItems();
  })
  next.addEventListener("click",function(){
  	index++;
  	check();
    showItems();  
  })

  function check(){
  	 if(index==pagination){
  	 	next.classList.add("disabled");
  	 }
  	 else{
  	   next.classList.remove("disabled");	
  	 }

  	 if(index==1){
  	 	prev.classList.add("disabled");
  	 }
  	 else{
  	   prev.classList.remove("disabled");	
  	 }
  }

  function showItems() {
  	 for(let i=0;i<galleryItems.length; i++){
  	 	galleryItems[i].classList.remove("show");
  	 	galleryItems[i].classList.add("hide");


  	    if(i>=(index*maxItem)-maxItem && i<index*maxItem){
  	 	  // if i greater than and equal to (index*maxItem)-maxItem;
  		  // means  (1*8)-8=0 if index=2 then (2*8)-8=8
          galleryItems[i].classList.remove("hide");
          galleryItems[i].classList.add("show");
  	    }
  	    page.innerHTML=index;
  	 }

  	 	
  }

  window.onload=function(){
  	showItems();
  	check();
  }

  
 		// Destaque / header js
 		var currentSlide = 0;
 		const slides = document.querySelectorAll(".slide")

 		const init = (n) => {
 			slides.forEach((slide) => {
 				slide.style.display = "none"

 			})
 			slides[n].style.display = "block"
 		}
 		document.addEventListener("DOMContentLoaded", init(currentSlide))
 		setInterval(() => {
 			proximo()
 		}, 3000);
 		const proximo = () => {
 			currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
 			init(currentSlide)
 		}

 		const antes = () => {
 			currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
 			init(currentSlide)
 		}

 		document.querySelector(".proximo").addEventListener('click', proximo)
 		document.querySelector(".antes").addEventListener('click', antes);
 		window.onscroll = function() {
 			myFunction()
 		};
 		window.onscroll = function() {
 			myFunction()
 		};

 		var header = document.getElementById("myHeader");
 		var sticky = header.offsetTop;

 		function myFunction() {
 			if (window.pageYOffset > sticky) {
 				header.classList.add("sticky");
 			} else {
 				header.classList.remove("sticky");
 			}
 		}

 		function hmbrgr() {
 			var x = document.getElementById("hmbrgr");
 			if (x.style.display == "none") {
 				x.style.display = "flex";
 			} else if (x.style.display == "flex") {
 				x.style.display = "none";
 			}
 		}
</script>

    <?php require_once('footer.php') ?>
