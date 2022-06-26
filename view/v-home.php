
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/theme/img/layout/Carousel1.jpg" height="600" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/theme/img/layout/Carousel2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/theme/img/layout/Carousel3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h2 class="text-center m-4 succes text-primary">Best selling products</h2>

<main>
<div class="container mt-5">
<div class="row justify-content-between">
    <?php foreach ($randomProducts as $singleProduct) { ?>
        <div class="card col-4 mb-3" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo htmlspecialchars($singleProduct->getImg()); ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($singleProduct->getTitle()); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($singleProduct->getDescription()); ?></p>
                <form method="POST" action="index.php"> 
                    <input class="m-3" type="text" name="price" value="PRICE: <?php echo htmlspecialchars($singleProduct->getPrice()); ?> RSD" style="border:none;" disabled>
                    <label>Izaberite količinu: 
                        <input class="mb-2" type="number" name="amount" style="width:55px" min="1" max="10">
                    </label>
                    <input type="text" style="display:none" name="product-id" value="<?php echo htmlspecialchars($singleProduct->getId());?>">
                    <button type="submit" name="submit" value="1" class="btn btn-primary">ADD TO CART</button>
                </form>
            </div>
        </div>
    <?php  } ?>
</div>
</div>
</main>