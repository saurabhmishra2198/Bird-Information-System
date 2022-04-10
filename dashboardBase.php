<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<title>Birds Information</title>
</head>
<body>
<header class="text-gray-700 body-font">
  <div class="container bg-primary mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Dashboard</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="dashboard.php">Home</a>
      <a class="mr-5 hover:text-gray-900" href="index.php">Website</a>
      <a class="mr-5 hover:text-gray-900" href="BirdDetail.php">BirdsDetail</a>
      <a class="mr-5 hover:text-gray-900" href="users.php">Users</a>
    </nav>
    <?php
      if(isset($_SESSION['admin']))
      {
          echo "Welcome ".$_SESSION['admin'];
          echo "<a href='logout.php'><button class='inline-flex items-center bg-green-200 border-0 py-1 px-3 focus:outline hover:bg-green-300 rounded text-base mt-4 md:mt-0' style='margin-left:5px;'>Logout
                <svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 ml-1' viewBox='0 0 24 24'>
                <path d='M5 12h14M12 5l7 7-7 7'></path>
                </svg>
                </button></a>";
      }
      else
      {
        echo "<a href='admin.php'><button class='inline-flex items-center bg-green-200 border-0 py-1 px-3 focus:outline hover:bg-green-300 rounded text-base mt-4 md:mt-0'>Login
                <svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 ml-1' viewBox='0 0 24 24'>
                <path d='M5 12h14M12 5l7 7-7 7'></path>
                </svg>
                </button></a>";
      }
    ?> 
</div>
</header>
</body>
</html>