<?php
@include './infoarray.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="./app.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
              crossorigin="anonymous">
    </script>
    
</head>
<body>
    
    <?php @include('./header.php'); ?>
    <section class="heading-heading heading">
            PRICE STARTS FROM AS LOW AS - Rs <?php echo $details[$_REQUEST['id']]['minPrice']; ?>
    </section>
    <section class="car-type-pricing">
        <div class="car-details">
            CHENNAI AIRPORT PICKUP/DROP: **- <?php echo $details[$_REQUEST['id']]['airPortPrice']; ?> <br/>
            ROUND TRIP  <br/>
            PRICE STARTS FROM: <?php echo $details[$_REQUEST['id']]['minPrice']; 
            if(isset($details[$_REQUEST['id']]['maxprice'])){

                echo ' - '. $details[$_REQUEST['id']]['maxprice']  .'<br/>';
            }
            ?>
            CHENNAI  <br/>
            PONDICHERRY<br/>
            BANGALORE<br/>
            ANDRA PRADESH<br/>
            <br/>
            EXCLUDING TOLL PLAZA CHARGES AND PERMIT
        </div>
    </section>
    <?php include './footer.php'; ?>
</body>
</html>