@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="flex: auto;">
                    Dashboard
                    <a href="{{ route('create') }}">
                        <i class="material-icons" style="float: right">add</i>
                    </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Current Goals:
                    <hr />
                    <ul style="list-style-type: none">
                        @foreach($list_items as $list_item)
                            <div class="alert" style="background-color: {{ $loop->index % 2 == 0 ? "lightblue" : "lightpink" }};" role="alert">
                                <li>
                                    {{ $list_item->description }}
                                    <a href="" style="float: right;">
                                        <i class="material-icons">check</i>
                                    </a>
                                    <a href="" style="float: right">
                                        <i class="material-icons">edit</i>
                                    </a>
                                </li>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="card col-5" style="margin-top: 20%">
                <div class="card-body">
                    <div class="card-header">Goals Completed So Far</div>
                    <div class="card-body">{{ $count }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
