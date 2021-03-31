<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Мета тэги</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Title</label>
            <input type="text" name="meta[title]" class="form-control"
                   value="{{ isset($pageData) ? isset($pageData->metaTags->title) ? $pageData->metaTags->title : '' : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Description</label>
            <textarea type="text" name="meta[description]" class="form-control">{{ isset($pageData) ? isset($pageData->metaTags->description) ? $pageData->metaTags->description : '' : ''}}</textarea>
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Keywords</label>
            <input type="text" name="meta[keywords]" class="form-control"
                   value="{{ isset($pageData) ? isset($pageData->metaTags->keywords) ? $pageData->metaTags->keywords : '' : ''}}">
        </div>
    </div>
</div>
