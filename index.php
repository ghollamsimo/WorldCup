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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fifa WorldCup | 2022</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand text-light" href="#">
                    FIFA
                </a>
            </div>
        </nav>
        <div class="d-flex">
            <h1 class="text-center">FIFA WORLD CUP MOROCCO 2030</h1>
        </div>
        <?php
        $i = "SELECT * FROM Groups"; 
        $k = $conn->query($i);
        while ($g = mysqli_fetch_assoc($k)){
          echo '<a href="?groupid='.$g["GroupID"].'" class="filter group-filter mx-2 ">'.$g["GroupName"].'</a>';
        }

        $gid = isset($_GET["groupid"]) ? $_GET["groupid"] : null;
        if($gid != null) {
          $n = "SELECT * FROM Teams WHERE id_fr = $gid";
          $m = $conn->query($n);
          $u = mysqli_fetch_assoc($m);
        }
        ?>
    </header>

    <section class="cart">
      <?php if(isset($u) && count($u) > 0): ?>
        <main class="card-d ">
                <?php
                while ($row = mysqli_fetch_assoc($m)) :
                ?>
                <div class="card mx-3 gap-2 team" data-group="">
                    <img class="cart_img" src="<?= $row["Flag"] ?>" alt="">
                    <button class="button btn-secondary border-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["TeamID"] ?>">See Details</button>
                </div>
                <!-- Modal code remains unchanged -->
                              <!-- Modal code remains unchanged -->
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
            <h1 class="fw-bold"><?= $row2["GroupName"] ?></h1>
            <main class="card-d">
                <?php
                while ($row = mysqli_fetch_assoc($all_Teams)) :
                ?>
                <div class="card mx-3 gap-2 team" data-group="<?= $row2["GroupName"] ?>">
                    <img class="cart_img" src="<?= $row["Flag"] ?>" alt="">
                    <button class="button btn-secondary border-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["TeamID"] ?>">See Details</button>
                </div>
                <!-- Modal code remains unchanged -->
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
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    // document.querySelectorAll('.group-filter').forEach(function (button) {
    //     button.addEventListener('click', function () {
    //         const selectedGroup = this.dataset.group;
    //         document.querySelectorAll('.group-container').forEach(function (container) {
    //             const group = container.dataset.group;
    //             if (group === selectedGroup) {
    //                 container.style.display = 'block';
    //             } else {
    //                 container.style.display = 'none';
    //             }
    //         });
    //     });

        // Initially, show teams for the first group
        // document.querySelector('.group-container').style.display = 'block';
    // });
</script>
</body>
</html>
