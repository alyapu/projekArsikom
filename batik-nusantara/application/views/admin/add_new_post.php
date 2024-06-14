<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/manageposts'); ?>">Back</a></li>
            <li class="breadcrumb-item active">Add New Post</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <?= form_open_multipart('admin/addnewpost'); ?>
                        <div class="mb-3">
                            <label for="blog_title" class="form-label">Blog title</label>
                            <input type="text" class="form-control" id="blog_title" name="blog_title" value="<?= set_value('blog_title'); ?>">
                            <?= form_error('blog_title', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="preview" class="form-label">Preview</label>
                            <textarea class="form-control" id="preview" name="preview" style="height: 150px"><?= set_value('preview'); ?></textarea>
                            <?= form_error('preview', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" style="height: 200px"><?= set_value('content'); ?></textarea>
                            <?= form_error('content', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept=".png, .jpg, .jpeg, .gif">
                            <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>