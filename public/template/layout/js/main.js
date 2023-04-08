var banner = [
    "/template/layout/img/banner/banner_1.jpg",
    "/template/layout/img/banner/banner_2.jpg"
];
var sofaImg = [
    "/template/layout/img/sofa/sofa1.jpg",
    "/template/layout/img/sofa/sofa2.jpg",
    "/template/layout/img/sofa/sofa3.jpg",
    "/template/layout/img/sofa/sofa4.jpg",
    "/template/layout/img/sofa/sofa5.jpg",
    "/template/layout/img/sofa/sofa6.jpg",
    "/template/layout/img/sofa/sofa7.jpg",
    "/template/layout/img/sofa/sofa8.jpg",
    "/template/layout/img/sofa/sofa9.jpg",
]

var tiviImg = [
    "/template/layout/img/ke_tivi/tivi1.jpg",
    "/template/layout/img/ke_tivi/tivi2.jpg",
    "/template/layout/img/ke_tivi/tivi3.jpg",
    "/template/layout/img/ke_tivi/tivi.jpg",
    "/template/layout/img/ke_tivi/tivi5.jpg",
    "/template/layout/img/ke_tivi/tivi6.jpg",
]

var tableImg = [
    "/template/layout/img/table/table1.jpg",
    "/template/layout/img/table/table2.jpg",
    "/template/layout/img/table/table3.jpg",
    "/template/layout/img/table/table4.jpg",
    "/template/layout/img/table/table5.jpg",
    "/template/layout/img/table/table6.jpg",
    "/template/layout/img/table/table7.jpg",
    "/template/layout/img/table/table8.jpg",
    "/template/layout/img/table/table9.jpg",
]
var table = document.querySelectorAll('.product_table');
var sofa = document.querySelectorAll('.product_sofa');
var tivi = document.querySelectorAll('.product_tivi');

var c = 0;
while (c < tableImg.length && c < table.length) {
    table[c].style.backgroundImage = `url(${tableImg[c]})`;

    c++
}

var b = 0;
while (b < tiviImg.length && b < tivi.length) {
    tivi[b].style.backgroundImage = `url(${tiviImg[b]})`;

    b++
}
var i = 0;
while (i < sofaImg.length && i < sofa.length) {
    sofa[i].style.backgroundImage = `url(${sofaImg[i]})`;

    i++
}
var num = 0;

function next() {
    var slider = document.getElementById("slider");
    num++;
    if (num >= banner.length) {
        num = 0;
    }
    slider.style.backgroundImage = `url(${banner[num]})`

}

function prev() {
    var slider = document.getElementById("slider");
    num--;
    if (num < 0) {
        num = banner.length - 1;
    }
    slider.style.backgroundImage = `url(${banner[num]})`
}

// login

const login = document.querySelector('.login-js')
const modal = document.querySelector('.js_modal')
const modalClose = document.querySelector('.js_modal-close')
const modalContainer = document.querySelector('.js-modal_container')
const input = document.querySelector('.modal_input')
const signup = document.querySelector('.modal_signup')
const modalSignup = document.querySelector('.js_modal-signup')
const modalContainerSignup = document.querySelector('.js-modal_container-signup')
const modalCloseSignup = document.querySelector('.js_modal-close-signup')



// hiện header khi xuống dưới


// thêm class  cho modal để show ra 
login.addEventListener('click', function() {
    modal.classList.add('open');
})

// xóa class đi dể đóng lại

modalClose.addEventListener('click', function() {
        modal.classList.remove('open');
    })
    // thêm sự kiện click bên ngoài container vẫn được đóng
modal.addEventListener('click', function() {
        modal.classList.remove('open');
    })
    //   ngăn chặn sự kiện nổi bọt
modalContainer.addEventListener('click', function(even) {
    even.stopPropagation()
})

// thanh menu gán trên đầu

document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector('.js-header')
        //Truy xuất div menu
    var trangthai = "300";
    window.addEventListener("scroll", function() {
        var x = pageYOffset;
        if (x > 300) {
            if (trangthai == "300") {
                trangthai = "301";
                header.classList.add('open');
            }
        } else {
            if (trangthai == "301") {
                header.classList.remove('open');
                trangthai = "300";
            }
        }

    })
})

// mở phần đăng ký

signup.addEventListener('click', function() {
    modal.classList.remove('open');
    modalSignup.classList.add('open')

})

modalContainerSignup.addEventListener('click', function(even) {
    even.stopPropagation()
})

modalCloseSignup.addEventListener('click', function() {
    modalSignup.classList.remove('open');
})

modalSignup.addEventListener('click', function() {
    modalSignup.classList.remove('open')
})
