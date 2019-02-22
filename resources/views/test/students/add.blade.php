<form method="post" action="/student/save" enctype="multipart/form-data" >
    姓名: <input type="text" name="name"><br>
    年龄: <input type="text" name="age"><br>
    {{csrf_field()}}
    <input type="submit" name="提交"><br>
</form>