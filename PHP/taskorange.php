<?php 
$phones = [
    [ 
     'name' => 'Samsung Galaxy Note 20 Ultra',
     'img_url' =>'R.webp',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'INFINIX Zero 8',
     'img_url' =>'IMG20200903154110.jpg',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'Apple iPhone 12 Pro',
     'img_url' =>'th.jpg',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'ITEL A48',
     'img_url' =>'OIP (2).jpg',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00',
     'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'Samsung Galaxy S21 Ultra',
     'img_url' =>'OIP (1).jpg',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'Galaxy A52',
     'img_url' =>'R.jpg',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00',
    'is_out_of_stock' => '1'
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="card">
  <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
      <svg x="30%" y="30%" width="40%" height="40%" viewBox="0 0 24 24" fill="var(--bs-tertiary-color)">
        <path d="M20.4 5.4a1.8 1.8 0 0 0-1.8-1.8h-15v15a1.8 1.8 0 0 0 1.8 1.8h15v-15ZM4.8 4.8h13.5a.9.9 0 0 1 .9.9V15l-4.61-5.237c-.167-.217-.436-.217-.602 0l-3.428 3.983-1.894-2.657c-.166-.217-.435-.217-.6 0L5.28 14.21c-.281-.211-.47-.444-.48-.926V4.8Zm4.8 3.25a1.5 1.5 0 1 1-3 .1 1.5 1.5 0 0 1 3-.1Z"></path>
      </svg> -->
      
      <?php 
function renderStars($rating) {
    $starsHTML = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $starsHTML .= '<i class="fa fa-star text-warning"></i>'; // Full star
        } else {
            $starsHTML .= '<i class="fa fa-star text-muted"></i>'; // Empty star
        }
    }
    return $starsHTML;
}
?>

<div class="card-body" style="display: grid; grid-template-rows: repeat(2, 1fr); grid-template-columns: repeat(3, 1fr); gap: 16px; margin: 10px;">
    <?php foreach ($phones as $item): ?>
        <div class="card" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 16px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <img src="<?= htmlspecialchars($item['img_url']); ?>" alt="<?= htmlspecialchars($item['name']); ?>" style="width: 200px; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 8px;">
            <h3 style="font-size: 18px; margin-bottom: 4px;"><?= htmlspecialchars($item['name']); ?></h3>
            <h4 style="font-size: 16px; color: #555;"><?= htmlspecialchars($item['brand']); ?></h4>
            <h3 style="font-size: 18px; color:red;rgb(237, 28, 28);"><?= htmlspecialchars($item['price']); ?></h3>
            <div class="stars" style="margin: 8px 0;">
                <?= renderStars($item['rate']); ?>
            </div>
            <a href="#" class="btn btn-primary" style="width: 100%; max-width: 200px;">Go somewhere</a>
        </div>
    <?php endforeach; ?>
</div>

    </div>
  </div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>
</html>    