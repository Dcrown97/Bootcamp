<?php 

if(isset($_POST['dara'])){
    $fileName = $_FILES['fileup']['tmp_name'];
    $fileArray= array_map('str_getcsv', file($fileName));

}
    $british= 
    $tArray = array();

foreach($fileArray as $key=> $r){
    if($key >0){
        $total = $r[3] * $r[4];
        array_push($tArray, $total);
        

    }}
    $subT = 0;
    foreach ($tArray as $arr){
        $subT += $arr;

    }
    $british = $subT * 0.07;
    $canada = $subT * 0.05;
    $totalT = $subT - $british - $canada;

    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.cs" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    .container {
    margin: 60px 250px;
    padding: 20px;
    
    background: #e3e3e3;
    }
    h2 {
    text-align: center;
}
    .ball {
        background-color: #d1d0d0;
        width: 100%;
    
    }
    .leftT, .rightT{
        display: inline-block;
        padding: 10px;
        text-transform: uppercase;
        font-weight: bold;

    }
    .rightT{
        float: right;
    }
    .body{
        background: #f2f2f2;
        padding: 8px;
        border-bottom: 3px solid grey;
    }
    .left, .middle, .right{
        display: inline-block;
    }
    .image1{
        width: 200px;
        height: 200px;
    }

    .right{
        float: right;
    }
    .middle{
        position: absolute;
        margin-left: 60px;
    }
    .footer{
        background:#d1d0d0;
        padding: 10px;
    }
    .content{
        margin-left:750px;
    }
</style>
</head>
<body>

    <form action="" method="POST" enctype="multipart/form-data">

    <label for="">upload your CSV File</label>
    <input type="file" name="fileup">
    <button type="submit" name="dara">upload file</button>
    </form>

    <div class="container">
        <div class="header">
            <h2>Transaction Details</h2>
        </div>
        <div class="ball">
            <div class="leftT"><p>item</p></div>
            <div class="rightT"><p>amount</p></div>
                
        </div>
            <?php   
            
            foreach($fileArray as $key=> $r){
                if($key >0){

                    $total = $r[3] * $r[4];
            ?>
                <div class="body">
                    <div class="left">
                        <img class="image1" src="<?php echo $r[6]; ?>"><alt="">
                    </div>
                    <div class="middle">
                        <h3><?php echo $r[2];?></h3>
                        <P>ITEM <?php echo $r[1];?></P>
                        <P>Price:$<?php echo $r[3];?></P>
                        <p>Qty:<?php echo $r[4];?></p>
                    </div>
                    <div class="right">
                        <p>C$<?php echo $total;?></p>
                    </div>
                </div>
                <?php }}?>

                <div class="footer">
                    <div class="content">
                        <p>Subtotal:$<?php echo $subT;?></p>
                        <p>BRITISH COLUMBIA PST (7%):$<?php echo $british;?></p>
                        <p>CANADA GST/TPS (5%):$<?php echo $canada;?></p>
                        <p>TOTAL:$<?php echo $totalT;?></p>
                    </div>
                </div>
    </div>
</body>
</html>