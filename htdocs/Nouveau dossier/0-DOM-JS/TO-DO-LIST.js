let taskInput = document.getElementById("taskInput");
let addTaskButton = document.getElementById("addTaskButton");



addTaskButton.addEventListener("click", function() {

let inputText = taskInput.value;

if (inputText) {
    
    let inputParagraph = document.createElement('p');
    let deleteButton = document.createElement("button");
    let checkBox = document.createElement("input");

    deleteButton.textContent = "Delete";

    inputParagraph.innerHTML = inputText;

    checkBox.type = "checkbox";


    inputParagraph.appendChild(checkBox);

    deleteButton.style.display = "none";

    inputParagraph.appendChild(deleteButton);

    document.body.appendChild(inputParagraph);

    taskInput.value = "";

    deleteButton.addEventListener("click", function(){
        inputParagraph.remove(); 
    })

    checkBox.addEventListener("change", function(){
        if (checkBox.checked) {
            inputParagraph.style.textDecoration = "line-through";
            deleteButton.style.backgroundColor = "red";
            deleteButton.style.display = "block";
        } else {
            inputParagraph.style.textDecoration = "none";   
            deleteButton.style.backgroundColor = "white";
            deleteButton.style.display = "none";
        }
    })


}

}); 



// document.body.addEventListener("click", function(event) {
//     if (event.target.textContent === "Delete") {
//         event.target.parentElement.remove();
//     }

// });