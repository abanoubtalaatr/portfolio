@section('action')
<div class="col-md-6  float-right pt-4">
    <div class="col-md-3 float-left">
        <button class="btn btn-info"  onclick="window.location='/dashboard/resume/experience/view'"><i class="fas fa-eye mr-2"></i>Show </button>
    </div>
    <div class="col-md-3 float-left">
        <button class="btn btn-primary" onclick="window.location='/dashboard/resume/experience/add'">  <i class="fas fa-plus mr-2"></i> Add</button>
    </div>
    <div class="col-md-3 float-left">
        <button class="btn btn-warning" onclick="window.location='/dashboard/resume/experience/edit'"> <i class="fas fa-edit mr-2"></i> Edit </button>
    </div>
    <div class="col-md-3 float-left">
        <button class="btn btn-danger" onclick="window.location='/dashboard/resume/experience/delete'"> <i class="fas fa-trash mr-2"></i> Delete </button>
    </div>
</div>
<div class="clearfix"></div>
@endsection