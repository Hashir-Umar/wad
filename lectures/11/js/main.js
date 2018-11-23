//============================================
//-----------  STEP - 1 ----------------------
//============================================


/*
var todos = []; //creting an array with the name of todos
function add() {
    var task = document.getElementById("task").value;   //taking the value of Element having name "task"
    todos.push(task);   //pushing value of task into the array
    document.getElementById('todos').innerText = todos; //setting array as text of the Element having id "todos"   
}
*/


//============================================
//-----------  STEP - 2 ----------------------
//============================================



/*var todos = [];   //creting an array with the name of todos
function add() {
    var task = document.getElementById('task').value; //taking the value of Element having name "task"
    todos.push(task);   //pushing value of task into the array
    document.getElementById('task').value = ''; //setting value of the Element having id "task" to empty string
    show(); //calling show function
}

function show() {
    var ul = document.createElement('ul');  //creating unorder list Element
    ul.classList.add("list-group"); //adding class to ul Element
    for(var i=0; i < todos.length; i++) {  
        var li = document.createElement('li');  //creating list Element and saving it in variable
        li.innerHTML  = '<li>' + todos[i] + '</li>';    //again creating list Element having value of todos[i] array where i is the index of array
        li.classList.add("list-group-item");    //adding class to li Element
        ul.appendChild(li); //making li child of the ul Element
    }
    document.getElementById('todos').appendChild(ul);
}*/


//============================================
//-----------  STEP - 3 ----------------------
//============================================


/*
function getTodos() {
    var todos = []; //creting an array with the name of todos
    var todos_str = localStorage.getItem('todo');   //taking input from localStorage (as our browser have the ability to store some data)
    if(todos_str !== null)  
        todos = JSON.parse(todos_str);  //Parsing data using JSON.parse() and the data will become a JavaScript object.
    return todos;
}

function add() {
    var task = document.getElementById('task').value;   //taking the value of Element having name "task"
    if(task.trim() == ''){  //Removing whitespace from both sides of a string
        document.getElementById('message').style.display = 'block'; //chainging display of the Element having id of 'message' to block
        return false;
    } else {
        document.getElementById('message').style.display = 'none';  //chainging display of the Element having id of 'message' to none
    }
    var todos = getTodos(); //taking parsed data from localStorage as an array of object 
    todos.push({task: task});   //adding data to variable
    document.getElementById('task').value = ''; //setting value to empty
    localStorage.setItem('todo',JSON.stringify(todos)); //saving parsed data to localStorage (in our brower)
    show(); //calling show function
}


function show() {
    document.getElementById('todos').innerText = '';    //getting text of the element having id 'todos'
    var todos = getTodos(); //storing parsed data to a variable
    var ul = document.createElement('ul');  //creating ul Element
    ul.classList.add("list-group"); //adding class to it
    for(var i=0; i<todos.length; i++){
        var li = document.createElement('li');  //creating li element
        li.innerHTML  = '<li>' + todos[i].task + '</li>' +  //wrapping value of the array to list
            '<button class="btn btn-danger">' + 
            '<i class="fas fa-trash-o"></i> ' +
            '<span class="d-none d-sm-inline"> Delete </span> </button>';   //adding a button which will only be visible on small screen and above
        li.classList.add("list-group-item");    //adding class to list element
        ul.appendChild(li); //creating li child of ul
    }
    document.getElementById('todos').appendChild(ul); 
}
show(); calling show function
*/



//============================================
//-----------  STEP - 4 ----------------------
//============================================


/*
function getTodos() {
    var todos = []; //creting an array with the name of todos
    var todos_str = localStorage.getItem('todo');   //taking input from localStorage (as our browser have the ability to store some data)
    if(todos_str !== null)  
        todos = JSON.parse(todos_str);  //Parsing data using JSON.parse() and the data will become a JavaScript object.
    return todos;
}

function add() {
    var task = document.getElementById('task').value;   //taking the value of Element having name "task"
    if(task.trim() == ''){  //Removing whitespace from both sides of a string
        document.getElementById('message').style.display = 'block'; //chainging display of the Element having id of 'message' to block
        return false;
    } else {
        document.getElementById('message').style.display = 'none';  //chainging display of the Element having id of 'message' to none
    }
    var todos = getTodos(); //storing parsed data to variable as an object
    todos.push({task: task, isDone: false});    //pushing task data and a flag to array
    document.getElementById('task').value = ''; //setting value to empty
    localStorage.setItem('todo',JSON.stringify(todos)); //saving parsed data to localStorage (in our brower)
    show();
    return false;
}

function remove() {
    var id = this.getAttribute('id');   //getting id of parent (this)
    var todos = getTodos(); //getting parsed data from local storage
    todos.splice(id,1); //exracting values
    localStorage.setItem('todo',JSON.stringify(todos)); //seting data to localStorage
    show();
    return false;
}

function show() {
    document.getElementById('todos').innerText = '';    //getting text of the element having id 'todos'
    var todos = getTodos(); //storing parsed data to a variable
    var ul = document.createElement('ul');  //creating ul Element
    ul.classList.add("list-group"); //adding class to it
    for(var i=0; i<todos.length; i++){
        var li = document.createElement('li');
        li.innerHTML  = '<li>' + todos[i].task + '</li>' +
            '<button class="btn btn-danger" id="' + i + '">' +
            '<i class="fa fa-trash-o"></i> ' +
            '<span class="d-none d-sm-inline"> Delete </span> </button>';   //adding a button which will only be visible on small screen and above      
        li.classList.add("list-group-item");
        if(todos[i].isDone)
            li.classList.add("done");
        ul.appendChild(li);
    }
    document.getElementById('todos').appendChild(ul);
    var buttons = document.getElementsByClassName('btn-danger');
    for(var i=0; i<buttons.length; i++){
        buttons[i].addEventListener('click',remove);
    }
}

function isDone(e) {
    var todos = getTodos(); //geting parsed data from localStorage
    if(todos[e.target.id].isDone) {
        e.target.classList.add('done'); //if isDone flag is true then we add a class to it 
        todos[e.target.id].isDone = false;
    }
    else{
        e.target.classList.remove('done');  //if isDone flag is false then we remove a class to it 
        todos[e.target.id].isDone = true;
    }
    localStorage.setItem('todo',JSON.stringify(todos)); //setting data
    show();
}
show();*/




/* CLASS ACTIVITY (HOME WORK) :*/

//============================================
//-----------  STEP - 5 ----------------------
//============================================

function getTodos() {
    var todos = []; //creting an array with the name of todos
    var todos_str = localStorage.getItem('todo');   //taking input from localStorage (as our browser have the ability to store some data)
    if(todos_str !== null)  
        todos = JSON.parse(todos_str);  //Parsing data using JSON.parse() and the data will become a JavaScript object.
    return todos;
}

function add() {
    var task = document.getElementById('task').value;   //taking the value of Element having name "task"
    if(task.trim() == ''){  //Removing whitespace from both sides of a string
        document.getElementById('message').style.display = 'block'; //chainging display of the Element having id of 'message' to block
        return false;
    } else {
        document.getElementById('message').style.display = 'none';  //chainging display of the Element having id of 'message' to none
    }
    var todos = getTodos(); //storing parsed data to variable as an object
    todos.push({task: task, isDone: false});    //pushing task data and a flag to array
    document.getElementById('task').value = ''; //setting value to empty
    localStorage.setItem('todo',JSON.stringify(todos)); //saving parsed data to localStorage (in our brower)
    show();
    return false;
}

function remove() {
    var id = this.getAttribute('id');   //getting id selected item
    var todos = getTodos();
    todos.splice(id,1);
    localStorage.setItem('todo',JSON.stringify(todos));
    show();
    return false;
}

function edit() 
{
    var id = this.getAttribute('id');
    var list = document.getElementById(id);
    var input = list.childNodes[1];

    input.classList.remove('d-none');
    list.childNodes[2].style.display = "none";
    list.childNodes[3].style.display = "none";
    list.childNodes[4].classList.remove('d-none');
}



function save() {

    var id = this.getAttribute('id');
    var todos = getTodos();
    var list = document.getElementById(id);
    
    var input = list.childNodes[1].value;
    if(input) {
        todos[id].task = input;
        localStorage.setItem('todo',JSON.stringify(todos));
    }
    show();
 }

function show() {
    document.getElementById('todos').innerText = '';
    var todos = getTodos();
    var ul = document.createElement('ul');
    ul.classList.add("list-group");
    for(var i=0; i<todos.length; i++){
        var li = document.createElement('li');
        li.innerHTML  = '<li onclick="setIsDone('+ i + ');">' + todos[i].task + '</li>' + '<input type="text" id="'+i+'" class="input d-none" value=' + todos[i].task + '>' +
            '<button class="btn btn-danger ml-2" id="' + i + '">' +
            '<i class="fa fa-trash-o"></i> ' +
            '<span class="d-none d-sm-inline"> Delete </span> </button>' +
            '<button class="btn btn-muted" id="' + i + '">' +
            '<i class="fa fa-pencil-o"></i> ' +
            '<span class="d-none d-sm-inline"> Edit </span> </button>'+
            '<button class="btn btn-info d-none" id="' + i + '">' +
            '<i class="fa fa-plus"></i> ' +
            '<span class="d-none d-sm-inline"> Save Changes </span> </button>';
        li.classList.add("list-group-item");
        li.setAttribute('id', i);
        
        if(todos[i].isDone)
            li.classList.add("done");
        ul.appendChild(li);
    }
    document.getElementById('todos').appendChild(ul);
    var buttons = document.getElementsByClassName('btn-danger');
    for(var i=0; i<buttons.length; i++){
        buttons[i].addEventListener('click',remove);
    }
    
    buttons = document.getElementsByClassName('btn-muted');
    for(var i=0; i<buttons.length; i++){
        buttons[i].addEventListener('click',edit);
    }

    buttons = document.getElementsByClassName('btn-info');
    for(var i=0; i<buttons.length; i++){
        buttons[i].addEventListener('click',save);
    }
}

function setIsDone(id) {

    var todos = getTodos();

    if(todos.length > 0) {
        todos[id].isDone = true;    //setting isDone to true so a class of done is added to the element
        localStorage.setItem('todo',JSON.stringify(todos));
        show();
    }
    
    return true;
}

function isDone(e) {
    var todos = getTodos();
    if(todos[e.target.id].isDone) {
        e.target.classList.add('done');
        todos[e.target.id].isDone = false;
    }
    else{
        e.target.classList.remove('done');
        todos[e.target.id].isDone = true;
    }
    localStorage.setItem('todo',JSON.stringify(todos));
    show();
}
show();