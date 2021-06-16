<!DOCTYPE html>
<html lang="pt-br">
<!-- Definição do idioma do site -->

<head>
 <?php
        // ======================
        // CONFIGURAÇÕES INICIAIS
        // ======================

        // Todas as configurações iniciais para funcionamento do site estão nas linhas a seguir.

        //     Site Núcleo MAP
        // Autor: Emerson Martins Brito
        // Data: 15/03/2021
        include 'app/assets/head.php';
        ?>
</head>

<body class="l-body">

 <header class="l-header">
  <?php
                include 'app/views/header.php';
        ?>
 </header>

 <aside class="l-aside js-open-menu">
  <?php
            include 'app/views/aside.php';
        ?>
 </aside>

 <main class="l-main">
  <?php
        $pagina = 'home';
        $pagina = $_GET["pagina"];
        switch ($pagina) {
            case 'trade':
                include 'app/views/trade.php';
                break;
            // case 'traders':
            //     include 'app/views/traders.php';
            //     break;
            // case 'help':
            //     include 'app/views/help.php';
            //     break;
            // case 'singup':
            //     include 'app/views/singup.php';
            //     break;
            default:
                include 'app/views/home.php';
                break;
        }
?>
 </main>

 <script src="app/assets/js/index.js"></script>
</body>

</html>