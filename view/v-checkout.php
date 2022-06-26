<div class="container">
    <form method="POST" action="checkout-page.php">
    <div class="row justify-content-center">
        <div class="col-6 row">
            
            <div class="input-group mb-3 mt-5">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Enter your name:</span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="Name" value=<?php if(!empty($_POST['name'])){ echo htmlspecialchars($name);} ?>>
                <?php if(!empty($systemErrors['name'])) { ?>
                    <span class="text-danger"><?php echo htmlspecialchars($systemErrors['name']) ?></span>    
                <?php } ?>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Enter your last name:</span>
                </div>
                <input type="text" name="last_name" class="form-control" placeholder="Last name" value=<?php if(!empty($_POST['last_name'])){ echo htmlspecialchars($last_name);} ?>>
                <?php if(!empty($systemErrors['last_name'])) { ?>
                    <span class="text-danger"><?php echo htmlspecialchars($systemErrors['last_name']) ?></span>    
                <?php } ?>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">Enter your e-mail:</span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="Email" value=<?php if(!empty($_POST['email'])){ echo htmlspecialchars($email); }?>>
                <?php if(!empty($systemErrors['email'])) { ?>
                    <span class="text-danger"><?php echo htmlspecialchars($systemErrors['email']) ?></span>    
                <?php } ?>
            </div>
            <div class="col-5 d-inline-block">
            <div class="input-group mb-3 col-3">
                <input type="text" name="city" class="form-control" placeholder="City" value=<?php if (!empty($_POST['city'])){ echo htmlspecialchars($city); }?>>
                <?php if(!empty($systemErrors['city'])) { ?>
                    <small class="text-danger"><?php echo htmlspecialchars($systemErrors['city']) ?></small>    
                <?php } ?>
            </div>
            </div>

            <div class="col-5 d-inline-block">
            <div class="input-group mb-3 col-3">
                <input type="text" name="phone" class="form-control" placeholder="Phone" value=<?php if(!empty($_POST['phone'])){ echo htmlspecialchars($phone);} ?>>
                <?php if(!empty($systemErrors['phone'])) { ?>
                    <span class="text-danger"><?php echo htmlspecialchars($systemErrors['phone']) ?></span>    
                <?php } ?>
            </div>
            </div>

            <div class="col-5 d-inline-block">
            <div class="input-group mb-3 col-3">
                <input type="text" name="street" class="form-control" placeholder="Street & number" value=<?php if(!empty($_POST['street'])){ echo htmlspecialchars($street);} ?>>
                <?php if(!empty($systemErrors['street'])) { ?>
                    <span class="text-danger"><?php echo htmlspecialchars($systemErrors['street']) ?></span>    
                <?php } ?>
            </div>
            </div>

            <div class="col-5 d-inline-block">
            <div class="input-group mb-3 col-3">
                <input type="text" name="zip" class="form-control" placeholder="zip" value=<?php if(!empty($_POST['zip'])){ echo htmlspecialchars($zip);} ?>>
                <?php if(!empty($systemErrors['zip'])) { ?>
                    <br><span class="text-danger"><?php echo htmlspecialchars($systemErrors['zip']) ?></span>    
                <?php } ?>
            </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Place some comment</span>
                </div>
                <textarea class="form-control" name="comment"><?php if(!empty($_POST['comment'])){ echo htmlspecialchars($comment);} ?></textarea>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" name="termOfUse" type="checkbox" value="ok" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Do you agree to our terms of use?
                </label>
                <?php if(!empty($systemErrors['rights'])) { ?>
                    <span class="text-danger"><?php if (!empty($_POST['termOfUse'])) {echo htmlspecialchars($systemErrors['rights']);} ?></span>    
                <?php } ?>
            </div> 
            <input type="hidden" name="product-id" value="<?php echo htmlspecialchars($product['id']); ?>">
            <input type="hidden" name="amount" value="<?php echo htmlspecialchars($quantity); ?>">
            <button class="btn btn-success col-3 mb-3" type="submit" name="buy" value="ok">SEND ORDER</button>
        </div>
    </div>                 
    </form>
</div>