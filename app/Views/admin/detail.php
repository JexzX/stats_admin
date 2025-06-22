<?= $this->include('templates/header') ?>

<div class="card shadow">
    <div class="card-header" style="background-color: <?= $admin['role_color'] ?>">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-white mb-0"><?= $admin['name'] ?></h2>
            <a href="/" class="btn btn-light btn-sm">
                <i class="fas fa-arrow-left me-1"></i> Back
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <h4 class="d-inline-block border-bottom pb-2" style="color: <?= $admin['role_color'] ?>">
                        <i class="fas fa-id-card me-2"></i>Role
                    </h4>
                    <p class="lead"><?= $admin['role'] ?></p>
                </div>

                <div class="mb-4">
                    <h4 class="d-inline-block border-bottom pb-2" style="color: <?= $admin['role_color'] ?>">
                        <i class="fas fa-car me-2"></i>Vehicles
                    </h4>
                    <ul class="list-group">
                        <?php foreach($admin['vehicles'] as $vehicle): ?>
                        <li class="list-group-item"><?= $vehicle ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-4">
                    <h4 class="d-inline-block border-bottom pb-2" style="color: <?= $admin['role_color'] ?>">
                        <i class="fas fa-home me-2"></i>Properties
                    </h4>
                    <div class="card">
                        <div class="card-body">
                            <h5>Temporary Property</h5>
                            <p>
                                <strong>Type:</strong> <?= $admin['properties']['temporary']['type'] ?><br>
                                <strong>Name:</strong> <?= $admin['properties']['temporary']['name'] ?>
                            </p>

                            <h5>House</h5>
                            <p><?= $admin['properties']['house'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h4 class="d-inline-block border-bottom pb-2" style="color: <?= $admin['role_color'] ?>">
                        <i class="fas fa-chart-line me-2"></i>Stats
                    </h4>
                    <div class="progress mb-2" style="height: 30px;">
                        <?php foreach($admin['stats'] as $stat): ?>
                        <div class="progress-bar" style="width: 25%; background-color: <?= $admin['role_color'] ?>">
                            <?= $stat ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>