<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? 'Six Nurturing Home Limited', ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="Person-centred care, semi-independent accommodation and supported living services for young people and adults.">
  <meta property="og:locale" content="en_GB">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Six Nurturing Home Limited">
  <meta property="og:description" content="Nurturing potential, promoting independence and transforming lives.">
  <link rel="stylesheet" href="/css/site.css">
  <?php if (($currentPage ?? '') === 'home'): ?>
    <link rel="stylesheet" href="/css/home.css">
  <?php endif; ?>
  <script>
    document.documentElement.classList.add('js');
  </script>
  <link rel="icon" href="/images/shnl-logo.jpeg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>
