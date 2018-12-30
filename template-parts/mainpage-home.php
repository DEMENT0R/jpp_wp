<!-- Main page Style fix -->
<style>
    .site-main {
      margin-top: 0 !important;
      margin-left: 0 !important;
    }
</style>
<!-- Main contant zone -->
<div id="fullpage">
    <div class="section">
        <div class="container-flex">
            <div class="bg-image bg-bottom-right main-image-1">
                <div id="main-block-1">
                    <h1>Платформа для поддержки японских инвестиций на Дальнем востоке</h1>
                    
                    <!--                     
                        <style>
                            .dark-layout:checked ~ .test {
                              transform: translateX(30vw);
                            }

                            .light-layout:checked ~ .test {
                              transform: translateX(0vw);
                            }
                        </style>

                        <input id="light-layout" class="light-layout" type="radio" name="layout" checked>
                        <label for="light-layout" class="layout-buttons settings-box-element">Default</label>
                        
                        <input id="dark-layout" class="dark-layout" type="radio" name="layout">
                        <label for="dark-layout" class="layout-buttons settings-box-element">Right</label>
                     -->
                     
                    <p class="test">
                        Инициирована и создана Банком Японии для Международного Сотрудничества, Фондом развития Дальнего Востока и Байкальского региона и Агентством по привлечению инвестиций.
                    </p>
                    <br>
                    <a id="main-button-1" class="next-button" href="#">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-flex">
            <div class="bg-image bg-bottom-right main-image-2">
                <div id="main-block-2">
                    <div class="container-flex column-area text-justify">
                        <h1 style="break-after: column;">Пресс-центр</h1>
                        <div class="container-flex" style="break-inside: avoid-column;"><img src="https://api.fnkr.net/testimg/350x200/777/FFF/?text=Test+image" alt="Test image" width="100%">
                            <h4>Проект с изображением</h4>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet aliquam metus, ornare vulputate dolor condimentum eu.
                            <p class="text-secondary">2018-01-01</p>


                            <hr class="text-secondary">

                        </div>
                        <div class="container-flex d-none d-md-block" style="break-inside: avoid-column;">
                            <h4>Заголовок</h4>
                            Morbi nec massa mollis, ultricies leo at, imperdiet sem. Cras non tempus leo, vitae consequat sapien. Curabitur ut turpis elit.
                            <p class="text-secondary">2018-01-01</p>


                            <hr class="text-secondary">

                        </div>
                        <div class="container-flex d-none d-md-block" style="break-inside: avoid-column;">
                            <h4>Длинный заголовок не на одну строку</h4>
                            Fusce fringilla augue at sem placerat, vel convallis ipsum tempor.
                            <p class="text-secondary">2018-01-01</p>


                            <hr class="text-secondary">

                        </div>
                    </div>
                    <div class="container-flex column-area">
                        <p style="break-inside: avoid-column; break-after: column;">
                            <a href="#">Пресс-релизы</a><br>
                            <a href="#">Реализуемые проекты</a><br>
                            <a href="#">Истории успеха</a><br>

                            <p class="mt-3" style="break-before: column;">
                                <a class="next-button" href="#">В раздел</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pl-md-5 pt-md-5" id="section1">
        <?php echo do_shortcode( '[su_posts template="template-parts/slides-loop.php" id="227, 173, 176" posts_per_page="-1" post_type="page" order="desc"]' ); ?>
    </div>
</div>
<script type="text/javascript" src="/wp-content/themes/jppv/js/fullpage.js?ver=%20"></script>
<script type="application/javascript" src="/wp-content/themes/jppv/js/index.js"></script>