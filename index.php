<?php

echo "hello world";

?>

<script>
    var conn = new WebSocket('ws://localhost:8000');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        console.log(e.data);
    };
</script>

