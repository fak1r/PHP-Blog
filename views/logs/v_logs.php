<style>
    table, td{
        border: 2px solid #2bb401;
    }
    td{
        padding: 10px;
    }
    .danger{
        color: #ff0000;
    }
</style>
    <?php if ($showDay):?>
        <?php if ($e404):?>
            <h1>No logs</h1>
        <?php  else: ?>
            <h1>Логи за: <?=$name?></h1>
            <table>
                <tr>
                    <th>Time</th>
                    <th>URI</th>
                    <th>IP</th>
                    <th>Referer</th>
                </tr>
                <?php foreach ($visits as $day): ?>
                    <tr class="<?= $day['isDanger'] ? 'danger' : ''?>">
                        <td><?=$day['dt']?> </td>
                        <td><?=$day['ip']?> </td>
                        <td><?=$day['uri']?> </td>
                        <td><?=$day['referer']?> </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        <?php else: ?>
        <div>
            <ul>
                <?php foreach ($visitsDays as $day): ?>
                    <li>
                        <a href="logs/<?=$day?>"><?=$day?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif;?>