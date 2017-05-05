<h1>Child page</h1>

<script>
    setInterval(function() {
        // Send the message "Hello" to the parent window
        // ...if the domain is still "davidwalsh.name"
        parent.postMessage("Hello","http://localhost/test_host/index.php");
    },1000);
</script>
