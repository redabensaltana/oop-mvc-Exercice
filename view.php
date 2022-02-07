<html>
  <head>
    <title>
    </title>
  </head>
  <body>
   <h1>Players</h1>

    <?php foreach($result as $player): ?>
        <hr>
        <h2><?= $player['number'] ?></h2>
        <p><?= $player['name'] ?></p>
        <p><?= $player['salary'] ?></p>
        
    <?php endforeach; ?>    
  </body>
</html>