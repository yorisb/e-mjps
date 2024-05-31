                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="card" style="width: 15rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title">Pre-test</h5>
                                <a href="<?= base_url('input_mapel/pretest'); ?>" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                        <div class="card" style="width: 15rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title">E-Modul</h5>
                                <a href="<?= base_url('input_mapel/modul'); ?>" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                        <div class="card" style="width: 15rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title">E-Learning</h5>
                                <a href="<?= base_url('input_mapel/learning'); ?>" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                        <div class="card" style="width: 15rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title">Quiz</h5>
                                <a href="<?= base_url('input_mapel/quiz'); ?>" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                        <div class="card" style="width: 15rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title">Post-test</h5>
                                <a href="<?= base_url('input_mapel/posttest'); ?>" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>

                    <h5 class="h5 mb-4 text-gray-800">Data Modul</h5>
                    <div class="table table-hover">
                        <div class="col-lg">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Fitur</th>
                                        <th scope="col">Materi</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($keterangan as $k) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $k['fitur']; ?></td>
                                            <td><?= $k['judul']; ?></td>
                                            <td><?= $k['url']; ?></td>
                                            <td>
                                                <a href="" class="badge bg-danger text-white">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->