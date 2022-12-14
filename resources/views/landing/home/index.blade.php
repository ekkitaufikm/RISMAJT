@extends('landing/main')

@section('css-library')
    {{-- Tempat Ngoding Meletakkan css library --}}
@endsection

@section('css-custom')
    {{-- Tempat Ngoding Meletakkan css custom --}}
@endsection

@section('content')
    <!-- Carousel Start -->
    <div id="index"class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('assets/landing/img/MAJT4.jpg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Selamat Datang di</h1>
                        <p>
                            Remaja Islam Masjid Agung Jawa Tengah
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('assets/landing/img/jalan2.jpeg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <a href="https://buletinsunankalijaga.blogspot.com/2022/10/pers-release-study-banding-rismajt-ke.html">
                        <h1>Pers Release Study Banding Rismajt ke ARMI Istiqlal Jakarta</h1>
                        <p>
                            Jakarta, Remaja Islam Masjid Agung Jawa Tengah (RISMAJT) berkunjung ke Masjid Istiqlal, Sabtu (1/10/2022). Kunjungan tersebut bertujuan adalah untuk melakukan study banding  dan silaturahim bersama Asosiasi Remaja Masjid Istiqlal (ARMI).........
                        </p>
                    </a>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('assets/landing/img/haflah.jpeg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Haflah Maulidurrosul Rismajt</h1>
                        <a href="https://www.instagram.com/raihanfaiq/">
                            <p>
                                {{-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat delectus doloremque porro cupiditate consectetur quasi consequuntur impedit iste quidem! Consequatur quibusdam ratione dolore tenetur iste voluptate rem! Perferendis, aut voluptates? --}}
                            </p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Carousel End -->

    {{-- infaq --}}

    <center><a href="#gambar-1"><button class="button-88" role="button">anda ingin berinfaq di RISMAJT? klik disini</button></a></center>

    <div class="overlay" id="gambar-1">
        <a href="#" class="close">
            <svg style="width:47px;height:47px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" />
            </svg>
        </a>
        <img class="infaq" src="{{ asset('assets/landing/img/qris.jpeg') }}" alt="Nelayan Kode">
    </div>

    {{-- infaq end --}}

    <!-- About Start -->
    <div id="about"class="about">
        <div class="container">
            <div class="row align-items-center">
                {{-- <video src="landing/vid/BEAUTIFUL MOSQUE DESIGN _ LUMION 10 ANIMATION _ ARCHITECTURE ANIMATION.webm"></video> --}}
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll" data-image-src="{{ asset('assets/landing/img/risma.jpg') }}"></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <p>RISMAJT</p>
                        <h2>Remaja Islam Masjid Agung Jawa Tengah</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Mission</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Remaja Islam Masjid merupakan bagian integral dari potensi generasi muda Indonesia yang bidang kerja dititikberatkan pada pembinaan dan pengembangan remaja di Masjid.
                                Remaja Islam Masjid Agung Jawa Tengah sebagai organisasi remaja masjid yang apabila dilihat saat mulai berdirinya dapat dikatakan berusia muda. Namun demikian, Remaja Islam Masjid Agung Jawa Tengah dengan segala potensi yang dimilikinya harus dapat menunjukkan sebagai organisasi yang matang baik dari cara berfikir maupun melalui tindakan nyata di lapangan. 
                                Musyawarah Konsolidasi yang sekarang ini kita laksanakan diharapkan dapat dijadikan sebagai salah satu momentum untuk menunjukkan jatidiri Remaja Islam Masjid Agung Jawa Tengah yaitu melalui penguatan organisasi. Penguatan organisasi dapat dilakukan dengan menyediakan mekanisme organisasi yang terstruktur dan terkoordinasi sehingga cita-cita organisasi dapat tercapai.  
                                Dalam rangka itu RISMA JT sudah seharusnya mempunyai rumusan-rumusan terencana dan berkesinambungan dalam bidang keorganisasian yang berorientasi pada penguatan dan kemaslahatan organisasi di masa yang akan datang. 
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                <strong>VISI : </strong>
                                Terwujudnya konsolidasi organisasi Remaja Islam Masjid Agung Jawa Tengah yang mencakup pemantapan struktur dan keorganisasian sehingga pembinaan dan pengembangan potensi remaja masjid dapat dilaksanakan secara optimal.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                <strong>Misi : </strong>
                                {{-- masi bingung --}}
                            </div>
                            <br><br>
                            <a href="{{ url('About') }}"><button class="button-88" role="button">Read More</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- About End -->

    {{-- video profile --}}
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 mt-5">
            Haflah Maulidul Rosul RISMAJT
            </h1>
            {{-- <p class="text-center mt-5">
            <a href="#headerPopup" id="headerVideoLink" target="_blank" class="btn btn-outline-danger popup-modal">See Why Solodev WXP</a>
            </p> --}}
            <div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
            {{-- <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/Za5-fvwbPJI?rel=0&amp;autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
        </div>
        </div>
        </div>
    </div>
    {{-- end of video profile --}}

    {{-- sambutan --}}
    <br><br><br><br>
    <div class="section-header text-center">
        <h2>Sambutan Ketua Umum RISMAJT</h2>
    </div>
    <div class="containerlain">
        <div class="avatar-flip">
            <img src="{{ asset('assets/landing/img/mas_adib-removebg-preview.png') }}" height="150" width="150">         
            <img src="{{ asset('assets/landing/img/mas_adib-removebg-preview.png') }}" height="150" width="150">
        </div>
        <h2>Adib Chusnul Maarif,S.T.</h2>
        <h4>Ketua Umum RISMAJT</h4>
        <p>website nya segera jadi ya mas faiq</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia libero, placeat iste reiciendis sequi voluptates veritatis tempora magni autem recusandae illo minus, eaque quidem praesentium deserunt, adipisci consectetur non nostrum.</p>
    </div>
    {{--  end of sambutan--}}
    <!-- Testimonial Start -->
    <div id="kataguru"class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <h2>Kata Guru Tentang RISMAJT?</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('assets/landing/img/IMG_0163.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Habib Abu Bakar </h3>
                            <p>Habaib</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Pria yang pemalu dan sederhana adalah karakter yang menakjubkan, namun wanita yang pemalu dan sederhana itu lebih menakjubkan lagi.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('assets/landing/img/1106347474.jpeg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Habib Luthfi</h3>
                            <p>Habaib</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Aku telah terpilih menjadi pemimpin kalian, meskipun aku bukan orang yang terbaik di antara kalian. Karena itu, bantulah aku seandainya aku berada di jalan yang benar, dan bimbinglah aku seandainya aku berbuat salah
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('assets/landing/img/RM7GuPsZ_400x400.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Habib Muhammad</h3>
                            <p>Habaib</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Pria yang pemalu dan sederhana adalah karakter yang menakjubkan, namun wanita yang pemalu dan sederhana itu lebih menakjubkan lagi
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('assets/landing/img/IMG_0188.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Habib Umar Muthohar</h3>
                            <p>Habaib</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Pria yang pemalu dan sederhana adalah karakter yang menakjubkan, namun wanita yang pemalu dan sederhana itu lebih menakjubkan lagi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- LIVE DAN KAJIAN -->
    <div id="kajian"class="causes">
        <div class="container">
            <div class="section-header text-center">
                <p></p>
                <h2>Kajian Online</h2>
            </div>
            <div class="owl-carousel causes-carousel">
                <div class="causes-item">
                    <div class="causes-img">
                        <iframe src="https://www.youtube.com/embed/M4Ieh6aVHtU" title="Sehari-Hari Bersama Nabi bersama Habib Musthofa Al Muhdhor, Lc. | NGOPI #107" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="causes-text">
                        <h3>Ngopi</h3>
                        <p>ngaji online perkara islam ~ dimanakah letak nikmat tuhan mu yang begitu besar? bersama alhabib muhammad muthohar</p>
                    </div>
                    <div class="causes-btn">
                        <a href="https://www.youtube.com/c/RISMAJT"class="btn btn-custom">Subscribe</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <iframe src="https://www.youtube.com/embed/yTP7ZZlfbNY" title="Kajian Remaja Islam - Habib Musthofa Al Muhdor dan Habib Ali Bagir Assegaf" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="causes-text">
                        <h3>karim</h3>
                        <p>Kajian Remaja Islam - Habib Musthofa Al Muhdor dan Habib Ali Bagir Assegaf</p>
                    </div>
                    <div class="causes-btn">
                        <a href="https://www.youtube.com/c/RISMAJT"class="btn btn-custom">Subscribe</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <iframe src="https://www.youtube.com/embed/jmqEfTKQI9M" title="KAJIAN AHAD WAGE (KAW) 'Memperbarui Takdir Dengan Ikhtiar' bersama Habib Ja'far Al Muswafa"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="causes-text">
                        <h3>KAW</h3>
                        <p>KAJIAN AHAD WAGE (KAW) "Memperbarui Takdir Dengan Ikhtiar" bersama Habib Ja'far Al Muswafa</p>
                    </div>
                    <div class="causes-btn">
                        <a href="https://www.youtube.com/c/RISMAJT"class="btn btn-custom">Subscribe</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <iframe src="https://www.youtube.com/embed/M1Ms5HNHeaI" title="HAFLAH MAULIDURRASUL RISMAJT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="causes-text">
                        <h3>Haflah Maulidurrosul</h3>
                        <p>Bersama Habib Ali Zainal Abidin dan Habib Umar Muthohar dimeriahkan oleh hadrah Az-zahir Pekalongan</p>
                    </div>
                    <div class="causes-btn">
                        <a class="btn btn-custom">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->

    <!-- Event Start -->
    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <h2>Kegiatan yang Akan Datang</h2>
                <p>Remaja Islam Masjid Agung Jawa Tengah</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="{{ asset('assets/landing/img/karim59.jpeg') }}" alt="Image">
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>28 September 2022</p>
                                <p><i class="fa fa-user"></i>Ruang Sholat Utama</p>
                            </div>
                            <div class="event-text">
                                <h3>Kajian Remaja Islam Masjid Agung Jawa Tengah dan Kajian Remaja Islam Mingguan ( KARIM )</h3>
                                <p>
                                    buruan daftarkan dirimu sekarang untuk zarkasi bersama RISMAJT , kuota terbatas!
                                </p>
                                <a class="btn btn-custom" href="bit.ly/ZarkasyiRISMAJT">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="{{ asset('assets/landing/img/ngopi106.jpeg') }}" alt="Image">
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>28 September 2022</p>
                                <p><i class="fa fa-user"></i>Ruang Sholat Utama</p>
                            </div>
                            <div class="event-text">
                                <h3>NGAJI ONLINE PERKARA ISLAM (105)</h3>
                                <p>
                                    Mari kita simak NGOPI RISMA JT Edisi ke 105,Jangan sampai ketinggalan dan stay tune di channel kami
                                </p>
                                <a class="btn btn-custom" href="https://www.youtube.com/watch?v=eH4EK5y7LNU">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="{{ asset('assets/landing/img/kegiatan-yang-akan-datang/risma_mlaku2.jpeg') }}" alt="Image">
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>30 September 2022</p>
                                <p><i class="fa fa-user"></i>tikum:MAJT</p>
                            </div>
                            <div class="event-text">
                                <h3>Rismajt Goes To Jakarta</h3>
                                <p>
                                Daftarkan diri anda segera!
                                </p>
                                <a class="btn btn-custom" href="#" onclick="myFunction()">Join Now</a>  
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="{{ asset('assets/landing/img/ngopi106.jpeg') }}" alt="Image">
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>28 September 2022</p>
                                <p><i class="fa fa-user"></i>Ruang Sholat Utama</p>
                            </div>
                            <div class="event-text">
                                <h3>NGAJI ONLINE PERKARA ISLAM (105)</h3>
                                <p>
                                    Mari kita simak NGOPI RISMA JT Edisi ke 105,Jangan sampai ketinggalan dan stay tune di channel kami
                                </p>
                                <a class="btn btn-custom" href="https://www.youtube.com/watch?v=eH4EK5y7LNU">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Event End -->
    <!-- Blog Start -->
    <div id="news" class="blog">
    <div class="container">
    <div class="section-header text-center">
        <h2>Bulletin Sunan Kalijaga</h2>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="{{ asset('assets/landing/img/armi.jpeg') }}" alt="Image">
                </div>
                <div class="blog-text">
                    <h3><a href="https://buletinsunankalijaga.blogspot.com/2022/10/pers-release-study-banding-rismajt-ke.html">Pers Release Study Banding Rismajt ke ARMI Istiqlal Jakarta
                    </a></h3>
                    <p>
                        Jakarta, Remaja Islam Masjid Agung Jawa Tengah (RISMAJT) berkunjung ke Masjid Istiqlal, Sabtu (1/10/2022). Kunjungan tersebut bertujuan adalah untuk melakukan study banding  dan silaturahim bersama Asosiasi Remaja Masjid Istiqlal (ARMI)......
                    </p>
                </div>
                <div class="blog-meta">
                    <p><i class="fa fa-user"></i><a href="https://www.instagram.com/persrismajt/?hl=id">Pers </a></p>
                    <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="{{ asset('assets/landing/img/Sunan1.jpg') }}" alt="Image">
                </div>
                <div class="blog-text">
                    <h3><a href="https://buletinsunankalijaga.blogspot.com/2019/10/masih-ngotot-saja-kalau-wali-itu-tidak.html">Masih Ngotot Saja Kalau Wali Itu Tidak Ada?</a></h3>
                    <p>
                        Assalamualaikum Warahmatullahi Wabarakatuh Bukan menjadi hal yang mengagetkan jik???
                    </p>
                </div>
                <div class="blog-meta">
                    <p><i class="fa fa-user"></i><a href="https://www.instagram.com/persrismajt/?hl=id">Pers</a></p>
                    <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="{{ asset('assets/landing/img/Muhammad.jpg') }}" alt="Image">
                </div>
                <div class="blog-text">
                    <h3><a href="https://buletinsunankalijaga.blogspot.com/2019/03/kesempurnaan-pribadi-nabi-muhammad-saw.html">Kesempurnaan Pribadi Nabi Muhammad Saw.:Tentang awal Masa Kenabian</a></h3>
                    <p>
                        Tentang Awal Masa Kenabian Nama Nabi Muhammad sudah dipuji sejak zaman Nabi Adam A???
                    </p>
                </div>
                <div class="blog-meta">
                    <p><i class="fa fa-user"></i><a href="https://www.instagram.com/persrismajt/?hl=id">Pers</a></p>
                    <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="{{ asset('assets/landing/img/Alquran.jpg') }}" alt="Image">
                </div>
                <div class="blog-text">
                    <h3><a href="https://buletinsunankalijaga.blogspot.com/2019/03/perbedaan-hadits-nabi-khabar-atsar-dan.html">Perbedaan Hadits Nabi, Khadar, Atsar dan Hadits Qudsi</a></h3>
                    <p>
                        Perhatian Terhadap Hadits Di dalam hidupnya, manusia memerlukan segala macam ilmu???
                    </p>
                </div>
                <div class="blog-meta">
                    <p><i class="fa fa-user"></i><a href="https://www.instagram.com/persrismajt/?hl=id/">Pers</a></p>
                    <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Blog End -->   
    <!-- Contact Start -->
    <div id="kontak" class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Kirim </p>
                <h2>Masukan Untuk Kami</h2>
            </div>
            <div class="contact-img">
                <img src="{{ asset('assets/landing/img/risma.jpg') }}" alt="Image">
            </div>

            <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                        <br>
                        <div>
                            <a class="btn btn-custom" href="https://wa.wizard.id/6419f2">Hubungi Via Whatsapp</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- dokumentasi start -->

    <!-- dokumentasi end -->

    <!-- Team Start -->
    {{-- gambar struktur pop up --}}
    <div class="overlay" id="gambar-struktur">
        <a href="#" class="close">
            <svg style="width:47px;height:47px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" />
            </svg>
        </a>
        <img class="infaq" src="{{ asset('assets/landing/img/struktur.jpg') }}" alt="Nelayan Kode">
    </div>

    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2>Lembaga dan Departemen</h2>
                <p>RISMAJT</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('pengurus_harian') }}">
                                <h2>Pengurus Harian</h2>
                            <p>Ketua Umum : Adib CM</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('humas') }}">
                                <h2>Departemen Humas</h2>
                            <p>Penanggung Jawab : Ahmad Ngusman</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('kadiklat') }}">
                                <h2>Departemen Kaderisasi, Pendidikan dan Pelatihan</h2>
                            <p>Ketua Bagian : Muhammad Rohimun Hidayah</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('bakmin') }}">
                                <h2>Departemen Bakat Minat</h2>
                            <p>Ketua Bagian : Fachriza Dimas A</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- lembaga --}}
                
                
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('proad') }}">
                                <h2>Departemen Properti dan Administrasi</h2>
                            <p>Ketua Bagian : Nurul Vera Septiana,SH</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('pers') }}">
                                <h2>lembaga pers Jurnalistik dan Desain Sinematografi</h2>
                            <p>Ketua Bagian : Vera Fitri Apriliani , A.Md</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('dakwah') }}">
                                <h2>Lembaga Dakwah</h2>
                            <p>Penanggung Jawab : Muh . Syufiy Al Alimi</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('ekonomi') }}">
                                <h2>Lembaga Ekonomi</h2>
                            <p>ketua Bagian :  Wieske Utami , S.Pd</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <a href="{{ url('sosial') }}">
                                <h2>Lembaga Sosial</h2>
                            <p>Penanggung Jawab : Zubaidah</p>
                            </a>
                            <div class="team-social">
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/raihanfaiq/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="{{ asset('assets/landing/img/MAJT4.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-home"></i>
                        <div class="facts-text"> 
                            <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-charity"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">100</h3>
                            <p>Media Partner</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-kindness"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                            <p>Our Goal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-donation"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                            <p>Raised</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Start download section -->
    <section class="download-section section-gap-colab" id="download-section">
        <div class="container">
            <div class="row download-wrap justify-items-between align-items-center">
                <div class="col-lg-12">
                    <h1 class="text-center" data-aos="fade-up">Media Partner</h1>
            </div>
            <div class="col-lg-6">
                <a href="https://majt.tv/"><img class="img-fluid" src="{{ url('') }}/assets/landing/img/MAJT_TV (1).png" alt="" data-aos="fade-up" data-aos-delay="300"></a>
            </div>
            <div class="col-lg-6 d-flex flex-wrap align-items-center">
                <a href="https://majt.or.id/"><img class="img-fluid" height="50px" src="{{ url('') }}/assets/landing/img/MAJT.png" alt="" data-aos="fade-up" data-aos-delay="600"></a>
            </div>
        </div>
        </div>
    </section>
    <!-- End download section -->
@endsection

@section('js-library')
{{-- Tempat Ngoding Meletakkan js library --}}
@endsection

@section('js-custom')
{{-- Tempat Ngoding Meletakkan js custom --}}
@endsection