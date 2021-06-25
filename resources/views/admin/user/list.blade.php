@extends('admin.layout.template')

@section('content')

<section class="main--content">
    <div class="row gutter-20">
        <div class="col-md-12">            
            @if (session('message'))                
            <div class="alert alert-info dark alert-dismissable">
                <div class="text-body">{{ session('message') }}</div>
            </div>
            @endif
            @if (session('err'))                
            <div class="alert alert-danger dark alert-dismissable">
                <div class="text-body">{{ session('err') }}</div>
            </div>
            @endif

            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Pengguna</h3>
                </div>

                <div class="panel-content">                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tanggal Daftar</th>
                                <th class="text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td class="text-center">
                                    <a href="/admin/user/{{ $row->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="/admin/user/delete/{{ $row->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        
    </div>    
</section>

@endsection