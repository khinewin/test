@foreach($tests as $t)
    <tr>
        <td>{{$t->title}}</td>
        <td>{{$t->price}}</td>
        <td><span id="del" idd="{{$t->id}}" class="glyphicon glyphicon-trash"></span></td>
    </tr>
    @endforeach