var m14 = {};
m14.opacityIn = [0.1];
m14.scaleIn = [0.2, 1];
m14.scaleOut = 3;
m14.durationIn = 800;
m14.durationOut = 600;
m14.delay = 500;

anime.timeline({loop: true})
    .add({
    targets: '.title__md .letters-1',
    opacity: m14.opacityIn,
    scale: m14.scaleIn,
    duration: m14.durationIn
}).add({
    targets: '.title__md .letters-1',
    opacity:0,
    scale: m14.scaleOut,
    duration: m14.durationOut,
    easing: "easeInExpo",
    delay: m14.delay
}).add({
    targets: '.title__md .letters-2',
    opacity: m14.opacityIn,
    scale: m14.scaleIn,
    duration: m14.durationIn
}).add({
    targets: '.title__md .letters-2',
    opacity:0,
    scale: m14.scaleOut,
    duration: m14.durationOut,
    easing: "easeInExpo",
    delay: m14.delay
}).add({
    targets: '.title__md .letters-3',
    opacity: m14.opacityIn,
    scale: m14.scaleIn,
    duration: m14.durationIn
}).add({
    targets: '.title__md .letters-3',
    opacity:0,
    scale: m14.scaleOut,
    duration: m14.durationOut,
    easing: "easeInExpo",
    delay: m14.delay
}).add({
    targets: '.title__md',
    opacity: 0,
    duration: 500,
    delay: 500
});