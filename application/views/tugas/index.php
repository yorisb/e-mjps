                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <form class="user">
                        <div class="card mt-3" style="max-width: 300px;">
                            <div class="row g-0">

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Pre-test</h5>
                                        <p class="card-text">Lihat hasil tugas Pre-test Siswa</p>
                                        <a href="<?= base_url('tugas/pretest'); ?>" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3" style="max-width: 300px;">
                            <div class="row g-0">

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Quiz</h5>
                                        <p class="card-text">Lihat hasil tugas Quiz Siswa</p>
                                        <a href="<?= base_url('tugas/quiz'); ?>" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3" style="max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Post-test</h5>
                                        <p class="card-text">Lihat hasil tugas Post-test Siswa</p>
                                        <a href="<?= base_url('tugas/posttest'); ?>" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->