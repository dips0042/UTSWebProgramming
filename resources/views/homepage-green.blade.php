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

<body class="antialiased">
    
    {{-- HEADER --}}
    <section>
        @include('header')
    </section>
    

    <section>
        <div class="card" style="margin-top: 4.3rem;">
            <div class="bg-image">
                <img src="https://pingpoint.co.id/media/images/Fore_Coffee_Bantu_Anda_Tingkatkan_Daya_Tahan_Tu.original.jpg" class="w-100" />
            </div>

            <div class="card-img-overlay align-items-center">
                @php($nowTime = now()->toTimeString('minute'))
                @php($hour = explode(':', $nowTime))
                @if ((int)$hour[0] < 12)
                    <div class="d-flex w-100 justify-content-between">
                        <div class="badge text-wrap me-2 rounded-pill" style="background-color: #006F42; width: 4.5rem; height: 1.5rem">
                            <a class="text-white m-0 p-0 align-middle text-decoration-none" href="/">Green</a>
                        </div>
                        <h5 class="card-title m-0"> Good Morning, </h5>
                    </div>
                    <h1 class="card-title text-end">Ms. Fei Fei Li!</h1>
                @elseif ((int)$hour[0] < 18)
                    <div class="d-flex w-100 justify-content-between">
                        <div class="badge text-wrap me-2 rounded-pill" style="background-color: #006F42; width: 4.5rem; height: 1.5rem">
                            <a class="text-white m-0 p-0 align-middle text-decoration-none" href="/">Green</a>
                        </div>
                        <h5 class="card-title m-0"> Good Afternoon, </h5>
                    </div>
                    <h1 class="card-title text-end">Ms. Fei Fei Li!</h1>
                @elseif ((int)$hour[0] < 21)
                    <div class="d-flex w-100 justify-content-between">
                        <div class="badge text-wrap me-2 rounded-pill" style="background-color: #006F42; width: 4.5rem; height: 1.5rem">
                            <a class="text-white m-0 p-0 align-middle text-decoration-none" href="/">Green</a>
                        </div>
                        <h5 class="card-title m-0"> Good Evening, </h5>
                    </div>
                    <h1 class="card-title text-end">Ms. Fei Fei Li!</h1>
                @else
                    <div class="d-flex w-100 justify-content-between">
                        <div class="badge text-wrap me-2 rounded-pill" style="background-color: #006F42; width: 4.5rem; height: 1.5rem">
                            <a class="text-white m-0 p-0 align-middle text-decoration-none" href="/">Green</a>
                        </div>
                        <h5 class="card-title m-0"> Good Night, </h5>
                    </div>
                    <h1 class="card-title text-end">Ms. Fei Fei Li!</h1>
                @endif
            </div>
        </div>
        
        {{-- STAR SECTION --}}
        <div class="mx-4 mt-4 rounded" style="background-color: #BADACD; height: max-content;">
            <h2 class="mt-3 mb-0" style="padding-top:0.6rem; padding-left: 1.2rem;">Stars Collected</h2>
            <div class="row">
                <div class="col-9">
                    <p id="stars-info" class="mb-0 pb-3 align-middle" style="padding-left: 1.2rem; font-size: 0.8em;">
                        You have collected <span class="fw-bold" style="font-size: 1.3em; color: #244E3D;">30</span> stars so far. Collect more to redeem more rewards.
                    </p>
                </div>
                
                <div class="col">
                    <p class="m-0 pe-2 text-center fw-bold align-item-center" style="font-size: 0.8em;">Redeem ></>
                </div>
            </div>
        </div>

        {{-- HOT DEALS SECTION --}}
        <div class="ms-4 me-3 mt-4">
            <h2>Hot Deals <span class="fs-5">&#x1F525;</span></h2>
            <div class="row g-0">
                <div class="col" >
                    <img src="https://katalogpromosi.com/wp-content/uploads/2022/08/fore.coffee_306061740_3396978580549624_1084485079820549570_n.jpg" class="img-fluid rounded px-1" alt="deals1">
                </div>
                <div class="col">
                    <img src="https://katalogpromosi.com/wp-content/uploads/2022/11/fore-2-819x1024.jpg" class="img-fluid rounded px-1" alt="deals2">
                </div>
                <div class="col">
                    <img src="https://katalogpromosi.com/wp-content/uploads/2022/06/fore.coffee_311969473_519580002926029_5757025808526050080_n.jpg" class="img-fluid rounded px-1" alt="deals3">
                </div>
            </div>
        </div>

        {{-- FORENEWS SECTION --}}
        <div class="ms-4 me-3 mt-4">
            <h2>ForeNews</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="mb-3" style="w-100">
                        <div class="row g-3">
                            <div class="col-4">
                                <img src="https://tse3.mm.bing.net/th?id=OIP.MVV1nY28OEGQgzwaXHtp-AHaHa&pid=Api&P=0" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div>
                                    <h6>Jangan salah pesan! Pahami 4 Perbedaan Espresso dan Americano! </h6>
                                    <p class="mb-0" style="font-size: 0.7em;">
                                        Siapa, nih, yang hobi minum kopi? Kalau iya, pasti kamu udah nggak asing lagi dengan kopi Espresso dan Americano. 
                                        Kedua jenis minuman ini merupakan menu yang ...
                                    </p>
                                    <a href="/" class="m-0 p-0 fw-bold" style="font-size: 0.6em; text-decoration: none;">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-3" style="w-100">
                        <div class="row g-3">
                            <div class="col-4">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.jW6hfff4mEXBEx2oO3bGygHaHa&pid=Api&P=0" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div>
                                    <h6>Yuk, Kenali 4 Jenis-Jenis Kopi Populer di Coffee Shop! </h6>
                                    <p class="mb-0" style="font-size: 0.7rem;">
                                        Apa aja, sih, jenis-jenis kopi yang populer di coffee shop? 
                                        Kebanyakan coffee shop yang ada sekarang menawarkan pilihan menu variatif ...
                                    </p>
                                    <a href="/" class="m-0 p-0 fw-bold text-decoration-none" style="font-size: 0.6em;">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-3" style="w-100">
                        <div class="row g-3">
                            <div class="col-4">
                                <img src="https://66.media.tumblr.com/c0d19a07a1681ec17ae8a764ddd149fb/tumblr_nx89forYxU1rs2hmjo1_640.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div>
                                    <h6>7 Tips Membuat Coffe Latte Art Anti Gagal</h6>
                                    <p class="mb-0" style="font-size: 0.7rem;">
                                        Saat lagi nongkrong di kafe, kamu pasti pernah melihat barista yang menuangkan susu ke secangkir kopi untuk menciptakan sajian unik pada permukaan kopi tersebut. 
                                        Nah, pembuatan seni di atas kopi ...
                                    </p>
                                    <a href="/" class="m-0 p-0 fw-bold text-decoration-none" style="font-size: 0.6em;">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="position-fixed bottom-0 end-0" style="margin-bottom: 5rem; margin-right: 2rem;">
            <a href="/coffeelist" class="btn text-white" style="background-color: #006F42">Coffee</a>
        </div>
    </section>

    {{-- FOOTER --}}
    <section>
        <footer class="text-white text-center text-md-start" style="background-color: #006F42">
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
