<?php
    include 'empty.php';
    function test() {
        $condition = listHTML("Capital",["Paris", "Berlin", "Moscou"]) === "<h3>Capitale</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>" ;
        $condition = $condition && listHTML("Burger",["BigMac", "Fish", "Beacon"]) === "<h3>Burger</h3><ul><li>BigMac</li><li>Fish</li><li>Beacon</li></ul>" ;
        $condition = $condition && listHTML("Burger",["BigMac"]) === "<h3>Burger</h3><ul><li>BigMac</li></ul>" ;
        $condition = $condition && listHTML("",["BigMac"]) === null ;
        $condition = $condition && listHTML(null,["BigMac"]) === null ;
        $condition = $condition && listHTML("truc",[]) === null ;

        if ($condition) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo(" value : " . listHTML("Capital",["Paris", "Berlin", "Moscou"]) === "<h3>Capitale</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>");
            echo(" value : " . listHTML("Burger",["BigMac", "Fish", "Beacon"]) === "<h3>Burger</h3><ul><li>BigMac</li><li>Fish</li><li>Beacon</li></ul>");
            echo(" value : " . listHTML("Burger",["BigMac"]) === "<h3>Burger</h3><ul><li>BigMac</li></ul>");
            echo(" value : " . listHTML("",["BigMac"]) === null);
            echo(" value : " . listHTML(null,["BigMac"]) === null);
            echo(" value : " . listHTML("truc",[]) === null);
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
