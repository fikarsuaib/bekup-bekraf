<?php var_dump($users); ?>
<br>
<br>
<?php
foreach ($users as $user) {
  echo '<li>'.$user.'</li>';
}
?>
<br>
<ul>
<?php foreach ($users as $user): ?>
  <li><?= $user ?></li>
<?php endforeach ?>
</ul>
<br>


<form action="http://localhost/bekup/index.php/bekraf/baco/create" method="POST">
  <input type="text" name="name">
  <input type="submit" name="submit" value="tambah data">
</form>


<br>
<?php
  $i = 0;
  foreach ($users as $user) { ?>
<li>
  <?php echo $user." ".$i; ?>

  <!-- DELETE USER -->
  <form action="http://localhost/bekup/index.php/bekraf/baco/delete/<?php echo $i; ?>" method="POST">
    <input type="submit" name="submit" value="Delete">
  </form>
  <form action="http://localhost/bekup/index.php/bekraf/baco/edit/<?php echo $i; ?>" method="POST">
    <input type="submit" name="submit" value="Edit">
  </form>

</li>

<?php $i++; } ?>
