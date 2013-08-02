<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>StockSloper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Stock Sloper" content="">
    <meta name="Jason Fowler" content="">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
  </head>
    
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          </button>
          <a class="brand" href="#">StockSloper</a>
        </div>
      </div>
    </div>



          <div class="span5">
          <h4>StockSloper</h4>
          <div class="ui-widget">

 
      <p> 
</br>
</br>
</br>
<!--	<select name="prices" id="prices">
	<option value="">Click for Range to Select</option>
	<option value="0.01 - 0.99">0.01 - 0.99</option>
	<option value="1.00 - 9.99">1.00 - 9.99</option>
	<option value="10.00 - 19.99">10.00 - 19.99</option>
	<option value="20.00 - unlimited">20.00 - unlimited</option>
	</select>

	<div id="selected_value"></div> -->

	<div class="btn-group" data-toggle="buttons-radio">
 	 <button class="btn" id="getstocks" value="getstocks">Get Stocks</button>
	</div>
</br>
</br>
</br>
	<div id="display"></div> 

    </div>
    </div>
</br>
</br>

<!--<link href="themes/basic/jtable_basic.min.css" rel="stylesheet" type="text/css" />-->
<!--<link href="themes/jqueryui/jtable_jqueryui.min.css" rel="stylesheet" type="text/css" />-->
<link href="themes/lightcolor/gray/jtable.min.css" rel="stylesheet" type="text/css" />
<!--        <link href="themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css" />-->

        <div class="span12">
            
            <div id="StockTableContainer"></div>
          
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
<script src="jquery.jtable.min.js" type="text/javascript"></script>
   
<script>
    //function displaydata( message ) {
    function displaydata() {
        
            $('#StockTableContainer').jtable({
		paging: true,
		pageSize: 100,
		sorting: true,
            actions: {
		//listAction: 'getcurrent.php?range=' + message
		listAction: 'getcurrent.php'
            },
            fields: {
		symbol: {
                    title: 'Symbol',
                    width: '10%',
                    create: false,
                    edit: false
                },
                ydate: {
                    title: 'Last Trd Date',
                    width: '15%',
                    create: false,
                    edit: false
                },
		avgvol: {
                    title: 'Avg Volume',
                    width: '15%',
                    create: false,
                    edit: false
                },
                close: {
                    title: 'Closing Price',
                    width: '10%',
                    create: false,
                    edit: false
                },
	 	slope: {
                    title: 'Slope',
                    width: '15%',
                    create: false,
                    edit: false
                },
                tradingdays: {
                    title: 'Slope Days',
                    width: '10%',
                    create: false,
                    edit: false
                }
            }
        });
        $('#StockTableContainer').jtable('load');

    };
</script>
<script>
//$('#prices').on("change", function(){
//var selected_value = $("#prices option:selected").val();
//$('#selected_value').html('The selected value is: '+ selected_value);
//displaydata(selected_value); 
//});
$("#getstocks").click(function () {
      displaydata();
    });
</script>

 </body>
</html>
