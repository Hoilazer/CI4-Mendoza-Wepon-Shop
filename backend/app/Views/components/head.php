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
            --purple: #800080;
            --purple-dark: #660066;
            --bg: #fff8dc;
            --btn-radius: 8px;
            --border-color: rgba(0, 0, 0, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: #222;
        }

        /* Header */
        header {
            flex: 0 0 auto;
            width: 100%;
            height: 50px;
            background: white;
            border-bottom: 2px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .header-title {
            font-weight: bold;
            font-size: 18px;
        }

        .header-left {
            position: absolute;
            left: 16px;
            display: flex;
            align-items: center;
        }

        .logo-box {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            background: white;
            height: 48px;
            width: 48px;
        }

        .logo-box img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 6px;
        }

        /* Main content */
        main {
            flex: 1 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 24px;
        }

        .page-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 8px;
            text-align: center;
        }

        .page-desc {
            font-size: 16px;
            color: #555;
            margin-bottom: 32px;
            text-align: center;
        }

        section {
            width: 100%;
            max-width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 40px;
        }

        section h2.title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 16px;
            text-align: center;
        }

        /* Color System */
        #color-system .container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .container>.box {
            width: 100px;
            height: 100px;
            border-radius: 12px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
        }

        .container>.box.yellow {
            background-color: var(--yellow);
            color: black;
        }

        .container>.box.purple {
            background-color: var(--purple);
            color: white;
        }

        .container>.box.blue {
            background-color: var(--accent);
            color: white;
        }

        /* Typography */
        #typography .typography-sample {
            display: inline-block;
            margin: 0 12px;
            text-align: center;
            font-size: 16px;
        }

        .typography-sample.classic-sans {
            font-family: 'Arial', sans-serif;
        }

        .typography-sample.roman {
            font-family: 'Times New Roman', serif;
        }

        /* Buttons */
        .button-container {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            border: none;
            padding: 8px 14px;
            border-radius: var(--btn-radius);
            font-weight: 700;
            cursor: pointer;
            font-size: 14px;
            transition: background .18s ease, transform .06s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-yellow {
            background: var(--yellow);
            color: black;
        }

        .btn-yellow:hover {
            background: var(--yellow-dark);
        }

        .btn-blue {
            background: var(--accent);
            color: white;
        }

        .btn-blue:hover {
            background: var(--accent-dark);
        }

        .btn-purple {
            background: var(--purple);
            color: white;
        }

        .btn-purple:hover {
            background: var(--purple-dark);
        }

        .btn-gray:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* Cards */
        .card-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 16px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 220px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .card p {
            font-size: 14px;
            font-weight: bold;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .logo-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border: 2px solid #ddd;
        }

        .logo-circle img {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        /* Footer */
        footer {
            flex: 0 0 auto;
            width: 100%;
            padding: 30px 0;
            text-align: center;
            background-color: #f8f8f8;
            position: relative;
        }

        .footer-title {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .container>.box {
                width: 80px;
                height: 80px;
                font-size: 12px;
            }

            .typography-sample {
                display: block;
                margin: 6px 0;
            }

            .card {
                width: 180px;
            }

            .logo-circle {
                width: 60px;
                height: 60px;
            }

            .logo-circle img {
                width: 40px;
                height: 40px;
            }
        }

        /* Top-right buttons in header */
        header .top-right {
            position: absolute;
            right: 16px;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* Bottom-right buttons in footer */
        footer .bottom-right {
            position: absolute;
            right: 16px;
            bottom: 6px;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* Reuse existing button styles */
        .btn {
            border: none;
            padding: 8px 14px;
            border-radius: var(--btn-radius);
            font-weight: 700;
            cursor: pointer;
            font-size: 14px;
            transition: background .18s ease, transform .06s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-yellow {
            background: var(--yellow);
            color: black;
        }

        .btn-yellow:hover {
            background: var(--yellow-dark);
        }

        .btn-blue {
            background: var(--accent);
            color: white;
        }

        .btn-blue:hover {
            background: var(--accent-dark);
        }

        .btn-purple {
            background: var(--purple);
            color: white;
        }

        .btn-purple:hover {
            background: var(--purple-dark);
        }

        .btn-gray:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* Responsive adjustments */
        @media (max-width: 640px) {

            header .top-right,
            footer .bottom-right {
                position: static;
                justify-content: center;
                margin-top: 12px;
            }

            header .top-right {
                margin-left: 0;
            }
        }

        /* Landing page specific styles */

        /* Top-left hero image container */
        .top-left-image {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: white;
            margin-bottom: 40px;
            max-width: 400px;
        }

        .top-left-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .weapon-text {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 12px;
        }

        /* Landing cards style – different from moodboard cards */
        .landing-cards-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 24px;
        }

        .landing-card {
            background: linear-gradient(145deg, #fff, #f0f0f0);
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 220px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .landing-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }

        .landing-card img {
            width: 100%;
            height: 140px;
            object-fit: cover;
        }

        .landing-card p {
            font-weight: 700;
            font-size: 15px;
            margin: 12px 0;
            text-align: center;
        }

        /* Centered button below image or card */
        .landing-card .btn {
            margin-bottom: 12px;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .landing-cards-container {
                flex-direction: column;
                align-items: center;
            }

            .landing-card {
                width: 180px;
            }

            .top-left-image {
                max-width: 90%;
            }
        }

        /* Roadmap cards */
        .roadmap-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
            margin-top: 24px;
            width: 100%;
            max-width: 800px;
        }

        .roadmap-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
            padding: 24px 32px;
            display: flex;
            align-items: center;
            gap: 20px;
            width: 100%;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .roadmap-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .roadmap-number {
            font-size: 48px;
            font-weight: bold;
            color: var(--accent);
            flex-shrink: 0;
            width: 60px;
            text-align: center;
        }

        .roadmap-content {
            font-size: 18px;
            font-weight: 600;
            color: #222;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .roadmap-card {
                flex-direction: column;
                align-items: flex-start;
                padding: 16px 20px;
            }

            .roadmap-number {
                font-size: 36px;
                width: 100%;
                text-align: left;
            }

            .roadmap-content {
                font-size: 16px;
            }
        }

        /* Full-page background */
        .login-main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            min-height: calc(100vh - 160px);
            /* keeps header/footer visible */
        }

        /* Background image */
        .login-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        /* Login box */
        .login-box {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.95);
            /* slightly transparent */
            padding: 20px;
            border-radius: 6px;
            width: 300px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Inputs inside login box */
        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #aaa;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Button inside login box */
        .login-box .btn {
            width: 100%;
            margin-top: 12px;
        }

        .signup-main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            min-height: calc(100vh - 160px);
            /* header + footer */
        }

        /* Background Image */
        .signup-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        /* Signup Box */
        .signup-box {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.95);
            /* slightly transparent */
            padding: 20px 30px;
            border-radius: 8px;
            width: 320px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Inputs inside signup box */
        .signup-box input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        /* Button inside signup box */
        .signup-box .btn {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        /* Moodboard Card Image Variants */
        /* Moodboard Cards */
        .moodboard-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .moodboard-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            width: 220px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .moodboard-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }

        .moodboard-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .moodboard-card .card-img-semi {
            width: 50%;
            height: auto;
            border-radius: 6px;
            margin: 12px 0;
        }

        .moodboard-card .card-img-full {
            width: 100%;
            height: 140px;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .moodboard-card .card-img-whole {
            width: 100%;
            height: 250px;
            border-radius: 12px;
            margin-bottom: 12px;
        }

        .moodboard-card p {
            font-weight: 700;
            font-size: 15px;
            text-align: center;
            margin: 8px 12px 12px 12px;
        }

        /* Logos */
        .moodboard-logos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 24px;
        }

        .logo-circle,
        .logo-square {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            width: 80px;
            height: 80px;
            border: 2px solid #ddd;
            background: #fff;
        }

        .logo-circle {
            border-radius: 50%;
        }

        .logo-square {
            border-radius: 8px;
        }

        .logo-circle img,
        .logo-square img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .moodboard-card {
                width: 180px;
            }

            .logo-circle,
            .logo-square {
                width: 60px;
                height: 60px;
            }
        }
    </style>
</head>

<body>