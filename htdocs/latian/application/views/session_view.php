<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>session</title>
        <meta charset="UTF-8">
    </head>
    <body>
        Welcome
        <?php echo $this->session->userdata('name');?>
        <a href='/latian/index.php/session_controller/unset_session_data'>UNSET</a>
    </body>
</html>