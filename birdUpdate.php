<?php include('dashboardbase.php') ?>
<?php require 'main_db.php' ?>
<?php
if(isset($_REQUEST['submit']))
{
    if(isset($_SESSION['admin']))
    {
        $sno = $_GET['sno'];
        $obj = new Connection();

        $file_name = $_FILES['image']['name'];
		$file_type = $_FILES['image']['type'];
		$file_size = $_FILES['image']['size'];
		$file_tem_Loc = $_FILES['image']['tmp_name'];
		$file_store = "static/img/".$file_name;
		
	    move_uploaded_file($file_tem_Loc, $file_store);

        $r = $obj->BirdUpdate($sno,$_REQUEST['name'],$_REQUEST['habitat'],$_REQUEST['sname'],$_REQUEST['grange'],$file_name,$_REQUEST['cstatus'],$_REQUEST['message']);
        if($r)
        {
            $_SESSION['msg'] = "Information Updated successfuly";
            header("location:dashboard.php");
        }
        else
        {
            $_SESSION['msg'] = "Information not Updated";
        }
    }
    else
    {
        $_SESSION['msg'] = "Please login! try again";
    }
}
?>
<section class="text-gray-600 body-font relative">
<form action="#" method="POST" enctype="multipart/form-data"> 
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Update Birds Information</h1>
      <?php
        if(isset($_SESSION['msg']))
        {
          echo "<center><p style='color:red;'>".$_SESSION['msg']."</p></center>";
        }
        else
        {
          echo "<center><p style='color:red;'>Welcome to Dashboard</p></center>";
        }
      ?>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2"> 
        <?php
        if($_SESSION['admin'])
        {
            $sno = $_GET['sno'];
            $obj = new Connection();
            $res = $obj->ShowBirdInfo($sno);
            if($res)
            {
                foreach($res as $value)
                {
                        echo "<div class='p-2 w-1/2'>
                        <div class='relative'>
                        <label for='name' class='leading-7 text-sm text-gray-600'>Bird Name</label>
                        <input type='text' id='name' name='name' value='$value[1]' class='w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'>
                        </div>
                    </div>
                    <div class='p-2 w-1/2'>
                        <div class='relative'>
                        <label for='name' class='leading-7 text-sm text-gray-600'>Habitat</label>
                        <input type='text' id='name' name='habitat' value='$value[2]' class='w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'>
                        </div>
                    </div>
                    <div class='p-2 w-1/2'>
                        <div class='relative'>
                        <label for='name' class='leading-7 text-sm text-gray-600'>Scientific Name</label>
                        <input type='text' id='name' name='sname' value='$value[3]' class='w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'>
                        </div>
                    </div>
                    <div class='p-2 w-1/2'>
                        <div class='relative'>
                        <label for='name' class='leading-7 text-sm text-gray-600'>Geographical Range</label>
                        <input type='text' id='name' name='grange' value='$value[4]' class='w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'>
                        </div>
                    </div>
                    <div class='p-2 w-1/2'>
                        <div class='relative'>
                        <label for='image' class='leading-7 text-sm text-gray-600'>Select Image</label>
                        <input type='file' id='name' name='image' class='w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'>
                        </div>
                    </div>
                    <div class='p-2 w-1/2'>
                        <div class='relative'>
                        <label for='name' class='leading-7 text-sm text-gray-600'>Conservation Status</label>
                        <input type='text' id='name' name='cstatus' value='$value[6]' class='w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'>
                        </div>
                    </div>
                    <div class='p-2 w-full'>
                        <div class='relative'>
                        <label for='message' class='leading-7 text-sm text-gray-600'>About Bird</label>
                        <textarea id='message' name='message' class='w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out'>$value[7]</textarea>
                        </div>
                    </div>
                    <div class='p-2 w-full'>
                        <button class='flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg' name='submit'>Submit</button>
                    </div>";
                }
            }
        }
        ?>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-indigo-500">2022-2023</a>
          
        </div>
      </div>
    </div>
  </div>
</form>
</section>