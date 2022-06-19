<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Entity\TodoList;
use Repository\TodiListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function testViewShowTodoList():void
{
    $todolistRepository = new TodiListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar oop");
    $todolistService->addTodoList("Belajar js");
    $todolistService->addTodoList("Belajar vue");

    $todolistView->showTodoList();

}

function testViewAddTodoList():void
{
    $todolistRepository = new TodiListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar oop");
    $todolistService->addTodoList("Belajar js");
    $todolistService->addTodoList("Belajar vue");

    $todolistView->showTodoList();

    $todolistView->addTodoList();

    $todolistView->showTodoList();

}

function testViewRemoveTodoList():void
{
    $todolistRepository = new TodiListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar oop");
    $todolistService->addTodoList("Belajar js");
    $todolistService->addTodoList("Belajar vue");

    $todolistView->showTodoList();

    $todolistView->removeTodoList();

    $todolistView->showTodoList();

}

testViewRemoveTodoList();