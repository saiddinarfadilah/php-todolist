<?php
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';

function viewAddTodoList()
{
    echo "### ADD TODOLIST ###".PHP_EOL;

    $todo = input("Todo (press x to exit) : ");

    if ($todo == "x"){
        echo "canceled to add todo".PHP_EOL;
    } else {
        addTodoList($todo);
    }
}