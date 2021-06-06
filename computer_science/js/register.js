function match_pass(){
    var pass_1 = document.getElementById("password").value;
    var pass_2 = document.getElementById("confirm_password").value;
    
    if(pass_1 != pass_2){
//  <- ไมผ่าน 
            alert("รหัสผ่านไม่ตรงกัน");
            document.getElementById("password").value = "";
            document.getElementById("confirm_password").value = "";
    }else{
// <- แจ้งตรงนี้ว่าผ่าน
    }

    
}
