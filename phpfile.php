<?php
$thisXML = "<root>
		<access>
			<username>aaron.j.bumgarner@gmail.com</username>
			<password>mqx9jsr9gkweqql</password>
			<site_id>774</site_id>
		</access>
		<data>
			<date_checkin></date_checkin>
			<date_checkout></date_checkout>
			<adults></adults>
			<kids></kids>
			<promo_code></promo_code>
		</data>
		</root>";
	$Curl_Session = curl_init('https://openhotel.com/api/service/get.cfc');
	curl_setopt ($Curl_Session, CURLOPT_POST, 1);
	curl_setopt ($Curl_Session, CURLOPT_POSTFIELDS, "packet=$thisXML");
	curl_setopt ($Curl_Session, CURLOPT_FOLLOWLOCATION, 1);
	curl_exec ($Curl_Session);
	curl_close ($Curl_Session);
    ?>
    