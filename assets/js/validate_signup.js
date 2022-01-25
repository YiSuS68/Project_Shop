function check_signup() {
    let check_error = false;
    // lấy id của user_name và chỗ hiển thị lỗi
    let user_name = document.getElementById('user_name').value;
    let last_name = document.getElementById('last_name').value;
    let first_name = document.getElementById('first_name').value;
    let gender = document.getElementById('gender').value;
    let birth = document.getElementById('birth').value;
    let phone = document.getElementById('phone').value;
    let address = document.getElementById('address').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;

    let error_user_name = document.getElementById('error_user_name');
    let error_last_name = document.getElementById('error_last_name');
    let error_first_name = document.getElementById('error_first_name');
    let error_birth = document.getElementById('error_birth');
    let error_gender = document.getElementById('error_gender');
    let error_phone = document.getElementById('error_phone');
    let error_email = document.getElementById('error_email');
    let error_address = document.getElementById('error_address');
    let error_password = document.getElementById('error_password');
    let error_confirm_password = document.getElementById('error_confirm_password');

    // điều kiện user_name số ký tự từ 8 đến 20, không sử dụng lặp lại '_' và '.' vd:'__' '..', '_' và '.' không được đứng cạnh nhau vd:'._', '_' và '.' không được đứng ở đầu hoặc cuối, chỉ chứa chữ số '_' và '.'
    let regex_user_name = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;
    // lấy id của first name và last name và chỗ lỗi
    let regex_last_name = /^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*)*$/;
    let regex_first_name = /^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/;
    //sđt ng việt nam
    let regex_phone = /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;
    // điều kiện của email phải có '@', '@' không nằm ở đầu, phải có 1 dấu '.', phải có ký tự giữa '@' và '.', phải có ký tự sau '.' cuối cùng, không được có khoảng trắng
    let regex_email = /^(([^<>()\[\]\.,;:\s@\']+(\.[^<>()\[\]\.,;:\s@\']+)*)|(\'.+\'))@(([^<>()[\]\.,;:\s@\']+\.)+[^<>()[\]\.,;:\s@\']{2,})$/i;
    // điều kiện của password (không được dưới 8 ký tự, có chữ hoa, có chữ thường, có số và có ký tự đặc biệt)
    let regex_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    //validate user_name
    if (user_name.length ===0) {
        // nếu mà không nhập nó sẽ hiển thị ra
        error_user_name.innerHTML = 'Tên đăng nhập không được để trống';
        check_error = true;
    } else if(!regex_user_name.test(user_name)) {
        // khi mà nhập sai cách thức
        error_user_name.innerHTML = 'Tên đăng nhập không hợp lệ!, vui lòng nhập lại.';
        check_error = true;
    } else {
        // khi đúng rồi sẽ không hiển thị ra gì
        error_user_name.innerHTML = '';
    }

    // validate họ
    if (last_name.length ===0) {
        // nếu mà không nhập nó sẽ hiển thị ra
        error_last_name.innerHTML = 'Họ không được để trống';
        check_error = true;
    } else if(!regex_last_name.test(last_name)) {
        // khi mà nhập sai cách thức
        error_last_name.innerHTML = 'Họ không hợp lệ!, vui lòng nhập lại.';
        check_error = true;
    } else {
        // khi đúng rồi sẽ không hiển thị ra gì
        error_last_name.innerHTML = '';
    }

    //validate tên
    if (first_name.length === 0) {
        // nếu mà không nhập nó sẽ hiển thị ra
        error_first_name.innerHTML = 'Tên không được không được để trống';
        check_error = true;
    } else if(!regex_first_name.test(first_name)) {
        // khi mà nhập sai cách thức
        error_first_name.innerHTML = 'Tên không được không hợp lệ!, vui lòng nhập lại.';
        check_error = true;
    } 
    else {
        // khi đúng rồi sẽ không hiển thị ra gì
        error_first_name.innerHTML = '';
    }


    //validate giới tính
    if (gender.length === 0) {
        // nếu mà không nhập nó sẽ hiển thị ra
        error_gender.innerHTML = 'Giới tính không được để trống';
    }else{
        // khi đúng rồi sẽ không hiển thị ra gì
        error_gender.innerHTML = '';
    }

    // validate ngày sinh
    if(birth.length === 0)
    {
        document.getElementById('error_birth').innerHTML = 'Ngày sinh không được để trống';
        check_error = true;
    }else{
        document.getElementById('error_birth').innerHTML = '';
    }

    //validate số điện thoại
    if(phone.length === 0)
    {
        document.getElementById('error_phone').innerHTML = 'Số điện thoại không được để trống';
        check_error = true;
    }else {
        if (!regex_phone.test(phone)) {
            document.getElementById('error_phone').innerHTML = 'Số điện thoại không hợp lệ';
            check_error = true;
        }else {
            document.getElementById('error_phone').innerHTML = '';
        }
    }

    //validate địa chỉ
    if(address.length === 0)
    {
        document.getElementById('error_address').innerHTML = 'Địa chỉ không được để trống';
        check_error = true;
    }else{
        document.getElementById('error_address').innerHTML = '';
    }
    // bắt đầu vào điều kiện email
    if (email.length === 0) {
        // nếu mà không nhập nó sẽ hiển thị ra
        error_email.innerHTML = 'Email không được để trống';
        check_error = true;
    } else if(!regex_email.test(email)) {
        // khi mà nhập email sai cách thức
        error_email.innerHTML = 'Email không hợp lệ!, vui lòng nhập lại.';
        check_error = true;
    } else {
        // khi đúng rồi sẽ không hiển thị ra gì
        error_email.innerHTML = '';
    }

    // bắt đầu vào điều kiện password
    if (password.length === 0) {
            // nếu mà không nhập nó sẽ hiển thị ra
            error_password.innerHTML = 'Mật khẩu không được để trống';
            check_error = true;
        } else if(!regex_password.test(password)) {
            // khi mà nhập password sai cách thức
            error_password.innerHTML = 'Mật khẩu không hợp lệ!, vui lòng nhập lại.';
            check_error = true;
        } else {
            // khi đúng rồi sẽ không hiển thị ra gì
            error_password.innerHTML = '';
        }

    // bắt đầu vào, kiểm tra xem có trùng với password bên trên không?, và các điều kiện để trống
    if (confirm_password.length === 0) {
            // nếu mà không nhập nó sẽ hiển thị ra
            error_confirm_password.innerHTML = 'Vui lòng điền xác nhận lại mật khẩu, không được để trống';
            check_error = true;
        } else if (confirm_password === password) {
            // nếu không giống mật khẩu trên
            error_confirm_password.innerHTML ='';
        } else {
            error_confirm_password.innerHTML = 'Mật khẩu xác nhận và mật khẩu không trùng nhau';
            check_error = true;
        }

        if (check_error) 
        {
            return false;
        }
    }
