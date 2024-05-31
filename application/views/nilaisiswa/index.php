                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="col-lg-8">
                        <div class="p-3 mb-2 bg-secondary text-white">
                            <h5>Pre-Test</h5>
                        </div>
                        <div class="table table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Test</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($name as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $m['keterangan']; ?></td>
                                            <td><?= $m['name']; ?></td>
                                            <td><?= $m['nilai']; ?></td>
                                            <td>
                                                <a href="" class="badge bg-danger text-white"></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="col-lg-8">
                        <div class="p-3 mb-2 bg-secondary text-white">
                            <h5>Quiz</h5>
                        </div>
                        <div class="table table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Test</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($keterangan as $k) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $k['keterangan']; ?></td>
                                            <td><?= $k['name']; ?></td>
                                            <td><?= $k['nilai']; ?></td>
                                            <td>
                                                <a href="" class="badge bg-danger text-white"></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="col-lg-8">
                        <div class="p-3 mb-2 bg-secondary text-white">
                            <h5>Post-test</h5>
                        </div>
                        <div class="table table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Test</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($nilai as $n) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $n['keterangan']; ?></td>
                                            <td><?= $n['name']; ?></td>
                                            <td><?= $n['nilai']; ?></td>
                                            <td>
                                                <a href="" class="badge bg-danger text-white"></a>
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