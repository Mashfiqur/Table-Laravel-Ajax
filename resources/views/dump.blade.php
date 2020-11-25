@isset($products)
            @foreach($products as $product)
                <tr>
                <th scope="row">{{ ($products->currentpage()-1) * $products ->perpage() + $loop->index + 1 }}</th>
                <td contenteditable>{{$product->sku}}
                </td>
                <td contenteditable>{{$product->name}}</td>
                <td contenteditable>{{$product->barcode}}</td>
                <td contenteditable>{{$product->purchase_price}}</td>
                <td contenteditable>{{$product->selling_price}}</td>     
                <td contenteditable>{{$product->stock_level}}</td>
                <td contenteditable>{{$product->in_open}} </td>
                <td>
                @php
                 $available = $product->stock_level - $product->in_open;
                @endphp
                {{$available}}
                </td>
                <td contenteditable>5</td>
                <td contenteditable>N/A</td>
                </tr>
            @endforeach
            @endisset
            <tr>
            <td colspan="8" align="center">
                <div class="row">
                    <div class="col">
                    {{ $products->links() }}
                    </div>
                    
                </div>
            </td>
            </tr>



            