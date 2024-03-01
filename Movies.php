<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="style.css" >
    <title>Movies</title>
</head>
<body>

<div>
    <?php 
        include 'navbar.php';
    ?>
</div>

<div class="row" style="position: absolute;top: 50px;margin:0px;">

<?php 

include 'config.php';

$q=mysqli_query($con,"select * from movies");

while($row=mysqli_fetch_assoc($q))
{

?>

    <div class="C col-md-3">

        <div class="card1">
            <img src="<?php echo $row['pic']?>" alt="" height="330px" width="210px" style="border-radius: 10px;">
            <p><?php echo $row['name']?></p>

        </div>

    </div>

<?php 
}
?>
</div>

<div style="position: absolute;top: 1000px;">
    <?php 
        include 'footer.php';
    ?>
</div>
    
</body>
</html>