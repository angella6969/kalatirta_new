<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KALATIRTA - Layanan Terpadu BBWS SO</title>

    <link rel="stylesheet" href="{{ asset('kalatirta\css\style.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('kalatirta\images\Kal-logo2.png') }}" />
</head>

<body>
    <!-- ==ICON== -->
    {{-- <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
        data-name="Layer 1">
        <path
            d="m18.5 24h-13a5.506 5.506 0 0 1 -5.5-5.5v-13a5.506 5.506 0 0 1 5.5-5.5h13a5.506 5.506 0 0 1 5.5 5.5v13a5.506 5.506 0 0 1 -5.5 5.5zm-13-21a2.5 2.5 0 0 0 -2.5 2.5v13a2.5 2.5 0 0 0 2.5 2.5h13a2.5 2.5 0 0 0 2.5-2.5v-13a2.5 2.5 0 0 0 -2.5-2.5zm13.5 4a2 2 0 0 0 -2-2h-10a2 2 0 0 0 -2 2 2 2 0 0 0 2 2h10a2 2 0 0 0 2-2zm-12.5 4.5a1.5 1.5 0 1 0 1.5 1.5 1.5 1.5 0 0 0 -1.5-1.5zm5 0a1.5 1.5 0 1 0 1.5 1.5 1.5 1.5 0 0 0 -1.5-1.5zm-5 4.5a1.5 1.5 0 1 0 1.5 1.5 1.5 1.5 0 0 0 -1.5-1.5zm5 0a1.5 1.5 0 1 0 1.5 1.5 1.5 1.5 0 0 0 -1.5-1.5zm7.5 1.5a1.5 1.5 0 0 0 -1.5-1.5h-1a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 0 1.5-1.5zm0-4.5a1.5 1.5 0 0 0 -1.5-1.5h-1a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 0 1.5-1.5z" />
    </svg> --}}
    <!-- ==main== -->
    <svg style="display:none;">
        <symbol id="air" viewBox="0 0 24 24">
            <path
                d="M10,24a9.893,9.893,0,0,1-7.077-2.961C-4.04,14.063,3.4,4.954,6.542,1.569A4.571,4.571,0,0,1,10.008,0a4.617,4.617,0,0,1,3.511,1.625C16.648,5,24.016,14.088,17.077,21.039A9.893,9.893,0,0,1,10,24Zm.005-21a1.6,1.6,0,0,0-1.23.57C5.674,7.056.011,13.982,5.056,18.929a6.969,6.969,0,0,0,9.888,0c5.039-4.923-.613-11.879-3.663-15.3A1.643,1.643,0,0,0,10.006,3ZM21.5,5a2.5,2.5,0,0,1,0-5A2.5,2.5,0,0,1,21.5,5Z">
            </path>
        </symbol>
        <symbol id="form" viewBox="0 0 24 24">
            <path
                d="m17 17.5a1.5 1.5 0 0 1 -1.5 1.5h-7a1.5 1.5 0 0 1 0-3h7a1.5 1.5 0 0 1 1.5 1.5zm5-10.343v11.343a5.506 5.506 0 0 1 -5.5 5.5h-9a5.506 5.506 0 0 1 -5.5-5.5v-13a5.506 5.506 0 0 1 5.5-5.5h7.343a5.464 5.464 0 0 1 3.889 1.611l1.657 1.657a5.464 5.464 0 0 1 1.611 3.889zm-3.015-.157h-1.985a2 2 0 0 1 -2-2v-1.984c-.053-.004-7.5-.016-7.5-.016a2.5 2.5 0 0 0 -2.5 2.5v13a2.5 2.5 0 0 0 2.5 2.5h9a2.5 2.5 0 0 0 2.5-2.5s-.012-11.447-.015-11.5zm-4.485 2h-5a2.5 2.5 0 0 0 0 5h5a2.5 2.5 0 0 0 0-5z">
            </path>
        </symbol>
        <symbol id="map" viewBox="0 0 24 24">
            <path
                d="M20.469,1.146l-.031-.011L17.847.272a5.335,5.335,0,0,0-3.1-.081L9.44,1.734A2.312,2.312,0,0,1,7.859,1.6l-.5-.23A5.318,5.318,0,0,0,0,6.277V17.8a5.328,5.328,0,0,0,3.822,5.1l2.74.857A5.34,5.34,0,0,0,8.148,24a6.245,6.245,0,0,0,1.416-.192L15.1,22.28a2.3,2.3,0,0,1,1.249.01l2.259.651A4.363,4.363,0,0,0,24,18.7V6.154A5.328,5.328,0,0,0,20.469,1.146ZM14,3.534V19.47l-4,1.105V4.668ZM4.682,20.027A2.326,2.326,0,0,1,3,17.8V6.277A2.285,2.285,0,0,1,4.032,4.348a2.337,2.337,0,0,1,1.3-.4,2.145,2.145,0,0,1,.823.162L7,4.464V20.752ZM21,18.7a1.367,1.367,0,0,1-1.625,1.341L17,19.37V3.153l2.475.823A2.323,2.323,0,0,1,21,6.154Z">
            </path>
        </symbol>
        <symbol id="rekomtek" viewBox="0 0 24 24">
            <path
                d="m23.395,11.231c-.571-.767-1.441-1.213-2.395-1.23v-1.5c0-3.033-2.468-5.5-5.5-5.5h-4.056c-.077,0-.155-.018-.224-.053l-3.155-1.578c-.483-.241-1.024-.369-1.565-.369h-2C2.019,1,0,3.019,0,5.5v12c0,3.033,2.468,5.5,5.5,5.5h11.558c2.447,0,4.565-1.575,5.269-3.919l1.544-5.147c.28-.935.106-1.919-.476-2.702Zm-18.528,1.789l-1.784,5.119c-.054-.204-.082-.418-.082-.638v-9.5h14.95c.033.162.05.329.05.5v1.5h-8.885c-1.913,0-3.62,1.213-4.249,3.02Zm14.587,5.199c-.32,1.066-1.282,1.782-2.396,1.782H5.61l2.089-5.994c.209-.602.778-1.006,1.416-1.006h11.882l-1.544,5.218Z">
            </path>
        </symbol>
        <symbol id="data" viewBox="0 0 24 24">
            <path
                d="M22.5,19H15.149A3.509,3.509,0,0,0,13.5,17.351V14h7.654A1.847,1.847,0,0,0,23,12.154V11a2,2,0,0,0-2-2V4.5A4.505,4.505,0,0,0,16.5,0h-9A4.505,4.505,0,0,0,3,4.5V9a2,2,0,0,0-2,2v1.154A1.847,1.847,0,0,0,2.846,14H10.5v3.351A3.509,3.509,0,0,0,8.851,19H1.5a1.5,1.5,0,0,0,0,3H8.851a3.479,3.479,0,0,0,6.3,0H22.5a1.5,1.5,0,0,0,0-3ZM8.934,9.678l-.329-.356A1,1,0,0,0,7.87,9H6V4.5A1.5,1.5,0,0,1,7.5,3h9A1.5,1.5,0,0,1,18,4.5V9H16.13a1,1,0,0,0-.735.322l-.329.356a1,1,0,0,1-.735.322H9.669A1,1,0,0,1,8.934,9.678Z">
            </path>
        </symbol>
        <symbol id="pustaka" viewBox="0 0 24 24">
            <path
                d="M22.974,4.025c-.335-.335-.727-.592-1.153-.765-.264-.927-.815-1.75-1.611-2.351-1.138-.859-2.578-1.127-3.946-.735l-2.915,.833c-.5,.143-.956,.382-1.349,.693-.393-.311-.848-.55-1.349-.693L7.736,.175c-1.372-.391-2.809-.124-3.946,.735-.796,.6-1.347,1.424-1.611,2.351-.426,.173-.818,.43-1.153,.765-.662,.661-1.026,1.54-1.026,2.475v10.263c0,2.442,1.64,4.617,3.989,5.289l5.676,1.622c1.528,.437,3.143,.437,4.67,0l5.676-1.622c2.349-.671,3.989-2.846,3.989-5.289V6.5c0-.935-.364-1.814-1.026-2.475Zm-9.474,.76c0-.412,.277-.779,.673-.893l2.915-.833c.451-.13,.936-.043,1.315,.245,.379,.286,.597,.723,.597,1.198v12.087c0,.666-.447,1.259-1.088,1.442l-4.412,1.261V4.785Zm-8.5-.283c0-.475,.217-.912,.597-1.198,.38-.287,.864-.374,1.315-.245l2.915,.833c.396,.113,.673,.48,.673,.893v14.506l-4.413-1.261c-.64-.183-1.087-.776-1.087-1.442V4.502Z">
            </path>
        </symbol>
        <symbol id="survei" viewBox="0 0 24 24">
            <path
                d="M14.5,11c.829,0,1.5,.671,1.5,1.5s-.671,1.5-1.5,1.5H7.5c-.829,0-1.5-.671-1.5-1.5s.671-1.5,1.5-1.5h7Zm-5,5h-2c-.829,0-1.5,.671-1.5,1.5s.671,1.5,1.5,1.5h2c.829,0,1.5-.671,1.5-1.5s-.671-1.5-1.5-1.5Zm-1,5h-3c-1.378,0-2.5-1.122-2.5-2.5V9H22.5c.829,0,1.5-.671,1.5-1.5,0-3.033-2.467-5.5-5.5-5.5h-.5v-.5c0-.829-.671-1.5-1.5-1.5s-1.5,.671-1.5,1.5v.5h-6v-.5c0-.829-.671-1.5-1.5-1.5s-1.5,.671-1.5,1.5v.5h-.5C2.467,2,0,4.467,0,7.5v11c0,3.033,2.467,5.5,5.5,5.5h3c.829,0,1.5-.671,1.5-1.5s-.671-1.5-1.5-1.5Zm4.769-1.519c-.813,.813-1.269,1.915-1.269,3.064v.955c0,.276,.224,.5,.5,.5h.955c1.149,0,2.252-.457,3.064-1.269l6.715-6.715c.85-.85,1.013-2.236,.252-3.167-.875-1.07-2.456-1.129-3.409-.176l-6.808,6.808Z">
            </path>
        </symbol>
        <!-- ==social== -->
        @include('content.kalatirta.layout.sosial')

        <!-- ==contact== -->
        <symbol id="address" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
            viewBox="-10 -5 37 28">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
        </symbol>
        <symbol id="email" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
            viewBox="-10 -5 37 28">
            <path
                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z">
            </path>
        </symbol>
        <symbol id="phone" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
            viewBox="-10 -5 37 28">
            <path
                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
        </symbol>
        <!-- top -->
        <symbol id="top" viewBox="0 0 24 24">
            <path
                d="M5,24H19a5.006,5.006,0,0,0,5-5V5a5.006,5.006,0,0,0-5-5H5A5.006,5.006,0,0,0,0,5V19A5.006,5.006,0,0,0,5,24ZM6.293,9.465,9.879,5.879h0a3,3,0,0,1,4.243,0l3.585,3.586.024.025a1,1,0,1,1-1.438,1.389L13,7.586,13.007,18a1,1,0,0,1-2,0L11,7.587,7.707,10.879A1,1,0,1,1,6.293,9.465Z">
            </path>
        </symbol>
        <!-- nav toggle -->
        <symbol id="navToggle" viewBox="0 0 24 24">
            <rect y="11" width="24" height="2" rx="1"></rect>
            <rect y="4" width="24" height="2" rx="1"></rect>
            <rect y="18" width="24" height="2" rx="1"></rect>
        </symbol>
    </svg>

    <!-- ==HEADER== -->
    @include('content.kalatirta.layout.toolbar')
    @include('content.kalatirta.layout.navbar')

    <!-- ==HERO== -->
    {{-- <section id="hero">
        <div class="container animated fadeIn">
            <div class="hero-content section-row">
                <div class="section-title">
                    <h2>Selamat datang di KALATIRTA</h2>
                    <h3>Portal Layanan Publik Terpadu BBWS Serayu Opak</h3>
                    <a href="#layanan" class="btn-to-main">Akses Layanan</a>
                </div>
                <div class="img-fluid">
                    <img src="{{ asset('kalatirta') }}/images/kal-logo3.png" class="animated-pic" alt="">
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ==MAIN MENU== -->
    <main id="main">

        <section id="layanan" class="section-content">
            <div class="container animated fadeIn">
                <div class="section-title">
                    <span>Layanan</span>
                    <h2><strong>Layanan</strong></h2>
                </div>
                <div class="section-cap">"Informasi & Data BBWS Serayu Opak"</div>
                {{-- <div class="section-info clearfix">
                    <p>Layanan ini meliputi
                        Permohonan <strong>Rekomendasi Teknis</strong> secara online,
                        Permohonan <strong>Informasi dan Data</strong>,
                        Layanan <strong>Pustaka Online</strong> sebagai portal Perpustakaan BBWS Serayu Opak,
                        serta <strong>Survei Kepuasan</strong> atas Pelayanan Publik melalui Kalatirta.
                    </p>
                </div> --}}
                <div class="icon-box clearfix d-flex justify-content-center">
                    <div class="col icon-box">
                        <a href="http://202.157.187.148/data/duga_air">
                            <svg class="icon">
                                <use xlink:href="#air"></use>
                            </svg>
                        </a>
                        <h4>Informasi Hidrologi</h4>
                        {{-- <p>Permohonan Rekomendasi Teknis</p> --}}
                    </div>
                    <div class="col icon-box">
                        <a href="https://www.arcgis.com/apps/dashboards/69b81994477c4ae59c352d9e80b10dbc" >
                            <svg class="icon">
                                <use xlink:href="#map"></use>
                            </svg>
                        </a>
                        <h4>Peta Infrastruktur</h4>
                        {{-- <p>Permohonan Informasi dan Data</p> --}}
                    </div>
                    <div class="col icon-box">
                        <a href="{{ route('kalatirta.create') }}">
                            <svg class="icon">
                                <use xlink:href="#form"></use>
                            </svg>
                        </a>
                        <h4>Form Permohonan Data</h4>
                        {{-- <p>Publikasi Buku Koleksi BBWS Serayu Opak</p> --}}
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- ==FOOTER== -->
    @include('content.kalatirta.layout.footer')


    <!-- ==BACK TO TOP=== -->
    <a href="#" class="scroll-top">
        <svg class="icon">
            <use xlink:href="#top"></use>
        </svg>
    </a>

    <!-- ==PRELOAD== -->
    <div id="preloader"></div>

    <!-- ==SCRIPT== -->
    {{-- <script src="{{asset('/js/main.js')}}"></script> --}}
    <script src="{{ asset('kalatirta\js\main.js') }}"></script>


</body>


</html>
