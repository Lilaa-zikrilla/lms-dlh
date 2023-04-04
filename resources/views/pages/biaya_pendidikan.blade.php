@extends('layouts.index')
@section('heading', 'Biaya Pendidikan')
@section('page')
<a href="" class="text-capitalize">Pendaftaran</a>
<span class="mx-3 fas fa-angle-right"></span>
<span class="current">Biaya Pendidikan</span>
@endsection
@section('content')

{{-- Biaya Pendidikan  begin --}}
<section class="about spad">
    <div class="container">
        <div class="card-title about__text mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section mt-4 mb-4">
                        <h4><strong>Uang Kuliah Tunggal (UKT)</strong></h4>
                        <p>UKT adalah singkatan dari Uang Kuliah Tunggal, yang merupakan
                            sebuah sistem pembayaran yang saat ini berlaku untuk seluruh Perguruan Tinggi
                            Negeri (PTN) di Indonesia . Ketentuan ini diberlakukan berdasarkan Permendikbud
                            No. 55 Tahun 2013 pasal 1 ayat 3, yakni setiap mahasiswa hanya membayar satu
                            komponen saja per semester</p>
                        <h4><strong>Manfaat UKT bagi Mahasiswa ?</strong></h4>
                        <p>UKT berfungsi memberi subsidi silang yang didasarkan pada
                            kondisi ekonomi dan sosial orang tua/wali setiap mahasiswa. Jadi sistem ini
                            mengacu kepada pendapatan orang tua mahasiswa, semakin tinggi pendapatan orang
                            tua maka semakin tinggi pula UKT yang harus dibayar, sebaliknya semakin rendah
                            penghasilan orang tua maka semakin rendah pula biaya UKT yang harus dibayarkan.
                            Diharapkan dapat memberikan dampak pemerataan untuk setiap mahasiswa dan
                            membantu mahasiswa yang berasal dari keluarga kurang mampu.</p>
                        <h4><strong>Menentukan Besaran UKT ?</strong></h4>
                        <p>UKT ditentukan berdasarkan kondisi ekonomi keluarga, Sebelum memasuki perkuliahan, calon mahasiswa akan mengisi form online untuk menentukan nilai nominal UKT. Nilai UKT ditinjau dari pendapatan orang tua/bulan, gaji &amp; tunjangan,rekening listrik, rekening PDAM, PBB luas tanah, banyak rumah, banyak mobil, banyak motor, dan sebagainya.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-informasi mt-4 mb-4">
                        <h4 class="mb-1">Sistem Pembayaran Biaya Kulia Mahasiswa/I TA. 2019/2020 </h4>
                        <span>Pembayaran dilakukan setiap awal bulan paling lambat tanggal 10 disetiap
                            bulannya.</span>
                    </div>

                    <ul class="list-group mt-2">
                        <li class="list-group-item ">
                            <table class="table table-striped table-bordered table-hover table-responsive table-responsive-sm">
                                <tbody>
                                    <tr>
                                        <td rowspan="2">
                                            <strong>No</strong>
                                        </td>
                                        <td rowspan="2">
                                            <strong> Jenjang</strong>
                                        </td>
                                        <td rowspan="2">
                                            <strong>Program Studi</strong>
                                        </td>
                                        <td colspan="8" text-align="center">
                                            <strong>UANG KULIAH
                                                TUNGGAL (PER SEMESTER)</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kelompok I
                                        </td>
                                        <td>
                                            Kelompok II
                                        </td>
                                        <td>
                                            Kelompok III
                                        </td>
                                        <td>
                                            Kelompok IV
                                        </td>
                                        <td>
                                            Kelompok V
                                        </td>
                                        <td>
                                            Kelompok VI
                                        </td>
                                        <td>
                                            Kelompok VII
                                        </td>
                                        <td>
                                            Kelompok VIII
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            D4
                                        </td>
                                        <td>
                                            Teknik Rekayasa Perangkat Lunak
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            D4
                                        </td>
                                        <td>
                                            Bisnis Digital
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            D4
                                        </td>
                                        <td>
                                            Teknologi Rekayasa Komputer
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            D4
                                        </td>
                                        <td>
                                            Teknik Rekayasa
                                            Mesin
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            D3
                                        </td>
                                        <td>
                                            Teknik
                                            Sipil
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            D4
                                        </td>
                                        <td>
                                            Agribisnis
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            D4
                                        </td>
                                        <td>
                                            Manajemen
                                            Bisnis Pariwisata
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8
                                        </td>
                                        <td>
                                            D4
                                        </td>
                                        <td>
                                            Teknologi
                                            pengolahan Hasil Ternak
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9
                                        </td>
                                        <td>
                                            D4
                                        </td>
                                        <td>
                                            Teknik
                                            Manufaktur Kapal
                                        </td>
                                        <td>
                                            500.000
                                        </td>
                                        <td>
                                            1.000.000
                                        </td>
                                        <td>
                                            2.400.000
                                        </td>
                                        <td>
                                            3.000.000
                                        </td>
                                        <td>
                                            3.500.000
                                        </td>
                                        <td>
                                            4.000.000
                                        </td>
                                        <td>
                                            4.500.000
                                        </td>
                                        <td>
                                            5.000.000
                                        </td>
                                    </tr>
                                </tbody>


                            </table>

                        </li>
                    </ul>
                    <P></p>
                    <h5><strong>Perbedaan biaya perkuliahan jalur MANDIRI dengan PMDK dan UMPN</strong></h5>
                    <p><strong>PMDK dan UMPN &nbsp;&nbsp; : </strong> membayar UKT sesuai pengisian data untuk penetuan besarannya </p>
                    <p><strong>MANDIRI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </strong> membayar UKT dengan besaran yang telah di tentukan oleh &nbsp;Perguruan Tinggi penyelenggara Jalur Mandiri dan di tambah &nbsp;pembayaran Sumbangan Pengembangan Institusi ( SPI ) </p>
                    <p><strong>Besaran Sumbangan Pengembangan Institusi (SPI)</strong></p>
                    <ul class="list-group mt-2">
                        <li class="list-group-item ">
                            <table class="table table-striped table-bordered table-hover table-responsive table-responsive-sm">

                                <tbody>
                                    <tr>
                                        <td> &nbsp; <strong>No </strong></td>
                                        <td> &nbsp;<strong> Program Studi </strong></td>
                                        <td> <strong> &nbsp; Jenjang </strong></td>
                                        <td> <strong> Tingkatan Sumbangan Pengembangan Institusi (SPI) &nbsp;</strong> </td>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td> TEKNIK REKAYASA PERANGKAT LUNAK </td>
                                        <td> D IV </td>
                                        <td> Rp. 5.000.000 </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td> BISNIS DIGITAL </td>
                                        <td> D IV </td>
                                        <td> Rp. 5.000.000 </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td> TEKNOLOGI REKAYASA KOMPUTER </td>
                                        <td> D IV </td>
                                        <td> Rp. 5.000.000 </td>
                                    </tr>
                                    <tr>
                                        <td> 4 </td>
                                        <td> TEKNIK SIPIL <strong>&nbsp;</strong> </td>
                                        <td> D III </td>
                                        <td> R.p. 4.000.000 </td>
                                    </tr>
                                    <tr>
                                        <td> 5 </td>
                                        <td> TEKNIK REKAYASA MESIN </td>
                                        <td> D V </td>
                                        <td> R.p. 4.000.000 </td>
                                    </tr>
                                    <tr>
                                        <td> 6 </td>
                                        <td> MANAJEMEN BISNIS PARIWISATA </td>
                                        <td> D IV </td>
                                        <td> Rp. 5.000.000 </td>
                                    </tr>
                                    <tr>
                                        <td> 7 </td>
                                        <td> AGRIBISNIS </td>
                                        <td> D IV </td>
                                        <td> R.p. 5.000.000 </td>
                                    </tr>
                                    <tr>
                                        <td> 8 </td>
                                        <td> TEKNOLOGI PENGOLAHAN HASIL TERNAK </td>
                                        <td> D IV </td>
                                        <td> R.p. 4.000.000 </td>
                                    </tr>
                                    <tr>
                                        <td> 9 </td>
                                        <td> MANUFAKTUR KAPAL </td>
                                        <td> D IV </td>
                                        <td> Rp. 4.000.000 </td>
                                    </tr>
                                </tbody>


                            </table>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section>

{{-- Biaya Pendidikan  end --}}

@endsection