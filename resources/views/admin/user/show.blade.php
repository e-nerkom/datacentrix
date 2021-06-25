@extends('admin.layout.template')

@section('content')

<section class="main--content">
    <div class="row gutter-20">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Ubah Pengguna</h3>
                </div>

                <div class="panel-content">
                    <form method="POST" action="/admin/user/{{$user->id}}">
                        @csrf
                        <div class="form-group row">
                            <span class="label-text col-lg-3 col-form-label">Nama</span>
                            <div class="col-lg-9">
                                <input type="text" name="name" placeholder="Nama Pengguna..." class="form-control" value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="label-text col-lg-3 col-form-label">Email</span>
                            <div class="col-lg-9">
                                <input type="email" name="email" placeholder="Email Pengguna..." class="form-control" value="{{ $user->email }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <button type="submit" value="Submit" name="submit" class="btn btn-sm btn-rounded btn-success"><i class="fa fa-save"></i> Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>    
</section>

@endsection