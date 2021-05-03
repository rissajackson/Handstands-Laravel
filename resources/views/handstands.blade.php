<!DOCTYPE html>

<title>Types Of Handstands</title>
<link rel="stylesheet" href="/css/app.css">
<script src="/js/app.js"></script>

<body>
    <?php foreach ($handstands as $handstand) : ?>
        <article>
            <h1>
                <a href="/handstands/<?= $handstand->slug; ?>">
                    <?= $handstand->title; ?>
                </a>
            </h1>

            <div>
                <?= $handstand->body; ?>
            </div>
        </article>
    <?php endforeach; ?>

	<a href="/">Go Back</a>
<body>
