                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <form class="user">
                        <div class="card mt-3" style="max-width: 500px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Pre-test</h5>
                                        <p class="card-text">Masukan nilai siswa berdasarkan dari tugas Pre-test yang dikirim oleh siswa</p>
                                        <a href="<?= base_url('nilai_siswa/pretest'); ?>" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3" style="max-width: 500px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Quiz</h5>
                                        <p class="card-text">Masukan nilai siswa berdasarkan dari tugas Quiz yang dikirim oleh siswa</p>
                                        <a href="<?= base_url('nilai_siswa/quiz'); ?>" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3" style="max-width: 500px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Post-test</h5>
                                        <p class="card-text">Masukan nilai siswa berdasarkan dari tugas Post-test yang dikirim oleh siswa</p>
                                        <a href="<?= base_url('nilai_siswa/posttest'); ?>" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->