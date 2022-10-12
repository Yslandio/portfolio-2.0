<?php
if (!isset($_GET['id']) || !in_array($_GET['id'], [1, 2, 3, 4])) {
    echo ("
        <section class='d-flex justify-content-center align-items-center h-100'>
            <div class='alert alert-danger text-center fs-4'>Página não encontrada!</div>
        </section>
    ");
} else {
?>

<section class="d-flex flex-wrap gap-4 justify-content-center p-3">
    <div class="box border border-2 border-dark rounded shadow-lg p-3 w-100">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- Imagem 1 do sistema -->
                <div class="carousel-item active">
                    <img src="../../assets/img/<?= $projetos[$_GET['id']]['imagens'][0]; ?>" class="d-block w-100 border border-1 border-dark" alt="Imagem 1 do sistema">
                </div>
                <!-- Imagem 2 do sistema -->
                <div class="carousel-item">
                    <img src="../../assets/img/<?= $projetos[$_GET['id']]['imagens'][1]; ?>" class="d-block w-100 border border-1 border-dark" alt="Imagem 1 do sistema">
                </div>
                <!-- Imagem 3 do sistema -->
                <div class="carousel-item">
                    <img src="../../assets/img/<?= $projetos[$_GET['id']]['imagens'][3]; ?>" class="d-block w-100 border border-1 border-dark" alt="Imagem 1 do sistema">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 gap-2 w-100">
            <h4 class="text-black fw-bold shadow-sm p-2 m-0"><?= $projetos[$_GET['id']]['nome']; ?></h4>
            <div class="d-flex flex-wrap justify-content-between gap-2">
                <a class="btn btn-outline-dark fw-bold <?php if($projetos[$_GET['id']]['github'] == null) 'disabled'; ?>" href="<?= $projetos[$_GET['id']]['github']; ?>" target="_blank">GitHub</a>
                <a class="btn btn-outline-dark fw-bold <?php if($projetos[$_GET['id']]['servidor'] == null) 'disabled'; ?>" href="<?= $projetos[$_GET['id']]['servidor']; ?>" target="_blank">Acessar</a>
            </div>
        </div>

        <div class="d-flex flex-wrap gap-4 justify-content-center p-3">
            <div class="box border border-1 border-dark rounded shadow-sm p-3 w-100">
                <div>
                    <h4 class="text-black fw-bold mb-2">Tecnologias</h4>
                    <h5 class="text-black" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        foreach ($projetos[$_GET['id']]['tecnologias'] as $tecnologia) {
                            echo ("
                                <ul>
                                    <li>$tecnologia</li>
                                </ul>
                            ");
                        }
                        ?>
                    </h5>
                </div>
            </div>

            <div class="box border border-1 border-dark rounded shadow-sm p-3 w-100">
                <div>
                    <h4 class="text-black fw-bold mb-2">Descrição</h3>
                    <h5 class="text-black" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= $projetos[$_GET['id']]['descricao']; ?>
                    </h5>
                </div>
            </div>
        </section>
    </div>
</section>
<?php } ?>
