<?php

$text = '';

if(date('H:i') > '06:00')
{
    $text = 'Внимание! Запись на прием будет сделана на завтрашний день !';
}

else if(date('H:i') > '00:00') 
{
    $text = 'Внимание! Запись на прием будет сделана на сегодняшний день!';
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="form-row text-center">
    <div class="col-12">
    <p class="text-danger"><?=$text?></p>
        <input type="time" id="time"><br>
        <input type="hidden" id="user" value="1">
        <br><button id="send" class="btn btn-success bt-5">Записаться</button>
    </div>

 </div>

    
<script>

$("#send").click(() => {
  let time = $("#time").val();
  let user = $("#user").val();
  if (!time) {
    alert("Выберите время!");
    return false;
  }
  $.getJSON({
    type: "POST",
    url: "add.php",
    data: { time, user },
  }).done((res) => {
    alert(res);
  });
});

</script>

</body>
</html>