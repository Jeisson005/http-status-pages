<?php
if (!isset($code, $title, $description, $icon)) {
    http_response_code(500);
    exit('Template variables not set.');
}

$accent = ($code >= 500) ? '#ef4444' : '#f59e0b';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $code ?> <?= $title ?></title>
    <link rel="icon" type="image/svg+xml" href="https://assets.articc.top/logo/icon-color.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --accent: <?= $accent ?>;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #0a0a0a;
            color: #f5f5f5;
            font-family: system-ui, -apple-system, sans-serif;
        }

        main {
            flex: 1;
        }

        .error-icon {
            font-size: clamp(3.5rem, 10vw, 5.5rem);
            color: var(--accent);
            line-height: 1;
        }

        .error-code {
            font-size: clamp(5rem, 20vw, 10rem);
            font-weight: 900;
            line-height: 1;
            letter-spacing: -0.04em;
            color: #ffffff;
        }

        .error-title {
            font-size: clamp(1.4rem, 4vw, 2rem);
            font-weight: 700;
            color: #e5e5e5;
        }

        .error-description {
            color: #8a8a8a;
            max-width: 480px;
        }

        .artic-logo {
            height: 22px;
            opacity: 0.55;
            transition: opacity 0.2s ease;
        }

        .artic-logo:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <main class="d-flex align-items-center justify-content-center text-center px-3">
        <div>
            <i class="bi <?= $icon ?> error-icon mb-4 d-block"></i>
            <div class="error-code mb-1"><?= $code ?></div>
            <h1 class="error-title mb-3"><?= $title ?></h1>
            <p class="error-description mx-auto mb-0"><?= $description ?></p>
        </div>
    </main>

    <footer class="py-4 text-center">
        <a href="https://articcompany.com" target="_blank" rel="noopener noreferrer">
            <img src="https://assets.articc.top/logo/text-color.svg" alt="Artic" class="artic-logo">
        </a>
    </footer>
</body>
</html>
