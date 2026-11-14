
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora | Home</title>
    <link rel="stylesheet" href="flora-home.css">
</head>
<body>

<header class="navbar">
    <a class="logo" href="home.php">Flora</a>

    <nav>
        <a class="active" href="home.php">Home</a>
        <a href="product.php">Flowers</a>
        <a href="product.php">Customize</a>
        <a href="#categories">Reviews</a>
        <a href="account.php">Account</a>
    </nav>

    <div class="nav-actions">
        <span class="search-icon">⌕</span>
        <span class="cart-icon">🛒</span>
        <a class="login-btn" href="account.php">Login</a>
    </div>
</header>

<main>
    <section class="hero">
        <div class="hero-content">
            <span class="eyebrow">WELCOME TO</span>
            <h1>Flora</h1>

            <h2>Beautiful flowers for every<br>
                special moment.</h2>

            <p>
                Fresh blooms, unique designs, and meaningful
                gifts for the people you love.
            </p>

            <a href="product.php" class="primary-btn">
                Shop Now &rarr;
            </a>
        </div>

        <div class="hero-photo"></div>

        <div class="slider-dots">
            <span class="selected"></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <section id="categories" class="categories">
        <p class="section-label">SHOP BY CATEGORY</p>
        <h2>Flowers for Every Occasion</h2>
        <div class="flower-divider">❀</div>

        <div class="category-grid">

            <article class="category-card">
                <img src="images/bulk.jpg"
                     alt="Bulk Flowers">

                <div class="category-info">
                    <h3>Bulk Flowers</h3>
                    <p>
                        Fresh flowers in large quantities
                        for events and special occasions.
                    </p>

                    <a class="explore-btn"
                       href="product.php?category=bulk">
                        Explore Collection &rarr;
                    </a>
                </div>
            </article>

            <article class="category-card">
                <img src="images/bouquet.jpg"
                     alt="Flower Bouquets">

                <div class="category-info">
                    <h3>Flower Bouquets</h3>
                    <p>
                        Elegantly arranged bouquets
                        for every occasion.
                    </p>

                    <a class="explore-btn"
                       href="product.php?category=bouquets">
                        Explore Collection &rarr;
                    </a>
                </div>
            </article>

            <article class="category-card">
                <img src="images/gifts.jpg"
                     alt="Flowers with Gifts">

                <div class="category-info">
                    <h3>Flowers with Gifts</h3>
                    <p>
                        Beautiful flowers with special gifts
                        to make the moment unforgettable.
                    </p>

                    <a class="explore-btn"
                       href="product.php?category=gifts">
                        Explore Collection &rarr;
                    </a>
                </div>
            </article>

        </div>
    </section>
</main>

</body>
</html>