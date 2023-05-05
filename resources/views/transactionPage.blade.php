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

    <br><br><br>
    <section >
        <h2 class="ms-4 my-2">Transaction History</h2>
        
        <div class="me-1">
            @foreach ($transactions as $transaction)
                @if ($transaction->appuser_id == $appuser->id)    
                    @foreach ($coffees as $coffee)
                        @if ($transaction->coffee_id == $coffee->id)
                            <div class="list-group list-group-flush">
                                <div class="list-group-item">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h5 class="mb-1">{{$coffee->coffee_name}}</h5>
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="mb-1 fw-bold" style="text-size: 10%;">Price: Rp{{$coffee -> coffee_price}}</p>
                                            <p class="mb-1 text-black-50">{{ $transaction->transaction_date}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
    </section>

    {{-- FOOTER --}}
    <section>
        <footer class="text-white bg-black text-center text-md-start fixed-bottom">
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