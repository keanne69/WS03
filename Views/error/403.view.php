<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="error-page" style="display: flex; align-items: center; justify-content: center; min-height: 80vh;">
    <div class="error-wrap">
        <div class="error-card">
            <h1 class="error-title" style="color: var(--danger) !important; font-size: 6rem;">403</h1>
            <h2 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 1rem;">Access Denied</h2>
            <p class="error-text">
                You do not have permission to access this page. It may be restricted or require authentication.
            </p>
            <div class="error-actions">
                <a href="/WS03/Public/" class="btn error-btn-primary" style="padding: 0.8rem 2rem; border-radius: var(--radius-sm);">
                    <i class="fa fa-house"></i>
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>