<?php
require_once __DIR__ . '/../data/demo-data.php';
session_start();
$role = $_SESSION['role'] ?? 'user';
if (isset($_GET['role']) && isset($roleLabels[$_GET['role']])) { $role = $_SESSION['role'] = $_GET['role']; }
$pageTitle = $pageTitle ?? 'DADA';
$base = $base ?? '';
$guestAllowedPage = in_array(basename($_SERVER['SCRIPT_NAME'] ?? ''), ['login.php', 'register.php'], true);
?>
<!doctype html>
<html lang="lt">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?> · DADA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>assets/css/style.css">
</head>
<body>
<header class="site-header"><div class="shell header-inner">
    <a class="brand" href="<?= $base ?>index.php"><span class="brand-mark">d</span><span>DADA</span></a>
    <?php if ($role !== 'guest'): ?><nav class="main-nav"><a href="<?= $base ?>index.php">Pagrindinis</a><a href="<?= $base ?>pages/category.php?id=2">Kategorijos</a><a href="<?= $base ?>pages/category-statistics.php?id=2">Statistika</a><?php if ($role === 'admin'): ?><a href="<?= $base ?>admin/categories.php">Administravimas</a><?php endif; ?></nav><?php endif; ?>
    <div class="header-actions">
        <label class="role-switcher"><span>Prototipo režimas</span><select onchange="location.href='<?= $base ?>index.php?role='+this.value"><option value="guest" <?= $role === 'guest' ? 'selected' : '' ?>>Svečias</option><option value="user" <?= $role === 'user' ? 'selected' : '' ?>>Naudotojas</option><option value="admin" <?= $role === 'admin' ? 'selected' : '' ?>>Administratorius</option></select></label>
        <?php if ($role === 'guest'): ?><a class="button button-ghost button-small" href="<?= $base ?>pages/login.php">Prisijungti</a><a class="button button-primary button-small" href="<?= $base ?>pages/register.php">Registruotis</a><?php else: ?><a class="avatar avatar-small" href="<?= $base ?>pages/profile.php?id=1">AV</a><a class="icon-button" href="<?= $base ?>pages/login.php" title="Atsijungti">↪</a><?php endif; ?>
    </div>
</div></header>
<main class="shell">
<?php if ($role === 'guest' && !$guestAllowedPage): ?>
    <section class="guest-gate">
        <div class="guest-gate-mark">d</div>
        <div class="eyebrow">DADA bendruomenė</div>
        <h1>Prisijunkite, kad galėtumėte dalyvauti.</h1>
        <p>Svečiai gali prisijungti arba susikurti paskyrą. Prisijungę galėsite naršyti kategorijas, skaityti įrašus ir dalyvauti diskusijose.</p>
        <div class="guest-gate-actions"><a class="button button-primary" href="<?= $base ?>pages/login.php">Prisijungti</a><a class="button button-ghost" href="<?= $base ?>pages/register.php">Registruotis</a></div>
    </section>
<?php include __DIR__ . '/footer.php'; exit; endif; ?>
