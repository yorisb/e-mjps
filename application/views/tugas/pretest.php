                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="table table-hover">
                        <div class="col-lg">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">E-Mail</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">File Tugas</th>
                                        <th scope="col">Fitur</th>
                                        <th scope="col">Tahun Upload</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($nama as $nm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $nm['nis']; ?></td>
                                            <td><?= $nm['email']; ?></td>
                                            <td><?= $nm['nama']; ?></td>
                                            <td><?= $nm['file']; ?></td>
                                            <td><?= $nm['fitur']; ?></td>
                                            <td><?= $nm['date_upload']; ?></td>
                                            <td>
                                                <a href="" class="badge bg-success text-white">View</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="<?= base_url('tugas'); ?>" class="btn btn-primary ">Kembali</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->
                </div>
                </div>
                <!-- End of Main Content -->