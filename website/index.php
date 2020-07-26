<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Desafio Argos</title>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
