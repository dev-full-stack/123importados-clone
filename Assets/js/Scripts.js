document.body.onload = function(){
    let btnMais = document.getElementById('mais');
    let btnMenos = document.getElementById('menos');
    let qt = document.getElementById('qt');
    
    btnMais.addEventListener('click', function(){
        if(qt.value >= 20){
            qt.value = 20;
        }else{
            qt.value = Math.ceil(qt.value) + 1;   
        }
    });
    
    btnMenos.addEventListener('click', function(){
        if(qt.value <= 0){
            qt.value = 0;
        }else{
            qt.value = qt.value - 1;
        }
    });
}