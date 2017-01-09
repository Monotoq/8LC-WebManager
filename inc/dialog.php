<?php
   class Dialog{
       
       // Just write the name of the dialog, without the '.php'
       
       function __construct($dtemp) {
           // This constructor only sets the template for the dialog
           $this->dialog_template = "dgs/".$dtemp.".php";
       }
       
       function show(){
?>
        <script>
            function closeDialog(){
                    $("#lightbox_dialog").addClass("hidden");
                    $("#fadedContent").addClass("hidden");
            }
        </script>
        <link href="/css/dialog.css" type="text/css" rel="stylesheet">
        <div id="lightbox_dialog" class="white_content displayed">
                <?php include $this->dialog_template; ?>
                <a class="close" href="javascript:void(0)" onclick="closeDialog()">X</a>
        </div>
        <div id="fadedContent" class="black_overlay displayed"></div>
<?php
       }
    }
?>
