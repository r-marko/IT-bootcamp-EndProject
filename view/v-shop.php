<section>
    <div class="container m-3">
        <form method="GET" action="all-products-page.php">
            <div class="row">
                <label for="selectOrder" class="ms-4">Select the order by price to display products:</label>
                <br>
                <div class="col-3">
                <select class="form-select" name="selectOrder">
                    <option value="" <?php if(!isset($_GET['selectOrder']) || $_GET['selectOrder'] == ""){echo htmlspecialchars("selected");}?> disabled>Search criteria</option>
                    <option value="price-asc" <?php if(!empty($_GET['selectOrder']) && $_GET['selectOrder'] == "price-asc"){echo htmlspecialchars("selected");}?>>By price ascending</option>
                    <option value="price-dsc" <?php if(!empty($_GET['selectOrder']) && $_GET['selectOrder'] == "price-dsc"){echo htmlspecialchars("selected");}?>>By price descending</option>
                </select>
                </div>
                <div class="col-6">
                <div class="input-group">
                <input type="text" name="searchBar" class="form-control" placeholder="Search" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
                <div>
            </div>
        </form>
    </div>
</section>

<hr>
<br>
<main class="container">
    <div class="row">
        <?php foreach ($product as $singleProduct){ ?>
        
        <article class="col-3 border border-info rounded single-product m-2 p-2 row">
            <div class="text-center col-12">
                <img src="<?php echo htmlspecialchars($singleProduct->getImg()); ?>" alt="single-product-image" width="270" height="220" class="rounded float-left">
            </div>
            <div class="col-12">
            <h4 class="col-6"><?php echo htmlspecialchars($singleProduct->getTitle()); ?></h4>
            <a class="btn btn-success col-6" href="./single-product-page.php?single-product=<?php echo htmlspecialchars($singleProduct->getId());?>">Show Product</a>
            <p class="col-6 mt-3"> Price: <?php echo htmlspecialchars($singleProduct->getPrice()); ?></p>
            <form class="shop-product-form col-6" method="POST" astion="./all-products-page.php">
                <label>Izaberite količinu: 
                        <input class="mb-2" type="number" name="amount" style="width:55px" min="1" max="10">
                </label>
                <input type="hidden" name="product-id" value="<?php echo htmlspecialchars($singleProduct->getId());?>">
                <button type="submit" name="addToCart" value="ok" class="btn btn-primary">Add To Cart</button>
            </form>
            </div>
        </article>
        <?php }?>
        
    </div>
</main>