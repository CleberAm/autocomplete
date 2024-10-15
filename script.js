
let boxes = [];
let currentIndex = 0;

async function autocomplete(termo, element = ''){
    if(termo != ''){

        let data = {'termo': termo}; 
        let datas = '';
        let req = await fetch('busca.php', {

            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        });
        let json = await req.json();
        json.forEach(el => {
            datas += `<div id=${el.id} class="box-element">${el.nome}</div>`;
        });

        document.querySelector('#recebe-busca').innerHTML = datas;

    }

    boxes = document.querySelectorAll('.box-element');

}


function updateSelection(){
   
    boxes.forEach(box => {
        box.classList.remove('selected');
    });
    boxes[currentIndex].classList.add('selected');
    
}
updateSelection();

document.addEventListener('keyup', function(event) {
    if(boxes.length > 0){
        if (event.key === 'ArrowDown') {
            if (currentIndex < boxes.length - 1) {
                currentIndex++;     
            }

        } else if (event.key === 'ArrowUp') {
            if (currentIndex > 0) {
                currentIndex--;
            }
        }

        console.log(currentIndex);

        updateSelection();
    }
});






document.addEventListener('keyup', function(event){
    
    if(event.key == 'Enter'){
        if(boxes[currentIndex].classList.contains("selected")){
            console.log('caiu 3');
            let contentText = boxes[currentIndex].textContent;
            let id = boxes[currentIndex].getAttribute('id')
            let receiveContent = `<div id="${id}" class="receive-conten-style">${contentText}</div>`;
            document.querySelector('#receive-content').innerHTML += receiveContent;
            document.querySelector('.termo').value='';
            document.querySelector('#recebe-busca').innerHTML = '';
            document.querySelector('.termo').focus();
        }
    }
});



termo = document.querySelector('.termo');

termo.addEventListener('keyup', function(event){
    val = this.value;
    if(event.key !== 'ArrowDown' && event.key !== 'ArrowUp' && event.key !== 'Enter'){
        autocomplete(val, 'recebe-busca');
    }
});


