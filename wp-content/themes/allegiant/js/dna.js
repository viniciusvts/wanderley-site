window.addEventListener('DOMContentLoaded', domContLoad)
function domContLoad(){
    initFiltroEmpreendimentos()
}
function initFiltroEmpreendimentos() {
    const empFilters = document.querySelectorAll('#empFilter [data-target]')
    if(empFilters.length == 0) return
    for (const empFilter of empFilters) {
        empFilter.addEventListener('click', empFilterOnClick)
    }
    console.log('Filtro de empreendimentos OK')
}
function empFilterOnClick (evt){
    if (typeof evt.target.dataset.target == 'undefined') 
        return console.warn('Data target não foi definido')
    //pega todos os botões do filtro para desativar
    const empFilters = document.querySelectorAll('#empFilter [data-target]')
    for (const empFilter of empFilters) {
        empFilter.classList.remove('btn-danger')
        empFilter.classList.add('btn-outline-danger')
    }
    //adiciona classe active ao clicado
    evt.target.classList.add('btn-danger')
    evt.target.classList.remove('btn-outline-danger')
    // verifica o targed e adciona/remove classes dos empreendimentos
    const target = evt.target.dataset.target
    const empList = document.querySelectorAll('#empList [class*="cat-"')
    for (const emp of empList) {
        if(emp.classList.contains(target) || target == 'cat-all') emp.classList.remove('d-none')
        else emp.classList.add('d-none')
    }
}