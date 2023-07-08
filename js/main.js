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
const signBtn = document.querySelector('.sign-btn')


if(signBtn) {
    signBtn.addEventListener('click', ()=>{
        document.querySelector('form').submit()
    })
}

function createCookie(name, value, timeInSeconds) {
    var date = new Date();
    date.setTime(date.getTime()+(timeInSeconds*1000));
    var expires = "; expires="+date.toGMTString();
    console.log(name+"="+value+expires+"; path=/")
    document.cookie = name+"="+value+expires+"; path=/";
}

function deleteCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

window.onload = function () {
    const isDarkModeOn = getCookie("isDarkModeOn");
    if(isDarkModeOn === "true") document.body.classList.add("dark-mode");
  }

darkmodeBtn.addEventListener('click', ()=>{
    const isDarkModeOn = getCookie("isDarkModeOn");
    if(isDarkModeOn) {
        // console.log('switched to light')
        document.body.classList.remove('dark-mode')
        deleteCookie('isDarkModeOn')
        darkmodeStatus = false
    }
    else {
        // console.log('switched to dark')
        const isDarkMode = document.body.classList.toggle('dark-mode')
        createCookie("isDarkModeOn", isDarkMode.toString(), 60 * 60 * 24);
        darkmodeStatus = true
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
            document.querySelector('form').submit()
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