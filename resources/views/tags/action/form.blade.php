@extends('layouts.master')
@isset($tag)
    @section('title', 'Редактировать тег ' . $tag->name)
@else
    @section('title', 'Создать тег')
@endisset
@section('content')
    <div class="container">
        @isset($tag)
            <h1 class="my-md-5 my-4">Редактировать тег</h1>
        @else
            <h1 class="my-md-5 my-4">Добавить тег</h1>
        @endisset
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <form method="GET" enctype="multipart/form-data"
                      @isset($tag)
                      action="{{ route('tag.update', $tag) }}"
                      @else
                      action="{{route('tag.store')}}"
                    @endisset
                >
                    @isset($tag)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Напишите название" id="floatingName" name="name" value="@isset($tag){{ $tag->name }}@endisset">
                        <label for="floatingName">Название</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <button class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
