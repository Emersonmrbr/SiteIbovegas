﻿<!DOCTYPE html>
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

<body>
 <div class="l-body">

  <header data-reactroot role="banner" class="l-sidebar js-open-menu">
   <?php
            include 'app/views/sidebar.php';
        ?>
  </header>
  <main class="l-main">
   <header class="l-header">
    <?php
                include 'app/views/header.php';
            ?>
   </header>
   <?php
        $pagina = 'home';
        $pagina = $_GET["pagina"];
        switch ($pagina) {
            case 'trade':
                include 'app/views/trade.php';
                break;
            case 'traders':
                include 'app/views/traders.php';
                break;
            case 'help':
                include 'app/views/help.php';
                break;
            case 'singup':
                include 'app/views/singup.php';
                break;
            default:
                include 'app/views/home.php';
                break;
        }
?>
  </main>

 </div>
 <script src="app/assets/js/header.js"></script>
 <!-- <script src="app/assets/js/footer.js"></script> -->
</body>

</html>