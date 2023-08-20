@extends('layouts.shopping')
@section('contenu')

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="{{route('shopping')}}">Accueil</a></li>
                    <li><a href="{{route('products')}}">Produits</a></li>
                    <li><a href="{{route('productDetails')}}">À Propos</a></li>
                    <li><a href="{{route('contact-us')}}">Contact</a></li>
                    <li><a href="{{route('account')}}">Compte</a></li>
                </ul>
            </nav>
            <a href="{{route('cart')}}"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by price</option>
                <option>Sort by  popularity</option>
                <option>Sort by  rating</option>
                <option>Sort by sale</option>
            </select>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="images/product-1.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-2.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-3.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <p>$60.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-4.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$50.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-6.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-7.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <p>$60.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-8.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$50.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <p>$60.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg">
                <h4>Pro Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$50.00</p>
            </div>
        </div>

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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