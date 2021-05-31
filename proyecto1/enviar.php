<?php
    $destino= "silvia.colindres@colegiost.edu.gt";
    $p1 = $_POST["a"];
    $p2 = $_POST["a"];
    $p3 = $_POST["a"];
    $p4 = $_POST["a"];
    $p5 = $_POST["a"];
    $contenido = "p1: " . $a . "\np2: " . $a . "\np3: " . $a . "\np4: " . $a . "\np5: " . $a;
    mail($destino,"App Quiz", $contenido);
    header("Location:gracias.html");
?>