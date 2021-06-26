<div class="modal fade" id="deleteCat" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" action="{{route('category.destroy','test')}}" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Удаление категории</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    @csrf
                    <div class="modal-body">
                        <p class="text-center">
                            Вы действительно хотите удалить данную категорию ?<br>
                            <strong style="color: red">После удаления изменения не обратимы.</strong>
                        </p>
                        <input type="hidden" name="cat_id" id="cat_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
            </div>
        </form>
    </div>
</div>
