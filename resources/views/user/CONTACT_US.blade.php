@extends('user.layouts.main')
@section('main-container')
<!-- Navbar content... -->

    <div class="body_cont">
        <div id="main-container">
            <div id="container1">
                <!-- Content for container 1... -->
            </div>


        </div>
        <div id="container3">
            <!-- Content for container 3... -->

            <div class="container4">

                <div>
                    <img class="card-img-top" src="https://source.unsplash.com/1600x900/?map, google"
                        alt="Thumbnail [100%x225]" style="height: 350px; width: 100%; display: block;"
                        data-holder-rendered="true">
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 " style="border: none;">
                            <form method="POST" id="_contact-form" role="form">
                                <input type="hidden" name="template" value="theme/contact-email.html">
                                <input type="hidden" name="captchaToken" id="captchaToken">
                                <input type="hidden" name="_restaurantId" value="89844cfb-edfd-11e2-a35c-00163edcb8a0">
                                <div class="form-group">
                                    <input type="text" placeholder="Imię i nazwisko *" name="contact"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="E-mail *" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Telefon" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Temat *" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Wiadomość *" name="message" class="form-control"
                                        style="height: 85px;"></textarea>
                                </div>
                                <div class="form-group gdpr">



                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-upmenu _contact-form-submit bg-danger">Wyślij
                                        wiadomość</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top: -10px;">
                        <div class="diteles " style="border: none;">
                            <h4 class="text-dark">Wpisz tekst..</h4>
                        </div>
                        <br>
                        <div>
                            <i class="fa-solid fa-greater-than bg-danger"></i>
                            <h4 class="text-danger">Tyniecka 4,<br>
                                55-040 BIELANY WROCLAWSKIE</h4>
                        </div>
                        <br>
                        <div>
                            <h4 class="text-danger">+48 71 799 30 04</h4>
                        </div>
                        <br>
                        <div>
                            <h4 class="text-danger">Pon - Sob <br> 10:00 - 21:00 <br>
                                Nd 12:00 - 19:00</h4>
                        </div>
                        <div class="form-group about">
                            <button type="submit" class="btn btn-upmenu _contact-form-submit bg-danger">Wyślij
                                wiadomość</button>
                        </div>





                    </div>
                </div>
            </div>
            @endsection
          {{-- footer area --}}
        </div>


    </div>
    </div>


    </div>




















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
