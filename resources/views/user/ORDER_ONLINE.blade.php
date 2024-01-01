
@extends('user.layouts.main')
@section('main-container')
  <!-- Navbar content... -->

    <div class="body_cont">
        <div id="main-container">
            <div id="container1">
                <!-- Content for container 1... -->
            </div>

            <div id="container2">
                <!-- Content for container 2... -->
            </div>
        </div>
        <div id="container3">
            <!-- Content for container 3... -->

            <div class="container4">
                <div class="con4_body ">
                    <div class="dropdown pt-5">
                        <button class="btn btn-secondary dropdown-toggle bg-primary border-0" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>

                    </div><br>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h4 class="mb-0 text-dark">
                                        Kebab Hut BIELANY WROCLAWSKIE




                                        </h3>
                                        <div class="mb-1 text-muted">Tyniecka 4</div>

                                        <p class="mb-0 text-dark">+48 71 799 30 04</p>
                                </div>
                                <div class="icon mb-0 text-dark">
                                    <p class="text-dark"> icon <i class="fa-solid fa-greater-than"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-top: -10px;">



                            <img class="card-img-top" src="https://source.unsplash.com/1600x900/?fir, water"
                                alt="Thumbnail [100%x225]" style="height: 350px; width: 100%; display: block;"
                                data-holder-rendered="true">




                        </div>
                    </div>
                </div>
            </div>
            @endsection
         {{-- footer area  --}}
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
