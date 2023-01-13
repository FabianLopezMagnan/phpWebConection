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
function listarTablaProducto(){
  $con = conectionDB();
  $result = $con->query("SELECT * FROM products");
  echo "<thead class='thead-dark'>
          <tr>
            <th>#</th>
            <th>Producto</th>
          </tr>
        </thead>
        <tbody>";
  $contador = 0;
  while($row = $result->fetch_assoc()) {
    $contador = $contador+1;
   echo "<tr>
          <th>$contador</th>
          <td>".$row["name"]."</td>
        </tr>";
  }
  echo "</tbody>";
  $con->close();
}
?>