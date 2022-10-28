<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
   
</head>
<body>

    <form action="" method="post">
	<h1>Peys App</h1>

        <label for ="setRange">Select Photo Size: </label>
		<input type="range" name="setRange" id="setRange" min="0" max="1000" steps="10" value="60">
		<br>
        <label for="bdrColor">Select Border Color:</label>
        <input type="color" name="bdrColor" id="bdrColor">
        <br>
        <button type="submit" name="btnProcess"> PROCESS </button>

        <br>
		<br>
       
        <?php if (isset($_POST['btnProcess'])) : ?>
            <?php 
                $imageSize = $_POST ['setRange'];
                $clrborder = $_POST ['bdrColor'];
            ?>
        <?php endif; ?> 
        <img src="mae.jpg"  width="<?php echo $imageSize; ?>" border= " 5%" style="color: <?php echo $clrborder; ?>">
    </form>
</body>
</html>