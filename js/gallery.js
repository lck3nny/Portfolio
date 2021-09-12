let counter = 0;
let images = ["airplane.jpeg", "cloudy_valley.jpg", "gig_phone.jpg", "lcd.jpg", "lesdeuxalps.jpg", "london.jpg", "lost_lake.jpg", "misty_mountain.jpg", "surrey_skyline.jpg"];
let previous = document.querySelector(".btn_pre");
let next = document.querySelector(".btn_nxt");
let background = document.querySelector(".my-photo-intro")




previous.addEventListener('click', () =>{
    counter -= 1;
    if(counter < 0){
        counter = images.length -1;
    }
    background.setAttribute("style", "background-image: url(../img/gallery/" + images[counter] + ");")
});

next.addEventListener('click', () =>{
    counter += 1;
    if(counter >= images.length){
        counter = 0;
    }
    background.setAttribute("style", "background-image: url(../img/gallery/" + images[counter] + ");")
});


