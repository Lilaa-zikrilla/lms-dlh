<!-- navbar -->
<div class="navigation w-100">
    <nav class="navbar navbar-expand-lg navbar-warning">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> <i class="fas fa-home"></i> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  dropdown" id="profile">
                        <a class="nav-link  dropdown-toggle" href="#" id="menu_sejarah" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">PROFILE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('sambutan_direktur') }}">Sambutan Bapak Direktur</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('sejarah') }}" id="sejarah">Sejarah Poliwangi</a></li>
                            <li><a class="dropdown-item" href="{{ route('visi_misi') }}">Visi & Misi</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('sasaran_kebijakan') }}">Sasaran Dan Kebijakan
                                    Mutu</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">ORGANISASI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('pimpinan') }}">Pimpinan</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('dosen') }}">Dosen</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Bagan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Akademik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item_sub dropdown-submenu">
                                <a class="dropdown-item" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Program Studi <i
                                        class="fas fa-angle-right"></i>
                                </a>
                                <ul class="dropdown-submenu1" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('prodi_mi') }}">Teknologi Rekayasa
                                            Perangkat Lunak</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('prodi_tk') }}">Bisnis Digital</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('prodi_ka') }}">Teknologi Rekayasa
                                            Komputer</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('kurikulum') }}">Kurikulim</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('peraturan_akademi') }}">Peraturan
                                    Akademi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">MAHASISWA
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="{{ route('arsip.index') }}">Arsip</a></li>
                            <li><a class="dropdown-item" href="{{ route('beasiswa') }}">Beasiswa</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('prestasi') }}">Prestasi Mahasiswa</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">PANDUAN TA/MAGANG
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">PPM dan Magang</a></li>
                            <li>
                                <a class="dropdown-item" href="#">DAFTAR JUDUL TA 2017-2018</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">PENDAFTARAN</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('info_pendaftaran') }}">Informasi
                                    Pendaftaran</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('biaya_pendidikan') }}">Biaya
                                    Pendidikan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item" id="fasilitas">
                        <a class="nav-link" href="{{ route('fasilitas') }}">FASILITAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kontak" href="{{ route('kontak') }}">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
{{-- navbar --}}