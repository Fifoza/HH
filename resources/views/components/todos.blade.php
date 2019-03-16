@php
    $todos = config('app.todos');
@endphp
<div id="todos" style="position:absolute;top: 2rem;left: 10vw;width: 80vw;min-height: 5vw;background-color: gray;border: 2px solid black;z-index: 999;color: white;display: none;">
    Задачки за страница "{{$routeName}}":
    <ul class="ml-5">
        @foreach($todos[$routeName] as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>

<script>
    let visible = false;

    window.onkeydown = listenForCtrlKeyDown;

    function listenForCtrlKeyDown(e){
        if(e.ctrlKey && e.shiftKey){
            if(visible){
                document.getElementById('todos').style.display = 'none';
                visible = false;
            }else{
                document.getElementById('todos').style.display = 'block';
                visible = true;
            }
        }
    }
</script>