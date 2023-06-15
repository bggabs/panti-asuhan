@extends('layouts.app')

@section('content')
    <div class="hero-wrap" style="background-image: url({{asset('images/panti9.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Beranda</a></span> <span>Kontak</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kontak Kami</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Informasi Anda</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Alamat:</span> Jl. Warinoi III, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65123</p>
                </div>
                <div class="col-md-3">
                    <p><span>Telepon:</span> <a href="tel://1234567920">+628523332442</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">Mwwadah@gmail.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">wadah.warohmah.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                @if (\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            @php
                                $errors = \Illuminate\Support\Facades\Session::get('success');
                                if (!is_array($errors)) {
                                $errors = [$errors];
                                }
                            @endphp
                            @foreach ($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-md-6 pr-md-5">
                    <h4 class="mb-4">Apakah anda memiliki pertanyaan?</h4>
                    <form action="{{route('dashboard.contact.index')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{Str::random(10)}}">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name Anda" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Anda" name="email">
                        </div>
                        <div class="form-group">
                            <textarea id="" cols="30" rows="7" class="form-control" placeholder="Tulis pesan anda!" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>

{{--                <div class="col-md-6" id="map"></div>--}}
                <div class="col-md-6">
{{--                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2792511651355!2d112.64903559999999!3d-7.970065399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62848a275c02b%3A0x568fe631a11cb170!2sPanti%20Asuhan%20Mawaddah%20Warohmah!5e0!3m2!1sid!2sid!4v1686542827963!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                    <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2792511651355!2d112.6dw4903559999999!3d-7.970065399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62848a275c02b%3A0x568fe631a11cb170!2sPanti%20Asuhan%20Mawaddah%20Warohmah!5e0!3m2!1sid!2sid!4v1686542827963!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>

@endsection
