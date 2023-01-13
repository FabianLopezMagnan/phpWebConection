<?php 
function conectionDB(){
  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect("us-east.connect.psdb.cloud","26c9hrgzylhckwk9mmps","pscale_pw_G8EgcJt1JAffrm1TLpOSuaTGeUj6xcMkjmcnpUfTMJQ", "prueba");
  // Verifica la conexión
  if ($mysqli->connect_error) {
    echo "ERROR";
    die("Error de conexión: " . $conn->connect_error);
  } 
  return $mysqli;
} 
function listarTablaProductos(){
  $con = conectionDB();
  $result = $con->query("SELECT * FROM productos");
  echo '<table class="table table-striped table-dark">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Garantia</th>
          </tr>
        </thead>
        <tbody>';
  while($row = $result->fetch_assoc()) {
   echo '<tr>
          <th>'.$row["id"].'</th>
          <td>'.$row["nombre"].'</td>
          <td>'.$row["garantia"].'</td>
        </tr>';
  }
  echo '</tbody>
        </table>';
  $con->close();
}
function buscarProducto($codigo){
  $con = conectionDB();
  $result = $con->query("SELECT * FROM productos WHERE id = '$codigo'");
  $row = $result->fetch_assoc();
  $garantia=$row['garantia'];
  echo "el producto ingresado de codigo: ".$codigo." , ".$garantia." tiene garantia.";
  $con->close();
}
?>