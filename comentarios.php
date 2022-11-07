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
    <title>COMENTÁRIOS</title>
</head>
<body style="background-color:black">
    <header>
        <nav id="navbar-example2" class="navbar fixed-top px-3 mb-3" style="background-color: #ff5487;">
            <a class="navbar-brand" href="#">Navbar</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comentarios.html">Comentários</a>
              </li>
            </ul>
        </nav>
    </header> 
    <main> 
        <section id="lista-recados">
            <div class="container">                
            <h1>Meus recados</h1>
            <p><a href="recados-form.html">Clique aqui</a> para deixar o seu recado</p><br>
            
            <?php
                $sql = "SELECT * FROM recados";
                $conexao = new PDO('mysql:host=127.0.0.1;dbname=site-junior','root','');
                $resultado = $conexao->query($sql);
                $lista = $resultado->fetchAll();
            ?>

            <?php foreach ($lista as $linha): ?>
                <div class="balao">
                    <p class="recado"><?php echo $linha['recado'] ?></p>			
                    <h4 class="nome"><?php echo $linha['nome'] ?></h4>
                </div>
            <?php endforeach ?>

            </div>
        </section>        
    </main>
    <footer class="footer mt-auto py-2 pt-3" style="margin-top: 15rem;">
            <p class="text-center"><b>Maria Eduarda Meneses &copy; 2022</b></p>
        </div>
    </footer>
    <!--JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</body>
</html>