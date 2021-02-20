let counterknowledge =1;
function addKnowledge() {
    console.log('yesf dslkfjas');
    let newDiv = `
        <div class='new'>
                <input type="hidden" name="knowledge[${counterknowledge}][id]" value="200000">
                <div class="col-md-6 mx-auto">
                    <div class="form-group">
                        <label>Knowledage <strong class='text-danger'>*</strong></label>
                        <input class="form-control" type="text"  name="knowledge[${counterknowledge}][name]" placeholder="example Website hosting and Search engine marketing" required>
                    </div>
                </div>
            </div>
            <div class='clearfix'></div>`;

    $(".knowledge").append(newDiv);
    counterknowledge++;
    var n = $(document).height();
    $('html, body').animate({
        scrollTop: n
    }, 50);
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function deleteKnowledge() {
    $('.knowledge .new').last().remove();
}

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
