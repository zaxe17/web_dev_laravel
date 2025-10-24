@extends('common.main')
@section('title', 'responsive')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-3 col-xl-4 border bg-primary">left</div>
        <div class="col-lg-3 col-md-6 col-sm-3 col-xl-4 border bg-success">middle</div>
        <div class="col-lg-3 col-md-6 col-sm-3 col-xl-4 border bg-danger">right</div>
    </div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 bg-white border border-secondary rounded-start-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>

        <div class="col-lg-8 col-md-8 col-sm-12 bg-white border border-secondary rounded-end-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>@social</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Marc</td>
                        <td>Laren</td>
                        <td>@jbi</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner rounded-4">
                    <div class="carousel-item active">
                        <img src="/assets/1724478817263.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/1726206220118.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/1728384733378.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row row-gap-3">
        <div class="d-flex justify-content-center col-lg-4 col-md-6 col-sm-12 bg-white">
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="/assets/1735119529516.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Citlali</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center col-lg-4 col-md-6 col-sm-12 bg-white">
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="/assets/1731655904367.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chasca</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center col-lg-4 col-md-6 col-sm-12 bg-white">
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="/assets/ayaka-genshin-impact-4k-wallpaper-3840x2160-uhdpaper.com-885.1_a.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kamisato Ayaka</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center col-lg-4 col-md-6 col-sm-12 bg-white">
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="/assets/genshin-impact-raiden-shogun-art-4k-wallpaper-3840x2160-uhdpaper.com-964.1_a.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Raiden Shougun</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center col-lg-4 col-md-6 col-sm-12 bg-white">
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="/assets/hu-tao-genshin-impact-0-8k-wallpaper-7680x4320-uhdpaper.com-655.1_b.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hu-tao</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center col-lg-4 col-md-6 col-sm-12 bg-white">
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="/assets/raiden-shogun-genshin-impact-4k-wallpaper-uhdpaper.com-689@1@h.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Shougun</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection