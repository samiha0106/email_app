<!-- <h1>Hello!</h1> -->
<!DOCTYPE html>
<html>

<body onload="myFunction()">

    <script>
        function myFunction() {
            var x = window.navigator.onLine;
            document.getElementById("result").innerHTML = x;
            console.log(x);
        }
    </script>

    <p id="demo"> Check Your Network Status:<span id="result"> </span></p>
    <!-- <script src="{{asset('frontedn/js/network.js')}}"></script> -->
</body>

</html>