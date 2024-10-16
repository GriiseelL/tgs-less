<?php
$nama1 = $_POST["input1"];
$nama2 = $_POST["input2"];  

for($loop = 0; $loop < $nama2; $loop++) {
    echo "Halo, " . $nama1 . "! <br> ";
}