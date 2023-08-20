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
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('account')}}">Compte</a></li>
                </ul>
            </nav>
            <a href="{{asset('cart')}}"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

<!----------------account page---------------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container"> 
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot password ?</a>
                        </form>

                        <form id="RegForm">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Register</button>                        </form>


                    </div>
                </div>
            </div>
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
<!--------------js for toggle form-------------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)"
        }
        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)"
        }

    </script>
@endsection