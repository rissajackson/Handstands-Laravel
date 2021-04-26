<!DOCTYPE html>

<title>Types Of Handstands</title>
<link rel="stylesheet" href="/css/app.css">
<script src="/js/app.js"></script>

<body>
    <?php foreach ($handstands as $handstand) : ?>
        <article>
            <h1><?= $handstand->title; ?></h1>
        </article>
    <?php endforeach; ?>

	<a href="/">Go Back</a>
<body>
