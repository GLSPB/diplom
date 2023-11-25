//performance.mark('testStart');
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });
    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});
//performance.mark('testEnd');
//performance.measure('testDuration', 'testStart', 'testEnd');
//console.log(performance.getEntriesByName('testDuration')); 
console.time('test');
for (let i = 0; i < 1000000; i++) { // Some code to test 
}
console.timeEnd('test'); // Output: test: 1.300ms
