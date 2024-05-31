                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url('laporanfpdf'); ?>" class="btn btn-primary btn-xs">Cetak Laporan Pretest</a>
                            <a href="<?= base_url('laporanfpdf/quiz'); ?>" class="btn btn-primary btn-xs">Cetak Laporan Quiz</a>
                            <a href="<?= base_url('laporanfpdf/posttest'); ?>" class="btn btn-primary btn-xs">Cetak Laporan Posttest</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="p-3 mb-2 bg-secondary text-white">
                            <h5>Pre-Test</h5>
                        </div>
                        <div class="table table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Jenis Test</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Ganjil/Genap</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($name as $m) : ?>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $m['nis']; ?></td>
                                        <td><?= $m['keterangan']; ?></td>
                                        <td><?= $m['name']; ?></td>
                                        <td><?= $m['gg']; ?></td>
                                        <td><strong><?= $m['nilai']; ?></strong></td>
                                        <td>


                                        </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>



                    <div class="col-lg">
                        <div class="p-3 mb-2 bg-secondary text-white">
                            <h5>Quiz</h5>
                        </div>
                        <div class="table table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Jenis Test</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Ganjil/Genap</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($keterangan as $k) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $k['nis']; ?></td>
                                            <td><?= $k['keterangan']; ?></td>
                                            <td><?= $k['name']; ?></td>
                                            <td><?= $k['gg']; ?></td>
                                            <td><strong><?= $k['nilai']; ?></strong></td>
                                            <td>

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-lg">
                        <div class="p-3 mb-2 bg-secondary text-white">
                            <h5>Post-test</h5>
                        </div>
                        <div class="table table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Jenis Test</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Ganjil/Genap</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($nilai as $n) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $n['nis']; ?></td>
                                            <td><?= $n['keterangan']; ?></td>
                                            <td><?= $n['name']; ?></td>
                                            <td><?= $n['gg']; ?></td>
                                            <td><strong><?= $n['nilai']; ?></strong></td>
                                            <td>


                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- End of Main Content -->
                </div>
                </div>