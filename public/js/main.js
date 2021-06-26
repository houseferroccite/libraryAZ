$('#delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var tag_id = button.data('tagid')
    var modal = $(this)
    modal.find('.modal-body #tag_id').val(tag_id);
})
$('#deleteCat').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var cat_id = button.data('catid')
    var modal = $(this)
    modal.find('.modal-body #cat_id').val(cat_id);
})
$('#deleteMaterial').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var material_id = button.data('materialid')
    var modal = $(this)
    modal.find('.modal-body #material_id').val(material_id);
})
