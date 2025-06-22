<?= $this->include('templates/header') ?>

<h1 class="text-center mb-5">Database Admin</h1>

<div class="row">
    <?php foreach($admins as $index => $admin): ?>
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-header" style="background-color: <?= $admin['role_color'] ?>">
                <h5 class="card-title text-white mb-0"><?= $admin['name'] ?></h5>
            </div>
            <div class="card-body">
                <h6 class="card-subtitle mb-2" style="color: <?= $admin['role_color'] ?>">
                    <?= $admin['role'] ?>
                </h6>

                <div class="mb-3">
                    <h6>Vehicles:</h6>
                    <div class="d-flex flex-wrap gap-2">
                        <?php foreach($admin['vehicles'] as $vehicle): ?>
                        <span class="badge bg-secondary"><?= $vehicle ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="/detail/<?= $index ?>" class="btn btn-sm btn-outline-primary">
                    View Details <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?= $this->include('templates/footer') ?>