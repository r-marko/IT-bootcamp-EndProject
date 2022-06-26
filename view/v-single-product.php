<article class="container">
    <h2 class="card-title m-4 text-center"><?php try{ echo htmlspecialchars($product->getTitle());} catch (\Throwable $e){
        header("Location: ./page-not-found.php"); }?></h2>
    <div class="row">
        <div class="col-6" >
            <img style="height:550px" src="<?php echo htmlspecialchars($product->getImg());?>" width="400" height="400" class="card-img-top img-thumbnail rounded">
        </div>
        <div class="col-5 p-2 mt-4 text-justify row">
            <p class="col-12"><?php echo htmlspecialchars($product->getDescription());?></p>
            <div class="row col-5">
            <form action="single-product-page.php?single-product=<?php echo htmlspecialchars($product->getId()); ?>" method="POST">
                <input type="number" name="amount" class="form-control mb-2" placeholder="Unesi količinu">
                <h4>Price: <?php echo htmlspecialchars($product->getPrice()); ?> RSD</h4>
                <button type="submit" name="product-id" value="<?php echo htmlspecialchars($product->getId()); ?>" class="btn btn-outline-primary btn-lg col-12 align-self-start">ADD TO CART</button>
            </form>
            </div>

                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="single-product-page.php?single-product=<?php echo $prevProductID; ?>">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="single-product-page.php?single-product=<?php echo $nextProductID; ?>">Next</a></li>
                </ul>

        </div>
      
            <div>
            <h3 class="m-5">Related products:</h3>
                </div class="row">
                    <?php foreach ($relatedProducts as $single_product) {?>
                        <div class="col-3 mb-5">
                        <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="<?php echo htmlspecialchars($single_product->getImg()); ?>" alt="Related Products">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($single_product->getTitle()); ?></h5>
                                <p class="card-text">Price: <?php echo htmlspecialchars($single_product->getPrice()); ?> RSD</p>
                                <a href="single-product-page.php?single-product=<?php echo htmlspecialchars($single_product->getId()); ?>" class="btn btn-primary">Show product</a>
                            </div>
                        </div>
                        </div>
                    <?php }?>
                </div>
            </div>    
    </div>
</article>