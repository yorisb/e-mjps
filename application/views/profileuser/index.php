<div class="container">


    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                </div>

                <?= form_open_multipart('profileuser'); ?>
                <form class="user" method="post" action="<?= base_url('profileuser'); ?>">
                    <div class="container mt-5 " style="max-width: 300px;">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="" width="900" height="900">
                    </div>

                    <div class="container mt-3">
                        <h2 class="profile-username text-center"><strong><?= $user['name']; ?></strong></h2>
                        <h4 class="profile-username text-center"><?= $user['email']; ?></strong></h4>
                        <h4 class="profile-username text-center">SMK MJPS 1 Tasikmalaya</h4>
                        <h5 class="profile-username text-center">Perakitan Kelas IX</h5>
                    </div>

                </form>
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>


<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->