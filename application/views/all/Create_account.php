<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
*{
    padding: 0px;
    margin: 0px;
    background-color:#E5E5E5;
    overflow: hidden;
}
.vektor1{
    position: absolute;
    width: 1095px;
    height: 55%;
    left: 50%;
}
.vektor2{
    /* position: absolute; */
    width: 30%;
    height: 55%;
    right: 50%;
    margin-top: 21%;
}
.create{
    position: absolute;
    width: 382px;
    height: 78px;
    left: 308px;
    top: 20px;

    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 50px;
    line-height: 107px;

    color: #6E0EBA;

    text-shadow: 3px 4px 6px rgba(0, 0, 0, 0.25);
}
.account{
    position: absolute;
    width: 551px;
    height: 60px;
    left: 308px;
    top: 95px;

    font-family: Roboto;
    font-style: normal;
    font-weight: 300;
    font-size: 30px;
    line-height: 70px;

    color: #6E0EBA;
}
.client{
    position: absolute;
    width: 300px;
    height: 409px;
    left: 308px;
    top: 159px;

    background: #410A55;
    border-radius: 50px;
}
.worker{
    position: absolute;
    width: 300px;
    height: 409px;
    right: 308px;
    top: 159px;

    background: #410A55;
    border-radius: 50px;
}
.button{
    position: absolute;
    width: 255px;
    height: 47px;
    left: 23.5px;
    top: 310px;

    background: #FFFFFF;
    border-radius: 30px;
    
    font-family: Roboto;
    font-style: bold;
    font-weight: 500;
    font-size: 30px;
    line-height: 41px;
    text-decoration: none;

    /* identical to box height */
    text-align: center;

    color: #790E8A;
}
.tulis1{
    position: absolute;
    width: 101px;
    height: 35px;
    left: 100px;
    top: 183px;

    font-family: Roboto;
    font-style: normal;
    font-weight: bold;
    font-size: 30px;
    line-height: 35px;
    text-align: center;
    background:none;
    color: #FFFFFF;
}
.tulis2{
    position: absolute;
    width: 240px;
    height: 82px;
    left: 30px;
    top: 233px;

    font-family: Roboto;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 23px;
    text-align: center;
    background:none;
    color: #FFFFFF;
}
.gambar{
    position: absolute;
    width: 130px;
    height: 120px;
    left: 85px;
    top: 50px;
}
</style>

<body>
<svg class="vektor1" width="898" height="673" viewBox="0 0 898 673" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M91.3842 -99.9771C-71.204 -45.9835 123.23 -19.1639 125.992 81.0175C128.755 181.199 210.392 182.796 249.924 257.692C288.82 331.384 261.107 408.003 325.935 457.968C389.692 507.107 458.475 436.563 527.842 476.536C593.392 514.31 579.792 599.914 647.659 632.901C733.667 674.706 811.058 650.673 887.01 591.644C951.854 541.247 991.444 404.958 991.444 404.958L937.786 -252.044C937.786 -252.044 253.972 -153.971 91.3842 -99.9771Z" fill="#680F77"/>
<path d="M153.028 -108.616C-5.6716 -65.1616 181.674 -36.9164 181.674 51.0782C181.674 139.073 260.593 142.451 296.831 209.143C332.487 274.762 303.639 341.339 365.009 386.762C425.366 431.434 493.777 371.183 559.803 407.945C622.197 442.685 606.759 517.49 671.523 548.085C753.597 586.858 829.092 567.638 904.129 517.667C968.192 475.004 1010.12 356.344 1010.12 356.344L975.745 -221.597C975.745 -221.597 311.727 -152.07 153.028 -108.616Z" fill="#790E8A"/>
<path d="M86.4374 -93.6801C-69.6476 -21.4577 129.054 -28.4609 145.032 58.1096C161.009 144.68 243.164 133.348 292.717 192.231C341.473 250.166 323.754 321.023 395.412 354.314C465.886 387.054 525.631 315.074 600.527 338.98C671.303 361.571 668.935 438.032 741.406 456.105C833.249 479.009 907.764 446.08 976.222 382.983C1034.67 329.113 1056.44 204.587 1056.44 204.587L915.989 -357.616C915.989 -357.616 242.522 -165.903 86.4374 -93.6801Z" fill="#890A9D"/>
</svg>


<div class="">
    <h2 class="create">CREATE</h2>
    <h2 class="account">Your Account!</h2>
</div>

<div class="client">
    <img class="gambar" src="<?php echo base_url();?>assets/img/client.png" alt="">
    <h2 class="tulis1">Client</h2>
    <p class="tulis2">Temukan Arsitekmu dengan Daftar sebagai Client</p>
    <a class="button" href="<?php echo base_url();?>index.php/Login/register_c">Daftar Client</a>
</div>

<div class="worker">
<h2 class="tulis1">Arsitek</h2>
<img class="gambar" src="<?php echo base_url();?>assets/img/arsitek.png" alt="">
    <p class="tulis2">Temukan Project dengan Daftar sebagai Worker</p>
    <a class="button" href="<?php echo base_url();?>index.php/Login/register_worker">Daftar Worker</a>
</div>


<svg class="vektor2" width="880" height="827" viewBox="0 0 880 827" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.8">
<path d="M559.503 1039.73C730.805 1037.31 553.527 953.076 581.122 856.731C608.717 760.385 531.367 734.229 516.277 650.895C501.43 568.902 550.971 504.216 504.241 437.019C458.284 370.932 371.42 417.433 317.349 358.392C266.252 302.6 305.049 225.089 250.298 173.161C180.913 107.353 99.8776 106.913 9.65435 140.273C-67.3741 168.755 -146.243 286.745 -146.243 286.745L-293.332 929.315C-293.332 929.315 388.201 1042.15 559.503 1039.73Z" fill="#680F77"/>
<path d="M498.126 1029.37C662.541 1035.83 492.45 952.366 519.002 868.473C545.554 784.58 471.333 757.546 456.907 683.028C442.714 609.708 490.307 554.94 445.502 493.116C401.439 432.314 318.036 469.114 266.18 414.142C217.177 362.194 254.467 295.534 201.954 246.823C135.405 185.093 57.6289 180.636 -28.9888 205.636C-102.939 226.98 -178.718 327.458 -178.718 327.458L-320.334 888.833C-320.334 888.833 333.712 1022.91 498.126 1029.37Z" fill="#790E8A"/>
<path d="M566.12 1035.22C736.722 1013.46 545.169 960.182 556.058 872.826C566.948 785.469 485.202 771.484 455.726 700.393C426.725 630.446 464.999 568.239 406.726 514.878C349.416 462.398 270.736 512.995 206.544 467.604C145.884 424.71 171.213 352.528 107.573 313.43C26.9228 263.881 -54.0556 272.79 -138.362 312.289C-210.338 346.012 -268.675 458.163 -268.675 458.163L-304.407 1036.54C-304.407 1036.54 395.517 1056.98 566.12 1035.22Z" fill="#890A9D"/>
</g>
</svg>


</body>
</html>