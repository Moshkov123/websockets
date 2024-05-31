<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{Auth::id()}}
    <div id="eventText"></div>
    @vite('resources/js/app.js')
</body>
<script>
    // setTimeout(()=> {
    //     window.Echo.channel('testChannel')
    // .listen('testingEvent', (e) => {
    //     console.log(e ,'работает?');
    // });
    // },100)
 
    // setTimeout(()=> {
    //     window.Echo.private('private-channel.user.{{ Auth::id()}}')
    // .listen('PrivateEvent', (e) => {
    //     console.log(e ,'работает?');
    // });
    // },100)

    setTimeout(()=> {
        window.Echo.private('private-channel.user.{{ Auth::id()}}')
    .listen('PrivateEvent', (e) => {
        // Получите элемент, в который нужно вывести текст
        console.log(e ,'работает?');
        let eventTextElement = document.getElementById('eventText');
        // Выведите текст в элемент
        eventTextElement.innerHTML = e.message; // Предполагается, что в объекте e есть свойство message с текстом
    });
    },200)
</script>
</html>