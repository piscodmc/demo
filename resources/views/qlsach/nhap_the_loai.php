<form action="{{url('qlsach/themtheloai')}}" method = "post">
    <table>
        <tr>
            <td>ID</td>
            <td>Tên thể loại</td>
        </tr>  
        <tr>
            <td>
                <input type='text' name='id' style="width: 100px;">
            </td>
            <td>
                <input type='text' name='ten'><br>
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