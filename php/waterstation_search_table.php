<?php
  $link = mysql_connect('127.0.0.1', 'root', '123');
    if (!$link) {
    die('Not connected : ' . mysql_error());
    }
    // make foo the current db
    $db_selected = mysql_select_db('mytest', $link);
    if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
    }
    $result = mysql_query("select * from WaterStation limit 5");
?>
<tbody>
  <?php while($row = mysql_fetch_assoc($result)){  ?>
      <tr>
        <td><?php echo $row['num'] ?></td>
        <td><?php echo $row['usrid'] ?></td>
        <td><?php echo $row['deviceid'] ?></td>
        <td><?php echo $row['status'] ?></td>
  			<td><?php echo $row['flow'] ?></td>
  			<td><?php echo $row['time'] ?></td>
      </tr>
 <?php }?>
</tbody>
