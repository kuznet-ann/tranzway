// Overlay
const overlayFunc = (openBtn, closeBtn, overlay, side) => {
    const block = document.querySelector(overlay),
            open = document.querySelector(openBtn),
            close = document.querySelector(closeBtn);
        
    if (document.body.contains(block)) {
        const blockWidth = block.offsetWidth;

        open.addEventListener("click", function() {
            if (side == 'left') {
                block.style.left = 0 + 'px';
            } else {
                block.style.right = 0 + 'px';
            }
        });
    
        close.addEventListener("click", function() {
            if (side == 'left') {
                block.style.left = - blockWidth + 'px';
            } else {
                block.style.right = - blockWidth + 'px';
            }
        });    
    }
};

overlayFunc('.map__open','.map__close','.map__overlay', 'left');
overlayFunc('.menu__hamburger','.menu__close','.menu__overlay', 'right');