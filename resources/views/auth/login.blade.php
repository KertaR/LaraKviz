@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center" style="color: white">LaraKvíz</h1>
            <h3 class="text-center" style="color: white">Üdvözöllek</h3>
            <br />
            <div class="panel panel-default">
                <div class="panel-heading">Bejelentkezés</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Hoppá!</strong> Az alábbi mezőkkel probléma van:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Email cím</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Jelszó</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> Emlékezz rám
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Bejelentkezés
                                </button>
                                <a href="{{ route('auth.register') }}"
                                        class="btn btn-default">
                                    Regisztráció
                                </a>
                                <br>
                                <a href="{{ route('auth.password.reset') }}">Elfelejtett jelszó?</a>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center" style="color: white">Created by <a href="http://laraveldaily.com">Laravel Daily Team</a></div>
            <div class="text-center" style="color: white">Powered by <a href="https://quickadminpanel.com">QuickAdminPanel.com</a></div>
        </div>
    </div>
@endsection
