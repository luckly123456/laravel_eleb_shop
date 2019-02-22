<table>
    <tr>
        <td>id</td>
        <td>姓名</td>
        <td>年龄</td>
        <td>操作</td>
    </tr>
    <?php foreach ($students as $stu):?>
    <tr>
        <td><?=$stu->id?></td>
        <td><?=$stu->name?></td>
        <td><?=$stu->age?></td>
        <td>删除</td>
    </tr>
    <?php endforeach;?>
</table>
