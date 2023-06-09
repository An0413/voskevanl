<option value="">Ընտրել</option>
@foreach($workers as $worker)
    <option value="{{$worker->id}}">{{$worker->name . ' ' . $worker->lastname}}</option>
@endforeach
