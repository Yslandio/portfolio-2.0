<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>

    <!-- Favincon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="h-100">
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    
    <aside class="sidebar">
        <header>Portfólio</header>
        <a href="?page=inicio" class="<?= !$_GET['page'] || $_GET['page'] == 'inicio' ? 'active' : 'disable'; ?>">
            <i class="fas fa-home"></i>
            <span>Início</span>
        </a>
        <a href="?page=sobre" class="<?= $_GET['page'] == 'sobre' ? 'active' : 'disable'; ?>">
            <i class="fas fa-question-circle"></i>
            <span>Sobre</span>
        </a>
        <a href="?page=projetos" class="<?= $_GET['page'] == 'projetos' ? 'active' : 'disable'; ?>">
            <i class="fas fa-qrcode"></i>
            <span>Projetos</span>
        </a>
        <a href="?page=links" class="<?= $_GET['page'] == 'links' ? 'active' : 'disable'; ?>">
            <i class="fas fa-link"></i>
            <span>Links</span>
        </a>
    </aside>

    <main class="h-100" id="main">
        <?php
        if (!isset($_GET['page']) || $_GET['page'] == 'inicio') {
            include ('components/inicio.php');
        } else {
            if ($_GET['page'] == 'sobre')
                include ('components/sobre.php');
            if ($_GET['page'] == 'projetos') {
                include ('../models/Portfolio.php');
                include ('components/projetos.php');
            }
            if ($_GET['page'] == 'links')
                include ('components/links.php');
            if ($_GET['page'] == 'projeto') {
                include ('../models/Portfolio.php');
                include ('components/projeto.php');
            }
            if (!in_array($_GET['page'], ['inicio', 'sobre', 'projetos', 'links', 'projeto'])) {
                echo ("
                    <section class='d-flex justify-content-center align-items-center h-100'>
                        <div class='alert alert-danger text-center fs-4'>Página não encontrada!</div>
                    </section>
                ");
            }
        }
        ?>
    </main>

    <!-- Bootstrap - JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
