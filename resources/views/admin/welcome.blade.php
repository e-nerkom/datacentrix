@extends('admin.layout.template')

@section('content')

<section class="main--content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Panel Title Here</h3>

            <div class="dropdown">
                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-ellipsis-v"></i>
                </button>

                <ul class="dropdown-menu">
                    <li><a href="#"><i class="far fa-circle"></i>Panel Option 1</a></li>
                    <li><a href="#"><i class="far fa-circle"></i>Panel Option 2</a></li>
                    <li><a href="#"><i class="far fa-circle"></i>Panel Option 3</a></li>
                </ul>
            </div>
        </div>

        <div class="panel-content">
            <p>Panel Content Here</p>
        </div>
    </div>
</section>

@endsection