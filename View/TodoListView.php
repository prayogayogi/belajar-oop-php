<?php

namespace View {

    use Service\TodoListService;
    use Helper\InputHelper;

    class TodoListView
  {
    private TodoListService $todoListService;

    public function __construct(TodoListService $todoListService)
    {
        $this->todoListService = $todoListService;
    }

    function showTodoList(): void
    {
      while (true){
          $this->todoListService->showTodoList();

          echo "Menu" . PHP_EOL;
          echo "1. Tambah Todo" . PHP_EOL;
          echo "2. Hapus Todo" . PHP_EOL;
          echo "3. Keluar" . PHP_EOL;

          $pilihan = InputHelper::input("Pilih");

          if($pilihan == "1"){
              $this->addTodoList();
          }elseif ($pilihan == "2"){
              $this->removeTodoList();
          }elseif ($pilihan == "x"){
              break;
          }else{
              echo "Pilihan tidak mengerti" . PHP_EOL;
          }
      }

      echo "Sampai Jumpa Lagi" .PHP_EOL;
    }

    function addTodoList(): void
    {
      echo "Menambah Todo" . PHP_EOL;
      $todo = InputHelper::input("Todo (x untuk batal)");

      if ($todo == "x"){
          echo "Batal menambah todo" . PHP_EOL;
      }else{
          $this->todoListService->addTodoList($todo);
      }
    }

    function removeTodoList(): void
    {
      echo "Menghapus Todo" . PHP_EOL;

      $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

      if ($pilihan == "x"){
          echo "Batal menghapus todo" . PHP_EOL;
      }else{
          $this->todoListService->removeTodoList($pilihan);
      }
    }

  }

}
