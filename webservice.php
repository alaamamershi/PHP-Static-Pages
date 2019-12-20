<?php

/**************************************************************
 * webservice.php
 * 
 * Author:          Alaam Amershi
 * Date:            12/19/19
 * Last Modified:   12/19/19
 * 
 * Description:
 * Server-Side request handling.
 */


/**************************************************************
 * GET REQUEST HANDLING
 */

if (isset($_GET["action"])) {
    $action = strip_tags($_GET["action"]);
}


/**************************************************************
 * POST REQUEST HANDLING
 */

if (isset($_POST["action"])) {
    $action = strip_tags($_POST["action"]);
}
