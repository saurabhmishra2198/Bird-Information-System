<?php include('base.php') ?>
<?php
require 'main_db.php';
if(isset($_REQUEST['signin']))
{
  $obj = new Connection();
  $r = $obj->login($_REQUEST['email'],$_REQUEST['password']);
  if($r)
  {
    $_SESSION['name']=$r['name'];
    header("location:index.php");
  }
  else
  {
    $_SESSION['msg'] = "Invalid login! Try again";
  }
}
?>
<section class="text-gray-600 body-font">
<form action="#" method="POST">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Slow-carb next level shoindcgoitch ethical authentic, poko scenester</h1>
      <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login Here</h2>
      <?php
        if(isset($_SESSION['msg']))
        {
          echo "<center><p style='color:red;'>".$_SESSION['msg']."</p></center>";
        }
        else
        {
          echo "<center><p style='color:red;'>Welcome to Birds Information</p></center>";
        }
      ?>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="full-name" class="leading-7 text-sm text-gray-600">Password</label>
        <input type="password" id="full-name" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg" name="signin">Sign in</button>
      <p class="text-xs text-gray-500 mt-3">Not a member?
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="signup.php">Signup now</a>
      </p>
    </div>
  </div>
</form>
</section>

<?php include('footar.php') ?>