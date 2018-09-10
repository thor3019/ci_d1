<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>SHOW DATA</h2>
  <p><a href="add">ADD DATA</a></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Password</th>
        <th>Status</th>
        <th>edit</th>
        <th>del</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($rs as &$r) {?>
      <tr>
        <td><?php echo $r['id'] ?></td>
        <td><?php echo $r['name'] ?></td>
        <td><?php echo $r['passwd'] ?></td>
        <td><?php echo $r['status'] ?></td>
        <th><a href="edit/<?php echo $r['id'] ?>"> edit</a></th>
        <th><a href="del/<?php echo $r['id'] ?>" onclick="return confirm('คูณต้องการลบหรือไม่?')";>del</a></th>
      </tr>
      
    </tbody>
    <?php } ?>
  </table>
</div>

</body>
</html>
