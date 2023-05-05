<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTS Web Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <section>
        @include('header')
    </section>

    <section>
        <h1 class="ms-3" style="margin-top: 17%;">Coffee List</h1>
        
        {{-- SEARCH BY CATEGORY --}}
        <div>
            <p class="text-center fst-italic mb-0 mt-3" style="font-size: 90%;">
            One click to going straight to your favourite category
            </p>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link text-black" href="#Latte">Latte</a></li>
                    <li class="page-item"><a class="page-link text-black" href="#Espresso">Espresso</a></li>
                    <li class="page-item"><a class="page-link text-black" href="#Brewed">Brewed</a></li>
                    <li class="page-item"><a class="page-link text-black" href="#Signature">Signature</a></li>
                </ul>
            </nav>
        </div>

            <div class="row justify-content-center ms-3 g-0">
                <div class="container">
                    <div class="row">
                        @foreach ($coffees as $category => $items)
                            <div id="{{ $category }}"><h2>{{ $category }}</h2></div>
                            
                            <div class="row">
                                @foreach ($items as $product)
                                    <div class="col-sm-6 col-md-4 w-50">
                                        <div class="mb-4 shadow-sm rounded">
                                            <img src="{{ $product -> coffee_image_url }}" class="card-img-top" alt="{{ $product -> coffee_image_url }}">
                                            <div class="mx-3 mb-0 mt-1">
                                                <h4 class="mb-1">{{ $product->coffee_name }}</h4>
                                                <p class="fst-italic mb-1">Rp{{ $product->coffee_price }}</p>
                                                <button class="btn buy-btn bg-black" data-bs-toggle="modal" data-bs-target="#buyCoffeeModal" data-coffee-id="{{$product->id}}">
                                                    Buy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- MODAL --}}
                <div class="modal fade" id="buyCoffeeModal" tabindex="-1" aria-labelledby="buyCoffeeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="buyCoffeeModalLabel">Buy Confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Do you want to buy this coffee?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn confirm-cancel-btn" data-bs-dismiss="modal">No</button>
                                    <form id="buyCoffeeForm" method="POST" action="{{ route('transaction.purchase') }}">
                                        @csrf
                                        <input type="hidden" name="coffee_id" id="coffeeId">
                                        <button type="submit" class="btn confirm-buy-btn">BUY</button>
                                    </form>
                             </div>
                        </div>
                    </div>
                </div>


            </div>
    </section>

    <section>
        <footer class="text-white bg-black text-center text-md-start">
            <div class="text-center">
                <div class="row">
                <!--Grid column-->
                <div class="text-center mt-2 p-0">
                <h6 class="text-uppercase mb-0" style="font-size: 0.8em">PT KOPI FORE INDONESIA</h6>
                <p class="fw-light mb-2" style="font-size: 0.6em">©2023 Web Programming Mid Exam</p>
                </div>
            </div>
        </footer>
    </section>
</body>
</html>