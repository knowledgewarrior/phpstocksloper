Stocksloper grabs stocks from Yahoo Finance and calculates linear regression analysis on the slope of the data based on the formula in getslope function in func.inc.php

First you need to download all symbols you want from Yahoo Finance and put into a MySQL database - there's a few scripts on Google you can use.  The ones I found are written in python.

Stocksloper does the symbol lookup in the database, then grabs the historical data for each symbol.  The date range can be set in the func.inc.php file manually or the getstocks.php script can be
run via cron job daily (best done after markets close).

Once all the historical data is in the database (I have 18 million rows of data in my database), you can use getslope.php to do the linear regression analysis.
I am using PHP's binary calculator to do the math due to the floating point number issue (exists in all programming languages - Google it :)

To Do:
Create new version of getcurrent.php to put results of file into a new table to do web lookups, so it will load faster.

Created by Jason Fowler
June 2013
