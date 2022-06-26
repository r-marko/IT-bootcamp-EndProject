<div class="container">
    <form method="POST" action="contact-us.php">
    <div class="row">
        <div class="col-5 row">
            
            <div class="input-group mb-3 mt-5">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="input-group mb-3">
                <input type="text" name="surname" class="form-control" placeholder="Last name">
            </div>

            <div class="input-group mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            
            <div class="col-5 d-inline-block">
            <div class="input-group mb-3 col-3">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Place some comment</span>
                </div>
                <textarea class="form-control" name="coment"></textarea>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" name="termOfUse" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Do you accept to share this information with us?
                </label>
            </div>
            <input class="btn btn-primary col-3 mb-3" type="submit" value="Send message"> 
        </div>
        <div class="col-5">
            <img width="350px" src="public/theme/img/layout/contact-page.jpg" class="justify-content-center rounded m-5">
        <div>
    </div>
    </form>
</div>
