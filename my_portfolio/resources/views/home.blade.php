@extends('layouts.app')

@section('content')
    <h1 class="mt-4">歡迎回來!!{{ Auth::user()->name }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">後台首頁</li>
    </ol>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            回饋表
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>content</th>
                        <th>edit</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>content</th>
                        <th>edit</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>2012/02/22</td>
                        <td>Steven</td>
                        <td>123@123.com</td>
                        <td>hi!</td>
                        <th></th>
                    </tr>
                    @foreach ($contacts as $item)
                    <tr>
                        <th>{{$item->created_at}}</th>
                        <th>{{$item->name}}</th>
                        <th>{{$item->email}}</th>
                        <th>{{$item->content}}</th>
                        <th>
                            <button class="btn btn-danger delete-btn">刪除</button>
                                    <form class="d-none" action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                        </th>
                    </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    
@endsection

@section('js')
    
@endsection
