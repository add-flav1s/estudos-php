<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tabuada</title>
</head>

<body>
    <div class="container">
        <center>
            <h2 style="margin-top: 5%;">Tabuada simples</h2>
        </center>
        <hr><br>
        <div class="row">
            <div class="col">
                <ul>
                    <h3>Tabuada do 1</h3>
                    <?php 
                        $tabuada1 = 1;
                        for($i=0; $i<=10; $i++){
                            $tabuadaOne = "$tabuada1 x $i = " . ($tabuada1*$i);?>
                    <li><?= $tabuadaOne; ?></li>
                    <?php };?>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>Tabuada do 2</h3>
                    <?php 
                        $tabuada2 = 2;
                        for($i=0; $i<=10; $i++){
                            $tabuadaTwo = "$tabuada2 x $i = " . ($tabuada2*$i);?>
                    <li><?= $tabuadaTwo; ?></li>
                    <?php };?>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>Tabuada do 3</h3>
                    <?php 
                        $tabuada3 = 3;
                        for($i=0; $i<=10; $i++){
                            $tabuadaThree = "$tabuada3 x $i = " . ($tabuada3*$i);?>
                    <li><?= $tabuadaThree; ?></li>
                    <?php };?>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>Tabuada do 4</h3>
                    <?php 
                        $tabuada4 = 4;
                        for($i=0; $i<=10; $i++){
                            $tabuadaFour = "$tabuada4 x $i = " . ($tabuada4*$i);?>
                    <li><?= $tabuadaFour; ?></li>
                    <?php };?>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>Tabuada do 5</h3>
                    <?php 
                        $tabuada5 = 5;
                        for($i=0; $i<=10; $i++){
                            $tabuadaFive = "$tabuada5 x $i = " . ($tabuada5*$i);?>
                    <li><?= $tabuadaFive; ?></li>
                    <?php };?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul>
                    <h3>Tabuada do 6</h3>
                    <?php 
                        $tabuada6 = 6;
                        for($i=0; $i<=10; $i++){
                            $tabuadaSix = "$tabuada6 x $i = " . ($tabuada6*$i);?>
                    <li><?= $tabuadaSix; ?></li>
                    <?php };?>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>Tabuada do 7</h3>
                    <?php 
                        $tabuada7 = 7;
                        for($i=0; $i<=10; $i++){
                            $tabuadaSeven = "$tabuada7 x $i = " . ($tabuada7*$i);?>
                    <li><?= $tabuadaSeven; ?></li>
                    <?php };?>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>Tabuada do 8</h3>
                    <?php 
                        $tabuada8 = 8;
                        for($i=0; $i<=10; $i++){
                            $tabuadaEight = "$tabuada8 x $i = " . ($tabuada8*$i);?>
                    <li><?= $tabuadaEight; ?></li>
                    <?php };?>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>Tabuada do 9</h3>
                    <?php 
                        $tabuada9 = 9;
                        for($i=0; $i<=10; $i++){
                            $tabuadaNine = "$tabuada9 x $i = " . ($tabuada9*$i);?>
                    <li><?= $tabuadaNine; ?></li>
                    <?php }; ?>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>Tabuada do 10</h3>
                    <?php 
                        $tabuada10 = 10;
                        for($i=0; $i<=10; $i++){
                            $tabuadaTen = "$tabuada10 x $i = " . ($tabuada10*$i);?>
                    <li><?= $tabuadaTen; ?></li>
                    <?php }; ?>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>