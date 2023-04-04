@extends('layouts.index')
@section('heading', 'Informasi Kampus poliwangi')
@section('page')
    <span class="current">Kontak Kampus</span>
@endsection
@section('content')

    {{-- Kontak begin --}}
    <section class="contact spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__content">
                            <div class="contact__address">
                                <h5>Kontak Informasi</h5>
                                <ul>
                                    <li>
                                        <h6><i class="fa fa-map-marker"></i> Lokasi Kampus</h6>
                                        <p>Jalan Raya Jember KM 13 Banyuwangi 68461, Jawa Timur – Indonesia</p>
                                    </li>
                                    <li>
                                        <h6><i class="fa fa-phone"></i> Phone</h6>
                                        <p><span>+62 (0333) 636780</span></p>
                                    </li>
                                    <li>
                                        <h6><i class="fa fa-envelope"></i>Email Kampus</h6>
                                        <p>poliwangi@poliwangi.ac.id</p>
                                        <P>humas@poliwangi.ac.id</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__form">
                                <h5>Kirim Pesan</h5>
                                <form method="post" action="#">
                                    <input type="text" name="name" placeholder="Name">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="number" name="nohandphone" placeholder="No Handphone">
                                    <textarea placeholder="Apa yang ada ingin tanyakan"></textarea>
                                    <button type="submit" class="btn btn-primary-outline">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.0866139430245!2d114.30477261433207!3d-8.294179185716471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd156d7d86bef9b%3A0x4cb09a70b9109740!2sPoliteknik%20Negeri%20Banyuwangi!5e0!3m2!1sid!2sus!4v1661427742803!5m2!1sid!2sus" 
                           height="780" style="border:0;" allowfullscreen="" >
                        </iframe>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Kontak end --}}

@endsection
