<!doctype html>
<html lang="en">
  <head>
    <title>Formulario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col6">
                  <h2>Primer formulario con php</h2>
                  <form action="receive.php" method="post" enctype>
                      <div class="form-group">
                        <label for="">Nombre completo:</label>
                        <input type="text" class="form-control" name="user" id="" aria-describedby="helpId" placeholder="Ej. Juanito perez">
                        <!--<small id="helpId" class="form-text text-muted">Help text</small>-->
                      </div>
                      <div class="form-group">
                        <label for="">Ingrese contraseña:</label>
                        <input type="password" class="form-control" name="pass" id="" placeholder="*****">
                      </div>
                      <div class="form-check">
                          <h5>Hobbies:</h5>
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="hobby[]" id="" value="Sports" >
                          Hacer deportes
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="hobby[]" id="" value="Travel" >
                          Viajar
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="hobby[]" id="" value="leer" >
                          Leer
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">Identificación:</label>
                        <select class="form-control" name="identificacion" id="">
                          <option value="">---</option>
                          <option value="Cedula">Cedula</option>
                          <option value="Pasaporte">Pasaporte</option>
                          <option value="Licencia">Licencia</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Mascota:</label>
                        <select multiple class="form-control" name="mascotas" id="">
                          <option value="">---</option>
                          <option value="Perro">Perro</option>
                          <option value="Gallina">Gallina</option>
                          <option value="Gato">Gato</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Describe yourself:</label>
                        <textarea class="form-control" name="desc" maxlength="150" id="" rows="6" placeholder="No mas de 150 palabras"></textarea>
                      </div>
                      <div class="form-group">
                        <label for=""></label>
                        <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Subir imagen</small>
                      </div>
                      <div class="form-check" style="display:flex; flex-direction: column;">
                            <h6>Género</h6>
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="masc" id="" value="" >
                          Masculino
                        </label>
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="fem" id="" value="" >
                          Femenino
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>