<html>
  <head>
    <title>
    </title>
  </head>
  <body>
   <h1 style="font-family:Roboto;">Players</h1>
      
    <?php foreach($result as $player): ?>
        <hr>

        <div style="font-family:Roboto;display:flex;justify-content:space-around;align-items:center;border:2px solid black;border-radius: 20px;width:400px">
          <h3><?= $player['number'] ?></h3>
          <p><?= $player['name'] ?></p>
          <p><?= $player['salary'] ?>$</p>
        </div>
        
    <?php endforeach; ?>    
  </body>
</html>