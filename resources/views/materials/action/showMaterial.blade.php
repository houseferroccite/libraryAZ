@extends('layouts.master')
@section('title',$material->name)
@section('content')
    <div class="container">
        <h1 class="my-md-5 my-4">{{$material->name}}</h1>
        <div class="row mb-3">
            <div class="col-lg-6 col-md-8">
                <div class="d-flex text-break">
                    <p class="col fw-bold mw-25 mw-sm-30 me-2">Авторы</p>
                    <p class="col">{{$material->author}}</p>
                </div>
                <div class="d-flex text-break">
                    <p class="col fw-bold mw-25 mw-sm-30 me-2">Тип</p>
                    <p class="col">{{$material->type->nameType}}</p>
                </div>
                <div class="d-flex text-break">
                    <p class="col fw-bold mw-25 mw-sm-30 me-2">Категория</p>
                    <p class="col">{{$material->category->name}}</p>
                </div>
                <div class="d-flex text-break">
                    <p class="col fw-bold mw-25 mw-sm-30 me-2">Описание</p>
                    <p class="col">{{$material->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
{{--            Вставка тегов для материала--}}
            @include('materials.tags.tagsListMaterials',compact('tags'))
{{--            Вставка ссылок для материала--}}
            @include('materials.urls.urlListMaterials',compact('material'))
        </div>
    </div>
    @include('materials.action.modal.addLinks')
@endsection
