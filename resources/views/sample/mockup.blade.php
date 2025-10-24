@extends('common.main')
@section('title', 'mockup')
@section('content')
<div class="container d-flex flex-grow-1 py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-md-5 position-sticky align-self-start" style="top: 112px;">
            <form class="p-5 rounded-3 form-shadow needs-validation form-animation" novalidate>
                <h1 class="mb-5">User Login</h1>
                <div class="row g-3">
                    <div class="col-lg-12">
                        <label class="form-label" for="mail">Email Address</label>
                        <input class="form-control input-shadow" type="email" name="mail" id="mail" placeholder="example@gmail.com" required />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control input-shadow pe-5" type="password" name="password" id="password" required />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter a valid password.</div>
                    </div>
                </div>

                <button class="btn btn-primary px-4 my-4  button-shadow d-flex align-items-center justify-content-center w-100" type="submit"><span class="icons me-2" style="--svg: url('https://api.iconify.design/material-symbols/login-rounded.svg')"></span>Login</button>
                <a href="">Forgot password?</a>
            </form>
        </div>

        <div class="col-lg-8 col-md-7">
            <div class="text-center mb-5">
                <h1 class="fw-bold">Pricing</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="row g-2">
                <div class="col-lg-4 col-md-4 col-4">
                    <div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded card-fade" style="--card-delay: 0.2s;">
                            <div class="carousel-item active">
                                <img src="/assets/1728384733378.jpg" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1724478817263.jpg" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1726206220118.jpg" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                    <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExample2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded card-fade" style="--card-delay: 0.4s;">
                            <div class="carousel-item active">
                                <img src="/assets/1724478817263.jpg" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1726206220118.jpg" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1728384733378.jpg" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                    <div id="carouselExample3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExample3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded card-fade" style="--card-delay: 0.8s;">
                            <div class="carousel-item active">
                                <img src="/assets/1726206220118.jpg" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1728384733378.jpg" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1724478817263.jpg" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                    <div id="carouselExample4" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExample4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded card-fade" style="--card-delay: 1s;">
                            <div class="carousel-item active">
                                <img src="/assets/1724478817263.jpg" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1728384733378.jpg" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1726206220118.jpg" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                    <div id="carouselExample5" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExample5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded card-fade" style="--card-delay: 1.2s;">
                            <div class="carousel-item active">
                                <img src="/assets/1726206220118.jpg" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1724478817263.jpg" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1728384733378.jpg" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                    <div id="carouselExample6" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample6" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample6" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExample6" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded card-fade" style="--card-delay: 1.4s;">
                            <div class="carousel-item active">
                                <img src="/assets/1728384733378.jpg" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1726206220118.jpg" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/1724478817263.jpg" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5 table-animation" style="--table-delay: 1.6s;">
                <h3 class="text-center fw-bold">Compare Plans</h3>
                <table class="table table-secondary table-striped form-shadow rounded-3 overflow-hidden mb-0">
                    <thead>
                        <tr>
                            <th scope="col" class="table-light"></th>
                            <th scope="col">Free</th>
                            <th scope="col">Pro</th>
                            <th scope="col">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="fw-normal table-light">Public</th>
                            <td><input class="form-check-input" type="checkbox" value="Free" id="public1" /></td>
                            <td><input class="form-check-input" type="checkbox" value="Pro" id="public2" /></td>
                            <td><input class="form-check-input" type="checkbox" value="Enterprise" id="public3" /></td>
                        </tr>
                        <tr>
                            <th scope="row" class="fw-normal table-light">Private</th>
                            <td><input class="form-check-input" type="checkbox" value="Free" id="private1" /></td>
                            <td><input class="form-check-input" type="checkbox" value="Pro" id="private2" /></td>
                            <td><input class="form-check-input" type="checkbox" value="Enterprise" id="private3" /></td>
                        </tr>
                        <tr>
                            <th scope="row" class="fw-normal table-light">Permissions</th>
                            <td><input class="form-check-input" type="checkbox" value="Free" id="perm1" /></td>
                            <td><input class="form-check-input" type="checkbox" value="Pro" id="perm2" /></td>
                            <td><input class="form-check-input" type="checkbox" value="Enterprise" id="perm3" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection