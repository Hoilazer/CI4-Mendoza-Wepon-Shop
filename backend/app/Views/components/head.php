<?php
$title = $title ?? 'Ahnenerbe';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?= esc($title) ?></title>
    <style>
        :root {
            --accent: #007bff;
            --accent-dark: #0056b3;
            --yellow: #ffc107;
            --yellow-dark: #e0a800;
            --bg: #fff8dc;
            --btn-color: white;
            --btn-radius: 8px;
            --border-color: rgba(0, 0, 0, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: var(--bg);
            position: relative;
            display: flex;
            flex-direction: column;
            color: #222;
        }

        /* Header styles */
        header {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 16px;
            gap: 12px;
            border-bottom: 2px solid var(--border-color);
            background: white;
            position: relative;
        }

        .header-title {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
            font-size: 18px;
        }

        .logo-box {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 6px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            background: white;
            height: 48px;
            min-width: 48px;
        }

        .logo-box img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 6px;
            display: block;
        }

        .top-right {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* Bottom bar + footer label */
        .bottom-right {
            position: fixed;
            right: 0;
            bottom: 0;
            display: flex;
            gap: 10px;
            align-items: center;
            padding: 12px 16px;
            border-top: 2px solid var(--border-color);
            background: white;
            width: 100%;
            justify-content: flex-end;
        }

        .footer-title {
            position: absolute;
            left: 50%;
            bottom: 12px;
            transform: translateX(-50%);
            font-weight: bold;
            font-size: 14px;
        }

        /* Center panel */
        .center-image {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 60px;
            border: 3px solid var(--border-color);
            padding: 20px;
            border-radius: 12px;
            background: white;
            max-width: 480px;
            margin-left: 120px;
        }

        .center-image img {
            width: 420px;
            transform: translate(0px, 10px);
            border-radius: 8px;
        }

        .weapon-text {
            margin-top: 20px;
            font-size: 26px;
            font-weight: bold;
            text-align: center;
        }

        @media (max-width:640px) {
            .logo-box img {
                width: 36px;
                height: 36px;
            }

            .center-image {
                margin-left: auto;
                margin-right: auto;
            }

            .center-image img {
                width: 260px;
                transform: translate(0px, 8px);
            }

            .weapon-text {
                font-size: 20px;
                margin-top: 15px;
            }
        }
    </style>
</head>

<body>