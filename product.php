<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Welcome</title>
    <style>
        @import "sildeshow.css";
        @import "filter.css";
        .nav-link{
           color: white; 
        }
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
        }
        #cart{
            font-size:24px; 
            color:white;
            opacity:0.4; 
            float: right;
        }
        #cart:hover{
            color:white;
            opacity:0.6; 
        }
        #cart:active{
            color:white;
        }
        #sch{
            color:#ed553B;
        }
        #sch:hover{
            color:#FF683F;
        }
        #sch:active{
            color:white;
            background-color:#ed553B;
        }
        #addCart{
            color:white;
            background-color:#ed553B;
        }
        #addCart:hover{
            border-radius: 5px;
            border: 1.5px solid #ed553B;
            color:#ed553B;
            background-color:white;
        }
        #addCart:active{
            color:white;
            background-color:#ed553B;
        }
        #addBookmark{
            border-radius: 5px;
            border: 1.5px solid #ffbf00;
            background-color:#fcfcfc;
        }
        #addBookmark:hover{
            color:black;
            background-color:#ffbf00;
        }
        p{
            font-size:14px;
            word-wrap: break-word;
        }
        .num{
            position:absolute;
            top:5px;
            right:3px;
            width:20px;
            height:20px;
            border-radius:50%;
            background:white;
            color:red;
            line-height:20px;
            font-size:12px;
            font-family:sans-serif;
            text-align:center;
        }
        .l{
            font-size:12px;
            display:inline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-between" style="background-color: #ed553B">
        <a class = "navbar-brand" href="#home">Gourmet Home Cooking</a>
        <ul class="navbar-nav mr-auto">
        <li class = "nav-item"><a class = "nav-link" href="#recipe">Recipe</a></li>
        <li class = "nav-item"><a class = "nav-link" href="product.php">Product</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#promotion">Promotion</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#contact">Contact</a></li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item dropdown mr-sm-2"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Username </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="bookmark.php">Bookmark</a></li>
            <li><a class="dropdown-item" href="#history">My Purchases</a></li>
            <li><a class="dropdown-item" href="#setting">Setting</a></li>
            <li><a class="dropdown-item" href="#logout">Log Out</a></li>
            </ul>
        </li>
        <li class = "nav-item my-2 my-sm-0t">
            <a href="#cart" id = "cart" class='fas fa-shopping-cart'></a>
            <span class="num">1</span>
        </li>
        </ul>
    </nav>
        <div class="container-fluid" style="margin-top:60px">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <br>
            <h1 style = "text-align: center; color:#ed553B">Product</h2>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form class = "from-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            </div>
            <div class="col-sm-1">
            <form class = "from-inline">
            <button class="btn btn-outline my-2 my-sm-0" type="submit" id = "sch">Search</button>
            </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <br>
        <div class = "row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('pasta')"> Pasta</button>
                <button class="btn" onclick="filterSelection('oil')"> Olive Oil</button>
                <button class="btn" onclick="filterSelection('soup')"> Soup</button>
                <button class="btn" onclick="filterSelection('psauce')"> Pasta Sauce</button>
                <button class="btn" onclick="filterSelection('ssauce')"> Soy Sauce</button>
                <button class="btn" onclick="filterSelection('spice')"> Spices</button>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <br>
        <div class="row" style = "margin-left: 5%">
        <div class="col" style = "float:right">
            <div class="card" style="width:350px" data-toggle="modal" data-target="#myModal">
                <img class="card-img-top" src="img\Product\001.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col" style = "float:center">
            <div class="card" style="width:350px">
                <img class="card-img-top" src="img\Product\002.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col" style = "float:center">
            <div class="card" style="width:350px">
                <img class="card-img-top" src="img\Product\003.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        </div>
        <br>
        <div class="row" style = "margin-left: 5%">
        <div class="col" style = "float:right">
            <div class="card" style="width:350px">
                <img class="card-img-top" src="img\Product\004.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col" style = "float:center">
            <div class="card" style="width:350px">
                <img class="card-img-top" src="img\Product\005.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col" style = "float:center">
            <div class="card" style="width:350px">
                <img class="card-img-top" src="img\Product\006.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        </div>
        </div>
        <br>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Product Name</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="img\product\001.png" style="width:100%">
                        </div>
                        <div class="col-sm-6">
                            <h5>
                                Price: 31 baht. Quantity : 
                                <span class="l">
                                <input type="number" name="quantity" min="1" max="10"> 
                                </span>
                            </h5>
                            <h6>Descpirtion</h1>
                            <p>sfaifijddskfkdsfjowejgowgowwieiorucijefksjkfdkir3jdoiddkdkdkafja</p>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <!-- <div class="col-sm-1"></div> -->
                    <div class="col-sm-5">
                        <button type="button" class="btn btn-outline-warning" id="addBookmark">Add Bookmark</button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn" id="addCart" >Add to Cart</button>
                    </div>
                    <div class="col-sm-1"></div>
                </div>

                </div>
            </div>
        </div>
        
        </div>
        </div>
        <script>
        filterSelection("all")
        function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
        }

        function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
        }

        function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
        }
        element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }
        </script>

</body>
</html>