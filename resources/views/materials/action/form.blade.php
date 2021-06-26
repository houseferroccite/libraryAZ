@extends('layouts.master')
@isset($material)
    @section('title', 'Редактировать материал ' . $material->name)
@else
    @section('title', 'Создать материал')
@endisset
@section('content')
    <div class="container">
        @isset($material)
            <h1 class="my-md-5 my-4">Редактировать материал</h1>
        @else
            <h1 class="my-md-5 my-4">Добавить материал</h1>
        @endisset
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <form method="GET" enctype="multipart/form-data"
                      @isset($material)
                      action="{{ route('material.update', $material) }}"
                      @else
                      action="{{route('material.store')}}"
                    @endisset
                >
                    @isset($material)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="form-floating mb-3">
                        @include('error', ['fieldName' => 'type_id'])
                        <select class="form-select" id="floatingSelectType" name="type_id">
                            @foreach($types as $type)
                                <option value="{{$type->id}}"
                                    @isset($material)
                                        @if($material->type_id == $type->id)
                                            selected
                                        @endif
                                    @endisset
                                    >{{$type->nameType}}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingSelectType">Тип</label>
                    </div>
                    <div class="form-floating mb-3">
                        @include('error', ['fieldName' => 'category_id'])
                        <select class="form-select" id="floatingSelectCategory" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                    @isset($material)
                                        @if($material->category_id == $category->id)
                                            selected
                                        @endif
                                    @endisset
                                    >{{$category->nameCategory}}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingSelectCategory">Категория</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Напишите название" id="floatingName"
                               name="name" value="@isset($material){{ $material->name }}@endisset">
                        <label for="floatingName">Название</label>
                        @include('error', ['fieldName' => 'name'])
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Напишите авторов" id="floatingAuthor"
                               name="author" value="@isset($material){{ $material->author }}@endisset">
                        <label for="floatingAuthor">Авторы</label>
                        @include('error', ['fieldName' => 'author'])
                    </div>
                    <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Напишите краткое описание" id="floatingDescription"
                              style="height: 100px"
                              name="description">@isset($material){{ $material->description }}@endisset</textarea>
                        <label for="floatingDescription">Описание</label>
                        @include('error', ['fieldName' => 'description'])
                    </div>
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
