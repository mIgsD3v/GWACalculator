<?php 
declare(strict_types=1);
include 'includes/gwa.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GWA Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post">
        <h1>GWA Calculator</h1>

        <span class="label1">Units</span>
        <span class="label2">Grades</span>
        <div>
        <span>Subject 1:</span>
            <input type="text" name="unit1" value="<?php echo $unit1; ?>" placeholder="input unit">
            <input type="text" name="grade1" value="<?php echo $grade1; ?>" placeholder="input grade">
        </div>
        <div>
        <span>Subject 2:</span>
            <input type="text" name="unit2" value="<?php echo $unit2; ?>" placeholder="input unit">
            <input type="text" name="grade2" value="<?php echo $grade2; ?>" placeholder="input grade">
        </div>
        <div>
        <span>Subject 3:</span>
            <input type="text" name="unit3" value="<?php echo $unit3; ?>" placeholder="input unit">
            <input type="text" name="grade3" value="<?php echo $grade3; ?>" placeholder="input grade">
        </div>

        <div class="btnres">
            <button type="submit" name="submit">Calculate</button>
            <button type="submit" name="clear">Clear</button>
            <span class="result">GWA: 

                <?php 
                include 'includes/autoload.php';

                if(isset($_POST['submit'])) {

                    $unit1 = floatval($_POST['unit1']);
                    $unit2 = floatval($_POST['unit2']);
                    $unit3 = floatval($_POST['unit3']);
                    $grade1 = floatval($_POST['grade1']);
                    $grade2 = floatval($_POST['grade2']);
                    $grade3 = floatval($_POST['grade3']);


                    $gwa = new gwa($unit1, $unit2, $unit3, $grade1, $grade2, $grade3);
                    
                        try {
                            echo $gwa->getGWA();
                        } catch (TypeError $e) {
                            echo "Error: " . $e->getMessage();
                        }
                    
                }
                
                
                ?>
            </span>
        </div>

    </form>
</body>
</html>