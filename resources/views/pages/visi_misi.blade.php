@extends('layouts.index')
@section('heading', 'Visi, Misi ')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Visi Misi</span>
@endsection
@section('content')

    <!--Visi Misi Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card-title about__text mb-4">
                        <div class="section-title pb-4">
                            <h4 class="text-center">VISI</h4>
                            <p>Menjadi Lembaga Pendidikan Tinggi vokasional yang bermutu, berkemampuan ilmu pengetahuan dan teknologi, inovatif, dan berdaya saing.</p>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">MISI</h4>

                            <ol>
                                <li> Menyelenggarakan pendidikan yang bermutu sesuai standar nasional pendidikan tinggi untuk menghasilkan lulusan yang kompeten dan profesional.</li>
                                <li> Melaksanakan penelitian terapan dan pengabdian kepada masyarakat dalam rangka meningkatkan kualitas Sivitas Akademika sesuai dengan permasalahan industri dan masyarakat.</li>
                                <li> Meningkatkan akses, relevansi, kemampuan ilmu pengetahuan dan teknologi dan invoasi untuk sumber daya manusia yang berkualitas.</li>
                                <!-- <li> empat</li>
                                <li> lima</li> -->
                            </ol>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">TUJUAN</h4>
                            <ol>
                                <li> Mencerdaskan kehidupan masyarakat sekitar melalui kegiatan pendidikan dan menghasilkan lulusan berkualitas dan berdaya saing.</li>
                                <li> Melaksanakan penelitian terapan dalam rangka meningkatkan kualitas Sivitas Akademika sesuai kebutuhan industri dan masyarakat.</li>
                                <li> Melaksanakan kegiatan pengabdian kepada masyarakat dalam bidang ilmu pengetahuan dan teknologi.</li></li>
                                <li> Membangun jiwa kewirausahaan di kalangan Sivitas Akademika yang dapat menumbuhkembangkan sektor industri kecil, menengah, dan atas.</li>
                                <li> Memperluas kesempatan belajar bagi masyarakat berazaskan pemerataan dan keadilan.</li>
                                <li> Mewujudkan keberlanjutan institusi dengan mengembangkan program-program kemitraan dengan masyarakat, pemerintah dan pemangku kepentingan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Visi Misi End -->
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>

@endsection
