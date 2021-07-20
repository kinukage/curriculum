@extends('layouts.admin')
@section('title', 'SNSホーム')

@section('content')
    <div class="container">
        <div class="row">
            <h2>ホーム</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\SnsController@add') }}" role="button" class="btn btn-primary">つぶやく</a>
            </div>
            <div class="box">
                        @foreach($posts as $sns)
                        
                            <div class="box-1"> {{ str_limit($sns->name, 100) }} </div>
                            <div class="box-2"> {{ str_limit($sns->created_at, 100) }} </div>
                            <div class="box-3"> {{ str_limit($sns->body, 250) }} </div>
                            <div class="box-4">
                                            <a href="{{ action('Admin\SnsController@delete', ['id' => $sns->id]) }}">削除</a>
                                        </div>
                            
                        @endforeach
            </div>
    </div>
@endsection