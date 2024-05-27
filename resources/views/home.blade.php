@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    {{ __('You are logged in!') }}
                    @foreach($contentItems as $item)
                    <div>
                        <p>{{$item->title}}</p>
                        <form action="{{ route('panel.edit', $item->id) }}" method="post">
                        @csrf
                        @method('PUTH')
                      <button type="submit" class="btn btn-danger btn-sm">Редактировать</button>
                    </form>
                    </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

