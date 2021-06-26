@extends('layouts.master')
@isset($category)
    @section('title', 'Редактировать категорию')
@else
    @section('title','Создать категорию')
@endisset
@section('content')
    <div class="container">
        @isset($category)
            <h1 class="my-md-5 my-4">@yield('title')</h1>
        @else
            <h1 class="my-md-5 my-4">@yield('title')</h1>
        @endisset
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <form method="GET" enctype="multipart/form-data"
                      @isset($category)
                      action="{{ route('category.update', $category) }}"
                      @else
                      action="{{route('category.store')}}"
                    @endisset>
                    @isset($category)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Напишите название" id="nameCategory" name="nameCategory" value="@isset($category){{ $category->nameCategory }}@endisset">
                        <label for="floatingName">Название</label>
                        @include('error', ['fieldName' => 'nameCategory'])
                    </div>
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
