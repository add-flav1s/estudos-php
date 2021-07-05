<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

    <title>ToDoList</title>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 10%;">
            <center>
                <h1>Todo List</h1>
            </center>
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <button class="btn btn-success" data-target="#myModal" data-toggle="modal" type="button">Adicione
                        task</button>
                    <button type="button" class="btn btn-secondary pull-right">Print</button>
                    <hr>
                    <br>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Adicione a task</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="">Nome da task</label>
                                            <input type="text" required name="task" class="form-control">
                                        </div>
                                        <input type="submit" name="send" value="Enviar" class="btn btn-success">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col">Número</th>
                            <th scope="col">Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="col-md-10">Mark</td>
                            <td><a href="" class="btn btn-warning">Editar</a></td>
                            <td><a href="" class="btn btn-danger">Deletar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>