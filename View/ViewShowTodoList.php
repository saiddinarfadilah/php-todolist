<?php
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewDeleteTodoList.php';

function viewShowTodoList()
{
    while (true){
        showTodoList();
        echo "### MENU ###" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Delete Todo" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        $switch = input("Change : ");
        if ($switch == "1"){
            viewAddTodoList();
        } else if ($switch == "2"){
            viewDeleteTodoList();
        } else if ($switch == "x"){
            break;
        } else {
            echo "Change no understand..., please try again" . PHP_EOL;
        }
    }
    echo "See you again..." . PHP_EOL;
}