
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    
</head>
<body>
    
@foreach($products as $value)

<tr>
<td contenteditable>{{ $value->id }}</td>
<td contenteditable>{{ $value->name }}</td>
<td contenteditable>{{ $value->sku }}</td>
<td contenteditable>{{ $value->barcode }}</td>
<td contenteditable>{{ $value->purchase_price }}</td>
<td contenteditable>{{ $value->selling_price }}</td>
<td>
</td>

<a href="" class="btn btn-primary btn-xs" id="view" data="{{ $value->id }}"> View</a>
<a href="" class="btn btn-info btn-xs" id="edit" data="{{ $value->id }}"> Edit</a>
<a href="" class="btn btn-secondary btn-xs" id="delete" data="{{ $value->id }}"> Delete</a>





</tr>




@endforeach
</body>
</html>





