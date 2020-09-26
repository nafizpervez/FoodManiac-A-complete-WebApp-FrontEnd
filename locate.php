<?php
//
//
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//if(isset($_GET['country']) && !empty($_GET['country'])) {
//
//	curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api/countries/' . urlencode($_GET['country']));
//	$result = curl_exec($ch);
//	$data = json_decode($result, true);
//
//	curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api');
//	$MainApi = curl_exec($ch);
//	$totalStatistics = json_decode($MainApi, true);
//
//}
//
//?>
<!---->
<!---->
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>COVID-19</title>-->
<!--    <meta charset="utf-8">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<!--</head>-->
<!--<body>-->
<!--<div class="container">-->
<!--    <div class="jumbotron mt-3">-->
<!--        <h1 class="mb-2">COVID-19 Statistics Checker - By Sandman</h1>-->
<!--        <form class="form-group" method="get">-->
<!--            <input class="form-control" type="text" name="country" placeholder="Check Statistics By Country Name">-->
<!--            <button class="btn btn-primary float-right mt-3" type="submit">Check It</button>-->
<!--        </form>-->
<!---->
<!--        --><?php //if(!empty($data['confirmed'])): ?>
<!--        <h4>Statistics of --><?php //echo htmlspecialchars($_GET['country'], ENT_QUOTES); ?><!--</h4>-->
<!--        <ul>-->
<!--            <li>Infected - --><?php //echo number_format($data['confirmed']['value']) ?><!--</li>-->
<!--            <li>Recovered - --><?php //echo number_format($data['recovered']['value']) ?><!--</li>-->
<!--            <li>Death(s) - --><?php //echo number_format($data['deaths']['value']) ?><!--</li>-->
<!--            <li>Last Updated @ --><?php //echo $data['lastUpdate'] ?><!--</li>-->
<!--        </ul>-->
<!--        <hr>-->
<!--        --><?php //endif; ?>
<!---->
<!--<!--        <img class='mt-2 text-center' src='https://covid19.mathdro.id/api/og' height="300px" width="1050px" />-->-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->




<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">

    <title>Map at a specified location</title>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <link rel="stylesheet" type="text/css" href="template.css" />
    <script type="text/javascript" src='../test-credentials.js'></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
</head>
<body id="markers-on-the-map">
<div class="page-header">
    <h1>Map at a specified location</h1>
    <p>Display a map at a specified location and zoom level</p>
</div>
&lt;!&ndash;<p>This example displays a movable map initially centered on the <b>Brandenburg Gate</b> in the centre of Berlin <i>(52.5159°N, 13.3777°E)</i></p>&ndash;&gt;
<div id="map"></div>
<h3>Code</h3>
<p>
    The <code>map.setCenter()</code> method and <code>map.setZoom() </code>method are able to control the location of the map.<br>
</p>
<script type="text/javascript" src='demo.js'></script>
</body>
</html>