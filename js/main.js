const profileEditBtn = document.querySelector('.profile .button-group')
const inputList = document.querySelectorAll('.profile .form-group input')
const homeIcon = document.querySelector('.nav-logo')
let profileEditState = true

profileEditBtn.addEventListener('click', ()=>{
    if(profileEditState) {
        inputList.forEach(input => {
            input.removeAttribute('disabled')
        })
        document.querySelector('.button-group div').innerText = "Save"
        document.querySelector('.button-group i').className = "fa-solid fa-save"
        profileEditState = false
    }
    else {
        inputList.forEach(input => {
            input.disabled = true
        })
        document.querySelector('.button-group div').innerText = "Edit"
        document.querySelector('.button-group i').className = "fa-solid fa-edit"
        profileEditState = true
    }
})

homeIcon.addEventListener('click', ()=>{
    window.location.href = "home.html"
})