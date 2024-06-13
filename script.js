let deleteItem = document.querySelectorAll('.delete');

for (let i = 0; i < deleteItem.length; i++) {
  if (deleteItem[i]) {
    deleteItem[i].addEventListener('click', (e) => {
      if(!confirm('Êtes-vous sûr de vouloir supprimer cette pratique ?') == true){
        e.preventDefault();
      }
    });
  }
}

