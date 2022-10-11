<?php
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/DeleteTodoList.php';

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khanedy");

showTodoList();

deleteTodoList(2);

showTodoList();

