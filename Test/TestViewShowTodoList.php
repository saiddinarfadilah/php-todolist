<?php

require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewDeleteTodoList.php';
require_once __DIR__ . '/../View/ViewShowTodoList.php';

addTodoList("said");
addTodoList("dinar");
addTodoList("fadilah");

viewShowTodoList();
