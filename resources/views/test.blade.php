@extends('layouts.app2')
@section('title')
    Home
@endsection
@section('css_content')
    <link rel="icon" type="image/png" href="{{URL::asset('images/icons/favicon.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/themify/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/css-hamburgers/hamburgers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animsition/css/animsition.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/select2/select2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/lightbox2/css/lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .morecontent span {
            display: none;
        }

        .morelink {
            display: block;
        }

    </style>

@endsection

@section('content')
    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url(images/heading-pages-02.jpg);">
        <h2 class="l-text2 t-center">
            Women
        </h2>
        <p class="m-text13 t-center">
            New Arrivals Women Collection 2018
        </p>
    </section>


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            Categories
                        </h4>

                        <ul class="p-b-54">
                            @if(count($categories) > 0)
                                @foreach($categories as $categorie)

                                    <li class="p-t-4">
                                        <a href="#" class="s-text13 active1">
                                            {{$categorie->nom}}
                                        </a>
                                    </li>

                                @endforeach
                            @endif

                        </ul>

                        <!--  -->
                        <h4 class="m-text14 p-b-32">
                            Filtres
                        </h4>

                        <div class="filter-price p-t-22 p-b-50 bo3">
                            <div class="m-text15 p-b-17">
                                Prix
                            </div>

                            <div class="wra-filter-bar">
                                <div id="filter-bar"></div>
                            </div>

                            <div class="flex-sb-m flex-w p-t-16">
                                <div class="w-size11">
                                    <!-- Button -->
                                    <button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
                                        Filtre
                                    </button>
                                </div>

                                <div class="s-text3 p-t-10 p-b-10">
                                    Plage de prix: $<span id="value-lower">610</span> - $<span
                                            id="value-upper">980</span>
                                </div>
                            </div>
                        </div>

                        <div class="filter-color p-t-22 p-b-50 bo3">
                            <div class="m-text15 p-b-12">
                                Couleur
                            </div>

                            <ul class="flex-w">
                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter1" type="checkbox"
                                           name="color-filter1">
                                    <label class="color-filter color-filter1" for="color-filter1"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter2" type="checkbox"
                                           name="color-filter2">
                                    <label class="color-filter color-filter2" for="color-filter2"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter3" type="checkbox"
                                           name="color-filter3">
                                    <label class="color-filter color-filter3" for="color-filter3"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter4" type="checkbox"
                                           name="color-filter4">
                                    <label class="color-filter color-filter4" for="color-filter4"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter5" type="checkbox"
                                           name="color-filter5">
                                    <label class="color-filter color-filter5" for="color-filter5"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter6" type="checkbox"
                                           name="color-filter6">
                                    <label class="color-filter color-filter6" for="color-filter6"></label>
                                </li>

                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="color-filter7" type="checkbox"
                                           name="color-filter7">
                                    <label class="color-filter color-filter7" for="color-filter7"></label>
                                </li>
                            </ul>
                        </div>

                        <div class="search-product pos-relative bo4 of-hidden">
                            <form method="get" action="/search" role="search">
                                <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search"
                                       placeholder="Search Products...">

                                <button type="submit" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                            <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                                <select class="selection-2" name="sorting">
                                    <option>Default Sorting</option>
                                    <option>Popularité</option>
                                    <option>Prix: du plus bas au plus haut</option>
                                    <option>Prix: du plus haut au plus bas</option>
                                </select>
                            </div>

                            <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                                <select class="selection-2" name="sorting">
                                    <option>Price</option>
                                    <option>$0.00 - $50.00</option>
                                    <option>$50.00 - $100.00</option>
                                    <option>$100.00 - $150.00</option>
                                    <option>$150.00 - $200.00</option>
                                    <option>$200.00+</option>

                                </select>
                            </div>
                        </div>

                        <span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
                    </div>

                    <!-- Product -->
                    <div class="row">
                        @if(count($details) > 0)
                            @foreach($details as $produit)
                                <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                    <!-- Block2 -->

                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="{{asset('images/produits/'.$produit->image)}}" alt="IMG-PRODUCT"
                                                 style="width:250px; height:350px;">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>


                                                <div class="block2-overlay trans-0-4">
                                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none"
                                                           aria-hidden="true"></i>
                                                    </a>

                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->

                                                        <button type="button"
                                                                class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"
                                                                data-toggle="modal"
                                                                data-target="#myModal{{$produit->produit_id}}">
                                                            Ajouter au panier
                                                        </button>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a class="block2-name dis-block s-text3 p-b-5">
                                                {{$produit->nom}}
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
										{{$produit->prix}} DNT
									</span>
                                        </div>
                                    </div>
                                </div>



                                <div class="modal fade" id="myModal{{$produit->produit_id}}" role="dialog"
                                     style="margin-top:150px;">
                                    <div class="modal-dialog">


                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><b>{{$produit->nom}}</b></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table>
                                                    <tr>

                                                        <td> Description: <p><span
                                                                        class="more">{{$produit->description}} </span>
                                                            </p>
                                                            <br>
                                                            Prix: <p>{{$produit->prix}} TND</p>
                                                            <form method="get"
                                                                  action="{{action('ProduitController@addCart', ['id'=>$produit->produit_id,'nom'=>$produit->nom, 'prix'=>$produit->prix])}}">

                                                                <br>
                                                                <div><label for="quantite" class=" form-control-label">Quantité:</label>
                                                                </div>
                                                                <div><input type="number" name="quant" value="1"
                                                                            class="input-group form-control" width="10" ></div>


                                                                <button type="submit" style="margin-left:100px;"
                                                                        class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                                                    Ajouter au panier
                                                                </button>

                                                            </form>
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/produits/'.$produit->image)}}" alt="IMG-PRODUCT"
                                                                 style="width:150px; height:150px; float:right;">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>





                            @endforeach

                        @else
                            {{$message}}
                        @endif
                    </div>
                    <a href="{{action('ProduitController@destroyCart')}}" class="btn btn-warning">Edit</a>
                {{        Log::info("Test1")}}
                <!-- Pagination -->
                    <div class="pagination flex-m flex-w p-t-26">
                        <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                        <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                    </div>
                </div>
            </div>
        </div>

















    </section>








@endsection

@section('scripts')
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/animsition/js/animsition.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/select2/select2.js')}}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/daterangepicker/moment.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/slick-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/sweetalert/sweetalert.min.js')}}"></script>


    <!--===============================================================================================-->
    <script type="text/javascript" src="{{URL::asset('vendor/noui/nouislider.js')}}"></script>
    <script type="text/javascript">
        /*[ No ui ]
        ===========================================================*/
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [50, 200],
            connect: true,
            range: {
                'min': 50,
                'max': 200
            }
        });

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function (values, handle) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Configure/customize these variables.
            var showChar = 100;  // How many characters are shown by default
            var ellipsestext = "...";
            var moretext = "Show more >";
            var lesstext = "Show less";


            $('.more').each(function () {
                var content = $(this).html();

                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function () {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>


@endsection