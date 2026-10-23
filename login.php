<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Teks Berapi-api</title>
<style>
    body {
        background: black;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
        font-family: Arial, sans-serif;
    }

    .fire-text {
        font-size: 60px;
        font-weight: bold;
        color: #ffeb3b;
        text-shadow:
            0 0 5px #ff9800,
            0 0 10px #ff5722,
            0 0 20px #ff0000,
            0 0 40px #ff0000;
        animation: shake 0.2s infinite, fire 1s infinite alternate;
    }

    @keyframes shake {
        0% { transform: translate(0, 0); }
        25% { transform: translate(2px, -2px); }
        50% { transform: translate(-2px, 2px); }
        75% { transform: translate(2px, 2px); }
        100% { transform: translate(0, 0); }
    }

    @keyframes fire {
        0% {
            text-shadow:
                0 0 5px #ff9800,
                0 0 15px #ff5722,
                0 0 30px #ff0000;
        }
        100% {
            text-shadow:
                0 0 10px #fff176,
                0 0 25px #ff9800,
                0 0 50px #ff0000;
        }
    }
</style>
</head>
<body>

<div class="fire-text">
    Program Studi Teknik Komputer
</div>

</body>
</html>