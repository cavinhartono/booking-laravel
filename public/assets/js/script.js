let lists = document.querySelectorAll("#nav .list");

function ActiveLink() {
    lists.forEach((list) => list.classList.remove("active"));
    this.classList.add("active");
}

lists.forEach((list) => list.addEventListener("click", ActiveLink));

const HeaderScroller = () => {
    return this.scrollY >= 200
        ? document.querySelector("header").classList.add("scroller")
        : document.querySelector("header").classList.remove("scroller");
};

window.addEventListener("scroll", HeaderScroller);
