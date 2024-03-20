var switchBtn = document.getElementById("switch-flat");

var isModalOpen = localStorage.getItem('modalOpen') === 'true';
switchBtn.checked = isModalOpen;

function updateModalState(isOpen) {
    localStorage.setItem('modalOpen', isOpen);
}

var modalShown = false;

switchBtn.addEventListener("change", function() {
    if (this.checked && !modalShown) {
        var modal = new bootstrap.Modal(document.getElementById('modalFlow'));
        modal.show();
        updateModalState(true); 
        modalShown = true; 
    } else {
    }
});