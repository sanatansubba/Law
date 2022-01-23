<a href="{{ $url_edit }}" data-toggle="tooltip" title="Edit {{ $model->title }}" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
<br>
<a style="margin-top: 10px" href="{{ $url_destroy }}" data-toggle="tooltip" title="Delete {{ $model->title }}" class="btn btn-sm btn-white text-danger mr-2 btn-delete" rel="{{ $model->id }}" rel1="delete-testimonial"><i class="far fa-trash-alt mr-1"></i>Delete</a>


