<div class="col-md-6">
    <form action="{{route('addMaterialTag')}}" method="GET">
        <h3>Теги</h3>
        <div class="input-group mb-3">
            <input type="text" id="material_id" name="material_id" value="{{$material->id}}" hidden>
            <select class="form-select" id="tag" name="tag" aria-label="Добавьте автора">
                @foreach($tags as $tag)
                    <option value="{{$tag->name}}">{{$tag->name}}</option>
                @endforeach
            </select>
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
    </form>
    <ul class="list-group mb-4">
        @foreach($material->mattags as $item)
            <li class="list-group-item list-group-item-action d-flex justify-content-between">
                <a href="#" class="me-3">
                    {{$item->tag}}
                </a>
                <a href="#" class="text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd"
                              d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </a>
            </li>
        @endforeach
    </ul>
</div>
