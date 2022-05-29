<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>styles/style.css">
    <title>Homepage</title>
</head>
<body>
    <header>
        <div class="title">
            <h2>Product List</h2>
        </div>
        
    </header>
    <div class="separation-block-top separation"></div>
    <div class="btn-top" style="position: absolute; top: 33px; right: 30px;">
        <form action="<?php echo HOST.'add-product.html' ?>" method="get">
            <button type='submit' id="add-button">ADD</button>
        </form>
    </div>
    <form action="<?php echo HOST; ?>delete.html" method="post">
        <main>
            <?php
                if(isset($products)){

                
                foreach($products as $product){
                    ?>
                    <div class="product">
                        <input type="checkbox" class="delete-checkbox" name='value[<?php echo $product->getId(); ?>]' value="<?php echo $product->getId(); ?>">
                        <div class="details-product">
                            <h3><?php echo $product->getSku(); ?></h3>
                            <p><?php echo $product->getName(); ?></p>
                            <p><?php echo number_format($product->getPrice(),2); ?>$</p>
                            <p><?php echo $product->getAttribute(); ?></p>
                        </div>
                    </div>
                <?php
                }}
                    
            ?>
            
            
            
        </main>
        <div class="btn-top" style="position: absolute; top: 33px; right: 100px;">
        
            
        
            <button id="delete-product-btn" type="submit" name="delete">MASS DELETE</button>
        </div>
    </form>
    <div class="separation-block separation"></div>
    <footer>
        <p>Scandiweb Test assignment</p>
    </footer>
    
</body>
</html>