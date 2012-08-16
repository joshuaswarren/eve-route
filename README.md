eve-route
=========

EVE Online route calculator, among other things, using data from the official EVE API as well as the EVE Market Data Relay (http://eve-market-data-relay.readthedocs.org/en/latest/index.html)

You will need to create your own protected/config/dbconfig.php with the following contents:

<?php

$dbConfig = array(
			'connectionString' => 'mysql:host=[HOSTNAME];dbname=[DBNAME]',
			'emulatePrepare' => true,
			'username' => '[DB USERNAME]',
			'password' => '[DB PASSWORD]',
			'charset' => 'utf8',
		);

Make sure to run the following commands to then setup your database:

yiic migrate --migrationPath=user.migrations
