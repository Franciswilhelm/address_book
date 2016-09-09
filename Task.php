<?php
    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    Task::getAll()

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }

    <form action='/delete_contacts' method='post'>
    <form action='/contacts' method='post'>

    $app->post("/delete_contacts", function() { ... }
    $app->post("/contacts", function() { ... }
?>
