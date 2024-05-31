                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>

                    <?php
                    $name = "SELECT * FROM user WHERE role_id = 2";
                    $name = $this->db->query($name)->result_array();
                    ?>

                    <div class="table table-hover">
                        <div class="col-lg-6">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">E-Mail</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($name as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $m['nis']; ?></td>
                                            <td><?= $m['name']; ?></td>
                                            <td><?= $m['email']; ?></td>
                                            <td><?= $m['date_created']; ?></td>
                                            <td>
                                                <a href="<?= base_url('menu/delete/') ?><?= $m['id']; ?>" class="badge bg-danger text-white" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                </div>
                </div>
                <!-- End of Main Content -->