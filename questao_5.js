let text = 'Hello World'
let newText = ''

for (let i = 0; i < text.length; i++) newText += text[text.length - i - 1]

console.log(newText)