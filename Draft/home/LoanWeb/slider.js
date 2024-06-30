document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".slider .loanslider .item");
    let currentItem = 0;
    const intervalTime = 5000; // 5 seconds

    function showNextItem() {
        items[currentItem].classList.remove("active");
        currentItem = (currentItem + 1) % items.length;
        items[currentItem].classList.add("active");
    }

    items[currentItem].classList.add("active");
    setInterval(showNextItem, intervalTime);
});