<h1>Portfolio</h1>
<p>
<table class="table table-striped">
 Не переходите по следующим ссылкам, там пусто!
  <tr>
    <th>Год</th>
    <th>Проект</th>
    <th>Описание</th>
  </tr>
  <?php

  foreach ($data as $row) {
    echo '<tr><td>' . $row['Year'] . '</td><td>' . $row['Site'] . '</td><td>' . $row['Description'] . '</td></tr>';
  }

  ?>
</table>
</p>