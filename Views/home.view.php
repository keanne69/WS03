<?php
    loadPartial('head');
    loadPartial('navbar');
    loadPartial('showcase');
?>

<section class="top-banner">
    <div class="container mx-auto max-w-6xl px-4">
        <h2>Available Opportunities</h2>
        <p>
            Explore job openings from different categories and companies.
        </p>
    </div>
</section>

<section class="jobs-section">
    <div class="container mx-auto max-w-6xl px-4">
        <div class="jobs-section-header">
            <span class="jobs-section-badge">Latest Jobs</span>
            <h2 class="jobs-section-title">Recent Listings</h2>
            <p class="jobs-section-subtitle">
                Here are some of the recently posted job opportunities.
            </p>
        </div>

        <div class="jobs-grid">
            <article class="job-card">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Engineering</span>
                        <span class="job-badge">Local</span>
                    </div>
                    <h3 class="job-card-title">Software Engineer</h3>
                    <p class="job-card-description">Develop software applications and support technical projects.</p>
                    <div class="job-card-meta">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$80,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">New York</span>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-details-btn">View Details</a>
                </div>
            </article>

            <article class="job-card">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Marketing</span>
                        <span class="job-badge remote">Remote</span>
                    </div>
                    <h3 class="job-card-title">Marketing Specialist</h3>
                    <p class="job-card-description">Assist in planning and managing company marketing activities.</p>
                    <div class="job-card-meta">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$70,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">San Francisco</span>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-details-btn">View Details</a>
                </div>
            </article>

            <article class="job-card">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Web</span>
                        <span class="job-badge">Local</span>
                    </div>
                    <h3 class="job-card-title">Web Developer</h3>
                    <p class="job-card-description">Build and maintain websites and business web applications.</p>
                    <div class="job-card-meta">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$75,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">Los Angeles</span>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-details-btn">View Details</a>
                </div>
            </article>

            <article class="job-card">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Analytics</span>
                        <span class="job-badge remote">Remote</span>
                    </div>

                    <h3 class="job-card-title">Data Analyst</h3>
                    <p class="job-card-description">
                        We are hiring a Data Analyst to analyze and interpret data for insights.
                    </p>

                    <div class="job-card-meta">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$65,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">Chicago</span>
                        </div>
                        <div class="job-meta-row job-tags-row">
                            <span class="job-meta-label">Tags</span>
                            <div class="job-tags">
                                <span class="job-tag">Data Analysis</span>
                                <span class="job-tag">Statistics</span>
                            </div>
                        </div>
                    </div>

                    <a href="/WS03/Public/listings/details" class="job-details-btn">View Details</a>
                </div>
            </article>

            <article class="job-card">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Design</span>
                        <span class="job-badge">Local</span>
                    </div>

                    <h3 class="job-card-title">Graphic Designer</h3>
                    <p class="job-card-description">
                        Join our creative team as a Graphic Designer and bring ideas to life.
                    </p>

                    <div class="job-card-meta">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$60,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">Miami</span>
                        </div>
                        <div class="job-meta-row job-tags-row">
                            <span class="job-meta-label">Tags</span>
                            <div class="job-tags">
                                <span class="job-tag">Graphic Design</span>
                                <span class="job-tag">Creative</span>
                            </div>
                        </div>
                    </div>

                    <a href="/WS03/Public/listings/details" class="job-details-btn">View Details</a>
                </div>
            </article>

            <article class="job-card">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Data Science</span>
                        <span class="job-badge remote">Remote</span>
                    </div>

                    <h3 class="job-card-title">Data Scientist</h3>
                    <p class="job-card-description">
                        We're looking for a Data Scientist to analyze complex data and generate insights.
                    </p>

                    <div class="job-card-meta">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$90,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">Seattle</span>
                        </div>
                        <div class="job-meta-row job-tags-row">
                            <span class="job-meta-label">Tags</span>
                            <div class="job-tags">
                                <span class="job-tag">Data Science</span>
                                <span class="job-tag">Machine Learning</span>
                            </div>
                        </div>
                    </div>

                    <a href="/WS03/Public/listings/details" class="job-details-btn">View Details</a>
                </div>
            </article>
        </div>

        <div class="jobs-footer-link-wrap">
            <a href="/WS03/Public/listings" class="jobs-footer-link">
                <span>Show All Jobs</span>
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<section class="container mx-auto max-w-6xl px-4 mb-16">
    <div class="cta-banner">
        <div>
            <h2>Post a Job Opening</h2>
            <p>Share your job listing and reach more applicants.</p>
        </div>

        <a href="/WS03/Public/listings/create" class="btn btn-primary">
            <i class="fa fa-edit"></i>
            Post a Job
        </a>
    </div>
</section>

<?php
loadPartial('footer');
?>