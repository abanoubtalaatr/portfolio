let counterSkill = 1;
function addSkills() {
    let newDiv = `
        <div class='new'>
        
                 <hr>
                 <input type="hidden" name="skill[${counterSkill}][id]" value="200000">
                <div class="col-md-3 float-left">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Skill <strong class='text-danger'>*</strong></label>
                        <input class="form-control" type="text"  name="skill[${counterSkill}][name]" placeholder="Skill" required>
                    </div>
                </div>
                <div class="col-md-9 float-left " style="overflow: hidden">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Features of skill <strong class='text-danger'>*</strong></label>
                        <textarea name="skill[${counterSkill}][features]" onkeyup="selaperate(event)" cols="30" class="form-control skill" rows="5"
                            placeholder="like php,android seleprate with comma" required> </textarea>
                    </div>
                </div>
            </div>
            <div class='clearfix'></div>`;

    $(".skills").append(newDiv);
   counterSkill++;
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function deleteSkills() {
    $('.skills .new').last().remove();
}

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
