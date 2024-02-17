<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    echo "<h1>$id has been requested via post to server</h1>";
    echo "<h1>$id has been deleted</h1>";
    echo "<a href = '/formclass/'>Go back</a>";
}