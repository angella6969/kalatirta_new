<header id="header">
    <div class="container section-row">
        <a class="hilang" href="#"><img src="images/kal-logo1.png" alt=""></a>
        <div class="navbar">
            <ul>
                <li>
                    <a href="{{ route('kalatirta') }}" class="nav-link active">Beranda</a>
                </li>
                <li class="dropdown">
                    <a href="#internal" class="nav-link">Informasi&nbsp;></a>
                    <ul>
                        {{-- <li><a href="{{ route('info.publik') }}">Daftar Informasi Publik</a></li>
                        <li><a href="#prosedur">Prosedur Layanan</a></li>
                        <li><a href="{{ route('kalatirta.formKeberatan') }}">Pengajuan Keberatan</a></li>
                        <li><a href="{{ route('kalatirta.status') }}">Status Permohonan Informasi & Data</a></li> --}}
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
