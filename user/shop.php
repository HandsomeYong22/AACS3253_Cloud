<?php 
include '../public/header.php';
include '../models/filterModels.php';
require "../config/userAuth.php";

$categoryOptions = getFilterType('category');
$priceOptions = ['Lower Price First', 'Higher Price First'];
$promoOptions=['All','Promotion']; 

?>
<link rel="stylesheet" href="../assets/css/shop.css">
<link rel="stylesheet" href="../assets/css/radioButton.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    .container {
        display: flex;
        gap: 2rem;
        padding: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .left-side {
        flex: 0 0 300px;
        position: sticky;
        top: 20px;
        height: fit-content;
    }

    .filter-container {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .filter-container h3 {
        color: #333;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        text-align: center;
    }

    .filter-container h4 {
        color: #666;
        margin: 1rem 0;
        font-size: 1.1rem;
    }

    .radio_label {
        margin-bottom: 1rem;
    }

    .filter-container button {
        width: 100%;
        padding: 12px;
        background: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background 0.3s;
    }

    .filter-container button:hover {
        background: #45a049;
    }

    .right-side {
        flex: 1;
    }

    .product-not-found {
        text-align: center;
        padding: 3rem;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        font-size: 1.2rem;
        color: #666;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            padding: 1rem;
        }

        .left-side {
            position: static;
            flex: 0 0 auto;
        }
    }

    .top-filter-bar {
        width:1200px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        margin: 40px auto 32px auto;
        margin-left: 5cm;
        padding: 24px 32px 12px 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 24px;
    }

    .container {
        flex-direction: column !important;
        gap: 0 !important;
        padding-top: 0 !important;
    }

    .right-side {
        width: 100% !important;
        margin-top: 0 !important;
    }
</style>

<div class="top-filter-bar">
    <form method="GET" style="display: flex; flex-wrap: wrap; gap: 24px; align-items: center; width: 100%; justify-content: flex-start;">
        <div style="display: flex; align-items: center; gap: 8px;">
            <strong><i class="fas fa-tags"></i> Category:</strong>
            <span class="radio_label" style="margin-bottom: 0;">
                <?= html_radios('brand', $categoryOptions, true); ?>
            </span>
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
            <strong><i class="fas fa-dollar-sign"></i> Price:</strong>
            <span class="radio_label" style="margin-bottom: 0;">
                <?= html_radios('price', $priceOptions, true); ?>
            </span>
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
            <strong><i class="fas fa-percent"></i> Promotion:</strong>
            <span class="radio_label" style="margin-bottom: 0;">
                <?= html_radios('promo', $promoOptions, true); ?>
            </span>
        </div>
        <button type="submit" style="padding: 10px 24px; background: #4CAF50; color: white; border: none; border-radius: 5px; font-size: 1rem; margin-left: 16px;"><i class="fas fa-check"></i> Apply Filters</button>
    </form>
</div>

<div class="container" style="flex-direction: column; gap: 0; padding-top: 0;">
    <div class="right-side">
        <?php
        include '../models/productModels.php'; 
        include '../component/productDisplay.php'; 

        $searchQuery = req('name', ''); 
        $selectedSexId = req('sex', '7');  // Default to "All" (ID 7)
        $selectedBrandId = req('brand', '7');  // Default to "All" (ID 7)
        $selectedPriceOrderId = req('price', ''); 
        $isPromo = req('promo', '7');

        if (!empty($searchQuery)) {
            $products = searchProducts($searchQuery); 
        } else {
            $products=filterProducts($selectedSexId, $selectedBrandId, $selectedPriceOrderId,$isPromo);
        }

        if (empty($products)){
           echo '<div class="product-not-found">
                <i class="fas fa-search" style="font-size: 3rem; color: #ccc; margin-bottom: 1rem;"></i><br>
                No products found. 
            </div>';
        }else{ 
            displayProductList($products); 
        }
        ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
</script>

<?php include "../public/footer.php"; ?>
