<?php
require_once("db/db.php");
require_once("controller/controllerSpeakers.php");
require_once("controller/controllerNotesIndex.php");

if(isset($_POST['operation']))
{
    if($_POST['operation'] == 'addnote')
    {
        $user = $_POST['user'];
        $conference = $_POST['conference'];
        $speaker = $_POST['speaker'];
        $note = $_POST['note'];

        $result = $not->saveNote($user,$conference,$speaker,$note);
        echo $result;
    }
}
else
{
    require_once("views/conference.php");
}
?>