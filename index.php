
<?php include './temp/connect.php';



$Groupe = "SELECT * FROM Groups"; 
$all_Groups = $conn->query($Groupe);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fifa WorldCup | 2022</title>
</head>
<body>
  <header>
<nav class="navbar navbar-light bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M417.3 360.1l-71.6-4.8c-5.2-.3-10.3 1.1-14.5 4.2s-7.2 7.4-8.4 12.5l-17.6 69.6C289.5 445.8 273 448 256 448s-33.5-2.2-49.2-6.4L189.2 372c-1.3-5-4.3-9.4-8.4-12.5s-9.3-4.5-14.5-4.2l-71.6 4.8c-17.6-27.2-28.5-59.2-30.4-93.6L125 228.3c4.4-2.8 7.6-7 9.2-11.9s1.4-10.2-.5-15l-26.7-66.6C128 109.2 155.3 89 186.7 76.9l55.2 46c4 3.3 9 5.1 14.1 5.1s10.2-1.8 14.1-5.1l55.2-46c31.3 12.1 58.7 32.3 79.6 57.9l-26.7 66.6c-1.9 4.8-2.1 10.1-.5 15s4.9 9.1 9.2 11.9l60.7 38.2c-1.9 34.4-12.8 66.4-30.4 93.6zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm14.1-325.7c-8.4-6.1-19.8-6.1-28.2 0L194 221c-8.4 6.1-11.9 16.9-8.7 26.8l18.3 56.3c3.2 9.9 12.4 16.6 22.8 16.6h59.2c10.4 0 19.6-6.7 22.8-16.6l18.3-56.3c3.2-9.9-.3-20.7-8.7-26.8l-47.9-34.8z"/></svg>
    </a>
  </div>
</nav>
  <div class="d-flex">
    <h1 class="">Footbal For The Wider Community Of PlyMouth </h1>
  </div>
</header>

<section class="cart">
<?php
   while ($row2 = mysqli_fetch_assoc($all_Groups)) :
    $groupID = $row2["GroupID"];
    $sql = "SELECT * FROM Teams WHERE id_fr = $groupID";
    $all_Teams = $conn->query($sql);
    ?>
    <div>
    <h1 class="fw-bold"><?= $row2["GroupName"] ?>
    </div>
    <main class="card-d ">
    <?php
     while ($row = mysqli_fetch_assoc($all_Teams)) :
        ?>
        <div >
        <img class="cart_img" src="<?= $row["Flag"]?>" alt="" >
        <button class="button" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["TeamID"] ?>">See Details</button>
        </div>

        <div class="modal fade" id="exampleModal<?= $row["TeamID"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $row["TeamID"] ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fst-italic fw-bold" id="exampleModalLabel"><?= $row["TeamName"]?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Team Id : <?= $row["TeamID"]?></p>
        <p>Best Player : <?= $row["JoueurCle"]?></p>
        <p>Numbers Of Mtaches : <?= $row["Nbr_Match"]?></p>
        <p>Win : <?= $row["Victiore"]?></p>
        <p>Null : <?= $row["Nul"]?></p>
        <p>Defeat : <?= $row["Defaite"]?></p>
        <p>Capital : <?= $row["Capital"]?></p>
        <p>Regional population: <?= $row["Poplation"]?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <?php endwhile; ?>
    </main>
   
  <?php endwhile; ?>
  </section>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>