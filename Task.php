<?php
    function save()
    {
        array_push($_SESSION['list_of_tasks'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_tasks'];
    }

    Task::getAll()

    static function deleteAll()
    {
        $_SESSION['list_of_tasks'] = array();
    }

    <form action='/delete_tasks' method='post'>
    <form action='/tasks' method='post'>

    $app->post("/delete_tasks", function() { ... }
    $app->post("/tasks", function() { ... }
?>
