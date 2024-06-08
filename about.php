<!-- /about.php -->
<?php include 'header.php'; ?>
<main>
    <h1>About Us</h1>
    <?php
    $team = [
        ["name" => "Pelé", "role" => "CEO"],
        ["name" => "Romário", "role" => "CTO"],
        ["name" => "Ronaldo Nazário", "role" => "CFO"],
    ];
    ?>
    <h2>Our Team</h2>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'footer.php'; ?>
