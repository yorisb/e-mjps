                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Query db -->
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                                    FROM `user_menu` JOIN `user_access_menu` 
                                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                    WHERE `user_access_menu`.`role_id` = $role_id
                                    ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
                    $menu = $this->db->query($queryMenu)->result_array();
                    ?>
                    <!-- Siapkan Sub Menu Sesuai Menu-->
                    <?php

                    $querySubMenu = "SELECT *
                                    FROM `user_sub_menu` JOIN `user_menu` 
                                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                    WHERE `user_sub_menu`.`menu_id` = 3
                                    AND `user_sub_menu`.`is_active` = 1 
                  ";

                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <form action="<?= base_url('input_mapel/upload'); ?>" class="row g-3 " method="post" enctype="multipart/form-data">
                        <?= form_open_multipart('input_mapel/upload'); ?>

                        <div class="col-lg-7 mx-auto">
                            <div class="text-center">
                                <div class=" mt-3">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="role_id" name="role_id" value="1" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="fitur" name="fitur" value="Pre-test" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="judul" name="judul" value="<?= set_value('judul'); ?>" placeholder="Judul Materi">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="url" name="url" value="<?= set_value('materi'); ?>" placeholder="Masukan URL/Link GDrive">
                                    </div>

                                    <div class="col-sm-10">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <a href="<?= base_url('input_mapel'); ?>" class="btn btn-danger ">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.container-fluid -->
                </div>
                </div>
                <!-- End of Main Content -->