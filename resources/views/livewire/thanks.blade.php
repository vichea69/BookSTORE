{{--<div style="text-align:center;">--}}
{{--    <p>Thank you for your order!</p>--}}
{{--    <p>Your submission has been received.</p>--}}
{{--    <p>This page will redirect in <span id="timer"></span>s.</p>--}}
{{--</div>--}}
{{--<script type="text/javascript">--}}
{{--    var count = 7; // The delay in seconds before redirecting.--}}
{{--    var redirect = "{{route('home.index')}}"; // The redirection's landing page.--}}

{{--    function countDown() {--}}
{{--        if(count >= 0){--}}
{{--            document.getElementById("timer").innerHTML = count--;--}}
{{--            setTimeout("countDown()", 1000);--}}
{{--        }else{--}}
{{--            window.location.href = redirect;--}}
{{--        }--}}
{{--    }--}}
{{--    countDown();--}}
{{--</script>--}}
<div>
    <main>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="#" rel="nofollow">Home</a>
                    <span></span> Thank You!
                </div>
            </div>
        </div>
        <div class="container pb-80 pt-80">
            <div class="row">
                <div class="col-md-12 text-center ">
                    <h1 class="animated fw-900 fade-in text-info" style="font-size: 36px;">Thank you for your order</h1>
                    <p class="animated fw-900 fade-in" style="font-size: 16px; margin-top: 16px;">A confirmation email was sent.</p>
                    <a href="{{route('home.index')}}" class="btn btn-submit btn-submitx" style=" margin-top: 16px;" id="continueShoppingBtn">Continue Shopping</a>
                    <p style=" margin-top: 10px;" class="text-danger">This page will redirect in <span id="timer"></span>s.</p>
                </div>
            </div>
        </div>

    </main>
</div>
<style>
    @keyframes fade-in {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    .fade-in {
        animation: fade-in 1s ease-in;
    }
</style>
<script>
    setTimeout(function() {
        window.location.href = "{{route('home.index')}}";
    }, 7000);
    var seconds = 7; // Set the countdown time in seconds

    function countdown() {
        var timerElement = document.getElementById("timer");
        timerElement.innerText = seconds;

        if (seconds === 0) {
            window.location.href = "{{route('home.index')}}";
        } else {
            seconds--;
            setTimeout(countdown, 1000); // Update the timer every 1 second
        }
    }

    countdown();
</script>
