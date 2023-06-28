const profileEditBtn = document.querySelector('.profile .button-group')
const inputList = document.querySelectorAll('.profile .form-group input')
const homeIcon = document.querySelector('nav .nav-logo')
let profileEditState = true
const forwardBtn = document.querySelectorAll('.description .button-forward')
const backwardBtn = document.querySelectorAll('.description .button-backward')

forwardBtn.forEach(btn => {
    btn.addEventListener('click', ()=>{
        let wrapper = btn.parentElement.nextElementSibling
        wrapper.scrollLeft += 310
    })
})

backwardBtn.forEach(btn => {
    btn.addEventListener('click', ()=>{
        let wrapper = btn.parentElement.nextElementSibling
        wrapper.scrollLeft -= 310
    })
})

if(profileEditBtn) {
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
}

homeIcon.addEventListener('click', ()=>{
    window.location.href = "home.php"
})