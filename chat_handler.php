<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'e8fe65290518733c7192',
    '3a616a018609c4fa8a26',
    '1518714',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('chatbox', 'my-event', $data);
?>