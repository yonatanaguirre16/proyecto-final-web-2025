<?php 
require __DIR__.'/../../helpers/functions.php';
?>

<!DOCTYPE html>
<html lang="es">  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UabcsNet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="output.css">
    <style>
      body {
        font-family: "Nunito", sans-serif;
      }
    </style>
  </head>
  <body class="bg-[#833ab4] min-h-screen flex items-center flex-col">
    <nav class="navbar shadow-lg sticky bg-[#833ab4] text-white px-4">
      <div class="navbar-start">
        <div class="dropdown">
          <label tabindex="0" class="btn btn-ghost lg:hidden">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </label>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-[#833ab4] rounded-box w-52"
          >
            <li><a href="/public/index.php">Inicio</a></li>
            <li><a>Mensajes</a></li>
            <li><a href="/src/views/perfil.php">Perfil</a></li>
          </ul>
        </div>
        <div
          class="w-[80px] h-[80px] flex items-center justify-center lg:ml-10"
        >
          <img
            src="/public/assets/logouabcsnet.png"
            alt="logo"
            class="w-full h-full object-contain"
          />
        </div>
      </div>

      <div class="navbar-end hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a href="/public/index.php">Inicio</a></li>
          <li><a>Mensajes</a></li>
          <li><a href="/src/views/perfil.php">Perfil</a></li>
        </ul>
      </div>

    </nav>
  </body>