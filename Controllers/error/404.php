<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="error-page">
    <div class="error-wrap">
        <div class="error-card">
            <div class="error-icon-wrap">
                <div class="error-icon-spin">
                    <i class="fa fa-exclamation-circle"></i>
                </div>
            </div>

            <span class="error-badge">Error 404</span>
            <h1 class="error-title">Page Not Found</h1>
            <p class="error-text">
                Sorry, the page you are looking for could not be found.
            </p>

            <div class="error-actions">
                <a href="/WS03/Public/" class="btn error-btn-primary">
                    <i class="fa fa-house"></i>
                    Back to Home
                </a>

                <a href="/WS03/Public/listings" class="btn error-btn-secondary">
                    <i class="fa fa-briefcase"></i>
                    Browse Jobs
                </a>
            </div>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>