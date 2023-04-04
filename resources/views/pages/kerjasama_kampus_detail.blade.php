@extends('layouts.index')
@section('heading', 'Kerjasama Kampus')
@section('page')
    <a href="{{ route('kerjasama') }}" class="text-capitalize">Kerjasama</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">{{ $kerjasama->nama_kerjasama }} </span>
@endsection
@section('content')
    {{-- Informasi berita Detail  begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="berita-detail" style="justify-content: center;">
                        <h2 class="text-center">{{ $kerjasama->nama_kerjasama }}</h2>
                        <div class="divider mx-auto mb-2"></div>
                        <ul class="list-inline text-center">
                            <li class="list-inline-item text-grey"> <b>Post:</b>
                                @if ($kerjasama->user_id == 1)
                                    BAAK
                                @elseif ($kerjasama->user_id ==2)
                                    KA. Prodi
                                @else
                                    Kemahasiswaan
                                @endif
                            </li>
                            <li class="list-inline-item text-grey"><i class="fas fa-calendar-week me-2"> </i>:
                                {{ tanggal('hari', $kerjasama->created_at) }}
                            </li>
                            <li class="list-inline-item text-grey"><i class="fas fa-clock ms-2"></i>
                                {{ time_elapsed_string($kerjasama->created_at) }}</li>
                        </ul>
                        <img src="{{ Storage::url($kerjasama->gambar) }}" alt="" class="img-fluid">
                        <p class="mt-3">{!! $kerjasama->isi !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Informasi Detail  end --}}


@endsection
