<?php
$to_email_address = 'giuffraalessandro@gmail.com';
$subject = 'Reporte de falla';
$message = 'Se ha reportado una nueva falla, por favor revisar la tabla de fallas';
$headers = 'From: NoReply <noreply@gmail.com>';

mail($to_email_address,$subject,$message,$headers);
?>