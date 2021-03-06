<!-- basic document taken from google api documentation and then adapted. not really much here
     aside from the frame for the map - everything else is in maps.js and api.php -->
<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <title>How safe is your area?</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
    <body>
        <div id="floating-panel">
            <b>Start: </b>
            <select id="start">
                <option value="B47ET">Aston University</option>
                <option value="B152TT">University of Birmingham</option>
                <option value="B55JU">Birmingham City University</option>
                <option value="B323NT">Newman University</option>
                <option value="B151DA">PRIZM</option>
                <option value="B301JR">Cadbury World</option>
                <option value="EC1N2PB">London office</option>
                <option value="SW82NT">London flat</option>
            </select>
            
            <b>End: </b>
            <select id="end">
                <option value="B47ET">Aston University</option>
                <option value="B152TT">University of Birmingham</option>
                <option value="B55JU">Birmingham City University</option>
                <option value="B323NT">Newman University</option>
                <option value="B151DA">PRIZM</option>
                <option value="B301JR">Cadbury World</option>
                <option value="EC1N2PB">London office</option>
                <option value="SW82NT">London flat</option>
            </select>
            
            <button type="button" id="clicky">Done</button>
        </div>
        <div id="map"></div>

        <script type="text/javascript" src="maps.js"></script>
        
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=<?=CLIENT_API_KEY?>&callback=initMap&libraries=visualization">
        </script>
    </body>
</html>
