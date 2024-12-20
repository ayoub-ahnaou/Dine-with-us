<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Le CHEF</title>
  <link rel="stylesheet" href="../assets/css/input.css?v=2" />
  <link rel="stylesheet" href="../assets/css/output.css?v=2" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
    rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body class="font-[Oswald]">
  <div class="min-h-[100vh] flex flex-col">
    <?php include "../assets/components/navigation.php"; ?>
    <?php
      if(!isset($_SESSION["role"]) || $_SESSION["role"] != 2){
        header("location: ./login.php");
      }
    ?>

    <div class="flex flex-grow w-full max-md:flex-col">
      <section id="dashboard" class="w-1/5 bg-gray-100 flex flex-col max-md:w-full">
        <div class="flex py-6 px-2 items-center gap-1">
          <img
            src="../assets/images/icons/dashboard.svg"
            class="size-6"
            alt="" />
          <h1 class="text-xl">Dashboard</h1>
        </div>
        <ul class="flex flex-col">
          <li
            onclick="switch_option(this.id, 'graphs')" 
            id="visualisation_choice"
            class="p-2 hover:bg-white bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
            <img
              src="../assets/images/icons/graphs.svg"
              class="size-5"
              alt="" />
            <p>Visualisation</p>
          </li>
          <li
            onclick="switch_option(this.id, 'users')"
            id="users_choice"
            class="p-2 hover:bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
            <img
              src="../assets/images/icons/users.svg"
              class="size-5"
              alt="" />
            <p>Users</p>
          </li>
          <li
            onclick="switch_option(this.id, 'menus')"
            id="menus_choice"
            class="p-2 hover:bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
            <img
              src="../assets/images/icons/menus.svg"
              class="size-5"
              alt="" />
            <p>Menus</p>
          </li>
          <li
            onclick="switch_option(this.id, 'reservations')"
            id="reservations_choice"
            class="p-2 hover:bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
            <img
              src="../assets/images/icons/reservations.svg"
              class="size-5"
              alt="" />
            <p>Reservations</p>
          </li>
        </ul>
      </section>

      <?php 
      include "./graphs.php";
      include "./users-list.php";
      include "./menus-list.php";
      include "./reservations-list.php";
      ?>

      <script>
        function switch_option(id_target, choice){
          const lists = document.querySelectorAll("#dashboard li");
          Array.from(lists).map((item) => item.classList.remove("bg-white"));
          Array.from(lists).map((item) => {
            if(item.id == id_target) item.classList.add("bg-white");
          });

          const graphs = document.getElementById("graphs");
          const users = document.getElementById("users-list");
          const menus = document.getElementById("menus-list");
          const reservations = document.getElementById("reservations-list");

          graphs.classList.add("hidden");
          users.classList.add("hidden");
          menus.classList.add("hidden");
          reservations.classList.add("hidden");

          if(choice == "graphs") graphs.classList.remove("hidden");
          if(choice == "users") users.classList.remove("hidden");
          if(choice == "menus") menus.classList.remove("hidden");
          if(choice == "reservations") reservations.classList.remove("hidden");
        }
      </script>
    </div>

    <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
      <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
    </footer>
  </div>
</body>

</html>