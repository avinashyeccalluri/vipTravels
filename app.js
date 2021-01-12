$(document).ready(() => {
    $(document).click('.hamBurger' , () => {
        $('.hamBurger').toggleClass('is-active');
        $('.list').toggleClass('is-active');
    })
})
