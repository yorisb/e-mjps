<div class="container">


    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Input Siswa</h1>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>

                <form class="user" method="post" action="<?= base_url('input_siswa'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nis" name="nis" placeholder="Nomor Induk Sekolah" value="<?= set_value('nis'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Fullname" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text " class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Submit
                    </button>
                </form>
                <hr>
            </div>
        </div>
    </div>