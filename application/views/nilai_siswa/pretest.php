<div class="container">


    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                </div>
                <form class="user" method="post" action="<?= base_url('nilai_siswa/pretest'); ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" value="Pre-test" readonly>
                    </div>

                    <?php
                    $name = "SELECT * FROM user WHERE role_id = 2";
                    $name = $this->db->query($name)->result_array();
                    ?>

                    <?php
                    $nis = "SELECT * FROM user WHERE role_id = 2";
                    $nis = $this->db->query($nis)->result_array();
                    ?>

                    <div class="form-group">
                        <select class="form-control" id="nis" name="nis" value="<?= set_value('nis'); ?>">
                            <option value="">Pilih NIS</option>
                            <?php foreach ($nis as $n) : ?>
                                <option value="<?= $n['nis']; ?>"><?= $n['nis']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                            <option value="">Pilih Siswa</option>
                            <?php foreach ($name as $m) : ?>
                                <option value="<?= $m['name']; ?>"><?= $m['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="gg" name="gg" value="<?= set_value('gg'); ?>">
                            <option value="">Pilih Ganjil/Genap</option>
                            <option>Ganjil</option>
                            <option>Genap</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text " class="form-control form-control-user" id="nilai" name="nilai" placeholder="Nilai" value="<?= set_value('nilai'); ?>">
                        <?= form_error('nilai', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Submit
                    </button>
                </form>
                <hr>
            </div>
        </div>
    </div>
    <h5 class="h5 mb-4 text-gray-800">Pre-test</h5>
    <div class="table table-hover">
        <div class="col-lg">
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
                            <td><?= $k['nilai']; ?></td>
                            <td>
                                <a href="<?= base_url('nilai_siswa/delete/') ?><?= $k['id']; ?>" class="badge bg-danger text-white" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"></a>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

    <div class="col-md-8">
        <div class="card-body">
            <a href="<?= base_url('nilai_siswa'); ?>" class="btn btn-primary ">Kembali</a>
        </div>
    </div>

</div>
</div>