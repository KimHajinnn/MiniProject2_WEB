<?php include "header.php"; ?>

<nav class="navbar navbar-expand-lg fixed-top glass-nav">
    <div class="container">
        <a class="navbar-brand fw-bold gradient-text" href="#home">
            <?= $profile['name']; ?>
        </a>
    </div>
</nav>

<section id="home" class="hero-section">
    <div class="container text-center">
        <img src="<?= $profile['photo']; ?>" class="profile-img mb-4">
        <h1 class="hero-title"><?= $profile['name']; ?></h1>
        <h4 class="gradient-text mb-3"><?= $profile['role']; ?></h4>
        <p class="hero-desc"><?= $profile['description']; ?></p>
        <div class="mt-3">
            <p>Email: <?= $profile['email']; ?></p>
            <p>Phone: <?= $profile['phone']; ?></p>
            <p>Location: <?= $profile['location']; ?></p>
            <a href="<?= $profile['linkedin']; ?>" target="_blank">LinkedIn</a> |
            <a href="<?= $profile['github']; ?>" target="_blank">GitHub</a>
        </div>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container">
        <h2 class="section-title text-center mb-5">About Me</h2>
        <div class="row g-5">
            <div class="col-md-6">
                <div class="glass-card">
                    <h4>Profile</h4>
                    <p><?= $profile['about']; ?></p>

                    <h5 class="mt-4">Experience</h5>
                    <ul>
                        <?php while($exp = $experiences->fetch_assoc()): ?>
                            <li><?= $exp['experience']; ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="glass-card">
                    <h4>Skills</h4>
                    <?php while($skill = $skills->fetch_assoc()): ?>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                <span><?= $skill['name']; ?></span>
                                <span><?= $skill['level']; ?>%</span>
                            </div>
                            <div class="progress modern-progress">
                                <div class="progress-bar"
                                    style="width: <?= $skill['level']; ?>%">
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="certificates" class="section-padding">
    <div class="container">
        <h2 class="section-title text-center mb-5">Certificates</h2>
        <div class="row g-4">
            <?php while($cert = $certificates->fetch_assoc()): ?>
                <div class="col-md-4">
                    <div class="certificate-card">
                        <img src="https://via.placeholder.com/400x220" class="img-fluid rounded mb-3">
                        <h5><?= $cert['title']; ?></h5>
                        <p><?= $cert['issuer']; ?> (<?= $cert['year']; ?>)</p>

                        <?php if(!empty($cert['credential_url'])): ?>
                            <a href="<?= $cert['credential_url']; ?>" 
                                target="_blank" 
                                class="btn btn-glow btn-sm mt-2">
                                View Credential
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>