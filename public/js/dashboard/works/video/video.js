let counterVideo = 1;
function addVideo() {
    let newDiv = `
     
    <div class="new">
                        <div>
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <input type="hidden" name="video[0][id]" value="200000">
                                    <label>Name of project <strong class='text-danger'>*</strong></label>
                                    <input class="form-control" type="text" name="video[${counterVideo}][name]"
                                        placeholder="name of project">
                                </div>
                            </div>
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label>Path <strong class='text-danger'>*</strong></label>
                                    <input class="form-control" type="text" name="video[${counterVideo}][place]"
                                        placeholder="Path of video ">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="col-md-12 text-center " style="overflow: hidden">
                            <div class="col-md-6 mx-auto">
                                <button class="btn btn-info overflow-hidden" type="button"><input type="file"
                                name="video[${counterVideo}][image]"></button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr class="mb-5" style="border-width:4px;background:yellow;">
                    </div>`;

  $(".video").append(newDiv);
  counterVideo ++;

}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function deleteVideo() {
    $('.video .new').last().remove();
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++