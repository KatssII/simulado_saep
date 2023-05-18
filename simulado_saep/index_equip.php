<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro de Funcionario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <img src="sisdef.png" alt="">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Cadastro de Equipamentos com Defeito</h1>
            <br>
            <form action="cad_equip.php" method="post" id="formulario">
            <label for="frutas">Equipamento:</label>
                <select name="frutas" id="frutas">
                <option value="maca">Maçã</option>
                <option value="laranja">Laranja</option>
                <option value="banana">Banana</option>
                <option value="uva">Uva</option>
                </select>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Nome do Equipamento: </label>
                        <input type="text" name="equipamento" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Tipo do defeito: </label>
                        <input type="text" name="defeito" id="" class="form-control">
                    </div>
                </div>


                <input type="hidden" name="acao" value="cadastrar">
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Horário de inicio do defeito: </label>
                        <input type="time" name="horaInicio" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Horário final do defeito: </label>
                        <input type="time" name="horaFinal" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Data: </label>
                        <input type="date" name="dataDefeito" id="" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                    <br><input type="submit" class="btn btn-success" value="CADASTRAR EQUIPAMENTO">
                    <a href="tabela.php" type="button" class="btn btn-primary float-end">Tabela Equipamentos com Defeito</a>
                    </div>
                </div>
            </form>
            <div id="resultado"></div>
        </div>
        <script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script>
            $("#formulario").submit(function(){
                event.preventDefault();
                var dados =  $(this).serialize();
                $.ajax({
                    type:'POST',
                    url:'cad_equip.php',
                    data: dados,
                    success: function(data){
                        $("#resultado").html(data);
                    }
                });
            });
        </script>
    </body>
</html>