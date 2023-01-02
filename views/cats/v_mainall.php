<div class="row">
    <main class="col col-12 col-md-9">
        <h5>Все категории</h5>
        <hr>
        <div>
            <style type="text/css">
                table, td, td.t0{

                }
                td{
                    border: 2px solid #2bb401;
                    padding: 10px;
                    text-align: center;
                }
                td.t0{
                    border: 0px solid #ffffff;
                    align-content: center;
                }
            </style>
            <table>
                <tr>
                    <td>Id category</td>
                    <td>Title</td>
                </tr>
                <?php foreach($cats as $cat): ?>
                <tr>
                    <td align="center"><?=$cat['id_cat'];?></td>
                    <td><a href="<?=BASE_URL?>cat/<?= $cat['id_cat']?>"><?=$cat['title'];?></a></td>
                    <?php if ((($userid == $cat['id_user']) || ($userid == 1))){ ?>
                    <td class="t0">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="<?=BASE_URL?>category/edit/<?=$cat['id_cat']?>">Edit</a></li>
                        </ul>
                    </td>
                    <td class="t0">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="<?=BASE_URL?>category/delete/<?=$cat['id_cat']?>">Delete</a></li></td>
                        </ul>
                    </td>
                    <?php } ?>
                </tr>
                <?php endforeach?>
                <tr>
                    <td class="t0">
                        <aside class="col col-12">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="<?=BASE_URL?>category/add">Add New</a></li></td>
                            </ul>
                        </aside>
                    </td>
                </tr>
            </table>
        </div>
        <hr>
    </main>
</div>
