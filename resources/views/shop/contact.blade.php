@extends('master')
@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Linking -->
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>

        <!-- Contact -->
        <section class="contact-sec padding-top-40 padding-bottom-80">
            <div class="container">

                <!-- MAP -->
                <section class="map-block margin-bottom-40">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="1140" height="350" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Khoa%20C%C3%B4ng%20ngh%E1%BB%87%20th%C3%B4ng%20tin%20v%C3%A0%20truy%E1%BB%81n%20th%C3%B4ng%20%C4%91%E1%BA%A1i%20h%E1%BB%8Dc%20%C4%91%C3%A3%20n%E1%BA%B5ng&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://www.embedgooglemap.net"></a></div>
                        <style>.mapouter {
                                text-align: right;
                                height: 350px;
                                width: 1140px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 350px;
                                width: 1140px;
                            }</style>
                    </div>
                </section>

                <!-- Conatct -->
                <div class="contact">
                    <div class="contact-form">
                        <!-- FORM  -->
                        <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                            <div class="row">
                                <div class="col-md-8">

                                    <!-- Payment information -->
                                    <div class="heading">
                                        <h2>Dou You have a Question for Us ?</h2>
                                    </div>
                                    <ul class="row">
                                        <li class="col-sm-6">
                                            <label>First Name
                                                <input type="text" class="form-control" name="name" id="name"
                                                       placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-sm-6">
                                            <label>Last Name
                                                <input type="text" class="form-control" name="email" id="email"
                                                       placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-sm-12">
                                            <label>Message
                                                <textarea class="form-control" name="message" id="message" rows="5"
                                                          placeholder=""></textarea>
                                            </label>
                                        </li>
                                        <li class="col-sm-12 no-margin">
                                            <button type="submit" value="submit" class="btn-round" id="btn_submit"
                                                    onClick="proceed();">Send Message
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Conatct Infomation -->
                                <div class="col-md-4">
                                    <div class="contact-info">
                                        <h5>SmartTech</h5>
                                        <p>Center Digital Shopping</p>
                                        <hr>
                                        <h6> Address:</h6>
                                        <p>41 Le Duan, Hai Chau District, Da Nang City</p>
                                        <h6>Phone:</h6>
                                        <p>(+84) 33 731 7788</p>
                                        <h6>Email:</h6>
                                        <p>nqcuong.17it3@sict.udn.vn
                                            nqcuong.dev@sict.udn.vn</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
