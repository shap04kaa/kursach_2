<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>ParkNRide</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Блок с названием проекта и описанием -->
<header class="bg-primary text-white text-center">
    <div class="container">
        <h1 class="display-4">ParkNRide</h1>
        <p class="lead">Удобные пересадки с машины на метро!</p>
        
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="#" style="font-size: 20px; ">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#" style="font-size: 20px; ">Все парковки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#" style="font-size: 20px; ">Авторизация</a>
            </li>
            </ul>
        </div>
    </nav>
</div>
</header>

<!-- Блок с основными особенностями/преимуществами -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Особенность 1: Находи пересадки -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title text-center">Находи пересадки</h2>
                        <p class="card-text text-center">Находи удобные для тебя автостоянки рядом с метро, пересаживайся и не стой в пробках в центре Москвы</p>
                    </div>
                </div>
            </div>
            <!-- Особенность 2: Парковки для всех -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title text-center">Парковки для всех</h2>
                        <p class="card-text text-center">На сайте представлены как платные, так и бесплатные парковки, поэтому каждый найдет подходящий вариант для себя </p>
                    </div>
                </div>
            </div>
            <!-- Особенность 3: Добавляй парковки -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title text-center">Добавляй парковки</h2>
                        <p class="card-text text-center">Регестрируйся на сайте, добавляй парковки и помоги другим пользователям находить удобные места для автомобилей</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="map-test" class="map"></div>
<script src="https://api-maps.yandex.ru/2.1/?apikey=3d8e5ed6-c333-4ed0-a350-0c1b6e3957c5&lang=ru_RU">
</script>
<script src="scripts.js"></script>

<!-- Подвал -->
<footer class="py-3 bg-dark">
    <div class="container text-center text-white">
        <p>  </p>
        <p>&copy; 2024 ParkNRide</p>
    </div>
</footer>

<!-- Скрипты Bootstrap (необходимы для работы компонентов) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>