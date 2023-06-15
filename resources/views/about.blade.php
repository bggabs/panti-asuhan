@extends('layouts.app')

@section('content')
    <div class="hero-wrap" style="background-image: url({{asset('images/panti4.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Beranda</a></span> <span>Tentang</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-about align-self-stretch" style="background-image: url({{asset('images/panti4.jpg')}}); width: 100%;"></div>
                </div>
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4">Panti Mawaddah Warrahmah</h2>
                    <p>Panti Asuhan Mawaddah Warrahmah Malang merupakan sebuah lembaga sosial yang bertujuan untuk memberikan perlindungan, pendidikan, dan perawatan kepada anak-anak yang kurang beruntung, yatim piatu, dan terlantar di wilayah Malang. Panti asuhan ini didirikan dengan semangat kasih sayang, kepedulian, dan perhatian terhadap masa depan anak-anak yang membutuhkan perhatian khusus.</p>
                    <p>Panti Asuhan Mawaddah Warrahmah Malang menyediakan lingkungan yang aman, nyaman, dan hangat bagi anak-anak yang tinggal di sana. Staf dan relawan yang terlatih dengan baik berdedikasi untuk memberikan perhatian individual kepada setiap anak, serta mendukung mereka dalam memenuhi kebutuhan dasar, seperti makanan, pakaian, tempat tinggal, dan perawatan kesehatan. Panti asuhan ini juga berusaha memberikan pendidikan yang berkualitas kepada anak-anak dengan bekerja sama dengan sekolah lokal atau mengadakan program pendidikan di dalam panti.</p>
                    <p>Selain memberikan perlindungan dan pendidikan, Panti Asuhan Mawaddah Warrahmah Malang juga berupaya membantu anak-anak mengembangkan keterampilan dan bakat mereka. Mereka mengadakan berbagai kegiatan seperti pelatihan keterampilan, olahraga, seni, dan kegiatan sosial lainnya untuk membantu anak-anak menemukan minat dan potensi terbaik mereka. Panti asuhan ini juga mengedepankan pendekatan yang menghormati kebudayaan dan agama anak-anak, sehingga mereka merasa diterima dan dihargai dalam lingkungan yang multikultural.</p>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            <span>Jumlah Anak</span>
                            <strong class="number" data-number="{{ $fosterChildCount }}">{{ $fosterChildCount }}</strong>
                            <span>Jumlah anak yang ada pada Panti Asuhan</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Donasi</h3>
                            <p>Ketika kita memberikan kebahagiaan kepada orang lain, sebenarnya kita sedang membahagiakan diri sendiri.</p>
                            @if(Auth::check())
                                <p><a href="{{ route('donation') }}" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
                            @else
                                <p><a href="{{ route('donation') }}" class="btn btn-white px-3 py-2 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Donate Sekarang</a></p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-3 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Donatur</h3>
                            <p>sebaik-baiknya manusia mereka yang bermanfaat bagi orang lain.</p>
                            <p><a href="#donatur" class="btn btn-white px-3 py-2 mt-2">Jadilah Donatur!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
