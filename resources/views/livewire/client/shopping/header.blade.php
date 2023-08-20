<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="{{asset('images/logoShopping.png')}}" width="125px"></a>
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
            <a href="{{asset('cart')}}"><img src="{{asset('shopping/images/cart.png')}}" width="30px" height="30px"></a>
            <img src="{{asset('shopping/images/menu.png')}}" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Donnez à vos études un nouveau style !</h1>
                <p>Le succès ne dépend pas toujours de la grandeur. Il s'agit de la constance. Le travail acharné et constant mène au succès. La grandeur viendra.</p>
                <a href="#" class="btn">Explorer maintenant &#8594;</a>
            </div>
            <div class="col-2">
                <img src="{{asset('shopping/images/image1.png')}}">
            </div>
        </div>
    </div>
</div>
