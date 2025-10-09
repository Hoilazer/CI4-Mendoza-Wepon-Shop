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

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 160px);
            /* adjust 160px to header + footer height */
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
            position: relative;
            width: 100%;
            padding: 40px 44px;
            /* increase padding for more space inside */
            background: white;
            border-bottom: 2px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            /* centers header-title */
            height: 100px;
            /* increase height from 60px to 100px */
        }


        .header-title {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
            font-size: 18px;
        }

        .header-left {
            position: absolute;
            left: 16px;
            /* adjust as needed */
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
            /* fixed square box */
        }

        .logo-box img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 6px;
            display: block;
        }



        .top-right {
            position: absolute;
            right: 16px;
            display: flex;
            gap: 10px;
        }

        /* Move the main image to the top-left */
        /* Top-left image */
        /* Top-left image below logo */
        .top-left-image {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: absolute;
            top: 120px;

            border: 3px solid var(--border-color);
            padding: 40px;
            /* increased padding */
            border-radius: 12px;
            background: white;
            max-width: 300px;
            /* bigger container */
        }

        .top-left-image img {
            width: 260px;
            /* bigger image */
            height: auto;
            /* maintain aspect ratio */
            border-radius: 8px;
        }


        .weapon-text {
            margin-top: 0px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        .cards-container {
            display: flex;
            justify-content: center;
            /* center cards horizontally */
            gap: 20px;
            /* space between cards */
            margin-top: 410px;
            /* move cards further down */
            flex-wrap: wrap;
            /* wrap on smaller screens */
        }


        /* Individual cards */
        .card {
            background: white;
            padding: 16px;
            border-radius: 12px;
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
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        /* Card button */
        .card .btn {
            width: 100%;
            padding: 10px;
            font-size: 14px;
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

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }


        /* Add spacing above the footer */
        footer {
            position: relative;
            /* make children absolute positions relative to footer */
            margin-top: 100px;
            /* adjust as needed */
            padding: 30px 0;
            text-align: center;
            background-color: #f8f8f8;
        }

        /* Centered title */
        .footer-title {
            position: absolute;
            left: 50%;
            top: 50%;
            /* vertical center, optional */
            transform: translate(-50%, -50%);
            font-weight: bold;
            font-size: 14px;
        }

        /* Bottom-right elements */
        .bottom-right {
            position: absolute;
            right: 16px;
            bottom: 6px;
            display: flex;
            gap: 10px;
        }


        .btn {
            border: none;
            padding: 8px 14px;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
            font-size: 14px;
            transition: background .18s ease, transform .06s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-yellow {
            background: #ffc107;
            color: black;
        }

        .btn-yellow:hover {
            background: #e0a800;
        }

        .btn-blue {
            background: #007bff;
            color: white;
        }

        .btn-blue:hover {
            background: #0056b3;
        }

        .btn-gray {
            background: #cccccc;
            color: black;
        }

        .btn-gray:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
    </style>
</head>

<body>