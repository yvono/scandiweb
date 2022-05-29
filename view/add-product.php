<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ASSETS;?>styles\style.css">
    <link rel="stylesheet" href="<?php echo ASSETS;?>styles\style-product.css">
    <title>Add Product</title>
</head>
<body>
    <header>
        <div class="title">
            <h2>Product Add</h2>
        </div>
        
    </header>
    <div class="separation-block-top separation"></div>

    <div class="container">
            <form method="post" id="product_form" action="<?php echo HOST ?>add.html" >
            <div class="alert alert-danger" role="alert" id="message" style="display: none;">
                
            </div>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" class="form-control" name="sku" id="sku" required >
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="price">Price($)</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="productType" name="type" required>
                    <option value='0' id="DVD">DVD-disc</option>
                    <option value='1' id="Book" >Book</option>
                    <option value='2' id="Furniture" >Furniture</option>
                </select>
            </div>
            <div class="form-group" id="attributes">
                <div class="in-group">
                    <label for="size">Size (MB)</label>
                    <input type="number" class="form-control" name="size" id="size" required>
                </div>
                <p>
                   *  Product Description *
                </p>
            </div>
            <div class="btn-top">
                <button id="submit" type="submit" class="btn" name="submit">Save</button>
                
                <button class="btn"  id="cancel-btn">Cancel</button>
                
            </div>
            
            </form>
    </div>
    <div class="separation-block separation"></div>
    <footer>
        <p>Scandiweb Test assignment</p>
    </footer>
    <script>
    let homepage = document.getElementById('cancel-btn');
    homepage.addEventListener('click', ()=>{
    window.location="<?php echo HOST.'index.html' ?>";
    });
    </script>
<script src="<?php echo HOST.'assets/js/script-add.js' ?>" async></script>
</body>
</html>