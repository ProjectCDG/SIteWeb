    <li class="nav-item">
          <a class="nav-link active "style="color:#fff;background-color:#FFA500" href="index.php"><strong>Menu Principal</strong></a>
        </li>
        <?php if (isset($_SESSION['first_name'])) { ?>
        <li class="nav-item">
          <a class="nav-link active"style="color:#fff;background-color:#FFA500" href="download.php"><strong>Download</strong></a>
        </li>
        <?php if($_SESSION['rang'] == '1') { ?>
        <li class="nav-item" style= background-color:#FFA500;>
          <a class="nav-link active"style="color:#fff;background-color:#E95F00" href="admin.php" ><strong>Administrateur</strong></a>
        </li>
        <?php } }?>
<div>
  <style>
      h3 {
        color : #FFA500;
      }

  </style>
<h3></h3>
  <p></p>
</div>
