<script src="{{URL::asset('js/vue.js')}}"></script>
<script src="{{URL::asset('js/axios.js')}}"></script>
<style>
.btn-circle{
    border-radius: 50%;
    width: 3vw;
    height: 5vw;
    margin: 1rem;
    font-size: 2.2rem;
}
.btn-circle-sm{
    border-radius: 50%;
    width:2vw;
    height: 4vw;
    margin: .8rem;
    font-size: 1rem;
}
</style>
@php
    $routeName = \Route::currentRouteName();
    $filepath = config_path('todos.txt');
    $todos = [];

    if(!\file_exists($filepath)){
        $routeList = "";
        foreach(\Route::getRoutes()->get() as $route){
            if($route->getName() !== null){
                $routeList .= "***" . $route->getName();
            }
        }
        
        file_put_contents($filepath, $routeList);


    }
    $fileContent = \file_get_contents($filepath);
    $pages = explode("***", $fileContent);
    \array_shift($pages);
    foreach($pages as $key => $value){
        $todosValues = explode("**", $value);
        array_shift($todosValues);
        $todos[explode("**", $value)[0]] = [];
        foreach($todosValues as $todoValue){
            array_push($todos[explode("**", $value)[0]], $todoValue);
        }
    }
    $todos = collect($todos[$routeName]);
@endphp
<div id="todos" class="bg-secondary overflow-auto" style="position:absolute;top: 10vh;left: 10vw;width: 80vw;min-height: 5vw;border: 2px solid black;z-index: 999;color: white;display: none;max-height:80vh;">
    <strong class="bg-warning rounded pl-1 pt-1 mb-2 ml-2 text-dark">Задачки за страница "{{$routeName}}": &nbsp;</strong>
    <ul  class="ml-5 mr-5 mt-2">
        <li v-for="(todo, index) in todos" class="list-unstyled">
            <div v-if="todo" class="form-group row bg-dark">
                <h3 class="col-8 mr-auto rounded">@{{todo}}</h3>
                <button @click="editTodo(index)" class="btn btn-circle btn-primary col-1 ml-auto">&#9998;</button>
                <button @click="deleteTodo(index)" class="btn btn-circle btn-danger col-1">&#9249;</button>
            </div>
            <div v-else class="form-group row">
                <textarea v-model="newTodoBody" @keyup="pressKyesInTodoForm($event)" rows="1" class="form-control col-8" placeholder="Напиши задача..." autofocus></textarea>
                <button @click="storeNewTodo(index)" class="btn btn-circle-sm btn-success col-1 ml-2" :disabled="storingTodoIsForbidden">&#128190;</button>
                <button @click="cancelWritingTodo()" class="btn btn-circle-sm btn-danger col-1">&#9249;</button>
            </div>
        </li>
        <li @click="todoCreate()" v-if="willWriteTodo" class="btn btn-success">попълни нова задача</button></li>
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

    new Vue({
        el: '#todos',
        data: {
            newTodoBody: '',
            willWriteTodo: true,
            storingTodoIsForbidden: true,
            routeName: '{!!$routeName!!}',
            todos: [@foreach($todos as $todo)"{!!$todo!!}",@endforeach]
        },
        methods: {
            todoCreate(){
                this.willWriteTodo = false;
                this.todos.push('');
            },
            cancelWritingTodo(){
                this.storingTodoIsForbidden=true;
                this.willWriteTodo = true;
                this.newTodoBody = '';
                this.todos.pop();
                this.updateOnTheServer();
            },
            pressKyesInTodoForm(e){
                if(e.target.value){
                    this.storingTodoIsForbidden=false;
                }else{
                    this.storingTodoIsForbidden=true;
                }
            },
            storeNewTodo(index){
                this.willWriteTodo = true;
                this.storingTodoIsForbidden=true;
                this.todos.splice(index, 1);
                this.todos.push(this.newTodoBody);
                this.newTodoBody = '';
                this.updateOnTheServer();
            },
            deleteTodo(index){
                this.todos.splice(index, 1);
                this.updateOnTheServer();
            },
            editTodo(index){
                let todo = this.todos[index];
                this.todos.splice(index, 1);
                this.todoCreate();
                this.newTodoBody = todo;
                this.storingTodoIsForbidden=false;
            },
            updateOnTheServer(){
                let original = "{!!$fileContent!!}";
                let newContent = this.todos.reduce(function(acc, cur){
                    return acc+"**"+cur;
                }, "");
                let compareString = "@foreach($todos as $todo)**{!!$todo!!}@endforeach";
                newContent.split("\"").join("");

                newContent = compareString?newContent:"***"+this.routeName+newContent;
                compareString = compareString?compareString:"***"+this.routeName;

                let Original = original.split(compareString).join(newContent);
                axios.post('/todos', {Original}).then(function(response){
                    console.log(response.data);
                }).catch(function(error){
                    console.log(error.data);
                });
            }
        }
    });
</script>