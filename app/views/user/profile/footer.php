</section>
<!-- footer -->
<script src="<?=BASEURL?>js/navbar.js"></script>
<!-- <script src="<?=BASEURL?>js/signup.js"></script> -->
<script src="<?=BASEURL?>js/script.js"></script>
<script src="<?=BASEURL?>js/user/sidebar.js"></script>
<script src="<?=BASEURL?>js/jquery-3.6.0.min.js"></script>
<script>
         $(document).on('click', '.sidebarLink', function()
        {
            $(this).addClass('active').siblings().removeClass('active')
        })
</script>
</body>
</html>