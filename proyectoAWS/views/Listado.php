<h1>Listado de peliculas</h1>

<table border="2px">
  <thead>
    <th>Nombre</th>
    <th>Descripcion</th>
  </thead>

  <tbody>

  <?php

include 'read.php';

while ($row= mysqli_fetch_array($sql_query)){?>

<tr>

    <td><?= $row['Nombre'] ?></td>
    <td><?= $row['Descripcion'] ?></td>

</tr>
<?php }
  ?>

  </tbody>
</table>