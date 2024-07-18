<?php

function printMessage(string $message): void {
    if ($message == "a")
    {
        echo "message: $message";
        return;
    }

    echo "message not found";
}
