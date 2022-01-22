function formValidate() {
    // lấy id của username và chỗ hiển thị lỗi
        let username = document.getElementById('username').value;
        let errorUsername = document.getElementById('errorUsername');
    // điều kiện username số ký tự từ 8 đến 20, không sử dụng lặp lại "_" và "." vd:"__" "..", "_" và "." không được đứng cạnh nhau vd:"._", "_" và "." không được đứng ở đầu hoặc cuối, chỉ chứa chữ số "_" và "."
        let regexUsername = /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;

    // lấy id của first name và last name và chỗ lỗi
        let firstName = document.getElementById('firstName').value;
        let lastName = document.getElementById('lastName').value;
        let errorFirstName = document.getElementById('errorFirstName');
        let errorLastName = document.getElementById('errorLastName');
        let regexFirstname = /^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*)*$/;
        let regexLastname = /^(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*)$/;
    
        let phonenumber = document.getElementById('phoneNumber').value;
        let errorPhonenumber = document.getElementById('errorPhonenumber');
        // let regexPhonenumber =

    // lấy id của email và chỗ hiển thị lỗi
        let email = document.getElementById('email').value;
        let errorEmail = document.getElementById('errorEmail');
    // điều kiện của email phải có "@", "@" không nằm ở đầu, phải có 1 dấu ".", phải có ký tự giữa "@" và ".", phải có ký tự sau "." cuối cùng, không được có khoảng trắng
        let regexEmail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    // lấy id của password và chỗ hiển thị lỗi
        let password = document.getElementById('password').value;
        let errorPassword = document.getElementById('errorPassword');
    // điều kiện của password (không được dưới 8 ký tự, có chữ hoa, có chữ thường, có số và có ký tự đặc biệt)
        let regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // lấy id của confirm password và chỗ hiển thị lỗi
        let confirm_password = document.getElementById('confirm_password').value;
        let errorConfirm_password = document.getElementById('errorConfirm_password');

        let birthday = document.getElementById('birthday').value;
        let errorBirthday = document.getElementById('errorBirthday');

        let gender = document.getElementById('gender').value;
        let errorGender = document.getElementById('errorGender');


// bắt đầu vào điều kiện email
    if (email == '' || email == null) {
        // nếu mà không nhập nó sẽ hiển thị ra
        errorEmail.innerHTML = "email không được để trống";
    } else if(!regexEmail.test(email)) {
        // khi mà nhập email sai cách thức
        errorEmail.innerHTML = "email không hợp lệ!, vui lòng nhập lại.";
        email = '';
    } else {
        // khi đúng rồi sẽ không hiển thị ra gì
        errorEmail.innerHTML = "";
    }

// bắt đầu vào điều kiện password
    if (password == '' || password == null) {
        // nếu mà không nhập nó sẽ hiển thị ra
        errorPassword.innerHTML = "mật khẩu không được để trống";
    } else if(!regexPassword.test(password)) {
        // khi mà nhập password sai cách thức
        errorPassword.innerHTML = "mật khẩu không hợp lệ!, vui lòng nhập lại.";
    } else {
        // khi đúng rồi sẽ không hiển thị ra gì
        errorPassword.innerHTML = "";
    }

// bắt đầu vào, kiểm tra xem có trùng với password bên trên không?, và các điều kiện để trống
    if (confirm_password == '' || confirm_password == null) {
        // nếu mà không nhập nó sẽ hiển thị ra
        errorConfirm_password.innerHTML = "vui lòng điền xác nhận lại mật khẩu, không được để trống";
    } else if (confirm_password != password) {
        // nếu không giống mật khẩu trên
        alert("Mật khẩu xác nhận và mật khẩu không trùng nhau");
    } else {
        errorConfirm_password.innerHTML ="";
    }

// bắt đầu vào phần xác nhận những gì đã nhập và hiển thị đã đăng ký thành công
    if (username && firstname && lastname && email && phonenumber && password && confirm_password && password == confirm_password && date && gender) {
        // người dùng đã nhập đúng thông tin
        alert("Đăng ký thành công");
        //sau khi đăng ký thành công chuyển về trang người dùng
        location.href ="user.php";
        // return true; thực hiện việc submit trong form
    } else {

    }

    // khi mà không đúng thì lỗi vẫn sẽ hiển thị, đúng rồi thì sẽ không hiển thị lỗi
    return false;
}