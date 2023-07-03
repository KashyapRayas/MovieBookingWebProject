const profileEditBtn = document.querySelector('.profile .button-group')
const inputList = document.querySelectorAll('.profile .form-group input')
const homeIcon = document.querySelector('nav .nav-logo')
let profileEditState = true
const forwardBtn = document.querySelectorAll('.description .button-forward')
const backwardBtn = document.querySelectorAll('.description .button-backward')
const spidey = document.querySelector('.spidey')
const marquee = document.querySelectorAll('.marquee-scroll')
const no_seats = 0
const left_seats = document.querySelector('.seat-set-group .left-group')
const right_seats = document.querySelector('.seat-set-group .right-group')
const middle_seats = document.querySelector('.seat-set-group .middle-group')
const left_seats_no = 24
const right_seats_no = 24
const middle_seats_no = 80
const darkmodeBtn = document.querySelector('.darkmode-btn')
let darkmodeStatus = false

darkmodeBtn.addEventListener('click', ()=>{
    if(darkmodeStatus) {
        console.log('switched to light')
        document.querySelector('.darkmode-btn i').style.transform = 'rotate(0deg) translate(0, 0em)'
        darkmodeStatus = false
        document.body.classList.remove('dark-mode')
    }
    else {
        console.log('switched to dark')
        document.querySelector('.darkmode-btn i').style.transform = 'rotate(180deg) translate(0.5em, 0em)'
        darkmodeStatus = true
        document.body.classList.add('dark-mode')
    }    
})

function marqueeScroll() {
    const marquee_anime = anime.timeline({
        easing: 'linear',
        loop: true,
        autoplay: true
    })
    .add({
        targets: marquee,
        keyframes: [
            {translateX: -window.innerWidth*0.986, duration: 0},
            {translateX: -window.innerWidth*0.986, translateX: 0, duration: 25000}
        ]
    })
}

if(marquee) marqueeScroll()

document.body.addEventListener('scroll',()=>{
    scrollY = document.documentElement.scrollTop? document.documentElement.scrollTop : document.body.scrollTop
    scaleY = scrollY>window.innerHeight? 1.5 : scrollY/window.innerHeight 
    if(spidey) spidey.style.transform = `translateY(${scrollY/10}px) scale(${1+scaleY/5})`
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

if(left_seats) {

    for(let i=0; i<left_seats_no; i++) {
        const left_seat = document.createElement('div')
        left_seat.setAttribute('class', `seat ls-${i+1}`)
        left_seats.appendChild(left_seat)
    }

    for(let i=0; i<right_seats_no; i++) {
        const right_seat = document.createElement('div')
        right_seat.setAttribute('class', `seat rs-${i+1}`)
        right_seats.appendChild(right_seat)
    }

    for(let i=0; i<middle_seats_no; i++) {
        const middle_seat = document.createElement('div')
        middle_seat.setAttribute('class', `seat ms-${i+1}`)
        middle_seats.appendChild(middle_seat)
    }
    let seat_selected = []

    document.querySelectorAll('.seat').forEach(seat=>{
        seat.addEventListener('click', ()=>{
            let len = seat.getAttribute('class').length
            if(!seat_selected.includes(seat.getAttribute('class').slice(5, len, 0))) {
                seat_selected.push(seat.getAttribute('class').slice(5, len, 0))
                seat.style.backgroundColor = 'rgb(125, 56, 171)'
            }
            else {
                let pos = seat_selected.findIndex(item=>{
                    if(item==seat.getAttribute('class').slice(5, len, 0)) return item
                })
                seat_selected.splice(pos, 1)
                seat.style.backgroundColor = 'rgb(214, 173, 241)'
            }
        })
    })

}