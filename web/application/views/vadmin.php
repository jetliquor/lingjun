<html>
<head>
    <script src="<?= getJs('jquery-1.11.2.min.js') ?>"></script>
    <link rel="stylesheet" href="<?= getCss('admin.css') ?>">
    <?php
    function genTable($list, array $columns, $name)
    {
        echo "<table class='$name'>";
        $count = 0;
        foreach ($list as $item) {
            $lnclass = 'ln' . $count;
            echo "<tr class='$lnclass'>";
            do {
                $colume = current($columns);
                echo "<td><input disabled='disabled' value='" . $item->$colume . "'></input></td>";
            } while (next($columns) !== false);
            echo "<td>
<button onclick=\"onItemDelete('hxb_" . "$name', $item->id, '$name')\">删除</button>
<button onclick=\"onItemEdit('$name', '$lnclass', $item->id)\">编辑</button></td>>";
            echo "</tr>";

            $count++;
            reset($columns);
        }
        echo "</table>";
    }

    ?>
</head>

<body>
城市：
<?php
genTable($cities, array('id', 'name_cn'), 'city');
?>

产品：
<table>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <?php
    $count = 0;
    foreach ($products as $product) {
        $htmlcontent = "
<tr>
<td>$product->name</td>
<td>$product->city</td>
<td>$product->category</td>
<td>$product->img</td>
<td>$product->price</td>
<td>$product->brand</td>
<td>
<button onclick=\"onDelete(0, $product->id)\">删除</button><button>编辑</button>
</td>
</tr>\n";
        echo $htmlcontent;
        $count++;
    }
    ?>
</table>

<script>
    function onDelete(db_table, db_id, ui_table) {
        $.ajax({
            type: "GET",
            url: "/admin/delete/" + db_table + "/" + db_id,
            success: function (data) {
                var resp = $.parseJSON(data);
                if (resp.error == 0) {

                } else {
                    alert(resp.msg);
                }
            },
            error: function (resp) {

            }
        });
    }

    function onItemEdit(table, lnclass, id) {
        var line = $('.' + table + ' .' + lnclass);
        var cc = $(line.children());
        cc.find('input').removeAttr('disabled');
    }
</script>
</body>
</html>