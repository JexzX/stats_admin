<?= $this->include('templates/header') ?>

<div class="container">
    <h1 class="my-4">Search Results for "<?= esc($query) ?>"</h1>

    <?php if (empty($results)): ?>
    <div class="alert alert-warning">No admins found matching your criteria.</div>
    <?php else: ?>
    <div class="row">
        <?php foreach($results as $index => $admin): ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-header" style="background-color: <?= $admin['role_color'] ?>">
                    <h5 class="card-title text-white mb-0"><?= $admin['name'] ?></h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2" style="color: <?= $admin['role_color'] ?>">
                        <?= $admin['role'] ?>
                    </h6>
                    <a href="/detail/<?= $index ?>" class="btn btn-sm btn-outline-primary">
                        View Details <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<?= $this->include('templates/footer') ?>