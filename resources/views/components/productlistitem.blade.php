<div class="row mr-0 pl-3 pb-1 pr-2">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <a class="border col-6" href="{{url('productDetails',$product->id)}}">{{$product->productname}}</a>

    <span class="border col-2" style="cursor:default">
        <span class="font-weight-bold">amount in stock:</span> {{$product->amount}}
    </span>

    <span class="border col-2" style="cursor:default">
        <span class="font-weight-bold">price:</span>{{number_format((float)$product->price, 2, '.', '')}}
    </span>

    <a href="{{url('EditProduct',$product->id)}}" class="border col-1 btn btn-warning">edit</a>
    <a class="border col-1 btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('deleteProduct',$product->id)}}">delete</a>
</div>