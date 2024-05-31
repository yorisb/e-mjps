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


                        <?php
                        $fitur = "SELECT * FROM user_fitur WHERE role_id = 5";
                        $fitur = $this->db->query($fitur)->result_array();
                        ?>

                        <?php $i = 1; ?>
                        <?php foreach ($fitur as $f) : ?>
                            <div class="mt-3">
                                <div class="card" style="max-width: 250px;;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $f['judul']; ?></h5>
                                        <a href="<?= $f['url']; ?>" class="btn btn-primary">Lihat Modul</a>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <form action="<?= base_url('posttest/upload'); ?>" class="row g-3 " method="post" enctype="multipart/form-data">
                        <?= form_open_multipart('posttest/upload'); ?>

                        <div class="col-lg-7 mx-auto">
                            <div class="text-center">
                                <div class=" mt-3">

                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">NIS</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nis" name="nis" value="<?= $user['nis']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Full name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['name']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label for="file" class="col-sm-2 col-form-label">Full name</label>
                                        <div class="col-sm-10">
                                            <?= form_open_multipart('posttest/upload'); ?>
                                            <input type="file" class="form-control" id="file" name="file" value="<?= set_value('file'); ?>" method="post" enctype="multipart/form-data">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label"><?= $title; ?></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fitur" name="fitur" value="<?= $title; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->