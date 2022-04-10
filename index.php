<?php include('base.php') ?>
<section class="text-gray-700 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><i><u>The Phoenix and the Turtle.</u></i>
      </h1>
      <p class="mb-8 leading-relaxed">
          Let the bird of loudest lay<br>
          On the sole Arabian tree<br>
          Herald sad and trumpet be,<br>
          To whose sound chaste wings obey.
      </p>
      <p class="mb-8 leading-relaxed">
          But thou shrieking harbinger,<br>
          Foul precurrer of the fiend,<br>
          Augur of the fever’s end,<br>
          To this troop come thou not near.
      </p>
      <div class="flex justify-center">
          <a class="mt-3 text-indigo-500 inline-flex items-center">William Shakespeare
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="static/img/frontImage.jpg">
    </div>
  </div>
</section>

<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <?php
        require 'main_db.php';
        $obj = new Connection();
        $res = $obj->DisplayBirdInfo();
        if($res)
        {
          foreach($res as $value)
          {
            echo "<div class='lg:w-1/4 md:w-1/2 p-4 w-full'>";
            echo "<a class='block relative h-48 rounded overflow-hidden' style='height:280px;'>
                  <img alt='ecommerce' class='object-cover object-center w-full h-full block' src='static/img/$value[5]'>
                  </a>
                  <div class='mt-4'>
                  <h3 class='text-gray-500 text-xs tracking-widest title-font mb-1'>$value[3]</h3>
                  <h2 class='text-gray-900 title-font text-lg font-medium'>$value[1]</h2>
                  <p class='mt-1'>$value[2]</p>";?>
                  <?php
                    if(isset($_SESSION['name']))
                    {
                      echo "<a class='mt-3 text-indigo-500 inline-flex items-center' href='birdsInfo.php?sno=".$value[0]."'>Learn More
                      <svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 ml-2' viewBox='0 0 24 24'>
                        <path d='M5 12h14M12 5l7 7-7 7'></path>
                      </svg>
                      </a>";
                    }
                    else
                    {
                      echo "<a class='mt-3 text-indigo-500 inline-flex items-center'>Learn More
                      <svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 ml-2' viewBox='0 0 24 24'>
                        <path d='M5 12h14M12 5l7 7-7 7'></path>
                      </svg>
                      </a>";
                    }
                  ?>
                  <?php
                  echo "</div>";
            echo "</div>";
          }
          
        }
      ?>
    </div>
  </div>
</section>

<?php include('footar.php') ?>

