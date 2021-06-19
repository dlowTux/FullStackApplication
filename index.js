//HTML Labels
const boton = document.getElementById("boton");
const txttitle = document.getElementById("txttitle")
const txtdescription = document.getElementById("txtdescription")
const txtdate = document.getElementById("txtdate");
const table = document.getElementById("table");

boton.addEventListener('click', (e) => {
    e.preventDefault();
    let data = ValidateForm();
    console.log(data)
})

const ValidateForm = () => {
    let title = txttitle.value;
    let description = txtdescription.value;
    let date = txtdate.value;
    let date2 = date.replace('/', '-')
    return {
        title,
        description,
        date: date2
    }
}
window.addEventListener('DOMContentLoaded', async (e) => {
    //Here I have to make a peticion to load the task from mongo

})

const GetTaks = () => {
    table.innerHTML = '';
    fetch('./GetTask.php', {
        mode: 'no-cors',
        method: 'GET'
    }).then(res => res.json()).then(res => {
        console.log(res)
    })

}
