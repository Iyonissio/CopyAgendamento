<?php require_once('header.php') ?>
    <div class="descricao_areas">
        <div class="descricao_informacao">
            <div class="descricao_titulo">
                <h1><?= $clinica[0]->name ?></h1>
            </div>
            <p>
                <?= $clinica[0]->notes ?>
            </p>
            <h1>Localização</h1>
            <p> <?= $clinica[0]->address ?> </p>
            <h1>Horário Comercial</h1>
            <ul>
                <?php
                $timesheet = json_decode($clinica[0]->timesheet);
                for ($i = 0; $i < count($timesheet); $i++) {
                    $status = $timesheet[$i]->day_off == 0 ? "Aberto" : "Fechado";
                    ?>
                    <li> <?= $days[$i] ?> <?= $timesheet[$i]->start != null ? " - " . $status . " ( " . $timesheet[$i]->start . " às " . $timesheet[$i]->end . " ) " : " - " . $status ?> </li>
                    <?php
                }
                ?>
            </ul>
            <h1>Contactos</h1>
            <p> T: +258 <?= $clinica[0]->phone_number ?></p>
            <p>Website: </p>
            <div class="paginas_estabelecmentos">
                <span><i class="fab fa-facebook-f"></i></span>
                <span><i class="fab fa-instagram"></i></span>
                <span><i class="fab fa-linkedin"></i></span>
            </div>
            <div class="button_agendar">
                <a href="<?= SYSTEMURL . $clinica[0]->domain ?>">agendar</a>
            </div>
        </div>
        <div class="descricao_imagem">
            <img src="<?= APICONTENT ?>uploads/booknetic/locations/<?= $clinica[0]->image ?>" alt="foto"/>
        </div>
    </div>
    <?php require_once('footer.php') ?>
