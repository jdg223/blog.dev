<?php

$name = Input::get('name');
$email = Input::get('email');
$subject = Input::get ('subject');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?> 
<p>
name: {{$name}}<br>
Email address: {{$email}}<br>
Message: {{$message}}<br>
Date: {{$date_time}}<br>
User IP address:{{$userIpAddress}}<br>
</p>