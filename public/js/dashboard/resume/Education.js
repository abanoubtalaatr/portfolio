let counterEducation = 1;
function addEducation() {
    let newDiv = `
     
    <div class='new'>
               <input type="hidden" name="education[${counterEducation}][id]" value="200000">
              <div class="col-md-3 float-left">
                  <div class="form-group">
                      <label>University or Course <strong class='text-danger'>*</strong></label>
                      <input class="form-control" type="text" name="education[${counterEducation}][title]" placeholder="University or Course" required >
                  </div>
              </div>
              <div class="col-md-3 float-left">
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Place <strong class='text-danger'>*</strong></label>
                      <input class="form-control" type="text" name="education[${counterEducation}][place]" placeholder="Place">
                  </div>
              </div>
              <div class="col-md-3 float-left">
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">From <strong class='text-danger'>*</strong></label>
                      <input class="form-control" type="date"  name="education[${counterEducation}][from]" placeholder="from">
                  </div>
              </div>
              <div class="col-md-3 float-left">
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">To <strong class='text-danger'>*</strong></label>
                      <input class="form-control" type="date" name="education[${counterEducation}][to]"placeholder="To">
                  </div>
              </div>
              <div class="col-md-12 " style="overflow: hidden">
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Description OR breif <strong class='text-danger'>*</strong></label>
                      <textarea  name="education[${counterEducation}][description]" id="" cols="30" class="form-control" rows="5"
                          placeholder="Description"></textarea>
                  </div>
              </div>
             
          </div>`;

  $(".education").append(newDiv);
  counterEducation ++;

}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function deleteEducation() {
    $('.education .new').last().remove();
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++