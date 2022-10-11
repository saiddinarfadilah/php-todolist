<?php

require_once __DIR__ . '/../View/ViewDeleteTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';

addTodoList("said");
addTodoList("dinar");

showTodoList();

viewDeleteTodoList();
showTodoList();

