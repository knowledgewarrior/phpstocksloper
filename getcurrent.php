<?php

require_once('../inc/db.inc');

	$limit1 = $_REQUEST['jtStartIndex'];
	$limit2 = $_REQUEST['jtPageSize'];

		$result = mysql_query("SELECT COUNT(*) AS RecordCount FROM current;");
		$row = mysql_fetch_array($result);
		$recordCount = $row['RecordCount'];


$latest = mysql_query("select * from current order by (0 + close) asc, avgvol asc limit $limit1,$limit2;") or trigger_error(mysql_error());

                $rows = array();
                while($row = mysql_fetch_array($latest))
                {
                    $rows[] = $row;
                }
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['TotalRecordCount'] = $recordCount;
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);

?>
