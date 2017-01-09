<?php
   class Notification{
       
       // Just write the name of the dialog, without the '.php'
       
       function __construct($nottype, $message) {
           // Notification types: attention, information, error, success
           $this->notification_type = $nottype;
           $this->message = $message;
       }
       
       function show(){
?>
<link href="/css/notification.css" type="text/css" rel="stylesheet">
<div class="notification <?php echo $this->notification_type; ?>">
    <a href="Javascript:void(0)" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
    <div class="notification-content"><?php echo $this->message; ?></div>
</div>
<?php
       }
    }
?>

