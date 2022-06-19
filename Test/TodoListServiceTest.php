<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Service\TodoListServiceImpl;
use Repository\TodiListRepositoryImpl;
use Entity\TodoList;

function testShowTodoList(): void
{

  $todoListRepository = new TodiListRepositoryImpl();
  $todoListRepository->todoList[1] = new TodoList("Belajar oop");
  $todoListRepository->todoList[2] = new TodoList("Belajar js");
  $todoListRepository->todoList[3] = new TodoList("Belajar vue");

  $todoListService = new TodoListServiceImpl($todoListRepository);

  $todoListService->showTodoList();
}

testShowTodoList();

function testAddTodoList(): void
{

  $todoListRepository = new TodiListRepositoryImpl();

  $todoListService = new TodoListServiceImpl($todoListRepository);
  $todoListService->addTodoList("Belajar oop");
  $todoListService->addTodoList("Belajar js");
  $todoListService->addTodoList("Belajar vue");

  $todoListService->showTodoList();
}
testAddTodoList();

function testRemoveTodoList(): void
{

    $todoListRepository = new TodiListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar oop");
    $todoListService->addTodoList("Belajar js");
    $todoListService->addTodoList("Belajar vue");

    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);

    $todoListService->showTodoList();

}
testRemoveTodoList();