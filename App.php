<?php
require_once __DIR__ . '/Model/TodoList.php';
require_once __DIR__ . '/BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/BusinessLogic/DeleteTodoList.php';
require_once __DIR__ . '/View/ViewShowTodoList.php';
require_once __DIR__ . '/View/ViewAddTodoList.php';
require_once __DIR__ . '/View/ViewDeleteTodoList.php';


echo "Aplikasi Todolist" . PHP_EOL;
viewShowTodoList();