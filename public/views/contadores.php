<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'components/offcanvas.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-4 ps-2 fw-normal">Reporte Contadores</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <form action="" method="post" class="mt-3 pt-5 bg-body-tertiary">
                <div class="d-flex gap-3 align-items-end">
                    <div class="form-floating mb-3 flex-grow-1">
                        <input type="date" class="form-control" id="fechaInicial" name="fechaInicial" placeholder="Fecha Inicial" />
                        <label for="fechaInicial">Fecha Inicial</label>
                    </div>
                    <div class="form-floating mb-3 flex-grow-1">
                        <input type="date" class="form-control" id="fechaFinal" name="fechaFinal" placeholder="Fecha Final" />
                        <label for="fechaFinal">Fecha Final</label>
                    </div>
                    <div class="form-floating mb-3 flex-grow-1">
                        <input type="number" class="form-control" id="idDispositivo" name="idDispositivo" placeholder="ID Dispositivo" />
                        <label for="idDispositivo">ID Dispositivo</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-primary mb-3">Consultar</button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-12 bg-body-tertiary">
                <p class="h5">Examinar Csv</p>
                <hr>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-body-tertiary">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover text-center mb-3">
                        <thead class="table-light">
                            <tr>
                                <th>Día</th>
                                <th>Contador</th>
                                <th>Fecha Contador</th>
                                <th>RealValue</th>
                                <th>Contador Auxiliar</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>