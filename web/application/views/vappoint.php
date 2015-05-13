<div class="container">
    <div>
        <a href="/card">
            <img id="buy_card" class="center-block" src="<?=getImg('card_01.jpg')?>">
            </img>
        </a></div>
</div>

<div class="prod_content">
    <div class="prod_list container">
        <div class="row">
            <?php
            $count = 0;
            $happyend = true;
            foreach ($products as $product) {
                if ($count % 4 == 0) {
                    echo '<div class="row">';
                    $happyend = false;
                }
                echo <<<EOT
                <div class="col-sm-3 col-md-3">
 <a  href="/appoint/detail/$product->id" target="_blank">
    <div class="prod_item" onmouseover="itemHover(this, 1)" onmouseout="itemHover(this, 0)">
        <img src="$product->img">

        <h2>$product->name</h2>

        <p>$product->brand</p>
        <b> $product->price_pre $product->price $product->price_post</b>
        <input type="button" value="立即预约" style="display: none"
               onclick="location.href='/appoint/detail/$product->id'">
    </div>
</a>
</div>
EOT;

                if ($count % 4 == 3) {
                    echo '</div>';
                    $happyend = true;
                }
                $count++;
            }
            if (!$happyend) {
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

<script>

    function itemHover(x, b) {
        var box = $(x);
        if (b) {
            box.find('input').show();
            box.css('border-color', '#398439');
        } else {
            box.find('input').hide();
            box.css('border-color', '#fff');
        }
    }
</script>
