<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ITLY AI Chat</title>

<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Poppins',sans-serif;
background:#eef2f7;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.chat-box{
width:700px;
height:85vh;
background:white;
border-radius:25px;
overflow:hidden;
box-shadow:0 20px 50px rgba(0,0,0,0.1);
display:flex;
flex-direction:column;
}

.top{
background:#020617;
color:white;
padding:25px;
font-size:28px;
font-weight:700;
}

.messages{
flex:1;
padding:20px;
overflow-y:auto;
background:#f1f5f9;
}

.message{
max-width:75%;
padding:18px;
margin-bottom:15px;
border-radius:18px;
line-height:1.7;
font-size:15px;
}

.user{
background:#2563eb;
color:white;
margin-left:auto;
}

.bot{
background:white;
border:1px solid #ddd;
}

.bottom{
padding:20px;
display:flex;
gap:15px;
background:white;
}

.bottom input{
flex:1;
padding:18px;
border:none;
background:#f1f5f9;
border-radius:15px;
font-size:16px;
outline:none;
}

.bottom button{
padding:18px 30px;
border:none;
background:#2563eb;
color:white;
border-radius:15px;
font-weight:700;
cursor:pointer;
}

</style>

</head>
<body>

<div class="chat-box">

<div class="top">
ITLY AI Assistant
</div>

<div class="messages" id="messages">

<div class="message bot">
Hello 👋<br>
Welcome to ITLY AI Assistant.
</div>

</div>

<div class="bottom">

<input
type="text"
id="message"
placeholder="Ask anything..."
>

<button onclick="sendMessage()">
Send
</button>

</div>

</div>

<script>

async function sendMessage(){

let input = document.getElementById('message');

let text = input.value;

if(text == '') return;

let messages = document.getElementById('messages');

messages.innerHTML += `
<div class="message user">
${text}
</div>
`;

input.value = '';

let response = await fetch('/ask-ai',{

method:'POST',

headers:{
'Content-Type':'application/json',
'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').content
},

body:JSON.stringify({
message:text
})

});

let data = await response.json();

messages.innerHTML += `
<div class="message bot">
${data.reply}
</div>
`;

messages.scrollTop = messages.scrollHeight;

}

</script>

</body>
</html>
