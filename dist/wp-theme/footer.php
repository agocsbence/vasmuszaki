</main>
	<footer class="bg-dark text-white mt-5">
        <div class="container">
            <div class="row p-3">
                <div class="col-sm-12 col-lg-4">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/logo-footer.png" alt="Sziget Szerelvény Kft." style="width: 130px;">
                </div>
                <div class="col-sm-12 col-lg-4 gy-4 gy-sm-0">
                    <p><i class="bi bi-telephone"></i> <a href="tel:+36 70 938 9703">+36 70 938 9703</a></p>
					<p><i class="bi bi-file-earmark-text"></i> <a href="<?php echo get_permalink(3); ?>">Adatkezelés</a></p>
                </div>
                <div class="col-sm-12 col-lg-4 gy-4 gy-sm-0">
                    <p><i class="bi bi-geo-alt"></i> 2310 Szigetszentmiklós Gyári út 17.</p>
                    <p><i class="bi bi-envelope"></i> <a href="mailto:vasmuszaki@szigetszerelveny.hu">vasmuszaki@szigetszerelveny.hu</a></p>
                    <p><i class="bi bi-facebook"></i> <a href="https://www.facebook.com/vasmuszakisziget" target="blank">Facebook</a></p>
                </div>
            </div>
        </div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript">
        //zoom images in single.php
        function zoom(e){
            var zoomer = e.currentTarget;
            e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
            e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
            x = offsetX/zoomer.offsetWidth*100
            y = offsetY/zoomer.offsetHeight*100
            zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }
    </script>
    <?php wp_footer(); ?>
</body>

</html>