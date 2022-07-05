<div class="col-lg-12 text" id="text">
    <div class="form-group">
        <label class="form-control-label">Text Post<span class="tx-danger">*</span></label>
        <textarea class="form-control" id="summernote" name="text"> </textarea>
    </div>
</div>

<div class="col-lg-4 image_one" id="image_one">
    <label>Image One <span class="tx-danger">*</span></label>
    <label class="custom-file">
        <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required=""
            accept="image">
        <span class="custom-file-control"></span>
        <img src="#" id="one">
    </label>
</div>

<div class="col-lg-4 image_two" id="image_two">
    <label>Image Two <span class="tx-danger">*</span></label>
    <label class="custom-file">
        <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL1(this);"
            accept="image">
        <span class="custom-file-control"></span>
        <img src="#" id="two">
    </label>
</div>


