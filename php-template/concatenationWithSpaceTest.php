<?php
    include 'empty.php';
    function test() {
        if (concatenationAvecEspace("abc", "def") === "abc def" && concatenationAvecEspace("nicolas", "sarkozy") === "nicolas sarkozy") {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
