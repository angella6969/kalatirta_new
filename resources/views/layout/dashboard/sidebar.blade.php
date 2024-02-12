<aside class="left-sidebar">
    <style>
        .submenu {
            display: none;
        }

        /* Saat mouse di atas elemen <li>, tampilkan submenu */
        .dropdown li:hover .submenu {
            display: block;
        }

        /* CSS untuk mengatur tampilan dropdown */
        .sidebar-item ul {
            display: none;
            /* Sembunyikan submenu awalnya */
        }

        .sidebar-item:hover ul {
            display: block;
            /* Tampilkan submenu saat item utama dihover */
        }
    </style>
    <div>

        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="#" class="text-nowrap logo-img">
                <img src="{{ asset('src\assets\images\bbwsologo.png') }} " width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                {{-- ================================ Admin PPID ================================ --}}
                @can('Admin')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Profil</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/foto-beranda*') ? 'active' : '' }}"
                            href="/dashboard/foto-beranda" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Foto Beranda</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/profil/sejarah*') ? 'active' : '' }}"
                            href="{{ route('sejarah.index') }}" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Sejarah</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Pelayanan</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/kalatirta-so*') ? 'active' : '' }}"
                            href="/dashboard/kalatirta-so" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Permintaan Data</span>
                        </a>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/kalatirta/keberatan*') ? 'active' : '' }}"
                            href="/dashboard/kalatirta/keberatan" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Keberatan Data</span>
                        </a>
                    </li>
                    {{-- <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/kalatirta-so/pengajuan-keberatan*') ? 'active' : '' }}"
                        href="/dashboard/kalatirta-so/pengajuan-keberatan" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Pengajuan Keberatan</span>
                    </a>
                </li> --}}

                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Menu</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/beritas*') ? 'active' : '' }}"
                            href="/dashboard/beritas/" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Berita</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/pengumuman*') ? 'active' : '' }}"
                            href="/dashboard/pengumuman" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Pengumuman</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Daftar Informasi Publik</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/daftar-informasi-publik*') ? 'active' : '' }}"
                            href="/dashboard/daftar-informasi-publik" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-cards"></i> --}}
                            </span>
                            <span class="hide-menu">Informasi Publik</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/perencanaan/rencana-strategis*') ? 'active' : '' }}"
                            href="/dashboard/perencanaan/rencana-strategis" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-cards"></i> --}}
                            </span>
                            <span class="hide-menu">Rencana Strategis</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/perencanaan/pola-ws-dan-rpsda*') ? 'active' : '' }}"
                            href="/dashboard/perencanaan/pola-ws-dan-rpsda" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-cards"></i> --}}
                            </span>
                            <span class="hide-menu">Pola WS dan RPSDA</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/kinerja/lakip*') ? 'active' : '' }}"
                            href="/dashboard/kinerja/lakip" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-cards"></i> --}}
                            </span>
                            <span class="hide-menu">LAKIP</span>
                        </a>
                    </li>
                @endcan

                {{-- ================================ End Admin PPID ================================ --}}


                {{-- ================================ All Admin ================================ --}}

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Media </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/media/media-informasi*') ? 'active' : '' }}"
                        href="/dashboard/media/media-informasi" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-cards"></i> --}}
                        </span>
                        <span class="hide-menu">Media Informasi</span>
                    </a>
                </li>

                {{-- ================================ End All Admin ================================ --}}



                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Galeri</span>
                </li>

                @can('AdminSisda')
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/galeri/video*') ? 'active' : '' }}"
                            href="/dashboard/galeri/video" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Video</span>
                        </a>
                    </li>
                @endcan

                @can('Admin')
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/galeri/foto*') ? 'active' : '' }}"
                            href="/dashboard/galeri/foto" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Foto</span>
                        </a>
                    </li>
                @endcan


                {{-- ================================ Admin SISDA ================================ --}}

                @can('AdminSisda')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Situs</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/situs-terkait*') ? 'active' : '' }}"
                            href="/dashboard/situs-terkait" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-article"></i> --}}
                            </span>
                            <span class="hide-menu">Situs Terkait</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        {{-- <i class="ti ti-dots nav-small-cap-icon fs-4"></i> --}}
                        <span class="hide-menu">Infrastruktur</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/infrastruktur/bendungans*') ? 'active' : '' }}"
                            href="/dashboard/infrastruktur/bendungans" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-cards"></i> --}}
                            </span>
                            <span class="hide-menu">Bendungan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/infrastruktur/bendungs*') ? 'active' : '' }}"
                            href="/dashboard/infrastruktur/bendungs" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-file-description"></i> --}}
                            </span>
                            <span class="hide-menu">Bendung</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request::is('dashboard/infrastruktur/embungs*') ? 'active' : '' }}"
                            href="/dashboard/infrastruktur/embungs" aria-expanded="false">
                            <span>
                                {{-- <i class="ti ti-typography"></i> --}}
                            </span>
                            <span class="hide-menu">Embung</span>
                        </a>
                    </li>
                @endcan
                {{-- ================================ End Admin SISDA ================================ --}}

            </ul>
        </nav>
    </div>


</aside>
