<div class="container">
    <div>
        <a href="/card">
            <img id="buy_card" class="center-block" src="/image/card_01.jpg">
            </img>
        </a></div>
</div>

<div class="prod_content">
    <div class="prod_list container">
        <div class="row">
            <?php
            $count = 0;
            foreach ($products as $product) {
                echo <<<EOT
                <div class="col-sm-3 col-md-3">
 <a  href="/appoint/detail/$product->id" target="_blank">
    <div class="prod_item" onmouseover="itemHover(this, 1)" onmouseout="itemHover(this, 0)">
        <img src="$product->img">

        <p style=" text-decoration: none;">$product->name</p>

        <p>$product->description</p>
        <p>$product->price</p>
        <input type="button" value="立即预约" style="display: none"
               onclick="location.href='/appoint/detail/$product->id'">
    </div>
</a>
</div>
EOT;
                $count++;
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
