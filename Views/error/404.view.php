<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="error-page" style="display: flex; align-items: center; justify-content: center; min-height: 80vh;">
    <div class="error-wrap">
        <div class="error-card">
            <h1 class="error-title" style="color: var(--primary) !important; font-size: 6rem;">404</h1>
            <h2 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 1rem;">Page Not Found</h2>
            <p class="error-text">
                The page you are looking for doesn't exist or has been moved.
            </p>
            <div class="error-actions">
                <a href="/WS03/Public/" class="btn" style="background: var(--primary); color: white; padding: 0.8rem 2rem; border-radius: var(--radius-sm);">
                    <i class="fa fa-house"></i>
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>