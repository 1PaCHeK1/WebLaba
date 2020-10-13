<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img class="logo" src="/assets/img/logo.png" alt="Logo">
            </div>
            <div class="col-5">
                <h5><a href="#">Техническая поддержка</a></h5>
                <br>
                <h5><a href="#">Лицензионное соглашение</a></h5>
            </div>
            <div class="footer_3 col-4">
                <br><br><br><br>
                <h4>8 (800) 555 35-35</h4>
            </div>
        </div>
    </div>
</footer>

<?php
if (isset($js_default))
    foreach($js_default as $item)
        echo "<script src=\"$item\"></script>";
if (isset($js_linked))
    foreach($js_linked as $item)
        echo "<script src=\"$item\"></script>";
?>

</body>
</html>