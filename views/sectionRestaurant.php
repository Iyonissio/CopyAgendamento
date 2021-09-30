<?php require_once('default/header.php') ?>

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 100;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>


<div class="descricao_areas">
    <div class="descricao_informacao">
        <div class="descricao_titulo">
            <h1><?= $restaurante[0]->name ?></h1>
        </div>
        <p>
            <?= $restaurante[0]->notes ?>
        </p>
        <h1>Localização</h1>
        <p> <?= $restaurante[0]->address ?> </p>
        <h1>Horário Comercial</h1>
        <ul>
            <?php
            $timesheet = json_decode($restaurante[0]->timesheet);
            for ($i = 0; $i < count($timesheet); $i++) {
                $status = $timesheet[$i]->day_off == 0 ? "Aberto" : "Fechado";
            ?>
                <li> <?= $days[$i] ?> <?= $timesheet[$i]->start != null ? " - " . $status . " ( " . $timesheet[$i]->start . " às " . $timesheet[$i]->end . " ) " : " - " . $status ?> </li>
            <?php
            }
            ?>
        </ul>
        <h1>Contactos</h1>
        <p> T: +258 <?= $restaurante[0]->phone_number ?></p>
        <p>Website: </p>
        <div class="paginas_estabelecmentos">
            <span><i class="fab fa-facebook-f"></i></span>
            <span><i class="fab fa-instagram"></i></span>
            <span><i class="fab fa-linkedin"></i></span>
        </div>
        <div class="button_agendar">
            <a href="<?= SYSTEMURL . $restaurante[0]->domain ?>"> <button id="myBtn">agendar</button></a>
        </div>
    </div>
    <div class="descricao_imagem">
        <img src="<?= APICONTENT ?>uploads/booknetic/locations/<?= $restaurante[0]->image ?>" alt="foto" />
    </div>
</div>


<!-- Conteudo do Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Conteudo do Modal ..</p>
        <p>Conteudo do Modal ..</p>
        <p>Conteudo do Modal ..</p>
        <p>Conteudo do Modal ..</p>
        <p>Conteudo do Modal ..</p>
        <p>Conteudo do Modal ..</p>
        <p>Conteudo do Modal ..</p>
        <p>Conteudo do Modal ..</p>
        <p>Conteudo do Modal ..</p>
    </div>
</div>

<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>



<?php require_once('default/footer.php') ?>