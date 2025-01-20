const form = document.getElementById("form").onsubmit = function (event) {
    event.preventDefault();
    
    // استلام القيم من الحقول
    const nameinput = document.getElementById("name").value;
    let emailinput = document.getElementById("email").value;
    let alertemail = document.getElementById("alertem");
    
    // التحقق من البريد الإلكتروني
    let emailregex = /^([a-z0-9._%-]+@gmail\.com)$/ig;
    let validEmail = emailregex.test(emailinput);
    console.log(validEmail);
    if (validEmail == false) {
        alertemail.textContent = "Wrong email";
        alertemail.style.color = "red"; 
    } else {
        alertemail.textContent = "";
    }
    
    // التحقق من رقم الهاتف
    const mobileinput = document.getElementById("mobile").value;
    let alertmo = document.getElementById("alertmo");
    let mobileRegex = /^077\d{7}$/g;
    let validMobile = mobileRegex.test(mobileinput);
    console.log(validMobile);
    if (validMobile == false) {
        alertmo.textContent = "Wrong mobile";
        alertmo.style.color = "red"; 
    } else {
        alertmo.textContent = "";
    }

    // التحقق من كلمة المرور
    let password1 = document.getElementById("password1").value;
    let password2 = document.getElementById("password2").value;
    let pass1_check = document.getElementById("pw1_check");
    let pass2_check = document.getElementById("pw2_check");
    
    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
    let validpass = passwordRegex.test(password1);
    console.log(validpass);
    
    if (validpass == false) {
        pass1_check.textContent = "Password must be at least 8 characters long, contain both uppercase and lowercase letters, a number, and a special character.";
        pass1_check.style.color = "red";
        pass1_check.style.fontSize = "10px";
    } else {
        pass1_check.textContent = "";
    }

    if (password1 !== password2) {
        pass2_check.textContent = "Passwords do not match.";
        pass2_check.style.color = "red";
    } else {
        pass2_check.textContent = "";
    }
    
    // التحقق من المدخلات
    if (validEmail && validMobile && validpass && password1 === password2) {
        let user = {
            name: nameinput,
            email: emailinput,
            mobile: mobileinput,
            password: password1
        };
        
        // حفظ البيانات في localStorage
        localStorage.setItem("user", JSON.stringify(user));
        console.log("User data saved successfully!");
        
        // الانتقال إلى صفحة تسجيل الدخول
        window.location.href = "login.html"; 
    } else {
        console.log("Invalid input, please check your entries.");
    }
};
