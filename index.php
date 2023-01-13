<!DOCTYPE html>
<html>
  <head>
    <title>PHP Test</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <?php 
      include 'funciones/funciones.php';
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <form id="form-search">
                <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                </div>
                <button type="submit" name="search" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <div id="respuesta" style="border:solid black 1px;width:200px;text-aling:center;">
            </div>
        </div>
    </div>
</div>
    <?php listarTablaProductos(); ?>
<script>
    document.getElementById("form-search")
      .addEventListener("submit", function (e) {
        e.preventDefault();
        let search = document.getElementById("search").value;
        fetch("funciones/search.php", {
            method: "POST",
            body: JSON.stringify({ search: search }),
            headers: { 'Content-Type': 'application/json' }
        })
            .then(response => response.text())
            .then(data => {
                document.getElementById("respuesta").innerHTML = data;
            });
    });
</script>
</body>
</html>