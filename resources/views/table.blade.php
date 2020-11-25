<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Table In Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   

</head>
<body>

            <div class="card mt-4">
            
            <div class="table-body">
            <table class="table table-stripped table-borderd table-hover table-condensed mt-2" >
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>SKU</th>
                        <th>Barcode</th>
                        <th>Purcahse Price</th>
                        <th>Retail Price</th>
                        <!-- <th>Stock Level</th>
                        <th>In Open Orders</th>
                        <th>Available</th>
                        <th>Minimum</th> -->
                        <th>Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody id="product-info">

                    
                    </tbody>
                    </table>



            </div>

            </div>














<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!-- <script>
    $(document).ready(function(){
        setInterval(function(){


        })
    })

</script> -->


<script>

var refInterval = window.setInterval('update()', 3000); // 3 seconds


var update = function() {
//  $('#read_data').on('click',function(){
    $(document).ready(function () {
            
            $.get("{{ URL::to('/products/read_data') }}", function(data){

                // console.log(data);
                $('#product-info').html(data);
                
                // $.each(data,function(i,value){
                //     var tr = $("<tr/>");
                //     tr.append($("<td/>",{
                //         text: value.id
                //     })).append($("<td/>",{
                //         text: value.name
                //     })).append($("<td/>",{
                //         text: value.sku
                //     })).append($("<td/>",{
                //         text: value.barcode
                //     })).append($("<td/>",{
                //         text: value.purchase_price
                //     })).append($("<td/>",{
                //         text: value.selling_price
                //     })).append($("<td/>",{
                //         html: "<a href=''>View</a>"
                //     }))
                //     $('#product-info').append(tr);
                // });
            });

        });
};
update();

</script>


</body>
</html>