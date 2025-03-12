<form action="{{url('qlsach/them2theloai')}}" method="post">
    <table>
        <tr>
            <td>ID 1</td>
            <td>Tên thể loại 1</td>
        </tr>  
        <tr>
            <td>
                <input type='text' name='id1' style="width: 100px;">
            </td>
            <td>
                <input type='text' name='ten1'><br>
            </td>
        </tr>
        <tr>
            <td>ID 2</td>
            <td>Tên thể loại 2</td>
        </tr>  
        <tr>
            <td>
                <input type='text' name='id2' style="width: 100px;">
            </td>
            <td>
                <input type='text' name='ten2'><br>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type='submit' value='Lưu'>
            </td>
        </tr>
    </table>
    {{ csrf_field() }}
</form>
