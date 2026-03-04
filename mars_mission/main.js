

const facts = [
    "A day on Mars is 24 hours and 37 minutes.",
    "Mars has the tallest volcano in the solar system, Olympus Mons.",
    "Mars has two moons: Phobos and Deimos.",
    "Mars is about half the size of Earth.",
    "Scientists think Mars once had liquid water.",
    "Mars is often called the Red Planet because of iron oxide (rust) on its surface.",
    "A year on Mars lasts 687 Earth days.",
    "Mars has the largest canyon in the solar system, Valles Marineris.",
    "The gravity on Mars is about 38% of Earth's gravity.",
    "Temperatures on Mars can drop to -195°F (-125°C).",
    "Mars has polar ice caps made of water ice and frozen carbon dioxide.",
    "Dust storms on Mars can cover the entire planet.",
    "The atmosphere on Mars is mostly carbon dioxide.",
    "Mars has seasons similar to Earth because of its tilted axis.",
    "Sunsets on Mars appear blue instead of red.",
    "Mars is the fourth planet from the Sun.",
    "The first successful Mars flyby was NASA's Mariner 4 in 1965.",
    "The Curiosity rover landed on Mars in 2012.",
    "The Perseverance rover landed on Mars in 2021.",
    "Mars has many impact craters from asteroid collisions.",
    "Wind on Mars can create giant dust devils.",
    "Mars once had rivers, lakes, and possibly oceans.",
    "Phobos, the larger moon of Mars, is slowly moving closer to the planet.",
    "Phobos may eventually break apart and form a ring around Mars.",
    "Mars has a thin atmosphere, about 1% the thickness of Earth's.",
    "The average temperature on Mars is around -80°F (-60°C).",
    "Mars appears reddish even to the naked eye from Earth.",
    "Robotic missions have been exploring Mars since the 1960s.",
    "Some scientists believe microbial life may have existed on ancient Mars.",
    "Future missions aim to bring Mars rock samples back to Earth."
];
// DOM elements
let fun_fact = document.getElementById('fun_fact');
let trivia_button = document.getElementById('button');



trivia_button.addEventListener('click', function(){
    // random number from array length
    let random_fact = Math.floor(Math.random() * facts.length);
    fun_fact.innerText = facts[random_fact];
    fun_fact.style.display = 'block';
})


