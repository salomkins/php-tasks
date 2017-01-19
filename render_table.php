<?php

function render_table (){
  $table = [
    ['ID', 'Title', 'Name', 'Age'],
    [1, 'CEO', 'John', 35],
    [2, 'CTO', 'Sandeep', 29],
    [3, 'CFO', 'Laurel', 31],
    [4, 'Manager', 'Andrew', 25],
    [5, 'Engineer', 'Samantha', 26],
    [6, 'Designer', 'Lee', 24]
  ];

echo '<table border = "5">';
  foreach($table as $row) {
    echo('<tr>');
      foreach($row as $cell) {
        if ($row === $table[0]){
          echo('<th>' . $cell . '</th>');
        } else {
          echo('<td>' . $cell . '</td>');
    }
  }
    echo('</tr>');
}
    echo '</table>';
}
echo '<br>';
echo render_table();
 ?>
