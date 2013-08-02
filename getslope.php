#!/usr/bin/php
<?php

require_once('func.inc.php');

/***

StockSloper
Jason Fowler
June 2013

===

Grabs stock symbol from database using getSymbol function
Gets history of stock from getHistory function
Does slope analysis using getSlope function

Starts with 120 days and keeps going until 2500 days

***/

# Put stuff in a log
$log = new Loggy();
$log->lfile('logstock.log');

# Delete previous slope data
deleteSlopeData();

# minimum trading days for slope analysis
$ntd = 120;


# look up stocks in stock_symbol_name table
	$stocks = getSymbol();

		foreach($stocks as $stock)
			{
	   		$symbol = $stock['symbol'];

# look up # of trading days stock traded
	$days = getDays($symbol);
		if ( ($days === 0) || ($days < 500) ) {
		continue;
		 }
		else { 
	getRecursive($symbol,$ntd);
	} //else days
} //foreach stocks

?>
