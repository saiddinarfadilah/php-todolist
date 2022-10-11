<?php

require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
addTodoList("said");
addTodoList("dinar");
viewAddTodoList();
showTodoList();