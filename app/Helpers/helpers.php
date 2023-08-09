<?php
    use Illuminate\Support\Str;

define("PAGELIST","liste");
define("PAGECREATE","create");
define("PAGEEDIT","edit");
define("DEFAULTPASSWORD","password");


function userlastName(){
    return auth()->user()->name;
}

function userfirstName(){
    return auth()->user()->firstName;
}

function userfullName(){
    return userfirstName().' '. userlastName();
}

function userImage(){
    return auth()->user()->image;
}


function addClass($route, $class){
    $routeActuel= request()->route()->getName();
    if( Str::contains($routeActuel, $route)){
        return $class;
    }
    return "";    
}
function openMenu($route){
    if( request()->route()->getName()=== $route ){
        return 'menu-open active';
    }
    return '';
}
function active($route){
    if( request()->route()->getName()=== $route ){
        return 'active';
    }
    return '';
}





function generateAcronym($str)
{
    $words = preg_split('/\s+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $acronym = '';

    foreach ($words as $word) {
        if (!in_array(strtolower($word), ['des','de', 'et'])) {
            $acronym .= strtoupper(substr($word, 0, 1));
        }
    }

    return $acronym;

}




