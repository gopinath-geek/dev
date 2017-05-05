<style>
    body{
        height: 400px;
    }
</style>
<h1>Child page</h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
//     setInterval(function() {
//         // Send the message "Hello" to the parent window
//         // ...if the domain is still "davidwalsh.name"
//         parent.postMessage("Hello","http://localhost/test_host/index.php");
//     },1000);
    $(document).ready(function(){
        parent.postMessage($(document).height(), "http://localhost/test_host/index.php");
    })
    
</script>
