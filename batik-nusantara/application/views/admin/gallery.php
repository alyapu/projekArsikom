<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-body">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin/addnewgallery'); ?>" class="btn btn-primary">Add New Gallery</a>
                    </li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        All Data
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Batik name</th>
                                    <th>Desc</th>
                                    <th>Picture</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Batik name</th>
                                    <th>Desc</th>
                                    <th>Picture</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>    
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($gallery as $g): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $g['gname']; ?></td>
                                        <td><?= $g['gdesc']; ?></td>
                                        <td><img src="<?= base_url('assets/assets/img/gallery/' . $g['gpict']); ?>" alt="<?= $g['gpict']; ?>" style="max-width: 100px; height: auto;"></td>
                                        <td>
                                            <a href="<?= base_url('admin/editgallery/' . $g['id']); ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('admin/deletegallery/' . $g['id']); ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
