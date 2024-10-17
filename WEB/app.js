console.log("i work");
const image = document.getElementById('image');
const hideBtn = document.getElementById('button');

hideBtn.addEventListener("click", hideImage);

function hideImage(){
    image.classList.toggle('hidden');
}