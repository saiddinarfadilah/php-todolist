<?php
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';

addTodoList("Eko");

var_dump($todoList);
