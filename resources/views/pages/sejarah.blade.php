@extends('layouts.index')
@section('heading', 'Sejarah Institusi')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Sejarah</span>
@endsection
@section('content')

    <div class="site-title spad">
        <div class="container" data-aos="fade_up">
            <div class="row justify-content-center text-start">
                <div class="col-lg-12">
                    <div class="card-title">
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 mb-2 position-relative">
                                <div class="success-video set-bg" data-background="assets/images/about-video1.png">
                                    <a class="play-btn venobox" href="https://youtu.be/zi1jaQqsrZ4" data-vbtype="video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="about__text">
                                    <div class="section-title">
                                        <h2>Informasi Singkat</h2>
                                    </div>
                                    <p>Jurusan Teknik Informatika merupakan jurusan yang berhubungan dengan sistem informasi, ilmu komputer, ilmu informasi, teknik komputer dan aplikasi informasi dalam sistem informasi manajemen. Termasuk di dalamnya kemampuan dalam menganalisis, menilai, memahami, menerapkan dan menciptakan sebuah program perangkat lunak atau software untuk mengolahnya dengan komputer.</p>
                                    <ul>
                                        <li><i class="fa fa-check-circle"></i> Teknologi Rekayasa Perangkat Lunak</li>
                                        <li><i class="fa fa-check-circle"></i> Bisnis Digital</li>
                                        <li><i class="fa fa-check-circle"></i> Teknologi Rekayasa Komputer</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary-outline">Contact us</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-informasi mt-5 mb-4 " data-aos="fade-up">
                            <h3 class="text-center text-uppercase">Sejarah Kampus
                            </h3>

                            <p>Sejarah Politeknik Negeri Banyuwangi</p>
                            <p>Persiapan Pendirian POLITEKNIK Pemda Banyuwangi diawali dari keinginan Pemerintah Kabupaten Banyuwangi untuk mendirikan Perguruan Tinggi Negeri di Banyuwangi. Rencana tersebut ditindaklanjuti dengan surat tugas Kepala Dinas Pendidikan Kabupaten Banyuwangi No. 800/392/429.102/2003 yang diketuai oleh Drs. H. Sabari, MM untuk melakukan kajian-kajian terkait dengan rencana tersebut sampai akhir tahun 2004.</p>
                            <p>Hasil kajian tersebut akhirnya ditindaklanjuti dengan penyusunan tim perintis Politeknik oleh Bupati Banyuwangi melalui Surat Keputusan No. 188/223/Kep/429.012/2006 tentang Tim perintis dan Surat Keputusan No. 188/224/Kep/429.012/2006 tentang Tim Teknis Pendirian Politeknik pemerintah Kabupaten Banyuwangi. Namun demikian rencana ini akhirnya terhenti karena adanya himbauan dari Ditjen Dikti 
                                bahwa perguruan tinggi swasta tidak diperkenankan untuk membuka program baru dan tidak diperkenankan pendirian Perguruan Tinggi baru.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>
@endsection
