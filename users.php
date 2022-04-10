<?php include('dashboardBase.php') ?>
<?php require 'main_db.php'; ?>
<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="margin-left: 590px;
    margin-top: 10px;"><i><u>User Details</u></i></h1>
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
<?php
if($_SESSION['admin'])
{
    $obj = new Connection();
    $r = $obj->DisplayUser();

    if($r)
    {
        echo "<div class='lg:w-2/3 w-full mx-auto overflow-auto' style='margin-top:64px;'>
            <table class='table-auto w-full text-left whitespace-no-wrap'>";
        echo "<thead><tr>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl'>Name</th>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>email</th>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>Phone</th>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br'>Password</th>
                </tr></thead><tbody>";
        foreach($r as $v)
        {
            echo "<tr>
                    <td class='border-t-2 border-gray-200 px-4 py-3'>$v[0]</td>
                    <td class='border-t-2 border-gray-200 px-4 py-3'>$v[1]</td>
                    <td class='border-t-2 border-gray-200 px-4 py-3'>$v[2]</td>
                    <td class='border-t-2 border-gray-200 px-4 py-3'>$v[3]</td>
                </tr></tbody>";
        } 
        echo "</tbody></table></div>";  
    }
}
?>

