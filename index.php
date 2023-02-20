<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatmir</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="msger">
        <header class="msger-header">
            <div class="msger-header-title">
                <i class="fas fa-comment-alt"></i> Chatmir
            </div>
            <div class="msger-header-options">
                <span><i class="fas fa-cog"></i></span>
            </div>
        </header>

        <main class="msger-chat">
            
                        <textarea></textarea>
                    

        </main>

        <div class="msger-inputarea">
            <input class="msger-input" placeholder="Enter your message...">
            <button class="msger-send-btn">Generate</button>
        </div>
    </section>

    <script src="sse.js"></script>
    <script src="script.js"></script>
</body>

</html>