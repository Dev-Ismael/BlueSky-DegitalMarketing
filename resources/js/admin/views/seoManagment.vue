<template>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> <i class="fa-solid fa-house-user"></i> Home Page </h4>
                    <div class="form-group">
                        <label for="HomeSEOTitle">SEO Title</label>
                        <input type="text" class="form-control" id="HomeSEOTitle" name="home[seo_title]" placeholder="Type Home Page Seo Title..." autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label for="HomeSEODescription">SEO Description</label>
                        <textarea class="form-control" id="HomeSEODescription" cols="30" rows="10" name="home[seo_description]" placeholder="Type Home Page SEO Description..."  autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="HomeSEOKeywords">SEO Keywords</label>
                        <textarea class="form-control" id="HomeSEOKeywords" cols="30" rows="10" name="home[seo_keywords]" placeholder="Type Home Page SEO Keywords..." autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> <i class="fa-solid fa-circle-info"></i> About Page </h4>
                    <div class="form-group">
                        <label for="AboutSEOTitle">SEO Title</label>
                        <input type="text" class="form-control" id="AboutSEOTitle" name="about[seo_title]" placeholder="Type About Page Seo Title..." autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label for="AboutSEODescription">SEO Description</label>
                        <textarea class="form-control" id="AboutSEODescription" cols="30" rows="10" name="about[seo_description]" placeholder="Type About Page SEO Description..."  autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="AboutSEOKeywords">SEO Keywords</label>
                        <textarea class="form-control" id="AboutSEOKeywords" cols="30" rows="10" name="about[seo_keywords]" placeholder="Type About Page SEO Keywords..." autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> <i class="fa-solid fa-message"></i> Contact Page </h4>
                    <div class="form-group">
                        <label for="ContactSEOTitle">SEO Title</label>
                        <input type="text" class="form-control" id="ContactSEOTitle" name="contact[seo_title]" placeholder="Type Contact Page Seo Title..." autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label for="ContactSEODescription">SEO Description</label>
                        <textarea class="form-control" id="ContactSEODescription" cols="30" rows="10" name="contact[seo_description]" placeholder="Type Contact Page SEO Description..."  autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ContactSEOKeywords">SEO Keywords</label>
                        <textarea class="form-control" id="ContactSEOKeywords" cols="30" rows="10" name="contact[seo_keywords]" placeholder="Type Contact Page SEO Keywords..." autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
        </div>
    </div>
</template>
<script>

</script>
