<?php
/**
 * Created by PhpStorm.
 * User: Dhais Firmansyah
 * Date: 11/18/2018
 * Time: 11:30 AM
 */
if ( !session_id() ) {
    session_start();
}

require_once '../app/init.php';

$app= new App;