<!DOCTYPE html>
<html lang="en">
<head>
  <title>Planning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->Html->css('book') ?>
</head>
<body>

<div class="container">
      <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>



</div>

</body>
</html>
