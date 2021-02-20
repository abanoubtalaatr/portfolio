let counterLanguage  = 1;
function addLanguage() {
    let newDiv = `
        <div class='new'>
                 <hr>
                <input type="hidden" name="language[${counterLanguage}][id]" value="200000">
                <div class="col-md-6 float-left">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Language <strong class='text-danger'>*</strong></label>
                        <input class="form-control" type="text" name="language[${counterLanguage}][name]" placeholder="Language" required>
                    </div>
                </div>
                <div class="col-md-6 float-left " style="overflow: hidden">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Level of Language<strong class='text-danger'>*</strong></label>
                        <input class="form-control" type="text" name="language[${counterLanguage}][level]" placeholder="level" required>
                    </div>
                </div>
            </div>
            <div class='clearfix'></div>`;

    $(".language").append(newDiv);
    counterLanguage++;
    var n = $(document).height();
    $('html, body').animate({
        scrollTop: n
    }, 50);
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function deleteLanguage() {
    $('.language .new').last().remove();
}

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
