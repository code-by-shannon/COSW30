const skip_highlight = [
    "the","and","a","to","of","in","on","at","for","with","is","it", "between", "guarded", "followed", "under", "with", "toward", "an"
];

const paragraphs = document.querySelectorAll(".output");

paragraphs.forEach(p => {
    // break paragraph into words
    let words = p.innerText.split(" ");

    let candidates = words.filter(word => {
        // check if each word is in skip_highlight array and do not add them to candidates array
        return !skip_highlight.includes(word.toLowerCase());
    });

    for(let i = 0; i < 5; i++){
        let randomWord = candidates[Math.floor(Math.random()*candidates.length)];
        
        words = words.map(w => {
            if(w === randomWord){
                return `<span class="glow-word">${w}</span>`;
            }
            return w;
        });

    }

    p.innerHTML = words.join(" ");
});