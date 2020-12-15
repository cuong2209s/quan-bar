
$(document).ready(function(){

    function backHome(){
        window.location.assign(routeHome);
    }

    $("#submit_add_staff").click(function(){
        var data = $("#form_add_staff").serializeArray();
        var datapost = {};

        data.map(function(n, i){
            datapost [n.name] = n.value
        })

        axios
            .post(routePostStaff, datapost)
            .then((response) => {
                if(response.status == 200) {
                    Swal.fire({
                        title: "Thêm nhân viên thành công",
                        timer: 2000,
                        icon: "success",
                        button: false
                    })
                    backHome();
                } else {
                    Swal.fire({
                        title: "Lỗi hệ thống",
                        timer: 2000,
                        icon: "error",
                        button: true
                    })
                }
            })
    });

});
