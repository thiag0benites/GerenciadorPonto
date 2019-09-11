
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Horas</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .jumbotron{
                padding-top: 10px;
                padding-bottom: 20px;
            }

            .month-title{
                margin-top: 140px;
                margin-bottom: 20px;
            }
/* 
            #tblHours{
                margin-top: 150px;
            } */

            .btn-cmd{
                margin-left: 10px;
            }

            /* #table{
                margin-top: 100px;
            } */

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron fixed-top header">
                <form>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="txtHoraInicio">Entrada</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="00:00" id="txtStartHours">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" id="btnStartHours">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="txtHoraFim">Saída</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="00:00" id="txtEndHours">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" id="btnEndHours">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="txtHoraFim">Saída</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Descrição Atividades" id="txtDescription">
                                <button type="button" class="btn btn-secondary btn-cmd" id="btnClear">Limpar</button>
                                <button type="button" class="btn btn-secondary btn-cmd" id="btnSave">Salvar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <main role="main">
                <div class="container">
                    <h2 class="month-title text-center">Setembro 2019</h2>
                    <table class="table table-bordered table-striped" id="tblHours">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Dia</th>
                                <th scope="col">Entrada</th>
                                <th scope="col">Saída</th>
                                <th scope="col">Entrada</th>
                                <th scope="col">Saída</th>
                                <th scope="col">Total</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>06/09/2019</td>
                                <td>Sexta-feira</td>
                                <td>08:00</td>
                                <td>12:00</td>
                                <td>13:00</td>
                                <td>17:00</td>
                                <td>08:00</td>
                                <td>Alelo - automação web</td>
                            </tr>
                            <tr>
                                <td>07/09/2019</td>
                                <td>Sábado</td>
                                <td>08:00</td>
                                <td>12:00</td>
                                <td>13:00</td>
                                <td>17:00</td>
                                <td>08:00</td>
                                <td>Alelo - automação web</td>
                            </tr>
                            <tr>
                                <td>08/09/2019</td>
                                <td>Domingo</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Fim de Semana</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- <hr> -->
            </main>

            <!-- <footer class="container">
                <p>&copy; Company 2017-2019</p>
            </footer> -->
        </div>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="js/methods.js"></script>
        <script src="js/events.js"></script>
    </body>
</html>