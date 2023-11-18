<?php
include './temp/connect.php';

$Groupe = "SELECT * FROM Groups"; 
$all_Groups = $conn->query($Groupe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fifa WorldCup | 2022</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand text-light" href="#">
                    FIFA
                </a>
            </div>
        </nav>
        <div class="hero">
            <img src="layout/image/ronaldo.png" alt="" >
            <h1>FIFA WORLD CUP <span class="text-danger">MOROCCO</span> <span class="text-primary">2030<span></h1>
            <img src="layout/image/neymar.png" alt="" >
        </div>
    </header>
<section>
    <?php
        $Req = "SELECT * FROM Groups"; 
        $Filter = $conn->query($Req);
        while ($g = mysqli_fetch_assoc($Filter)){
          echo '<a href="?groupid='.$g["GroupID"].'" class="filter group-filter  ">'.$g["GroupName"].'</a>';
        }

        $gid = isset($_GET["groupid"]) ? $_GET["groupid"] : null;
        if($gid != null) {
          $N_Of_G = "SELECT * FROM Teams WHERE id_fr = $gid";
          $filtred = $conn->query($N_Of_G);
          $Groupe_Filterd = mysqli_fetch_assoc($filtred);
        }
        ?>
        </section>
    <section class="cart">
      <?php if(isset($Groupe_Filterd) && count($Groupe_Filterd) > 0): ?>
        <main class="card-d ">
                <?php
                while ($row = mysqli_fetch_assoc($filtred)) :
                ?>
                      <div class="max-w-sm bg-white border border-gray-200 rounded-lg ml-2 shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="p-3" data-group="<?= $row2["GroupName"] ?>">
            <img class="cart_img " src="<?= $row["Flag"] ?>" alt="">
                 <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["TeamID"] ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                   Read more
           <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
      </button>
  </div>
</div>                
       <div class="modal fade" id="exampleModal<?= $row["TeamID"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $row["TeamID"] ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fst-italic fw-bold" id="exampleModalLabel"><?= $row["TeamName"]?></h5>
        <button type="button" class="btn-close btn-light text-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">  
        <p>Best Player : <?= $row["JoueurCle"]?></p>
        <p>Numbers Of Mtaches : <?= $row["Nbr_Match"]?></p>
        <p>Win : <?= $row["Victiore"]?></p>
        <p>Null : <?= $row["Nul"]?></p>
        <p>Defeat : <?= $row["Defaite"]?></p>
        <p>Capital : <?= $row["Capital"]?></p>
        <p>Regional population: <?= $row["Poplation"]?></p>
        <p>Continent : <?= $row["Continent"]?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                <?php endwhile; ?>
        </main>
      <?php else:?>
        <?php
        while ($row2 = mysqli_fetch_assoc($all_Groups)) :
    
            $groupID = $row2["GroupID"];
            $sql = "SELECT * FROM Teams WHERE id_fr = $groupID";
            $all_Teams = $conn->query($sql);
        ?>
        <div class="group-container" data-group="<?= $row2["GroupName"] ?>">
            <h1 class="fw-bold mx-5"><?= $row2["GroupName"] ?></h1>
            <main class="card-d">
                <?php
                while ($row = mysqli_fetch_assoc($all_Teams)) :
                ?>
         <div class="max-w-sm bg-white border border-gray-200 rounded-lg ml-2 shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="p-3" data-group="<?= $row2["GroupName"] ?>">
            <img class="cart_img " src="<?= $row["Flag"] ?>" alt="">
               <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= $row2["StadiumName"]?></p>
                 <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["TeamID"] ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                   Read more
           <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
      </button>
  </div>
</div>

                <!-- Modal code remains unchanged -->
                <div class="modal fade" id="exampleModal<?= $row["TeamID"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $row["TeamID"] ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content text-light bg-dark">
      <div class="modal-header">
        <h5 class="modal-title fst-italic fw-bold" id="exampleModalLabel"><?= $row["TeamName"]?></h5>
        <button type="button" class="btn-close btn-light text-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">  
        <p>Best Player : <?= $row["JoueurCle"]?></p>
        <p>Numbers Of Mtaches : <?= $row["Nbr_Match"]?></p>
        <p>Win : <?= $row["Victiore"]?></p>
        <p>Null : <?= $row["Nul"]?></p>
        <p>Defeat : <?= $row["Defaite"]?></p>
        <p>Capital : <?= $row["Capital"]?></p>
        <p>Regional population: <?= $row["Poplation"]?></p>
        <p>Continent : <?= $row["Continent"]?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                <?php endwhile; ?>
            </main>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </section>


    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>

</body>
</html>
