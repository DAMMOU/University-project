@extends('layouts.shopping')
@section('contenu')
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" width="125px"></a>
            </div>
            <nav>
               <nav>
                <ul id="MenuItems">
                    <li><a href="{{route('shopping')}}">Accueil</a></li>
                    <li><a href="{{route('products')}}">Produits</a></li>
                    <li><a href="{{route('productDetails')}}">À Propos</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('account')}}">Compte</a></li>
                </ul>
            </nav>
            </nav>
            <a href="{{asset('cart')}}"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

<!----------------cart items details---------------->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/buy-1.jpg">
                    <div>
                        <p>Printed Tshirt</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/buy-2.jpg">
                    <div>
                        <p>Printed Tshirt</p>
                        <small>Price: $60.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$60.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/buy-3.jpg">
                    <div>
                        <p>Printed Tshirt</p>
                        <small>Price: $40.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$40.00</td>
        </tr>
    </table>

  <div class="total-price">

    <table>

        <tr>
            <td>Subtotal</td>
            <td>$200.00</td>
        </tr>

        <tr>
            <td>Tax</td>
            <td>$35.00</td>
        </tr>

        <tr>
            <td>Total</td>
            <td>$230.00</td>
        </tr>

    </table>

  </div>
    

</div>

<!--------------js for toggle menu-------------->
    <script>
        var menu = document.getElementById("MenuItems");
        menu.style.maxHeight = "0px";
        function menutoggle(){
            if(menu.style.maxHeight == "0px"){
                menu.style.maxHeight = "200px"
            }else{
                menu.style.maxHeight = "0px"
            }
        }
    </script>


@endsection