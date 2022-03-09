const toDoForm = document.getElementById("todo-form");
const toDoInput = toDoForm.querySelector("input");
// OR const toDoInput = document.querySelector("#todo-form input");
const toDoList = document.getElementById("todo-list");

const TODOS_KEY = "todos";

let toDos = [];

function saveToDos() {
  localStorage.setItem(TODOS_KEY, JSON.stringify(toDos));
}

function deleteToDo(event) {
  const li = event.target.parentElement; //클릭한 타켓(버튼)의 부모요소를 삭제.
  li.remove(); // 클릭한것은 지웠지만 완전히 삭제 된것은 아님(새로고침하면 다시 생김.)
  toDos = toDos.filter((toDo) => toDo.id !== parseInt(li.id));
  // 클릭한 ID는 삭제하고 남은 수는 저장.
  saveToDos();
}

function paintToDo(newToDo) {
  const li = document.createElement("li");
  li.id = newToDo.id;
  const span = document.createElement("span");
  span.innerText = newToDo.text; //span의 텍스트는 newToDo의 값.
  const button = document.createElement("button");
  button.innerText = "💣";
  li.appendChild(span); //li안에 span이 있다.
  li.appendChild(button);
  button.addEventListener("click", deleteToDo);
  toDoList.appendChild(li);
}

function handleToDoSubmit(event) {
  event.preventDefault(); //새로고침 안됨
  const newToDo = toDoInput.value;
  toDoInput.value = ""; //enter하면 빈칸으로 함.
  const newToDoObj = {
    text: newToDo,
    id: Date.now(),
  };
  toDos.push(newToDoObj); //array값을 넣는다.
  paintToDo(newToDoObj); //enter치면 이 값을 불러와 표시한다
  saveToDos(); //array값을 저장한다.
}

toDoForm.addEventListener("submit", handleToDoSubmit);

const savedToDos = localStorage.getItem(TODOS_KEY);

if (savedToDos !== null) {
  const parsedToDos = JSON.parse(savedToDos);
  toDos = parsedToDos;
  parsedToDos.forEach(paintToDo);
  //sayHello("a"), parsedToDos값을 각각 배치.
}
