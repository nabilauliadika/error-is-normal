<?php
$game   = $_POST['game']   ?? '';
$userid = $_POST['userid'] ?? '';
$amount = $_POST['amount'] ?? '';

$success = !empty($userid);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Status Top Up</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">

<nav class="navbar navbar-dark bg-black">
  <div class="container">
    <a class="navbar-brand" href="index.html">TopUpZone</a>
  </div>
</nav>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card bg-secondary text-light shadow text-center">
        <div class="card-body">

          <?php if ($success): ?>
            <h3 class="text-success">✅ Top Up Berhasil</h3>
            <p class="mt-3">
              Game: <strong><?= htmlspecialchars($game) ?></strong><br>
              User ID: <strong><?= htmlspecialchars($userid) ?></strong><br>
              Paket: <strong><?= htmlspecialchars($amount) ?></strong>
            </p>
          <?php else: ?>
            <h3 class="text-danger">❌ Top Up Gagal</h3>
            <p>Data tidak lengkap.</p>
          <?php endif; ?>

          <a href="index.html" class="btn btn-primary mt-3">
            Kembali ke Home
          </a>

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
