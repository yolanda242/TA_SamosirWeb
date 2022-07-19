@extends('layouts.template')

@section('content') 

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin: 40px;">
                    <div class="card-header"><strong><h3>Change Password</h3></strong>
                        <form action="{{ route('ubah_password') }}" method="POST" class="border p-3 rounded" style="margin-top: 30px">
                            @if(session()->has('failed-change'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('failed-change') }}
                            </div>
                            @endif
                            @if(session()->has('success-change'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success-change') }}
                            </div>
                            @endif
                            @csrf
                            <input type="hidden" name="username_admin" id="username_admin" value="{{Session::get('username')}}">
                            <div class="form-group">
                                <label>Password Lama </label>
                                <input type="password" name="old_password" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
        
                            <div class="form-group">
                                <label>Konfirmasi Password Baru</label>
                                <input type="password" name="password_confirmation" class="form-control @error('old_password') is-invalid @enderror">
                                @error('old_password')
                                <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
        
                            <div class="form-group mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
