<?php include('base.php') ?>

<section class="text-gray-600 body-font">
<?php
require ('main_db.php');
if($_SESSION['name'])
{
    $sno = $_GET['sno'];
    $obj = new Connection();
    
    $res = $obj->ShowBirdInfo($sno);
    if($res)
    {
        echo "<div class='container mx-auto flex px-5 py-24 md:flex-row flex-col items-center'>";
        foreach($res as $value)
        {
            echo "<div class='lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0'>
                    <img class='object-cover object-center rounded' alt='hero' src='static/img/$value[5]'>
                  </div>
                <div class='lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center'>
                    <h1 class='title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900'><i><u>$value[1]</u></i></h1>
                    <h2 class='hidden lg:inline-block'><b><i>Habitat :- $value[2]</i></b></h2>
                    <h2 class='hidden lg:inline-block'><b><i>Scientific Name :- $value[3]</i></b></h2>
                    <h2 class='hidden lg:inline-block'><b><i>Geographical Name :- $value[4]</i></b></h2
                    <h2 class='hidden lg:inline-block'><b><i>Conservation Status :- $value[6]</i></b></h2>
                    <br>
                    <p class='mb-8 leading-relaxed'>$value[7]</p>
                </div>";
        }
        echo "</div>";
    }
}
?>
</section>

<?php include('footar.php') ?>
