<section class="d-flex flex-wrap gap-4 justify-content-center p-3">
    <div class="box border border-2 border-dark rounded shadow-lg p-3 w-100">
        <h4 class="text-black">
            <strong>Projetos</strong>
        </h4>
    </div>

    <?php foreach ($projetos as $key => $projeto) { ?>
        <div class="box border border-2 border-dark rounded shadow-lg p-3">
            <div class="d-flex flex-wrap gap-4 rounded-2" style="max-width: 400px !important;">
                <div class="w-100">
                    <img style="max-width: 400px !important; max-height: 200px !important;" src="../assets/img/<?= $projeto['imagens'][0]; ?>"
                        class="d-block w-100 border border-1 shadow-sm border-dark rounded" alt="Imagem do projeto <?= $key ?>">
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 w-100">
                    <h5 class="text-black fw-bold shadow-sm p-2"><?= $projeto['nome']; ?></h5>
                    <a class="btn btn-outline-dark fw-bold" href="?page=projeto&id=<?= $key ?>">VER MAIS</a>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
