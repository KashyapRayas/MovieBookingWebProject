const profileEditBtn = document.querySelector('.profile .button-group')
const inputList = document.querySelectorAll('.profile .form-group input')
const homeIcon = document.querySelector('nav .nav-logo')
let profileEditState = true
const forwardBtn = document.querySelectorAll('.description .button-forward')
const backwardBtn = document.querySelectorAll('.description .button-backward')
const spidey = document.querySelector('.spidey')

function spideyIdle(flag) {
    if(flag) {
        
    }
}

document.body.addEventListener('scroll',()=>{
    scrollY = document.documentElement.scrollTop? document.documentElement.scrollTop : document.body.scrollTop
    scaleY = scrollY>window.innerHeight? 1.5 : scrollY/window.innerHeight 
    spidey.style.transform = `translateY(${scrollY/10}px) scale(${1+scaleY/5})`
})

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