<?php require_once('default/header.php') ?>
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
                <li> <?= $days[$i] ?> <?= $timesheet[$i]->start != null ? " - " . $status . " ( " . $timesheet[$i]->start . " às " . $timesheet[$i]->end . " ) " : " - ".$status ?> </li>
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
            <a href="<?= SYSTEMURL. $restaurante[0]->domain ?>">agendar</a>
        </div>
    </div>
    <div class="descricao_imagem">
        <img src="<?= APICONTENT ?>uploads/booknetic/locations/<?= $restaurante[0]->image ?>" alt="foto"/>
    </div>
</div>


<?php require_once('default/footer.php') ?>
