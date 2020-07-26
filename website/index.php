<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Desafio Argos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <?php
    $state = file_get_contents("http://api:9001/led");
    $leds = json_decode($state);
  ?>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ClientID</th>
          <th>Topic</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($leds as $led): ?>
          <tr>
            <td><?php echo $led->clientID; ?></td>
            <td><?php echo $led->topic; ?></td>
            <td><?php echo $led->message; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
