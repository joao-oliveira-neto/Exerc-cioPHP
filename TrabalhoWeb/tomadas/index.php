<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container col-6">
    <div class="mt-2">  
        <?php 
            if(isset($_GET['erro']))
            {
                ?>
                <div class="p-3 mb-2 bg-danger text-white">Ops, Deu algo de errado, preencha todos os campos por favor</div>
                <?php
            }
        ?>
    </div>
    <div class="card mt-5">
        <div class="card-header">
            Tomadas - Questão número 1
        </div>

        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <h5 class="mb-4">Indique a quantidade de entradas da:</h5>
                <form id="formulario" action="consultar.php" class="" method="post">
                    <label class="d-block" for="">1º Tomada</label>
                    <input class="form-control col-5 input" required name="tomada1" type="number" min="2" max="6">
                    <label for="">2º Tomada</label>
                    <input class="form-control col-5 input" required name="tomada2" type="number" min="2" max="6">
                    <label for="">3º Tomada</label>
                    <input class="form-control col-5 input" required name="tomada3" type="number" min="2" max="6">
                    <label for="">4º Tomada</label>
                    <input class="form-control col-5 input" required name="tomada4" type="number" min="2" max="6">
                    <div>
                        <input type="submit" value="Enviar" id="enviar" class="btn btn-primary float-right">
                    </div>
                </form>
            </blockquote>
        </div>
    </div>
    <div class="mt-2">
        <?php 
            if(isset($_GET['status']))
            {
                ?>
                <div class="p-3 mb-2 bg-success text-white">O número máximo de notebooks que podem ser conectados é: <?php echo $_GET['status'];?></div>
                <?php
            }
        ?>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>