<?php

require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";

use Repository\TodiListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplikasi TodoList" . PHP_EOL;

$todolistRepository = new TodiListRepositoryImpl();
$todolistService = new TodoListServiceImpl($todolistRepository);
$todolistView = new TodoListView($todolistService);

$todolistView->showTodoList();

