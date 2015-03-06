<div class="text-center">
    <h1>Google Maps</h1>
    <p class="lead">Menggunakan google maps dengan <i>multilocations</i> dan <i>Custom markers</i>.</p>
	<?php // echo "<pre>"; print_r($maps)."</pre>"; ?>
  </div>

<div id="map" style="width: 100%; height: 400px;"></div>

<?php

$locations = array();
$contents = array();
foreach($maps as $array) {
   $locations[] = array(
	$array['locations'], 
	$array['latitude'],
	$array['longitude'],
	base_url()."resources/uploads/markers/64/".$array['icon'],
	$array['description']
	); 
	
   $infomaps = "<h3>".$array["locations"]."</h3><p>".$array["description"]."</p>";
   $contents[] = array($infomaps); 
}


?>
<script type="text/javascript">
var viewlocations = JSON.parse( '<?php echo json_encode($locations) ?>' );
var locationsContent = JSON.parse( '<?php echo json_encode($contents) ?>' );
</script>

