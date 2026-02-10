<?php
$game = $_GET['game'] ?? 'unknown';

if ($game === 'mobile_legends') {
  $gameName = "Mobile Legends";
  $gameImage = "assets/img/ml.jpeg";
} elseif ($game === 'free_fire') {
  $gameName = "Free Fire";
  $gameImage = "assets/img/ff.jpeg";
} else {
  $gameName = "Game Tidak Dikenal";
  $gameImage = "";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order - <?= $gameName ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .game-img {
      height: 180px;
      object-fit: contain;
      background: #000;
      padding: 10px;
    }
  </style>
</head>

<body class="bg-dark text-light">

<nav class="navbar navbar-dark bg-black">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="assets/img/topupzone.png" width="32" class="me-2">
      TopUpZone
    </a>
  </div>
</nav>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card bg-secondary text-light shadow">
        <?php if ($gameImage): ?>
          <img src="<?= $gameImage ?>" class="card-img-top game-img">
        <?php endif; ?>

        <div class="card-body">
          <h4 class="card-title mb-3">Top Up <?= $gameName ?></h4>

          <form method="post" action="process.php">

            <input type="hidden" name="game" value="<?= $game ?>">

            <div class="mb-3">
              <label class="form-label">User ID</label>
              <input type="text" name="userid" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Jumlah Top Up</label>
              <select name="amount" class="form-select">
                <option>86 Diamond</option>
                <option>172 Diamond</option>
                <option>257 Diamond</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">
              Proses Top Up
            </button>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
