
document.querySelectorAll(".slider").forEach((item) => {
    let clone = item.querySelector(".slider-items").cloneNode(true);
    clone.classList.add("clone");
    clone.ariaHidden = true;
    item.append(clone);
  });