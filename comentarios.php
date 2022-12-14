<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--MEU CSS-->
    <link rel="stylesheet" href="custom.css">
    <link rel="icon" href="img/icon/head.png">
    <title>Duda Meneses | Home</title>
</head>
<body style="background-color:black">
    <header>
    <nav id="navbar-example2" class="navbar fixed-top px-3 mb-3" style="background-color: #ff5487;">
            <a class="navbar-brand" href="index.html">
                <img src="img/icon/nav.png" alt="logotipo" height="35" width="35">
            </a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comentarios.php">Comentários</a>
              </li>
            </ul>
        </nav>
    </header>
    <main>
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-transparent p-3 rounded-2" tabindex="0">
            <section id="lista-recados" style="margin-top: 5rem;">
                <div class="container">                
                <h4 class="titulos">Comentários</h4>

                <a href="comentarios-forms.html" style="color: #ff5487; font-size: 18px;">Escrever um comentário</a>
                
                <?php
                    $sql = "SELECT * FROM comentarios WHERE ativo LIKE 'Y'";
                    $conexao = new PDO('mysql:host=127.0.0.1;dbname=bdduda','root','');
                    $resultado = $conexao->query($sql);
                    $lista = $resultado->fetchAll();
                ?>

                <?php foreach ($lista as $linha): ?>
                    <div class="balao">
                        <h4 class="nome"><?php echo $linha['nome'] ?></h4>
                        <p class="comentario"><?php echo $linha['comentario'] ?></p>			
                    </div>
                <?php endforeach ?>

                </div>
            </section>        
        </div>
    </main>
    <footer class="footer mt-auto py-3">
            <p class="text-center"><b>Maria Eduarda Meneses &copy; 2022</b></p>
        </div>
    </footer>
    <!--JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</body>
</html>