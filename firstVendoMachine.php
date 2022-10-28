<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="custom.css">
    <title>Vendo Machine</title>
</head>
<body>
    <?php
        $drinks = array('Coke' => 15,'Sprite' => 20,'Royal' => 20,'Pepsi' => 15,'Mountain Dew' => 20);    
        $drinksizes = array(0 => 'Regular',5 => 'Up-Size',10  => 'Jumbo');
    ?>

    <h1>Vendo Machine</h1>
    <form method="post">
        <fieldset class="fieldset">
            <legend>Products:</legend>
            <?php            
                if(isset($drinks)) {
                    foreach($drinks as $drnkKey => $value) {
                        echo '<input type="checkbox" name="chkdrinks[]" id="chk' . $drnkKey . '" value="' . $drnkKey . '"> ';
                        echo '<label for="chk' . $drnkKey . '">' . $drnkKey . ' - ₱ ' . $value . '</label><br>';
                    }
                }
            ?>                    
        </fieldset> 
        
        <fieldset class="fieldset">
            <legend>Options:</legend>
            <label for="selectedSizes">Size</label>
            <select name="selectedSizes" id="selectedSizes">
                <?php
                    if(isset($drinksizes)) {
                        foreach($drinksizes as $drnkKey => $value)
                            echo '<option value="' . $drnkKey . '">' . $value . ($drnkKey != 0 ? ' (add ₱ ' . $drnkKey . ')' : '') . '</option>';
                    }
                ?>                
            </select>

            <label for="setQuant">Quantity</label>
            <input type="number" name="setQuant" id="setQuant" value="0">
            <button type="submit" name="btnsumbit">Check Out</button>
        </fieldset>
    </form>

    <?php
        if(isset($_POST['btnsumbit'])) {
            echo '<hr>';
            if(isset($_POST['chkdrinks']) && $_POST['setQuant'] > 0) {
                $selecteddrinks = $_POST['chkdrinks'];
                $size = $_POST['selectedSizes'];
                $quantity = $_POST['setQuant'];
                
                $totalQuant = $quantity * count($selecteddrinks);
                $totalAmount = 0;

                echo '<h3>Purchase Summary</h3>';
                echo '<ul>';
                    foreach($selecteddrinks as $drnkKey => $drinksName) {
                        $amount = ($drinks[$drinksName] + $size) * $quantity;
                        $totalAmount += $amount;
                        echo '<li>' . $quantity . ($quantity > 1 ? ' pieces' : ' piece') . ' of ' . $drinksizes[$size] . ' ' . $drinksName . ' amounting to ₱ ' . $amount . '</li>';                        
                    }
                echo '</ul>';
                echo '<b>Total Number of Items: </b>' . $totalQuant . '<br>';
                echo '<b>Total Amount: </b>' . $totalAmount;
            }
            else
                echo 'No Selected Product, Please Try Again. ';
        }
    ?>

</body>
</html>