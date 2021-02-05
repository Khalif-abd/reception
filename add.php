<?php

include 'db.php';

$obj = new DB();
$obj->mysql_connect();



if(date('H:i') > '06:00')
{
    // На завтра
    $day = date('j', strtotime('+1 day'));
    $date = date('Y-m-d ', strtotime('+1 day'));
    
}

else if(date('H:i') > '00:00') 
{
    //На сегондя
    $day = date('j');
    $date = date('Y-m-d');

}


$data = [
    'user_id' => $_POST['user'],
    'date' => $date
];


$res = $obj->select('user_id, date')
->from('reception')
->where('user_id = :user_id AND date = :date', $data)
->go(true);

$count = count($res);

if($count >= 2) {
    $text = "Вы уже два раза записались на $day-ое число!";
}

else {
    $data['time'] = $_POST['time'];
    $obj->insert('reception')
    ->value($data)
    ->go();
    
    $text = 'Вы успешно записались на прием!';
}


echo json_encode($text,true);