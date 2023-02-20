const input = document.querySelector('input')
const button = document.querySelector('button')
const textarea = document.querySelector('textarea')

var communicator = ''
button.onclick = () => {
    var prompt = input.value
    if(prompt != ''){
        bottomScroll();
        (textarea.innerHTML == '') ? communicator = 'You: ' : communicator = '\n\nYou: '
        textarea.innerHTML += communicator + prompt
        // use SSE to get server Events
        var source = new SSE("request.php?prompt=" + prompt);
        input.value = ''
        input.focus()
        textarea.innerHTML += '\n\nAI: '
        source.addEventListener('message', function (e) {
            console.log(e.data);
            if(e.data){
                if(e.data != '[DONE]'){
                    var tokens = JSON.parse(e.data).choices[0].text
                    textarea.innerHTML += tokens
                    bottomScroll();
                }else{
                    console.log('Completed');
                }
            }
        })
        source.stream()
    }
}

function bottomScroll(){
    textarea.scrollIntoView(false)
    textarea.scrollTo(0, textarea.scrollHeight)
}