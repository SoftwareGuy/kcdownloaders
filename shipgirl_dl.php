<?PHP
if(!file_exists("api_start2.json")) die("Please put api_start2.json in the same directory as this script so we can download the goods. Exiting...". PHP_EOL);

$buffer = str_replace("svdata=", "", file_get_contents("api_start2.json"));
$buffer = json_decode($buffer, true, 2048);

$outdir = "./kcs/resources/swf/ships";
if (!mkdir($outdir, 0755, true)) die("Unable to create directory to write data...");

print "SoftwareGuy's KC Shipgirl SWF Downloader" . PHP_EOL;

foreach($buffer['api_data']['api_mst_shipgraph'] as $sgirl) {
	set_time_limit(30);
	
	print "ID: {$sgirl['api_filename']} ... ";
	
	$ch = curl_init();
	// Could change this; this is the server my account is on. Suit yourself...
	curl_setopt($ch, CURLOPT_URL, "http://203.104.209.39/kcs/resources/swf/ships/{$sgirl['api_filename']}.swf");
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "KanColle Downloader");
	
	$data = curl_exec($ch);
	if(!$data) print "FAIL! ".curl_error($ch). PHP_EOL;
	else { 
		print "OK!".PHP_EOL;
		file_put_contents($outdir."/{$sgirl['api_filename']}.swf", trim($data));
	}
	
	curl_close($ch);
}
?>
