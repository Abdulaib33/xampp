document.getElementById("add-task-button").addEventListener("click", addTask);

function addTask() {
  const taskInput = document.getElementById("task-input");
  const taskText = taskInput.value.trim();

  if (taskText === "") {
    alert("Veuillez entrer une tâche !");
    return;
  }

  const taskList = document.getElementById("task-list");

  // Créer un élément de tâche
  const taskItem = document.createElement("li");
  taskItem.className = "task-item";
  
  // Créer le texte de la tâche
  const taskSpan = document.createElement("span");
  taskSpan.textContent = taskText;
  
  // Créer le bouton supprimer
  const deleteButton = document.createElement("button");
  deleteButton.textContent = "Supprimer";
  deleteButton.addEventListener("click", () => taskList.removeChild(taskItem));

  // Ajouter le texte et le bouton à l'élément de tâche
  taskItem.appendChild(taskSpan);
  taskItem.appendChild(deleteButton);

  // Ajouter l'élément de tâche à la liste
  taskList.appendChild(taskItem);

  // Réinitialiser le champ de saisie
  taskInput.value = "";
}
