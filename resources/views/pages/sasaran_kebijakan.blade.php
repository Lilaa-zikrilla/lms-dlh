@extends('layouts.index')
@section('heading', 'Sasaran Dan Kebijakan Mutu')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Sasaran Dan Kebijakan</span>
@endsection

@section('content')

    <!--Visi Misi Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-title about__text mb-5">
                        <div class="section-title pb-4">
                            <h4 class="text-center mb-3">SASARAN PENCAPAIAN</h4>
                            <ol>
                                <li> Program Riset Terapan dan Pengabdian melalui Pendanaan PNBP.</li>
                                <li> Program Keilmiahaan Kreativitas Mahasiswa interval.</li>
                                <li> Program Magang BUMN Bersertifikasi bagi Mahasiswa.</li>
                                <li> Program Pendampingan Kewirausahaan kampus melalui UPT Kewirausahaan dan Inkubator Bisnis Teknologi.</li>
                            </ol>
                        </div>
                        <div class="section-title">
                            <h4 class="text-center mb-4">STRATEGI PENCAPAIAN</h4>

                            <ol>
                                <li>Meningkatkan kualitas pendidikan dan pengajaran.</li>
                                <li>Meningkatkan kaalitas dan publikasi</li>
                                <li>Meningkatkan kegiatan pengabdian kepada masyarkat</li>
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
