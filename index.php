<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" >
    
    <title>Document</title>

<style>

</style>
</head>
<body>


<div>
<?php 
include 'navbar.php';
?>

</div>


<div class="banner">
    <div class="banner-overlay">
            <h1 class="text1" style="font-size: 3em; font-weight: 700;">Unlimited movies, TV shows and more</h1>
            <h3 class="text2">Watch anywhere. Cancel anywhere.</h3>
    </div>
</div>


<div class="sampel1">
    <div class="div1">
        <span class="text3">Enjoy on your TV</span>
        <span class="text4">Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</span>
    </div>
    <div class="div2">
        <div class="tv">
            <video width="360" height="300px" autoplay="autoplay" muted style="padding-bottom: 20px;">
                <source src="video1.mp4" type="video/mp4">
            </video>
        </div>
    </div>

</div>


<div class="sampel2">

    <div class="div3">
        <div class="pho">
            
        </div>
    </div>

    <div class="div4">
        <span class="text5">Enjoy on your TV</span>
        <span class="text6">Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</span>
    </div>
    

</div>

<div class="sample3">
            <div class="text7">Ready to watch? Enter your email to create or restart your membership.</div> <br>
            <form method="POST">
                <input type="text" class="email" name="uemail" placeholder="Email Address">
                <input type="submit" value="Get Strated" name="submit" class="btn .text-light bg-warning mb-1">
            </form>


</div>

<?php 
include 'config.php';

if (isset($_POST['submit']))
{
$a=$_POST['uemail'];


$q1=mysqli_query($con,"INSERT INTO emails (`email`) VALUES ('$a')");

echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
}
?>


<div class="foot ">
    <?php 
        include 'footer.php';
    ?>
</div>

</body>
</html> 