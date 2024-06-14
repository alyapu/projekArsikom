<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Gallery</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/gallery'); ?>">Back</a></li>
            <li class="breadcrumb-item active">Edit Gallery</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Gallery Details</h5>
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('Admin/editgallery/' . $gallery['id']); ?>
                            <div class="mb-3">
                                <label for="gname" class="form-label">Batik Name</label>
                                <input type="text" class="form-control" id="gname" name="gname" value="<?= set_value('gname', $gallery['gname']); ?>" required>
                                <?= form_error('gname', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="mb-3">
                                <label for="gdesc" class="form-label">Description</label>
                                <textarea class="form-control" id="gdesc" name="gdesc" rows="4" required><?= set_value('gdesc', $gallery['gdesc']); ?></textarea>
                                <?= form_error('gdesc', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="mb-3">
                                <label for="gpict" class="form-label">Image</label>
                                <input type="file" class="form-control" id="gpict" name="gpict" accept=".png, .jpg, .jpeg, .gif">
                                <?= form_error('gpict', '<small class="text-danger">', '</small>'); ?>
                                <small>Current Image:</small><br>
                                <img src="<?= base_url('assets/assets/img/gallery/' . $gallery['gpict']); ?>" alt="<?= $gallery['gname']; ?>" width="150">
                            </div>
                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger"><?= $error; ?></div>
                            <?php endif; ?>
                            <button type="submit" class="btn btn-primary">Update</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
