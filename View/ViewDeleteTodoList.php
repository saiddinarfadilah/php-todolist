<?php
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/DeleteTodoList.php';

function viewDeleteTodoList()
{
    echo "### DELETE TODOLIST ###".PHP_EOL;

    $switch = input("Nomor (Press x to canceled) : ");
    if ($switch == "x"){
        echo "canceled to delete todolist".PHP_EOL;
    } else {
        $success = deleteTodoList($switch);
        if ($success){
            echo "Deleted successfully $switch".PHP_EOL;
        } else {
            echo "Error to deleted $switch".PHP_EOL;
        }
    }
}