<?php
    // TODO 1 MENGAMBIL DATA DARI TABLE POST DB BLOG
    $sql = "SELECT * FROM post LEFT JOIN user ON post.authorId = user.id Order By post.publishedAt DESC";
    $query = $koneksi->query($sql);
?>

<?php
    // TODO 2 Extract Data Dari variable $query
    while ($result = $query->fetch_array()) : 
?>

<article
    class="card card-full hover-a py-4 post-1305 post type-post status-publish format-video has-post-thumbnail hentry category-video tag-science tag-starvation post_format-post-format-video"
    id="post-1305">
    <div class="row">
        <div class="col-sm-6 col-md-12 col-lg-6">
            <!--thumbnail-->
            <div class="ratio_360-202 image-wrapper">
                <a href="https://demo.bootstrap.news/boxed/2019/06/the-man-who-saved-millions-from-starvation/">
                    <img width="360" height="202"
                        src="https://demo.bootstrap.news/boxed/wp-content/themes/bootnews/assets/img/assets/lazy-empty.png"
                        class="img-fluid lazy wp-post-image" alt="The man who saved millions from starvation"
                        loading="lazy"
                        data-src="https://demo.bootstrap.news/boxed/wp-content/uploads/2019/06/pexels-photo-999267-360x202.jpg"
                        srcset="https://demo.bootstrap.news/boxed/wp-content/uploads/2019/06/pexels-photo-999267-360x202.jpg 360w, https://demo.bootstrap.news/boxed/wp-content/uploads/2019/06/pexels-photo-999267-372x208.jpg 372w, https://demo.bootstrap.news/boxed/wp-content/uploads/2019/06/pexels-photo-999267-251x141.jpg 251w, https://demo.bootstrap.news/boxed/wp-content/uploads/2019/06/pexels-photo-999267-230x129.jpg 230w, https://demo.bootstrap.news/boxed/wp-content/uploads/2019/06/pexels-photo-999267-203x114.jpg 203w, https://demo.bootstrap.news/boxed/wp-content/uploads/2019/06/pexels-photo-999267-165x92.jpg 165w"
                        sizes="(max-width: 360px) 100vw, 360px" /> <!-- post type -->
                    <div class="post-type-icon">
                        <span class="fa-stack-sea text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>

        <!--content-->
        <!-- TODO 3 TAMPILKAN DATA SESUAI DENGAN DATABASE -->
        <div class="col-sm-6 col-md-12 col-lg-6">
            <div class="card-body pt-3 pt-sm-0 pt-md-3 pt-lg-0">
                <h3 class="card-title h2 h3-sm h2-md">
                    <a href="https://demo.bootstrap.news/boxed/2019/06/the-man-who-saved-millions-from-starvation/">
                        <?= $result['title']; ?>
                    </a>
                </h3>
                <div class="card-text mb-2 text-muted small">

                    <span class="fw-bold d-none d-sm-inline me-1">
                        <a href="https://demo.bootstrap.news/boxed/author/<?= $result['firstName']; ?>" title="Posts by <?= $result['firstName']; ?>" rel="author">
                            <?= $result['firstName']; ?>
                        </a>
                    </span>

                    <time class="news-date" datetime="<?= $result['publishedAt']; ?>">
                        <?= $result['publishedAt']; ?>
                    </time>
                </div>
                <p class="card-text">
                    <?= $result['summary']; ?>
                </p>
            </div>
        </div>
    </div>
</article>

<?php
    endwhile;
?>
