<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">User Management</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User Management</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($member as $m) : ?>
                                    <tr>
                                        <td><?= $m['name']; ?></td>
                                        <td><?= $m['email']; ?></td>
                                        <td><img width="40px" src='<?= base_url('assets/img/profile/') . $m['image']; ?>'></td>
                                        <td><?= date('d F Y', $m['date_created']); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>