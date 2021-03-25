<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Receta</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/main.css.css">
</head>

<body>
  <div>
    <div class="container-sm mt-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h3 class="card-title h5">Llenado Receta</h3>
        </div><!-- /.card-header -->
        
        <div class="card-body">
          <form>
          
          <!-- Info Paciente -->
            <div class="row mt-2">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre(s) Paciente</label>
                  <input type="text" class="form-control" placeholder="Nombre(s) ...">
                </div>
              </div>

              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Apellidos</label>
                  <input type="text" class="form-control" placeholder="Apellidos ...">
                </div>
              </div>
            </div>


            <div class="row mt-2">
              <div class="col-sm-2 mr-sm-5">
                <!-- text input -->
                <div class="form-group">
                  <label>Edad </label>
                  <input type="number" class="form-control" max="90" min="1" placeholder="Edad ...">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Sexo</label>
                    <select class="form-control">
                      <option>Femenino</option>
                      <option>Masculino</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- Diagnostico -->
            <div class="row mt-2">
              <div class="col-sm-12">
                <!-- textarea -->
                <div class="form-group">
                  <label>Diagnostico</label>
                  <textarea class="form-control" rows="15" placeholder="Diagnostico dado al paciente ..."></textarea>
                </div>
              </div>
            </div>
            

            <!-- Medicamentos -->
            <div class="row mt-2">
              <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                  <label>Medicamento 1 </label>
                  <input type="text" class="form-control" max="90" min="1" placeholder="...">
                </div>
              </div>

              <div class="col-sm-2">
                  <!-- select -->
                  <div class="form-group">
                    <label>Tiempo</label>
                    <select class="form-control">
                      <option>24 hrs</option>
                      <option>12 hrs</option>
                      <option>8 hrs</option>
                      <option>5 hrs</option>
                    </select>
                  </div>
              </div>

              <div class="col-sm-2">
                <!-- text input -->
                <div class="form-group">
                  <label>Dias </label>
                  <input type="number" class="form-control" max="365" min="1" placeholder="...">
                </div>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                  <label>Medicamento 2 </label>
                  <input type="text" class="form-control" max="90" min="1" placeholder="...">
                </div>
              </div>

              <div class="col-sm-2">
                  <!-- select -->
                  <div class="form-group">
                    <label>Tiempo</label>
                    <select class="form-control">
                      <option>24 hrs</option>
                      <option>12 hrs</option>
                      <option>8 hrs</option>
                      <option>5 hrs</option>
                    </select>
                  </div>
              </div>

              <div class="col-sm-2">
                <!-- text input -->
                <div class="form-group">
                  <label>Dias </label>
                  <input type="number" class="form-control" max="365" min="1" placeholder="...">
                </div>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                  <label>Medicamento 3 </label>
                  <input type="text" class="form-control" max="90" min="1" placeholder="...">
                </div>
              </div>

              <div class="col-sm-2">
                  <!-- select -->
                  <div class="form-group">
                    <label>Tiempo</label>
                    <select class="form-control">
                      <option>24 hrs</option>
                      <option>12 hrs</option>
                      <option>8 hrs</option>
                      <option>5 hrs</option>
                    </select>
                  </div>
              </div>

              <div class="col-sm-2">
                <!-- text input -->
                <div class="form-group">
                  <label>Dias </label>
                  <input type="number" class="form-control" max="365" min="1" placeholder="...">
                </div>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                  <label>Medicamento 4 </label>
                  <input type="text" class="form-control" max="90" min="1" placeholder="...">
                </div>
              </div>

              <div class="col-sm-2">
                  <!-- select -->
                  <div class="form-group">
                    <label>Tiempo</label>
                    <select class="form-control">
                      <option>24 hrs</option>
                      <option>12 hrs</option>
                      <option>8 hrs</option>
                      <option>5 hrs</option>
                    </select>
                  </div>
              </div>

              <div class="col-sm-2">
                <!-- text input -->
                <div class="form-group">
                  <label>Dias </label>
                  <input type="number" class="form-control" max="365" min="1" placeholder="...">
                </div>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                  <label>Medicamento 5 </label>
                  <input type="text" class="form-control" max="90" min="1" placeholder="...">
                </div>
              </div>

              <div class="col-sm-2">
                  <!-- select -->
                  <div class="form-group">
                    <label>Tiempo</label>
                    <select class="form-control">
                      <option>24 hrs</option>
                      <option>12 hrs</option>
                      <option>8 hrs</option>
                      <option>5 hrs</option>
                    </select>
                  </div>
              </div>

              <div class="col-sm-2">
                <!-- text input -->
                <div class="form-group">
                  <label>Dias </label>
                  <input type="number" class="form-control" max="365" min="1" placeholder="...">
                </div>
              </div>
            </div>

            
          </form>  <!-- /form -->

        </div>
        <!-- /.card-body -->

        <div class="card-footer text-end">
          <button type="submit" class="btn btn-success">Guardar Diagnostico</button>
        </div>
        <!-- /.card-footer -->

      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  
</body>

</html>