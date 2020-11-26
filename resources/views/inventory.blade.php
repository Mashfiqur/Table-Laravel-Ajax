<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
</head>
<body>
<div class="container">
	    <div class="col-md-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h3 class="panel-title">Contact List</h3>
	            </div>
	            <table class="table table-bordered table-striped table-condensed">
	                <tr>
	                    <td>#</td>
	                    <td>Name</td>
	                    <td>SKU</td>
	                    <td>Barcode</td>
	                    <td>Purchase Price</td>
	                    <td>Selling Price</td>

	                </tr>

	                @foreach($data as $row)
		                <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
		                    <td>
		                    	<a href="#" class="xedit" 
		                    	   data-pk="{{$row->id}}"
		                    	   data-name="name">
		                    	   {{$row->name}}</a>
		                    </td>

		                     <td>
		                    	<a href="#" class="xedit" 
		                    	   data-pk="{{$row->id}}"
		                    	   data-name="sku">
		                    	   {{$row->sku}}</a>
		                    </td>
                            <td>
		                    	<a href="#" class="xedit" 
		                    	   data-pk="{{$row->id}}"
		                    	   data-name="barcode">
		                    	   {{$row->barcode}}</a>
		                    </td>
                            <td>
		                    	<a href="#" class="xedit" 
		                    	   data-pk="{{$row->id}}"
		                    	   data-name="purchase_price">
		                    	   {{$row->purchase_price}}</a>
		                    </td>
                            <td>
		                    	<a href="#" class="xedit" 
		                    	   data-pk="{{$row->id}}"
		                    	   data-name="selling_price">
		                    	   {{$row->selling_price}}</a>
		                    </td>
		                </tr>
	                @endforeach

	            </table>
	        </div>

	    </div>
	</div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script> -->
    <script>
		$(document).ready(function () {
	            $.ajaxSetup({
	                headers: {
	                    'X-CSRF-TOKEN': '{{csrf_token()}}'
	                }
	            });

	            $('.xedit').editable({
	                url: '{{url("inventory/update")}}',
	                title: 'Update',
	                success: function (response, newValue) {
	                    console.log('Updated', response)
	                }
	            });

	    })
	</script>
</body>
</html>
