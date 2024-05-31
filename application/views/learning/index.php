                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="row justify-content-md-center">

                        <?php
                        $fitur = "SELECT * FROM user_fitur WHERE role_id = 3";
                        $fitur = $this->db->query($fitur)->result_array();
                        ?>

                        <?php $i = 1; ?>
                        <?php foreach ($fitur as $f) : ?>
                            <div class="mt-3 pd-3">
                                <div class="card" style="max-width: 400px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $f['judul']; ?></h5>
                                        <a href="<?= $f['url']; ?>" class="btn btn-primary">Lihat Video</a>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->