<?php 
$titulo = "Incrustando PHP";
$txt_lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dignissimos eius rerum modi officia dolorum maiores. Illum doloremque alias rem qui. Voluptas expedita natus rerum adipisci quibusdam, iure similique sed!"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>
<div class="row">
<div class="card">
  <div class="card-body">
    <h4 class="card-title"><?= $titulo?></h4>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
    <?= $txt_lorem?>
    </p>
    <a href="#!" class="card-link">Card link</a>
    <a href="#!" class="card-link">Another link</a>
  </div>
</div>
</div>
</div>
</body>
</html>

