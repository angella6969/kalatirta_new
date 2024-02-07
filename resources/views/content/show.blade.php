<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KALATIRTA - Layanan Terpadu BBWS SO</title>
    <link rel="stylesheet" href="{{ asset('kalatirta\css\style.css') }}">
    @include('content.kalatirta.layout.link')
    <link rel="shortcut icon" type="image/png" href="{{ asset('kalatirta\images\Kal-logo2.png') }}" />
</head>

<body>
    <!-- ==ICON== -->
    <!-- ==main== -->
    <svg style="display:none;">
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
    <section id="topbar">
        <div class="container section-info time">
            <span id="time"></span>
        </div>
        <div class="container section-info social-links">
            <svg class="icon">
                <use xlink:href="#facebook"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#instagram"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#twitterx"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#youtube"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#tiktok"></use>
            </svg>
        </div>
    </section>
    @include('content.kalatirta.layout.navbar')


    <!-- ==MAIN MENU== -->
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="#">Beranda</a></li>
                    <li>Layanan</li>
                </ol>
                <h2>Layanan Informasi dan Data</h2>
            </div>
        </section>
        <section id="formdata" class="section-content section-bg">
            <div class="container animated fadeIn">
                <div class="section-title">
                    <span>Permintaan</span>
                    <h2><strong>Daftar Tunggu Permohonan Informasi & Data </strong></h2>
                </div>
                <div class="section-info clearfix">
                    <div class="section-cap">

                    </div>
                </div>
            </div>
        </section>

        <section id="">
            <div class="container animated fadeIn">

                <div class="section-cap1">
                    <div class="table-responsive-sm">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">No Registrasi </th>
                                    <th scope="col">Status Permintaan Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $dat)
                                    <tr style="text-align: center;">
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{ $dat->nama }}</td>
                                        <td> {{ $dat->nomor_registrasi }}</td>
                                        <td> {{ $dat->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    <script src="{{ asset('kalatirta\js\main.js') }}"></script>
</body>

</html>
