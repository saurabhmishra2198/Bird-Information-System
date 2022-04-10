<?php include('dashboardBase.php') ?>
<?php require 'main_db.php'; ?>
<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="margin-left: 590px;
    margin-top: 10px;"><i><u>Birds Details</u></i></h1>
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
<?php
if($_SESSION['admin'])
{
    $obj = new Connection();
    $r = $obj->DisplayBirdInfo();

    if($r)
    {
        echo "<div class='lg:w-2/3 w-full mx-auto overflow-auto' style='margin-top:64px;'>
            <table class='table-auto w-full text-left whitespace-no-wrap'>";
        echo "<thead><tr>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl'>Sno</th>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>Bird Name</th>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>Scientific Name</th>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br'>ommunication Type</th>
                <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br text-center' colspan='2'>Action</th>
                </tr></thead><tbody>";
        foreach($r as $v)
        {
            echo "<tr>
                    <td class='border-t-2 border-gray-200 px-4 py-3'>$v[0]</td>
                    <td class='border-t-2 border-gray-200 px-4 py-3'>$v[1]</td>
                    <td class='border-t-2 border-gray-200 px-4 py-3'>$v[3]</td>
                    <td class='border-t-2 border-gray-200 px-4 py-3'>$v[6]</td>
                    <td class='border-t-2 border-gray-200 px-4 py-3'><a class='mt-3 text-indigo-500 inline-flex items-center' href='birdUpdate.php?sno=".$v[0]."'>Update</a></td>
                    <td class='border-t-2 border-gray-200 px-4 py-3'><a class='mt-3 text-indigo-500 inline-flex items-center' href='birdDelete.php?sno=".$v[0]."'>Delete</a></td>
                </tr></tbody>";
        } 
        echo "</tbody></table></div>";  
    }
}
?>

