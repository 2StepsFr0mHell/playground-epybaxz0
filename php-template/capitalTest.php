<?php
    include 'empty.php';
    function test() {
        $condition =  capital("France") === "Paris" &&
                      capital("Allemagne") === "Berlin" &&
                      capital("Italie") === "Rome" &&
                      capital("Maroc") === "Rabat" &&
                      capital("Espagne") === "Madrid" &&
                      capital("Portugal") === "Lisbonne" &&
                      capital("Angleterre") === "Londres" &&
                      capital("Inconnu") === "Inconnu" ;
                      
        if ($condition) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
