@extends('includes.admin.auth')

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="backend/stisla/dist/assets/img/stisla-fill.svg" alt="logo" width="100"
                            class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body">
                            <form action="/register" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name" required
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        required value="{{ old('username') }}">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email" required
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" type="password"
                                        class="form-control pwstrength @error('password') is-invalid @enderror"
                                        data-indicator="pwindicator" name="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Already registered? <a href="login">Login</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Muhammad Naufal Rusman 2022
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
