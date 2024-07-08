@extends('template')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
body {
  animation: changeColor 10s infinite;
}

@keyframes changeColor {
  0% { background-color: #82b74b; }
  25% { background-color: #4096db; }
  50% { background-color: #f9cb9c; }
  75% { background-color: #f4a259; }
  100% { background-color: #b088d1; }
}
</style>
<link rel="stylesheet" href="{{url("css/cart.css")}}">
<div class="container-fluid mt-5">
    <h2 class="mb-5 text-center">Shopping Cart</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="table-responsive">
                <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th class="text-right p-2"><span id="amount" class="amount">price off</span> </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($carts as $cart)
                        <tr id="deleteBtn">
                            <td>
                                <div class="product-img">
                                    <div class="img-prdct"><img src="{{$cart->product->images->first()->url}}"></div>
                                </div>
                            </td>
                            <td>
                                <p>{{ $cart->product->name }}</p>
                            </td>
                            <td>
                                <div class="button-container">
                                    <button class="cart-qty-plus"  type="button" value="+">+</button>
                                    <input type="hidden" value="{{ $cart->product->id }}" class="product-id">
                                    <input type="text" name="qty" min="1" max="{{$cart->product->count}}" class="qty form-control"  id="QtyInput" value="{{ $cart->count }}"/>
                                     <button class="cart-qty-minus"  type="button" value="-">-</button>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="{{ $cart->product->price }}" class="price form-control" disabled>
                            </td>
                            <td align="right">$ <span id="amount" class="amount">{{ $cart->product->price_off }}</span></td>
                            <td><button onclick="deleteProduct({{$cart->product->id}})" class="btn btn-danger">delete</button></td>
                        </tr>
                        @endforeach


                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan=""></td>   <td colspan="4"></td><td><strong>TOTAL = $  <span id="total" class="total">0</span></strong></td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
</div>
<script src="{{url("js/cart.js")}}"></script>
<div class="row mt-5">
    <div class="col mt-5"></div>
</div>


@endsection

<script>
function updateCartCount(index, newCount) {
  fetch('/update_cart_count', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
      body: JSON.stringify({
          newCount: newCount,
          product_id: document.querySelectorAll('.product-id')[index].value
      })
  })
// .then(response => response.text())
// .then(result => {
//     alert(result);
 // })
  .catch(error => {
      console.error('There was a problem with the fetch operation:', error);
  });
}
</script>
