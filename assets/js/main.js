//add scroll-on class on navbar
let nav = document.querySelector(".navbar");
window.onscroll = function () {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add("scroll-on");
    }
    else {
        nav.classList.remove("scroll-on");
    }
}

//    form validation start
function register() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var num = document.getElementById("phone-no").value;
    var state = document.getElementById("state").value;
    var city = document.getElementById("city").value;
    var experience = document.getElementById("work-experience").value;

    var pattern = /^[a-zA-Z]/;
    var pattern1 = /^[0-9]{10}$/;
    if (name == '') {
        document.getElementById("name-err-msg").innerHTML = "* Please enter the Name";
        return false;
    }
    if (!name.match(pattern)) {
        document.getElementById("name-err-msg").innerHTML = "* Please enter the Valid Name";
        return false;
    }

    if (email == "") {
        document.getElementById("email-err-msg").innerHTML = "* Please enter the valid email id!";
        return false;
    }
    if (email.indexOf('@') <= 0) {
        document.getElementById("email-err-msg").innerHTML = "* Please enter the valid email id!";
        return false;
    }
    if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
        document.getElementById("email-err-msg").innerHTML = "* Please enter the valid email id!";
        return false;
    }
    // phone-number validation
    if (!pattern1.test(num)) {
        document.getElementById("phone-err-msg").innerHTML = "* Please enter the valid Phone Number";
        return false;
    }
    if ((num.charAt(0) != 9) && (num.charAt(0) != 8) && (num.charAt(0) != 7)) {
        text = "*mobile number always stars with 9,8,7";
        document.getElementById("phone-err-msg").innerHTML = "*mobile number always stars with 9,8,7";
        return false;
    }

    if (state == "") {
        document.getElementById("state-err-msg").innerHTML = "* Please select the state";
        return false;
    }
    if (city == "") {
        document.getElementById("city-err-msg").innerHTML = "* Please select the city";
        return false;
    }
    if (experience == "") {
        document.getElementById("work-exp-err-msg").innerHTML = "* Please select the work-experience";
        return false;
    }
    alert("Applied Successfully!!");
    // return true;
}
//    form validation end
// counter start
document.addEventListener("DOMContentLoaded", () => {
    function counter(id, start, end, duration) {
        let obj = document.getElementById(id),
            current = start,
            range = end - start,
            increment = end > start ? 1 : -1,
            step = Math.abs(Math.floor(duration / range)),
            timer = setInterval(() => {
                current += increment;
                obj.textContent = current;
                if (current == end) {
                    clearInterval(timer);
                }
            }, step);
    }
    counter("counter1", 0, 2000, 3000);
    counter("counter2", 0, 75, 3000);
    counter("counter3", 0, 17000, 3000);
    counter("counter4", 0, 12000, 3000);
    counter("counter5", 0, 150, 3000);
    counter("counter6", 0, 35000, 000, 3000);
    counter("counter7", 0, 2000, 3000);
    counter("counter8", 0, 100, 3000);
    counter("counter9", 0, 150, 3000);
    counter("counter10", 0, 10, 3000);
});
// counter end