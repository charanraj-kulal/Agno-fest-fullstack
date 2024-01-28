// App/Helpers/AuthHelper.php
<?php

function logged_in()
{
    $session = \Config\Services::session();
    return $session->has('id');
}
