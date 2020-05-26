let main = document.querySelector('main');
let headerSize = document.querySelector('header').offsetHeight
let bgHeader = document.querySelector('.bg-header').offsetHeight

function map_range(value, low1, high1, low2, high2) {
    return low2 + (high2 - low2) * (value - low1) / (high1 - low1);
}
main.addEventListener('scroll', () => {
    if(main.scrollTop > 20) document.querySelector('.fadeout').style.opacity = 0;
    else document.querySelector('.fadeout').style.opacity = 1;
    if(main.scrollTop < (bgHeader - headerSize)) {
        let height = map_range(main.scrollTop, 0, (bgHeader - headerSize), bgHeader, headerSize)
        document.querySelector('.bg-header').style.height = height + "px"
    }
    else {
        document.querySelector('.bg-header').style.height = headerSize + "px"
    }
});