<div class="col-md-4">
    <div class="lastest">
        <h3>সর্বশেষ খবর</h3>
        <hr>
        <ul>
            @foreach($title as $title)
            <li>
                <a href="{{url('show'),$title->id}}">{{$title->title}}</a>
            </li>
            <hr>
                @endforeach
        </ul>
    </div>

