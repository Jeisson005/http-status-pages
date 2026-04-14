<?php
if (!isset($code, $title, $description, $icon)) {
    http_response_code(500);
    exit('Template variables not set.');
}

$accent = ($code >= 500) ? '#ef4444' : '#f59e0b';

$envFile = __DIR__ . '/.env';
$env = [];
if (is_readable($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if ($line[0] === '#' || !str_contains($line, '=')) continue;
        [$key, $value] = explode('=', $line, 2);
        $env[trim($key)] = trim($value);
    }
}

$companyName    = $env['COMPANY_NAME']    ?? 'Artic';
$companyUrl     = $env['COMPANY_URL']     ?? 'https://articcompany.com';
$logoTextUrl    = $env['LOGO_TEXT_URL']   ?? 'https://assets.articc.top/logo/text-color.svg';
$logoIconUrl    = $env['LOGO_ICON_URL']   ?? 'https://assets.articc.top/logo/icon-color.svg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $code ?> <?= $title ?></title>
    <link rel="icon" type="image/svg+xml" href="<?= htmlspecialchars($logoIconUrl) ?>">
    <script>
        (function () {
            const theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            document.documentElement.setAttribute('data-bs-theme', theme);
        })();
    </script>
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
            font-family: system-ui, -apple-system, sans-serif;
        }

        main {
            flex: 1;
        }

        .error-code {
            font-size: clamp(5rem, 20vw, 10rem);
            font-weight: 900;
            line-height: 1;
            letter-spacing: -0.04em;
            color: var(--bs-emphasis-color);
        }

        .error-title {
            font-size: clamp(1.4rem, 4vw, 2rem);
            font-weight: 700;
        }

        .error-title .bi {
            font-size: 0.85em;
            color: var(--accent);
            vertical-align: middle;
            position: relative;
            top: -0.05em;
        }

        .error-description {
            color: var(--bs-secondary-color);
            max-width: 480px;
        }

        .artic-logo {
            height: 48px;
            opacity: 0.6;
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
            <div class="error-code mb-3"><?= $code ?></div>
            <h1 class="error-title mb-3">
                <i class="bi <?= $icon ?> me-2"></i><?= $title ?>
            </h1>
            <p class="error-description mx-auto mb-0"><?= $description ?></p>
        </div>
    </main>

    <footer class="py-4 text-center">
        <a href="<?= htmlspecialchars($companyUrl) ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?= htmlspecialchars($logoTextUrl) ?>" alt="<?= htmlspecialchars($companyName) ?>" class="artic-logo">
        </a>
    </footer>
</body>
</html>
