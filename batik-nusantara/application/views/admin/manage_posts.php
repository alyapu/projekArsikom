<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>

        <div class="card mb-4">
            <div class="card-body">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/addnewpost'); ?>" class="btn btn-primary">Add New Post</a></li>
                </ol>
                <?= $this->session->flashdata('message');
                ?>
                <?php $this->session->unset_userdata('message'); ?>
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
                                    <th>Blog title</th>
                                    <th>Preview</th>
                                    <th>Date Post</th>
                                    <th>Last Update</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Blog title</th>
                                    <th>Preview</th>
                                    <th>Date Post</th>
                                    <th>Last Update</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $i = 1;
                                function format_date($timestamp)
                                {
                                    date_default_timezone_set('Asia/Jakarta');
                                    $days_in_indonesian = array(
                                        'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
                                    );

                                    $months_in_indonesian = array(
                                        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                                    );

                                    $day = $days_in_indonesian[date('w', $timestamp)];
                                    $month = $months_in_indonesian[date('n', $timestamp) - 1];
                                    return $day . ', ' . date('j', $timestamp) . ' ' . $month . ' ' . date('Y, H:i', $timestamp) . ' WIB';
                                }
                                ?>
                                <?php foreach ($blog as $b) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $b['blog_title']; ?></td>
                                        <td><?= $b['preview']; ?></td>
                                        <td><?php echo format_date($b['date_post']); ?></td>
                                        <td><?php echo format_date($b['date_edit']); ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/edit/' . $b['id']); ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('admin/delete/' . $b['id']); ?>" class="btn btn-danger">Delete</a>
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