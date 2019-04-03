<?php
     $cursos = [
      "Full Stack" => ["Curso de Desenvolvimento Web", 319.99, "full.jpeg", "fullstack"],
      "Marketing Digital" => ["Marketing Digital", 319.99, "marketing.jpg", "marketing"],
      "UX" => ["Curso de User Experience", 219.99, "ux.jpg", "ux"],
      "Mobile Android" => ["Curso de apps", 419.99, "android.jpg", "android"]
    ];

    $usuario = [
      "Nome" => "Lucas",
      "Email" => "teste@teste.com",
      "Senha"=> "123456",
      "NivelAcesso" => mt_rand(0, 1)
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos On-Line</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <span> Cursos </span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php if($usuario["NivelAcesso"] == 1) : ?>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Actions <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Adicionar Produto</a></li>
                            <li><a href="#">Editar Produto</a></li>
                        </ul>
                    </li>
                </ul>

                <?php endif; ?>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pesquise Aqui">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"
                            aria-hidden="true"></span>
                    </button>
                </form>
                <p class="navbar-text navbar-right">
                    Logado como
                    <strong>
                        <a href="#" class="navbar-link"> <?php echo $usuario["Nome"] ?> </a>
                    </strong>
                </p>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php foreach ($cursos as $nomeCurso => $infoCursos) : ?>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <!-- Imagem do Curso  -->
                    <img src="<?php echo "assets/img/$infoCursos[2]";?>" alt="Foto Curso " $nomeCurso>
                    <div class="caption">
                        <h3><?php echo $nomeCurso;  ?></h3>
                        <!-- Descricao do Curso -->
                        <p><?php echo $infoCursos[0];  ?></p>
                        <!-- Preco do Curso  -->
                        <p><?php echo $infoCursos[1];  ?></p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                            data-target="<?php echo "#$infoCursos[3]" ?>">Open Modal</button>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

            <?php foreach ($cursos as $nomeCurso => $infoCursos) : ?>
            <!-- alteracao do id - data target  -->
            <div class="modal fade" id="<?php echo $infoCursos[3] ?>" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>


            <?php endforeach ?>


        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

</body>

</html>