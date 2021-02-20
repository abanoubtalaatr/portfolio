 let counter = 1;

function addExpereince() {
    
    let newDiv = `
     
      <div class='new'>
                 <input type="hidden" name="experience[${counter}][id]" value="200000">
                <div class="col-md-3 float-left">
                    <div class="form-group">
                        <label>Company <strong class='text-danger'>*</strong></label>
                        <input class="form-control" type="text" name="experience[${counter}][company]" placeholder="Company" required >
                    </div>
                </div>
                <div class="col-md-3 float-left">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Postion <strong class='text-danger'>*</strong></label>
                        <input class="form-control" type="text" name="experience[${counter}][jobTitle]" placeholder="Postion">
                    </div>
                </div>
                <div class="col-md-3 float-left">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">From <strong class='text-danger'>*</strong></label>
                        <input class="form-control" type="date"  name="experience[${counter}][from]" placeholder="from">
                    </div>
                </div>
                <div class="col-md-3 float-left">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">To <strong class='text-danger'>*</strong></label>
                        <input class="form-control" type="date" name="experience[${counter}][to]"placeholder="To">
                    </div>
                </div>
                <div class="col-md-12 " style="overflow: hidden">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description OR breif <strong class='text-danger'>*</strong></label>
                        <textarea  name="experience[${counter}][description]" id="" cols="30" class="form-control" rows="5"
                            placeholder="Description"></textarea>
                    </div>
                </div>
               
            </div>`;

    $(".experience").append(newDiv);
    counter ++;

}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function deleteExpereince() {
    $('.experience .new').last().remove();
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/**
 * @param {any} div
 * @param {any} id
 * @param {any} table
 */
function deleteExistExperience(div,id,table) {
    // delete from html 
    console.log(div,id,table)
   $('.experience .old'+"#"+[div]).remove();
   // delete from database
   $.ajax({
    url: "/dashboard/resume/delete",
    type: 'post',
    data:{id,table},
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    success: /**
     * @param {any} res
     */
 function (res) {
        //send repositories that founded to getLanguage function
    }
});
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/**
 
 * @param {any} idButton
 */
function validatedInput(idButton){
  
    $(`.experience #experienceButton${idButton}`).removeClass('disabled').addClass('enable-save');
    

}
function save(){
    console.log('yes but some ');
}
