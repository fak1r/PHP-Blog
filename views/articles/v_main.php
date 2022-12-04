<div class="row">

    <main class="col col-12 col-md-9">
    <h5>Статья №<?= $article['id_article'];?></h5>
    <div>
        <style>
            table, td{
                border: 2px solid #2bb401;
            }
            td{
                padding: 10px;
            }
        </style>

        <table>
            <tr>
                <td>Id article</td>
                <td>Title</td>
                <td>Content</td>
                <td>Date</td>
                <td>Category</td>
            </tr>
            <tr>
                <td><?= $article['id_article'];?></td>
                <td><?= $article['title'];?></td>
                <td><?= $article['content']?></td>
                <td><?= $article['dt_add']?></td>
                <td><a href="index.php?c=dbcat&id=<?= $article['id_cat']?>"><?= $article['id_cat']?></a></td>
            </tr>
        </table>
        <br>
    </div>
    <hr>
    </main>
</div>