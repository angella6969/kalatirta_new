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
    <header id="header">
        <div class="container section-row">
            <a href="#"><img src="{{ asset('kalatirta') }}/images/kal-logo1.png" alt=""></a>
            <div class="navbar">
                <ul>
                    <li>
                        <a href="/kalatirta-so" class="nav-link active">Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a href="#internal" class="nav-link">Informasi&nbsp;></a>
                        <ul>
                            <li><a href="#p">Daftar Informasi Publik</a></li>
                            <li><a href="#prosedur">Prosedur Layanan</a></li>
                            <li><a href="#">Pengajuan Keberatan</a></li>
                            <li><a href="#">Survei Kepuasan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#tentang" class="nav-link">Tentang</a>
                    </li>
                    <li>
                        <a href="#kontak" class="nav-link">Kontak</a>
                    </li>
                </ul>
            </div>
            <svg class="navToggle">
                <use xlink:href="#navToggle"></use>
            </svg>
        </div>
    </header>

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
                    <span>Survey</span>
                    <h2><strong>Form Survey Layanan Informasi Publik BBWS Serayu Opak</strong></h2>
                </div>
                <div class="section-info clearfix">
                    <div class="section-cap">
                        {{-- <p class="section-info">
                            Sesuai Undang-Undang Nomer 14 Tahun 2008 tentang Keterbukaan Informasi Publik
                            (Pasal 22 ayat 7): proses pelayanan informasi diselesaikan paling lambat 10 hari kerja
                            sejak diterimanya permohonan.
                        </p> --}}
                    </div>
                </div>
            </div>
        </section>

        <section id="">
            <div class="container animated fadeIn">

                <div class="section-cap1">
                    <form method="post" id="myForm" action="{{ route('kalatirta.store1') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="data" value="{{ json_encode($data) }}">
                        <div class="card">
                            <div class="card-body mb-3">
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="jenis_kelamin"> <strong>Jenis Kelamin</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="jenis_kelamin" nilai="Laki-laki" />
                                        <x-radio nama="jenis_kelamin" nilai="Perempuan" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="mewakili"> <strong>Mewakili siapakah anda?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="mewakili" nilai="Individu" />
                                        <x-radio nama="mewakili" nilai="Kelompok/Komunitas Masyarakat/ LSM" />
                                        <x-radio nama="mewakili" nilai="Badan Hukum/ Instansi" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="pekerjaan"> <strong>Apa pekerjaan anda?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="pekerjaan" nilai="Mahasiswa" />
                                        <x-radio nama="pekerjaan" nilai="Swasta" />
                                        <x-radio nama="pekerjaan" nilai="PNS" />
                                        <x-radio nama="pekerjaan" nilai="Wiraswasta " />
                                        <x-radio nama="pekerjaan" nilai="Warga sipil " />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="jenis_pelayanan"> <strong>Apakah persyaratan pelayanan sesuai
                                                dengan
                                                jenis
                                                pelayanan?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="jenis_pelayanan" nilai="Tidak sesuai" />
                                        <x-radio nama="jenis_pelayanan" nilai="Kurang sesuai" />
                                        <x-radio nama="jenis_pelayanan" nilai="Sesuai" />
                                        <x-radio nama="jenis_pelayanan" nilai="Sangat sesuai" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="mudah_dipahami"> <strong>Apakah prosedur pelayanan mudah
                                                dipahami?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="mudah_dipahami" nilai="Tidak mudah" />
                                        <x-radio nama="mudah_dipahami" nilai="Kurang mudah" />
                                        <x-radio nama="mudah_dipahami" nilai="Mudah" />
                                        <x-radio nama="mudah_dipahami" nilai="Sangat mudah" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mt-3">
                                        <label for="waktu"> <strong>Bagaimana pendapat anda tentang kecepatan waktu
                                                dalam
                                                memberikan pelayanan?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="waktu" nilai="Tidak cepat" />
                                        <x-radio nama="waktu" nilai="Kurang cepat" />
                                        <x-radio nama="waktu" nilai="cepat normal" />
                                        <x-radio nama="waktu" nilai="Sangat cepat" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="biaya"> <strong>Bagaimana pendapat anda tentang biaya/tarif
                                                dalam
                                                pelayanan?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="biaya" nilai="Sangat mahal" />
                                        <x-radio nama="biaya" nilai="Cukup mahal" />
                                        <x-radio nama="biaya" nilai="Murah" />
                                        <x-radio nama="biaya" nilai="GRATIS/ Tidak dipungut biaya" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="standar_pelayanan"> <strong>Apakah layanan yang diberikan sesuai
                                                degan
                                                standar pelayanan yang ada?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="standar_pelayanan" nilai="Tidak sesuai " />
                                        <x-radio nama="standar_pelayanan" nilai="Kurang sesuai" />
                                        <x-radio nama="standar_pelayanan" nilai="Sesuai" />
                                        <x-radio nama="standar_pelayanan" nilai="Sangat sesuai" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="kopetensi"> <strong>Apalah petugas kompeten dalam memberikan
                                                pelayanan?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="kopetensi" nilai="Tidak kompeten " />
                                        <x-radio nama="kopetensi" nilai="Kurang kompeten" />
                                        <x-radio nama="kopetensi" nilai="kompeten" />
                                        <x-radio nama="kopetensi" nilai="Sangat kompeten" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="sikap_petugas"> <strong>Bagamana sikap petugas layanan dalam
                                                memberikan
                                                pelayanan publik?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="sikap_petugas" nilai="Tidak sopan dan tidak ramah " />
                                        <x-radio nama="sikap_petugas" nilai="Kurang sopan dan kurang ramah" />
                                        <x-radio nama="sikap_petugas" nilai="Sopan dan ramah" />
                                        <x-radio nama="sikap_petugas" nilai="Sangat sopan dan sangat ramah" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="fasilitas"> <strong>Bagaimana pendapat anda terkait sarana dan
                                                prasarana
                                                pelayanan?</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="fasilitas" nilai="Buruk" />
                                        <x-radio nama="fasilitas" nilai="Cukup" />
                                        <x-radio nama="fasilitas" nilai="Baik " />
                                        <x-radio nama="fasilitas" nilai="Sangat Baik" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="pengguna_layanan"> <strong>Bagaimana pendapat Saudara tentang
                                                penanganan
                                                pengaduan pengguna layanan</strong></label>
                                    </div>
                                    <div>
                                        <x-radio nama="pengguna_layanan" nilai="Tidak ada" />
                                        <x-radio nama="pengguna_layanan" nilai="Ada tetapi tidak berfungsi " />
                                        <x-radio nama="pengguna_layanan" nilai="Berfungsi dengan baik " />
                                        <x-radio nama="pengguna_layanan" nilai="Dikelola dengan maksimal" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mt-3">
                                        <label for="pengguna_layanan"> <strong>Saran dan Masukan</strong></label>
                                        <x-ck body="kritik_saran" nilai="" />
                                    </div>
                                </div>
                                <strong></strong>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
    <script>
        // Variabel flag untuk menandakan apakah submit telah diklik
        var submitClicked = false;

        // Menangani klik tombol submit
        document.getElementById('myForm').addEventListener('submit', function() {
            submitClicked = true;
        });

        // Event sebelum unload
        window.addEventListener('beforeunload', function(event) {
            // Mematikan peringatan jika tombol submit diklik
            if (submitClicked) {
                return undefined;
            }

            // Peringatan bawaan browser
            var confirmationMessage = 'Anda yakin ingin menutup tab?';
            event.returnValue = confirmationMessage;
            return confirmationMessage;
        });
    </script>
</body>

</html>
