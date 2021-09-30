<?php require_once('header_logado.php') ?>
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
</script>

    <?php require_once('footer.php') ?>
