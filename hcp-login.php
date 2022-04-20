

<style>
.foot_pop h3{color:#7d2c85; font-size:1.4em; }
.foot_pop{background:rgba(0,0,0,0.7); width:100%; height:100%; position:fixed; z-index:999; top:0; left:0; display:none;}
.foot_pop > div{background:#fff; padding:50px; width:600px;  top:50%; left:50%; position:absolute;  margin-left:-300px;  transform:translateY(-50%); text-align:center;}
.foot_pop p{font-size:14px; margin:20px 0;}
.foot_pop a{display:inline-block; padding:7px 0; width:120px; background:#333; color:#fff; margin:10px; cursor:pointer; font-size:16px}
.foot_pop .form-group{    margin-bottom: 1rem;}
.foot_pop .form-group label{display: inline-block;	margin-bottom: .5rem;}
.foot_pop .form-group input{text-align: center;display: block;	width: 100%;	height: calc(1.5em + .75rem + 2px);	padding: .375rem .75rem;	font-size: 1rem;	font-weight: 400;	line-height: 1.5;	color: #495057;	background-color: #fff;	background-clip: padding-box;	border: 1px solid #ced4da;	border-radius: .25rem;	transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
.foot_pop .alert{position: relative;	padding: .75rem 1.25rem;	margin-bottom: 1rem;	border: 1px solid transparent;	border-radius: .25rem;}
.foot_pop .alert-success{color: #048514;	background-color: #cdffe1;	border-color: #cdffe1;}
.foot_pop .alert-warning{color: #856404;	background-color: #fff3cd;	border-color: #ffeeba;}
.foot_pop .alert-danger{color: #721c24;	background-color: #f8d7da;	border-color: #f5c6cb;}
    
</style>

<div class="modal foot_pop" id="hcpLoginModal" tabindex="2" role="dialog" style="background: rgba(0,0,0,0.95);">
    <div>
        <h3>Healthcare Professionals Login</h3>

        <p>
        This website is for Australia Health Care Professionals only.
        To access this website please enter your AHPRA number.
        </p>

        <form action="#" method="post" name="formLogin">
            <div class="form-group">
                <label for="passwd">AHPRA number</label>
                <input type="text" name="passwd" id="passwd">
            </div>
        </form>
        <div class="alert alert-dismissible" role="alert" id="alertLogin"></div>
        <a class="close" data-dismiss="modal">Cancel</a>
        <a id="login-btn">Submit </a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
    $(function() {

        $(".alert").hide();

        checkCookie();


        $("#hcpLoginModal #login-btn").on("click",function(e){
            exeLogin(e);
        });
        $(document).on('keypress',function(e) {
            if(e.which == 13) {
                exeLogin(e);
            }
        });

        function exeLogin(e){
            $(".alert").hide();
            $('#login-btn').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>');
            e.preventDefault();

            var request = $.ajax({
                url: "https://<?= $_SERVER['HTTP_HOST']; ?>/providers/ajax/login.php",
                dataType: "json",
                type: 'POST',
                data: {
                    action: 'send-login',
                    pass: $('input[name="passwd"]').val(),
                },
            });
            request.done(function (data) {
                $('#login-btn').html("Submit");
                $('#alertLogin').removeClass();
                $('#alertLogin').addClass("alert " + data[2]).html(data[3]).show();
                if (data[1] == true){
                    setTimeout(()=>{
                        $('#hcpLoginModal').hide();
                        $(".sec-centent").show();
                        setCookie('login','logged in');
                    },2000);
                }
            });

            request.fail(function (jqXHR, textStatus) {
                console.log('failed');
            });
        }
    });

    $(document).on("click", "#hcpLoginModal .close", function (e) {
        window.location.href = "https://<?= $_SERVER['HTTP_HOST']?>";


    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 2 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }


    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var user = getCookie("login");
        if (user != "") {
            $('#hcpLoginModal').hide();
        } else {
            // $('#modalLogin').modal('show');
            $('#hcpLoginModal').show();
            $(".sec-centent").hide()
        }
    }
</script> 