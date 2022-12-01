<div>

    <div class="container">
        <div class="row content-cart">
            <table class="table cart-desktop">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" style="text-align: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $item)
                <tr>
                    <td>
                      <button wire:click="remove('{{$item->rowId}}')">  X </button>
                    </td>
                    <td>
                        <div class="row">
                            <img class="product-image" src="images/{{$item->options->image}}" alt="" style="width:100px">
                            <p>{{$item->name}}</p>
                        </div>
                    </td>
                    <td>N {{$item->price}}  </td>
                    <td>
                        <div class="btn-group">
                            <button wire:click="decreament('{{$item->rowId}}')" type="button" class="btn">-</button>
                            <button type="button" class="btn ">{{$item->qty}}</button>
                            <button wire:click.prevent="increament('{{$item->rowId}}')"  type="button" class="btn ">+</button>
                        </div>
                    </td>
                    <td><span>
                        {{$item->qty * $item->price}}
                    </span></td>
                </tr>
                @endforeach
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            @foreach($cart as $item)
            <div class="cart-mobile">
                <table class="table">
                    <tr>
                        <td colspan="2">
                            <img src="imager/cart1.jpg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th>Product</th>
                        <td>{{$item->name}}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{$item->price}}</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="prev btn ">-</button>
                                <button type="button" class="show-number btn ">{{$item->qty}}</button>
                                <button type="button" class="next btn ">+</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>{{$item->qty * $item->price}}</td>
                    </tr>
                </table>
                <span>X</span>
            </div>
            @endforeach
            <div class="card-button">
                <button type="button" class="btn coupon float-left">Coupon code</button>
                <button type="button" class="btn apply float-left">APPLY COUPON</button>
            </div>
            <div class="rocart-total">
                <h2>Cart totals</h2>
                <ul class="list-inline">
                    <li class="list-inline-item"><p>Subtotal</p></li>
                    <li class="list-inline-item"><span>{{$total}}</span></li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item"><p>Total</p></li>
                    <li class="list-inline-item"><p>{{$total}}</p></li>
                </ul>
                <a href="/checkout">
                    <button class="btn float-left">PROCEED TO CHECKOUT</button>
                </a>
            </div>
        </div>
    </div>
</div>
